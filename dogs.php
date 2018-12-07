<?php include("database/database.php");
include("shared/header.php"); ?>
<!-- put custom style sheets here -->
<?php include("shared/navbar.php"); ?>
  <!-- Theme Inner Banner ____________________________ -->
  <section class="">
    <div class="them-inner-banner">
      <div class="inner-banner-opact">
        <div class="container">
          <div class="inner-banner-title">
            <div class="row">
              <div class="col-xs-12">
                <div class="">
                  <h1>Adoptable Dogs</h1>
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
          <li><a href="adoptions.php">Adoptions</a></li>
          <li><span>-</span></li>
          <li><a href="#">Dogs</a></li>
        </ul>
      </div>
    </div>
  </section>
  <section class="we-are-my-pet-section">
    <div class="container">
      <div class="row">
          <div class="we-are-my-pet-text col-xs-12"> <span></span>
            <h2>Adoptable Dogs</h2>
					</div>
			</div>
			<div class="row">
			<?php $db = db_connect();
			$dogs = $db->query("SELECT * FROM Animals WHERE IsDog = 1;");
			foreach($dogs as $dog){ 
				?>
				<div class="col-xs-12 col-sm-6 col-md-3 our-pet-services">
					<div class="our-pet-services-item">
						<div class="our-pet-services-img">
							<img src="<?php echo($dog["Picture"]); ?>" alt="A dog" class="float_right" height="225">
						</div>
					</div>
					<div class="our-pet-services-text">
						<p>Name: <?php echo($dog["Name"]); ?><br>
						Gender: <?php echo($dog["Gender"]); ?><br>
						Breed: <?php echo($dog["Breed"]); ?><br>
						Size: <?php echo($dog["Size"]); ?><br>
						Color: <?php echo($dog["Color"]); ?><br>
						Birth Date: <?php echo($dog["BirthDate"]); ?></p>
						<p>Description: <?php echo($dog["Description"]); ?></p>
						<p>Fixed: <?php if(ord($dog["Fixed"])==1) {echo("Yes");} else {echo("No");} ?>
						&emsp;Declawed: <?php if(ord($dog["Declawed"])==1) {echo("Yes");} else {echo("No");} ?>
						&emsp;Housetrained: <?php if(ord($dog["Housetrained"])==1) {echo("Yes");} else {echo("No");} ?></p>
						<p>Site: <?php echo($dog["Site"]); ?></p>
						<p>Location: <?php echo($dog["Location"]); ?></p>
						<p>Intake Date: <?php echo($dog["IntakeDate"]); ?></p>
						<br>
					</div>
				</div>
					
					<?php
				
			}
			db_disconnect($db);
			?>
			<div class="row">
				<div class="col-xs-12">
					<h2>They Come to Us Broken...</h2>
				</div>
		</div>
		</div>
		</div>
	</section>
	<section class="pet-services-v-one">
    <div class="container">
        <div class="row our-pet-services" id="come-to-us-broken">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="our-pet-services-item">
                    <div class="our-pet-services-img">
                        <img src="images/eadf41_31eef2e1a54f4187b326a6597a98390b.webp" alt="image">
                    </div>
                    <div class="our-pet-services-text">
                        <h5><a href="adoptions.php">Loving animals like us.</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="our-pet-services-item">
                    <div class="our-pet-services-img">
                        <img src="images/eadf41_eaf25efd186f497990e49a2f4adb2675.webp" alt="image">
                    </div>
                    <div class="our-pet-services-text">
                        <h5><a href="#">Need a home too.</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="our-pet-services-item">
                    <div class="our-pet-services-img">
                        <img src="images/eadf41_5f0bb99720a14aa788c4a7753eac6a5f.webp" alt="image">
                    </div>
                    <div class="our-pet-services-text">
                        <h5><a href="#">From Neglected...</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="our-pet-services-item">
                    <div class="our-pet-services-img">
                        <img src="images/eadf41_639347088ebb464dbbfd265b981aaa70.webp" alt="image">
                    </div>
                    <div class="our-pet-services-text">
                        <h5><a href="#">And Shattered...</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="our-pet-services-item">
                    <div class="our-pet-services-img">
                        <img src="images/eadf41_e958e12df4c1406e91d30494b5b29c76.webp" alt="image">
                    </div>
                    <div class="our-pet-services-text">
                        <h5><a href="#">It's so very hard to see the harsh reality sometimes</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="our-pet-services-item">
                    <div class="our-pet-services-img">
                        <img src="images/eadf41_eaf25efd186f497990e49a2f4adb2675.webp" alt="image">
                    </div>
                    <div class="our-pet-services-text">
                        <h5><a href="#">But so very rewards to see the end results.</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="our-pet-services-item">
                    <div class="our-pet-services-img">
                        <img src="images/eadf41_ba6c8ac949c7433988c08ed7756bfd27.webp" alt="image">
                    </div>
                    <div class="our-pet-services-text">
                        <h5><a href="#">Loved, Bold, and Brave Hearted.</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- put custom js here -->
    <?php include("shared/footer.php");?>