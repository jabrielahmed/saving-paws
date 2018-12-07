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
			//Here you have all the dog information in a 2D array so it should be easier for you to work with it for the css and html.
			foreach ($dogs as $dog) {
				/*
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
				*/
			?>
				<div class="container">
					<div class="row our-pet-services">
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="our-pet-services-item">
								<div class="our-pet-services-img">
									<img src="<?php echo($dog["Picture"]); ?>" alt="A dog" >
								</div>
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
				
			<?php	
			}
			
			?>

			

			


				
				
				
			</div>
					
			<?php
				
			
			db_disconnect($db);
			?>
			
			<h2>They Come to Us Broken...</h2>
            <section class="pet-services-v-one">
				<div class="container">
					<div class="row our-pet-services">
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="our-pet-services-item">
								<div class="our-pet-services-img">
									<img src="images/eadf41_31eef2e1a54f4187b326a6597a98390b.webp" alt="image">
								</div>
								<div class="our-pet-services-text">
									<h5><a href="adoptions.php">Loving animals like us.</a></h5>

								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="our-pet-services-item">
								<div class="our-pet-services-img">
									<img src="images/eadf41_eaf25efd186f497990e49a2f4adb2675.webp" alt="image">
								</div>
								<div class="our-pet-services-text">
									<h5><a href="#">Need a home too.</a></h5>

								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="our-pet-services-item">
								<div class="our-pet-services-img">
									<img src="images/eadf41_5f0bb99720a14aa788c4a7753eac6a5f.webp" alt="image">
								</div>
								<div class="our-pet-services-text">
									<h5><a href="#">From Neglected...</a></h5>

								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="our-pet-services-item">
								<div class="our-pet-services-img">
									<img src="images/eadf41_639347088ebb464dbbfd265b981aaa70.webp" alt="image">
								</div>
								<div class="our-pet-services-text">
									<h5><a href="#">And Shattered...</a></h5>

								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="our-pet-services-item">
								<div class="our-pet-services-img">
									<img src="images/eadf41_e958e12df4c1406e91d30494b5b29c76.webp" alt="image">
								</div>
								<div class="our-pet-services-text">
									<h5><a href="#">It's so very hard to see the harsh reality sometimes</a></h5>

								</div>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="our-pet-services-item">
								<div class="our-pet-services-img">
									<img src="images/eadf41_eaf25efd186f497990e49a2f4adb2675.webp" alt="image">
								</div>
								<div class="our-pet-services-text">
									<h5><a href="#">But so very rewards to see the end results.</a></h5>

								</div>
							</div>
						</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
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
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- put custom js here -->
    <?php include("shared/footer.php");?>