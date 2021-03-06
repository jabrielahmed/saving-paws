<?php
include("shared/header.php"); 
// Author: Kelsey Lorenz
// followed this tutorial: https://www.codexworld.com/add-event-to-calendar-using-jquery-ajax-php/?>
    <link rel="stylesheet" href="css/events.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.10.0/jquery.timepicker.min.css" type="text/css">
<?php include("shared/navbar.php");
include_once('functions/calendar-functions.php');?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>Upcoming Events</h2>
            </div>
        </div>
    </div>
    <!-- Display event calendar -->
    <div id="calendar_div">
        <?php echo getCalendar(); ?>
    </div>
    <section class="we-are-my-pet-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <br><br>
                    <div class="img-thumbnail">
                        <img src="images/SP-HM-2018-Poster.jpg" alt="Holiday Miracle 2018" />
                    </div>
                    <div class="img-thumbnail">
                        <img src="images/eadf41_b34ea026b9f0449f94ee816487df7ba9~mv2.jpg" alt="Van Fundraiser" />
                    </div>
                </div>
            </div>
        </div>
    </section>
<br>
<?php include("shared/footer.php");?>