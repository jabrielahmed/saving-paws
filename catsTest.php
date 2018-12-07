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
              <div class="col-sm-12">
                <div class="">
                  <h1>Cats</h1>
                  <p>Pet lovers rely on SavingPaws Pet Care for professional cat and cat walking and pet sitting.</p>
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
          <li><a href="#">Cats</a></li>
        </ul>
      </div>
    </div>
  </section>
  <section class="we-are-my-pet-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="we-are-my-pet-text"> <span></span>
            <h2>Adoptable Cats</h2>
            <p>Cats: standard treatments include spay/neuter, deworming, a combo test for feline leukemia and FIV, distemper vaccine, rabies vaccine, seasonal topical treatments for fleas, ticks, and mites, additional treatments as needed, and 30 days free ShelterCare pet insurance.  Adopters may not four-paw declaw cats and kittens adopted from Saving Paws.</p>
            <p>Some treatments are not age appropriate and kittens cannot have all the above standard treatments/tests. Spay/Neuter will be set up by Saving Paws with one of our vet partners when the kitten is 6 months of</p>
			<?php $db = db_connect();
			$cats = $db->query("SELECT * FROM Animals WHERE IsDog = 0;");
			foreach($cats as $cat){
				?>
				<div class="col-xs-12 col-sm-6 col-md-3 our-pet-services">
						<div class="our-pet-services-item">
							<div class="our-pet-services-img">
								<img src="<?php echo($cat["Picture"]); ?>" alt="A cat" class="float_right" height="225">
							</div>
						
							<div class="our-pet-services-text" scrolling="auto" style="text-align: left;">
								<p>Name: <?php echo($cat["Name"]); ?><br>
								Gender: <?php echo($cat["Gender"]); ?><br>
								Breed: <?php echo($cat["Breed"]); ?><br>
								Size: <?php echo($cat["Size"]); ?><br>
								Color: <?php echo($cat["Color"]); ?><br>
								Birth Date: <?php echo($cat["BirthDate"]); ?></p>
								<p>Description: <?php echo($cat["Description"]); ?></p>
								<p>Fixed: <?php if(ord($cat["Fixed"])==1) {echo("Yes");} else {echo("No");} ?>
								&emsp;Declawed: <?php if(ord($cat["Declawed"])==1) {echo("Yes");} else {echo("No");} ?>
								&emsp;Housetrained: <?php if(ord($cat["Housetrained"])==1) {echo("Yes");} else {echo("No");} ?></p>
								<p>Site: <?php echo($cat["Site"]); ?></p>
								<p>Location: <?php echo($cat["Location"]); ?></p>
								<p>Intake Date: <?php echo($cat["IntakeDate"]); ?></p>
								<br>
							</div>
						</div>
				</div>
				
				<?php
			}
			db_disconnect($db);
			?>
            <section class="pet-services-v-one">
				<div class="container">
					<div class="row our-pet-services">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="our-pet-services-item">
								<div class="our-pet-services-img">
									<img src="images/home/img-2.jpg" alt="image">
								</div>
								<div class="our-pet-services-text">
									<h5><a href="adoptions.php">PET ADOPTION</a></h5>
									<p>When a human gives a home to an animal who has no home, human is awarded with unconditional love.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="our-pet-services-item">
								<div class="our-pet-services-img">
									<img src="images/home/img-3.jpg" alt="image">
								</div>
								<div class="our-pet-services-text">
									<h5><a href="#">PET GROOMING</a></h5>
									<p>Best Friends Pet Care is the leader of the pack when it comes to the absolute best care for your cat or cat.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="our-pet-services-item">
								<div class="our-pet-services-img">
									<img src="images/home/img-4.jpg" alt="image">
								</div>
								<div class="our-pet-services-text">
									<h5><a href="#">Pet Health care</a></h5>
									<p>In a professional context it often happens that private or corporate clients order a publication</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="our-pet-services-item">
								<div class="our-pet-services-img">
									<img src="images/home/img-5.jpg" alt="image">
								</div>
								<div class="our-pet-services-text">
									<h5><a href="#">cat WALKING</a></h5>
									<p>Whether your pet needs a scratch around the ear, a face to lick or a place to play,</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="our-pet-services-item">
								<div class="our-pet-services-img">
									<img src="images/home/img-6.jpg" alt="image">
								</div>
								<div class="our-pet-services-text">
									<h5><a href="#">PET DAYCARE</a></h5>
									<p>Best Friends Pet Care is the leader of the pack when it comes to the absolute best care for your cat or cat.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="our-pet-services-item">
								<div class="our-pet-services-img">
									<img src="images/home/img-7.jpg" alt="image">
								</div>
								<div class="our-pet-services-text">
									<h5><a href="#">Nice Product</a></h5>
									<p>In a professional context it often happens that private or corporate clients order a publication</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="our-pet-services-item">
								<div class="our-pet-services-img">
									<img src="images/services/img-7.jpg" alt="image">
								</div>
								<div class="our-pet-services-text">
									<h5><a href="#">Puppy Program</a></h5>
									<p>Whether your pet needs a scratch around the ear, a face to lick or a place to play,</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="our-pet-services-item">
								<div class="our-pet-services-img">
									<img src="images/services/img-8.jpg" alt="image">
								</div>
								<div class="our-pet-services-text">
									<h5><a href="#">Monthly Care Contracts</a></h5>
									<p>Best Friends Pet Care is the leader of the pack when it comes to the absolute best care for your cat or cat.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-xs-12">
							<div class="our-pet-services-item">
								<div class="our-pet-services-img">
									<img src="images/services/img-9.jpg" alt="image">
								</div>
								<div class="our-pet-services-text">
									<h5><a href="#">Pet Care</a></h5>
									<p>In a professional context it often happens that private or corporate clients order a publication</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- put custom js here -->
    <?php include("shared/footer.php");?>