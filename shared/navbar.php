</head>

<body>
<?php session_start(); ?>
<?php ob_start(); ?>
<div class="main-page-wrapper">

    <!-- Header _________________________________ -->
    <section class="header-section">
        <div class="top-header">
            <div class="container">
                <div class="clear-fix">
                    <ul class="float-left top-header-left">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> PO Box 0362, Appleton, WI 54912-0362</a></li>
                        <li><a href="mailto:info@savingpaws.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@savingpaws.com</a></li>
                        <li><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=XJ3QPKD9DL8LE" target="_blank" class="donate">Donate Now</a></li>
                    </ul>
                    <ul class="float-right top-header-right">
                        <li><a href="https://www.facebook.com/SavingPawsAnimalRescue/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/savingpawsrescu" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
		
		<?php
			function activePage() {
				$link = $_SERVER['PHP_SELF'];
				$link_array = explode('/',$link);
				$page = end($link_array);		
				return $page;
			}
		?>

        <!-- Theme Main Menu ____________________________ -->
        <div class="theme-main-menu">
            <div class="container">
                <div class="main-menu clear-fix">
                    <div class="them-logo float-left"><a href="index.php"><img src="images/them-logo/them-main-logo-1.png" alt="logo"></a></div>

                    <!-- Menu -->
                    <nav class="navbar">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed tran3s" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false"> <span class="sr-only tran3s">Toggle navigation</span> <span class="icon-bar tran3s"></span> <span class="icon-bar tran3s"></span> <span class="icon-bar tran3s"></span> </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="<?php if (activePage() == "index.php") echo 'dropdown-holder active current-page-item Active-menu'; else { echo 'dropdown-holder';} ?>"><a href="index.php"> Home </a> </li>
                                <li class="<?php if (activePage() == "events.php" || activePage() == "paw-challenge.php" || activePage() == "open-houses.php" || activePage() == "s-p-a-r-k-e-d-program.php") 
									echo 'dropdown-holder active current-page-item Active-menu'; else { echo 'dropdown-holder';} ?>"><a href="events.php">Events &amp; More</a>
                                    <ul class="sub-menu">
                                        <li><a href="events.php" class="tran3s">Events</a></li>
                                        <li><a href="paw-challenge.php" class="tran3s">Paw Print Challenge</a></li>
                                        <li><a href="open-houses.php" class="tran3s">Open Houses</a></li>
                                        <li><a href="s-p-a-r-k-e-d-program.php" class="tran3s">S.P.A.R.K.E.D Program</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if (activePage() == "adoptions.php" || activePage() == "cats.php" || activePage() == "dogs.php" || activePage() == "our-special-needs-pets.php" || activePage() == "adoption-form-cat.php") 
									echo 'dropdown-holder active current-page-item Active-menu'; else { echo 'dropdown-holder';} ?>"><a href="adoptions.php">Adoptions</a>
                                    <ul class="sub-menu">
                                        <li><a href="adoptions.php" class="tran3s">Adoptions</a></li>
                                        <li><a href="cats.php" class="tran3s">Cats</a></li>
                                        <li><a href="dogs.php" class="tran3s">Dogs</a></li>
                                        <li><a href="our-special-needs-pets.php" class="tran3s">Our Special Needs Pets</a></li>
                                        <li><a href="adoption-form-cat.php" class="tran3s">Cat Adoption Application</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if (activePage() == "ways-to-give.php" || activePage() == "become-a-rescue-volunteer.php" || activePage() == "foster-a-homeless-pet.php") 
									echo 'dropdown-holder active current-page-item Active-menu'; else { echo 'dropdown-holder';} ?>"><a href="ways-to-give.php">Help Us</a>
                                    <ul class="sub-menu">
                                        <li><a href="ways-to-give.php" class="tran3s">Ways to Give</a></li>
                                        <li><a href="become-a-rescue-volunteer.php" class="tran3s">Volunteer</a></li>
                                        <li><a href="foster-a-homeless-pet.php" class="tran3s">Foster</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if (activePage() == "about-us.php" || activePage() == "permanent-residents.php" || activePage() == "future-plans.php" || activePage() == "future-plans.php" || activePage() == "contact-us.php") 
									echo 'dropdown-holder active current-page-item Active-menu'; else { echo 'dropdown-holder';} ?>"><a href="about-us.php">About Us</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.php" class="tran3s">About Us</a></li>
                                        <li><a href="permanent-residents.php" class="tran3s">Permanent Residents</a></li>
                                        <li><a href="future-plans.php" class="tran3s">Future Plans</a></li>
                                        <li><a href="contact-us.php" class="tran3s">Contact Us</a></li>
                                    </ul>
                                </li>
                                <li class="<?php if (activePage() == "veterinary-partners.php" || activePage() == "community-partners.php" || activePage() == "happy-tails.php") 
									echo 'dropdown-holder active current-page-item Active-menu'; else { echo 'dropdown-holder';} ?>"><a href="veterinary-partners.php">Thank You</a>
                                    <ul class="sub-menu">
                                        <li><a href="veterinary-partners.php" class="tran3s">Veterinary Partners</a></li>
                                        <li><a href="community-partners.php" class="tran3s">Community Partners</a></li>
                                        <li><a href="happy-tails.php" class="tran3s">Happy Tails</a></li>
                                    </ul>
                                </li>
                                <?php if(isset($_SESSION["username"])) { ?>
                                    <li class="dropdown-holder"><a href="#">Account</a>
                                        <ul class="sub-menu">
                                            <?php if($_SESSION["role"] == "admin") { ?>
                                                <li><a href="applications.php" class="tran3s">Applications</a></li>
                                                <li><a href="users.php" class="tran3s">Users</a></li>
                                            <?php } ?>
                                            <?php if ($_SESSION["role"] == "admin" || $_SESSION["role"] == "seo" ) { ?>
                                                <li><a href="events.php" class="tran3s">Events</a></li>
                                            <?php } ?>
                                            <li><a href="logout.php" class="tran3s">Logout</a></li>
                                        </ul>
                                    </li>
                                <?php } else { ?>
                                    <li class="<?php if (activePage() == "login.php") echo 'dropdown-holder active current-page-item Active-menu'; else { echo 'dropdown-holder';} ?>"><a href="login.php">Login</a>
                                <?php } ?>

                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                </div>
                <!-- / menu-skew-div -->
            </div>
            <!-- /.container main-menu -->
        </div>
        <!-- /.main-menu -->
    </section>