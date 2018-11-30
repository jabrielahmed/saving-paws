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
    <section class="we-are-my-pet-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="we-are-my-pet-text"> <span></span>
                        <h2>Upcoming Events</h2>
                    </div>
                    <div class="col-sm-4"><div class="img-thumbnail"><img src="images/SP-HM-2018-Poster.jpg" /></div></div>
                    <div class="col-sm-4"><div class="img-thumbnail"><img src="images/eadf41_b34ea026b9f0449f94ee816487df7ba9~mv2.jpg" /></div></div>
                    <div class="col-sm-4" id="con">
                        <div class="heading-bg">
                            <a href="https://wix.tickettailor.com/promoter/index/id/5537/chk/eb6b/compId/comp-j8du0rib" target="_blank"><h5>Saving Paws Animal Rescue</h5></a>
                        </div>
                        <p>There are no events listed at the moment. Please check back soon.</p>
                        <div class="heading-bg">
                            <p>Need help, lost your tickets, or have any questions?
                                <a href="https://wix.tickettailor.com/promoter/index/id/5537/chk/eb6b/compId/comp-j8du0rib" target="_blank"><strong>Click here for help</strong></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script src="js/calendar.js"></script>
<br>
<?php include("shared/footer.php");?>