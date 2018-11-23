<?php
include("shared/header.php"); ?>
    <link rel="stylesheet" href="css/events.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css" type="text/css">
<?php include("shared/navbar.php");
include_once('functions/calendar-functions.php');?>

    <!-- Display event calendar -->
    <div id="calendar_div">
        <?php echo getCalender(); ?>
    </div>
</div>
<script src="js/calendar.js"></script>
<br>
<?php include("shared/footer.php");?>