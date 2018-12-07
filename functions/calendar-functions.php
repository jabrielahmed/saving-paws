<?php
/*
 * Function requested by Ajax
 */
include '/var/www/students/team8/saving-paws/database/database.php';
date_default_timezone_set("America/Chicago");

if(session_id() == '') {
    session_start();
}
/*
 * Function requested by Ajax
 */
if(isset($_POST['func']) && !empty($_POST['func'])){
    switch($_POST['func']){
        case 'getCalendar':
            getCalendar($_POST['year'],$_POST['month']);
            break;
        case 'getEvents':
            getEvents($_POST['date']);
            break;
        //For Add Event
        case 'addEvent':
            addEvent($_POST['date'],$_POST['title'],$_POST['startTime'],$_POST['endTime'],$_POST['desc']);
            break;
        case 'editEvent':
            editEvent($_POST['id'],$_POST['date'],$_POST['title'],$_POST['startTime'],$_POST['endTime'],$_POST['desc']);
            break;
        case 'deleteEvent':
            deleteEvent($_POST['id']);
            break;
        default:
            break;
    }
}

/*
 * Get calendar full HTML
 */

function getCalendar($year = '',$month = '')
{
    $dateYear = ($year != '')?$year:date("Y");
    $dateMonth = ($month != '')?$month:date("m");
    $date = $dateYear.'-'.$dateMonth.'-01';
    $currentMonthFirstDay = date("N",strtotime($date));
    $totalDaysOfMonth = cal_days_in_month(CAL_GREGORIAN,$dateMonth,$dateYear);
    $totalDaysOfMonthDisplay = ($currentMonthFirstDay == 7)?($totalDaysOfMonth):($totalDaysOfMonth + $currentMonthFirstDay);
    $boxDisplay = ($totalDaysOfMonthDisplay <= 35)?35:42;
?>
    <div id="calendar_section">
        <h2>
            <a href="javascript:void(0);" onclick="getCalendar('calendar_div','<?php echo date("Y",strtotime($date.' - 1 Month')); ?>','<?php echo date("m",strtotime($date.' - 1 Month')); ?>');">&lt;&lt;</a>
            <select name="month_dropdown" class="month_dropdown dropdown"><?php echo getAllMonths($dateMonth); ?></select>
            <select name="year_dropdown" class="year_dropdown dropdown"><?php echo getYearList($dateYear); ?></select>
            <a href="javascript:void(0);" onclick="getCalendar('calendar_div','<?php echo date("Y",strtotime($date.' + 1 Month')); ?>','<?php echo date("m",strtotime($date.' + 1 Month')); ?>');">&gt;&gt;</a>
        </h2>
        <div id="event_list" class="none"></div>
        <!--For Add Event-->
        <form id="event_add" class="none">
            <label class="custom-label-control"><strong>Event Title: </strong></label>
            <input class="form-control custom-form-control" type="text" id="eventTitle" value=""/><br>

            <label class="custom-label-control"><strong>Event Date: </strong></label>
            <input class="form-control custom-form-control" type="text" id="eventDate"><br>

            <label class="custom-label-control"><strong>Start Time: </strong></label>
            <input class="form-control custom-form-control" type="text" id="eventStart"><br>

            <label class="custom-label-control"><strong>End Time: </strong></label>
            <input class="form-control custom-form-control" type="text" id="eventEnd"><br>

            <label class="custom-label-control">Description:</label>
            <textarea class="form-control custom-form-control" id="eventDesc"></textarea><br>
            <input class="hidden" id="eventId" value=""/><br>
            <input type="button" value="Submit" id="addEventBtn" class="btn btn-primary" onclick="return submitEventForm()" />
            <span id="error"></span>
        </form>
        <div id="calendar_section_top">
            <ul>
                <li>Sun</li>
                <li>Mon</li>
                <li>Tue</li>
                <li>Wed</li>
                <li>Thu</li>
                <li>Fri</li>
                <li>Sat</li>
            </ul>
        </div>
        <div id="calendar_section_bot">
            <ul>
            <?php
                $dayCount = 1;
                for($cb=1;$cb<=$boxDisplay;$cb++){
                    if(($cb >= $currentMonthFirstDay+1 || $currentMonthFirstDay == 7) && $cb <= ($totalDaysOfMonthDisplay)){

                        //Get number of events based on the current date
                        $conn = db_connect();
                        $currentDate = $dateMonth.'-'.$dayCount.'-'.$dateYear;
                        $currentDateForDatabase = $dateYear.'-'.$dateMonth.'-'.$dayCount;
                        $result = $conn->query("SELECT Name FROM Events WHERE Date = '".$currentDateForDatabase."' AND Status = 1");
                        $eventNum = $result->rowCount();
                        //Define date cell color
                        if(strtotime($currentDate) == strtotime(date("Y-m-d"))){ ?>
                            <li class="grey date_cell">
                        <?php }elseif($eventNum > 0){ ?>
                            <li class="saving-paws-blue date_cell">
                        <?php }else{ ?>
                            <li class="date_cell">
                        <?php } ?>

                        <input class="hidden" value="<?=$currentDate?>" />

                        <!--Date cell-->
                        <span><?=$dayCount?></span>

                        <?php if ($eventNum > 0 || isset($_SESSION["role"]) && $_SESSION["role"] == "admin") {
                        echo '<div id="date_popup_'.$currentDate.'" class="date_popup_wrap none">';
                        echo '<div class="date_window">';

                            echo '<div class="popup_event">Events ('.$eventNum.')</div>';

                        echo ($eventNum > 0)?'<a href="javascript:;" onclick="getEvents(\''.$currentDateForDatabase.'\');">view events</a><br/>':'';
                        //For Add Event
                        if (isset($_SESSION["role"]) && ($_SESSION["role"] == "admin" || $_SESSION["role"] == "seo")) {
                            echo '<a href="javascript:;" onclick="addEvent(\''.$currentDate.'\');">add event</a>';
                        }
                        echo '</div></div>';

                        echo '</li>';
                        }
                        $dayCount++;
            ?>
            <?php } else { ?>
                <li><span>&nbsp;</span></li>
            <?php } } ?>
            </ul>
        </div>
    </div>

    <script type="text/javascript">

        jQuery.loadScript = function (url, callback) {
            jQuery.ajax({
                url: url,
                dataType: 'script',
                success: callback,
                async: true
            });
        }

        $.loadScript('https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js', function() {
            $("#eventDate").datepicker({ dateFormat: "mm-dd-yy" });
        });

        $.loadScript('https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.js', function() {
            $('#eventStart').timepicker({
                'timeFormat': 'h:i A',
                'minTime': '8:00am'
            });
            $('#eventEnd').timepicker({
                'timeFormat': 'h:i A',
                'minTime': '8:30am'
            });
        });

        $.loadScript('js/calendar.js', function() {});

        $(document).ready(function(){
            $('.date_cell').mouseenter(function(){
                date = $(this).find('input').val();
                $(".date_popup_wrap").fadeOut();
                $("#date_popup_"+date).fadeIn();
            });
            $('.date_cell').mouseleave(function(){
                $(".date_popup_wrap").fadeOut();
            });
            $('.month_dropdown').on('change',function(){
                getCalendar('calendar_div',$('.year_dropdown').val(),$('.month_dropdown').val());
            });
            $('.year_dropdown').on('change',function(){
                getCalendar('calendar_div',$('.year_dropdown').val(),$('.month_dropdown').val());
            });
            $(document).click(function(){
                $('#event_list').slideUp('slow');
            });

            jQuery.loadScript = function (url, callback) {
                jQuery.ajax({
                    url: url,
                    dataType: 'script',
                    success: callback,
                    async: true
                });
            }
        });
    </script>
<?php
}

/*
 * Get months options list.
 */
function getAllMonths($selected = ''){
    $options = '';
    for($i=1;$i<=12;$i++)
    {
        $value = ($i < 01)?'0'.$i:$i;
        $selectedOpt = ($value == $selected)?'selected':'';
        $options .= '<option value="'.$value.'" '.$selectedOpt.' >'.date("F", mktime(0, 0, 0, $i+1, 0, 0)).'</option>';
    }
    return $options;
}

/*
 * Get years options list.
 */
function getYearList($selected = ''){
    $options = '';
    $lastYear = date("Y") - 1;
    $nextYear = date("Y") + 1;
    for($i=$lastYear; $i<=$nextYear; $i++)
    {
        $selectedOpt = ($i == $selected)?'selected':'';
        $options .= '<option value="'.$i.'" '.$selectedOpt.' >'.$i.'</option>';
    }
    return $options;
}

/*
 * Get events by date
 */
function getEvents($date = ''){
    //Include db configuration file
    $date = $date?$date:date("Y-m-d");
    //Get events based on the current date
    $conn = db_connect();
    $result = $conn->query("SELECT Id, Name, Date, StartTime, EndTime, Description FROM Events WHERE Date = '".$date."' AND Status = 1 ORDER BY StartTime ASC");
    if ($result->rowCount() > 0) { ?>
        <h2>Events on <?php echo date("l, d M Y",strtotime($date)) ?></h2>
        <?php while($row = $result->fetch()) {
            $Id = $row['Id'];
            $name = $row['Name'];
            $startTime = formatTimeString($row['StartTime']);
            $endTime = formatTimeString($row['EndTime']);
            $desc = $row["Description"];
            $date = formatDateString($row["Date"]);
            ?>
            <div class="col-xs-6">
                <input class="hidden eventListingId" value="<?=$Id?>" />
                Event: <span class="eventListingName"><?=$name?></span><br>
                Date: <span class="eventListingDate"><?=$date?></span><br>
                Time: <span class="eventListingStart"><?=$startTime?></span> - <span class="eventListingEnd"><?=$endTime?></span><br>
                Description: <span class="eventListingDesc"><?=$desc?></span><br>
            <?php if (isset($_SESSION["role"]) && ($_SESSION["role"] == "admin" || $_SESSION["role"] == "seo")) { ?>
                <button type="button" onClick="editEvent(this)" class="editEventBtn btn btn-primary" value="Edit">Edit</button>
                <input type="button"onClick="deleteEvent(this)" class="delEventBtn btn btn-danger" value="Delete"/>
            <?php } ?>
            </div>
        <?php } ?>
    <?php }
}

/*
 * Add event to date
 */
function addEvent($date,$name,$startTime,$endTime,$desc) {
    $conn = db_connect();
    $insert = $conn->prepare("INSERT INTO Events (Name,Date,StartTime,EndTime,Description) VALUES (:name,:date,:startTime,:endTime,:desc)");
    $insert->bindParam(":name", $name, PDO::PARAM_STR);
    $insert->bindParam(":date", $date, PDO::PARAM_STR);
    $insert->bindParam(":startTime", $startTime, PDO::PARAM_STR);
    $insert->bindParam(":endTime", $endTime, PDO::PARAM_STR);
    $insert->bindParam(":desc", $desc, PDO::PARAM_STR);
    $insert->execute();
    if ($insert) {
        echo 'ok';
    }
    else {
        echo 'err';
    }
}

function editEvent($id,$date,$name,$startTime,$endTime,$desc) {
    $conn = db_connect();
    $update = $conn->prepare('UPDATE Events SET Name = :name, Date = :date, StartTime = :startTime, EndTime = :endTime, Description = :desc WHERE Id = :id');
    $update->bindParam(":name", $name, PDO::PARAM_STR);
    $update->bindParam(":date", $date, PDO::PARAM_STR);
    $update->bindParam(":startTime", $startTime, PDO::PARAM_STR);
    $update->bindParam(":endTime", $endTime, PDO::PARAM_STR);
    $update->bindParam(":desc", $desc, PDO::PARAM_STR);
    $update->bindParam(":id", $id, PDO::PARAM_INT);
    $update->execute();
    if ($update) {
        echo 'ok';
    }
    else {
        echo 'err';
    }
}

function deleteEvent($id) {
    $conn = db_connect();
    $delete = $conn->prepare("DELETE FROM Events WHERE Id = :id");
    $delete->bindParam(":id", $id, PDO::PARAM_INT);
    $delete->execute();

    if ($delete) {
        echo 'ok';
    }
    else {
        echo 'err';
    }
}

function formatTimeString($rawString) {
    $time = date_create($rawString);
    return date_format($time,'g:i A');
}

function formatTimeStringForDatabase($rawString) {
    $time = date_create($rawString);
    return date_format($time,'H:i:s');
}

function formatDateString($rawString) {
    $date = date_create($rawString);
    return date_format($date,'m-d-Y');
}
?>