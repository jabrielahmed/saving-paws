// Getting calendar

function getCalendar(target_div,year,month){
    $.ajax({
        type:'POST',
        url:'functions/calendar-functions.php',
        data:'func=getCalender&year='+year+'&month='+month,
        success:function(html){
            $('#'+target_div).html(html);
        }
    });
}

// Get Events
function getEvents(date){
    $.ajax({
        type:'POST',
        url:'functions/calendar-functions.php',
        data:'func=getEvents&date='+date,
        success:function(html){
            $('#event_list').html(html);
            $('#event_add').slideUp('slow');
            $('#event_list').slideDown('slow');
        }
    });
}
// Changing UI in Add Event
function addEvent(date){
    $('#eventDate').val(date);
    $('#eventDateView').html(date);
    $('#eventTitle').val("");
    $('#eventStart').val("");
    $('#eventEnd').val("");
    $('#eventDesc').val("");
    $('#eventId').val("");
    $('#addEventBtn').val("Add");
    $('#event_list').slideUp('slow');
    $('#event_add').slideDown('slow');
}

function editEvent(event) {
    var date = $(event).siblings('.eventListingDate').text();
    var title = $(event).siblings('.eventListingName').text();
    var startTime = $(event).siblings('.eventListingStart').text();
    var endTime = $(event).siblings('.eventListingEnd').text();
    var desc = $(event).siblings('.eventListingDesc').text();
    var id = $(event).siblings('.eventListingId').val();
    $('#eventDate').val(date);
    $('#eventTitle').val(title);
    $('#eventStart').val(startTime);
    $('#eventEnd').val(endTime);
    $('#eventDesc').val(desc);
    $('#eventId').val(id);
    $('#addEventBtn').val("Save");
    $('#event_list').slideUp('slow');
    $('#event_add').slideDown('slow');
}

function deleteEvent(event){
    var id = $(event).siblings('.eventListingId').val();
    $.ajax({
        type:'POST',
        url:'functions/calendar-functions.php',
        data:'func=deleteEvent&id='+id,
        success:function(html){
            alert('Event Deleted Successfully.');
            window.location.reload();
        }
    });
}

function submitEventForm() {
    var date = $('#eventDate').val();
    var title = $('#eventTitle').val();
    var startTime = $('#eventStart').val();
    var endTime = $('#eventEnd').val();
    var desc = $('#eventDesc').val();
    var id = $('#eventId').val();

    startTime = convertTimeForDatabase(startTime);
    endTime = convertTimeForDatabase(endTime);
    var validate = validateEventForm(title, startTime, endTime);
    $('#error').text(validate);
    if (validate == "") {
        var dbDate = convertDateForDatabase(date);
        if (id == "") {
            $.ajax({
                type: 'POST',
                url: 'functions/calendar-functions.php',
                data: 'func=addEvent&date=' + dbDate + '&title=' + title + '&startTime=' + startTime + '&endTime=' + endTime + '&desc=' + desc,
                success: function (msg) {
                    if (msg == 'ok') {
                        var dateSplit = date.split("-");
                        $('#eventTitle').val('');
                        alert('Event Created Successfully.');
                        $('#eventDate').val("");
                        $('#eventTitle').val("");
                        $('#eventStart').val("");
                        $('#eventEnd').val("");
                        $('#eventDesc').val("");
                        $('#eventId').val("");
                        window.location.reload();
                        return true;
                    } else {
                        alert(msg);
                        return false;
                        //alert('Some problem occurred, please try again.');
                    }
                }
            });
        }
        else {
            $.ajax({
                type: 'POST',
                url: 'functions/calendar-functions.php',
                data: 'func=editEvent&id=' + id + '&date=' + dbDate + '&title=' + title + '&startTime=' + startTime + '&endTime=' + endTime + '&desc=' + desc,
                success: function (msg) {
                    if (msg == 'ok') {
                        var dateSplit = date.split("-");
                        $('#eventTitle').val('');
                        alert('Event Edited Successfully.');
                        $('#eventDate').val("");
                        $('#eventTitle').val("");
                        $('#eventStart').val("");
                        $('#eventEnd').val("");
                        $('#eventDesc').val("");
                        $('#eventId').val("");
                        window.location.reload();
                        return true;
                    } else {
                        console.log(msg);
                        return false;
                        //alert('Some problem occurred, please try again.');
                    }
                }
            });
        }
        return false;
    }
}

function validateEventForm(title, startTime, endTime) {
    if (title == undefined || title == "") {
        return "Please enter a title for the event.";
    }
    else if (startTime == undefined || startTime == "") {
        return "Please enter a start time.";
    }
    else if (endTime == undefined || endTime == "") {
        return "Please enter an end time.";
    }
    else if (startTime > endTime || startTime == endTime) {
        console.log(startTime + " to " + endTime);
        console.log(startTime > endTime);
        console.log(startTime == endTime);
        return "Please pick a valid time interval.";
    }
    else {
        return "";
    }
}

function convertTimeForDatabase(time) {
    if (time != "") {
        var PM = !!(time.match(' PM'));

        time = time.split(':');
        var hour;
        var min = time[1].substring(0, 2);;

        if (PM) {
            var hour = 12 + parseInt(time[0],10);
            var sec = '00';
        } else {
            if (time[0].length == 1) {
                hour = '0' + time[0];
            }
            else {
                hour = time[0];
            }
            var sec = '00';
        }
        return hour + ':' + min + ':' + sec;
    }
    else {
        return undefined;
    }
}

function convertDateForDatabase(date) {

    date = date.split('-');
    return date[2] + '-' + date[0] + '-' + date[1];
}