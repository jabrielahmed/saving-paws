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
        <div class="col-md-12">
          <div class="we-are-my-pet-text"> <span></span>
            <h2>Adoptable Dogs</h2>
			<?php $db = db_connect();
			$dogs = $db->query("SELECT * FROM Animals WHERE IsDog = 1;");

			$num_rows = 0;
			$dogArray = array(array());
			$i = 0;
			foreach ($dogs as $dog) {
				$dogArray[$i][0] = $dog["Picture"];
				$dogArray[$i][1] = $dog["Name"];
				$dogArray[$i][2] = $dog["Gender"];
				$dogArray[$i][3] = $dog["Breed"];
				$dogArray[$i][4] = $dog["Size"];
				$dogArray[$i][5] = $dog["Color"];
				$dogArray[$i][6] = $dog["BirthDate"];
				$dogArray[$i][7] = $dog["Description"];
				$dogArray[$i][8] = $dog["Fixed"];
				$dogArray[$i][9] = $dog["Declawed"];
				$dogArray[$i][1] = $dog["Housetrained"];
				$dogArray[$i][1] = $dog["Site"];
				$dogArray[$i][1] = $dog["Location"];
				$dogArray[$i][1] = $dog["IntakeDate"];

				$i++;
			}


				?>
				
				<h1>Basic Grid</h1>
				<div class="flex-grid">
				  <div class="col">This little piggy went to market.</div>
				  <div class="col">This little piggy stayed home.</div>
				  <div class="col">This little piggy had roast beef.</div>
				</div>

				<div class="flex-grid">
				  <div class="col">This little piggy went to market.</div>
				  <div class="col">This little piggy stayed home.</div>
				  <div class="col">This little piggy had roast beef.</div>
				  <div class="col">This little piggy had none.</div>
				  <div class="col">This little piggy went wee wee wee all the way home.</div>
				</div>

				<div class="flex-grid-thirds">
				  <div class="col">This little piggy went to market.</div>
				  <div class="col">This little piggy stayed home.</div>
				  <div class="col">This little piggy had roast beef.</div>
				</div>
				
				
				
				<?php /*
				<div class="row our-pet-services">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="our-pet-services-item">
							<div class="our-pet-services-img">
								<img src="<?php echo($dog["Picture"]); ?>" alt="A dog" class="float_right" height="225">
							</div>
						</div>
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
				*/
				?>
					<?php
				
			
			db_disconnect($db);
			?>
            <section class="pet-services-v-one">
				<div class="container">
					<div class="row our-pet-services">
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="our-pet-services-item">
								<div class="our-pet-services-img">
									<img src="images/home/img-3.jpg" alt="image">
								</div>
								<div class="our-pet-services-text">
									<h5><a href="adoptions.php">Adoptions</a></h5>
									<p>Saving one dog will not change the world, but surely for that one dog, the world will change forever.</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="our-pet-services-item">
								<div class="our-pet-services-img">
									<img src="images/home/img-4.jpg" alt="image">
								</div>
								<div class="our-pet-services-text">
									<h5><a href="#">Pet Health care</a></h5>
									<p>Your pet is part of the family so treat them like one!</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="our-pet-services-item">
								<div class="our-pet-services-img">
									<img src="images/home/img-5.jpg" alt="image">
								</div>
								<div class="our-pet-services-text">
									<h5><a href="#">DOG WALKING</a></h5>
									<p>Whether your pet needs a scratch around the ear, a face to lick or a place to play,</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="our-pet-services-item">
								<div class="our-pet-services-img">
									<img src="images/home/img-6.jpg" alt="image">
								</div>
								<div class="our-pet-services-text">
									<h5><a href="#">PET GROOMING</a></h5>
									<p>Best Friends Pet Care is the leader of the pack when it comes to the absolute best care for your cat or dog.</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
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
						<div class="col-md-3 col-sm-6 col-xs-12">
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
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="our-pet-services-item">
								<div class="our-pet-services-img">
									<img src="images/services/img-8.jpg" alt="image">
								</div>
								<div class="our-pet-services-text">
									<h5><a href="#">Monthly Care Contracts</a></h5>
									<p>Best Friends Pet Care is the leader of the pack when it comes to the absolute best care for your cat or dog.</p>
								</div>
							</div>
						</div>
						<div class="col-md-3 col-xs-12">
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
    <?php include("shared/footer.php");?></html>