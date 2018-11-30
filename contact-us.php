<?php include("shared/header.php"); ?>
<!-- put custom style sheets here -->
<?php include("shared/navbar.php"); ?>
  
  <!-- Theme Inner Banner ____________________________ -->
  <section class="">
    <div class="them-inner-banner">
      <div class="inner-banner-opact">
        <div class="container">
          <div class="inner-banner-title">
            <div class="row">
              <div class="col-sm-12">
                <div class="">
                  <h1>Adoptions</h1>
                  <p>Pet lovers rely on SavingPaws Pet Care for professional dog and cat walking and pet sitting.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="inner-banner-bottom">
      <div class="container">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><span>-</span></li>
          <li><a href="#">About Us</a></li>
        </ul>
      </div>
    </div>
  </section>
  <section class="we-are-my-pet-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="we-are-my-pet-text"> <span><br>
            </span>
            <h2>Contact Us</h2>
            <div class="row">
              <div class="col-sm-3">
                <div data-packed="true" id="WRchTxtb">
                  <h6>Mailing Address</h6>
                  <p>P.O. Box 0362 <br>
                    Appleton, WI 54912-0362</p>
                  <p>Rescue Address</p>
                  <p>N3141 Meade Street<br>
                    Appleton, WI 54913</p>
                  <p>Phone:  (920) 830-2392</p>
                  <p>Email:   <a href="mailto:info@savingpaws.com">info@savingpaws.com</a> </p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-area">
                  <form role="form">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                      <span class="help-block">
                      <p id="characterLeft" class="help-block ">You have reached the limit</p>
                      </span> </div>
                    <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
                  </form>
                </div>
              </div>
              <div class="col-sm-5">
                  <iframe scrolling="no" title="Google Maps" aria-label="Google Maps" src="https://static.parastorage.com/services/santa/1.5597.4/static/external/googleMap.html?language=en&amp;lat=44.35204299999999&amp;long=-88.39571999999998&amp;address=N3141 Meade St, Appleton, WI 54913, USA&amp;addressInfo=Saving Paws Animal Rescue&amp;showZoom=true&amp;showStreetView=true&amp;showMapType=true" width="100%" height="350" frameborder="0"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- put custom js here -->
<!-- js file --> 
<!-- Main js file/jquery --> 
<script src="vendor/jquery-2.2.3.min.js"></script> 
<!-- bootstrap-select.min.js --> 
<script src="vendor/bootstrap-select-1.10.0/dist/js/bootstrap-select.min.js"></script> 
<!-- bootstrap js --> 
<script src="vendor/bootstrap/js/bootstrap.min.js"></script> 
<!-- camera js --> 
<script src="vendor/Camera-master/scripts/camera.min.js"></script> 
<script src="vendor/Camera-master/scripts/jquery.easing.1.3.js"></script> 
<!-- Owl carousel --> 
<script src="vendor/OwlCarousel2/dist/owl.carousel.min.js"></script> 
<!-- appear & countTo --> 
<script src="vendor/jquery.appear.js"></script> 
<script src="vendor/jquery.countTo.js"></script> 
<!-- fancybox --> 
<script src="vendor/fancybox/dist/jquery.fancybox.min.js"></script> 
<!-- Gallery - isotop --> 
<script type="text/javascript" src="vendor/isotope.pkgd.min.js"></script> 
<!-- WOW js --> 
<script type="text/javascript" src="vendor/WOW-master/dist/wow.min.js"></script> 
<!-- Circle Progress --> 
<script type="text/javascript" src="vendor/circle-progress.js"></script> 
<!-- Style js --> 
<script src="js/custom.js"></script> 
<script>
	$(document).ready(function(){ 
    $('#characterLeft').text('');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});
</script>
<?php include("shared/footer.php");?>