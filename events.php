<?php
include("shared/header.php"); ?>
    <link rel="stylesheet" href="css/events.css" type="text/css">

<?php include("shared/navbar.php");
include_once('functions/calendar-functions.php');?>

    <!-- Display event calendar -->
    <div id="calendar_div">
        <?php echo getCalender(); ?>
    </div>
</div>
<br>
<?php include("shared/footer.php");?>