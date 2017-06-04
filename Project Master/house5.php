<!-- Modified last 6/5 by Luke -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Available for Rent Now!</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.css" rel="stylesheet">
    
    <style rel="stylesheet">
        
        main {
            padding-top: 3rem;
            padding-bottom: 2rem;
        }
        
        .widget-wrapper {
            padding-bottom: 2rem;
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 2rem;
        }
        
        .extra-margins {
            margin-top: 1rem;
            margin-bottom: 2.5rem;
        }
        
        .divider-new {
            margin-top: 0;
        }
        
          .navbar {
            background-color: #343c4b;
        }
        
        footer.page-footer {
            background-color: #343c4b;
            margin-top: 2rem;
        }
    </style>
</head>

<body>
    <header>
        <!--Navbar-->
        <?php require 'function_navbar.php';?>
    </header>
    <main>

        <!--Main layout-->
        <div class="container">
            <div class="row">
                <!--Sidebar-->
                <!--/.Sidebar-->

                <!--Main column-->
                <div class="col-lg-8">					
					<div class="house1">
						<h1>Available for Rent Now!</h1>
						</br>
						<img src="img/homes/home5.jpg" class="hoverable" width="800" height="600" />
						
                            <div class ="row">
								<div class="col-lg-1">
									<img src="img/icons/car_icon.png" width = "20" height="20" />
									<h5> 2 </h5>
								</div>
								<div class="col-lg-1">
									<img src="img/icons/bed_icon.png" width = "20" height="20" />
									<h5> 4 </h5>
								</div>
								<div class="col-lg-1">
									<img src="img/icons/shower_icon.png" width = "20" height="20" />
									<h5> 2.5 </h5>
								</div>
							</div>

						<h3>$610 per week </h3>	
                        </br>
                        <p>This stunning 4 bedroom home is perftly situated within Brisbane.  The ducted air conditioned home has</p>
                        <p>multiple living areas, oversized bedrooms, bathrooms and a spacious kitchen featuring top-of-the-line</p>
						<p> appliances, stone bench tops, 900mm gas cook top, range hood and breakfast bar.	You won't find a more</p>
						<p> stylish or high-end home in Brisbane!</p>
                        </br>
                        <p> Do you enjoy entertaining family and friends?  You'll love the large outdoor entertaining</p>
                        <p> area with beautiful views of the parks and plenty of green open space for outdoor activities.</p>
						<p>Living at this beautiful home will give you exlusive access to the estate's pool, playground,</p>
						<p>tennis court, basketball court and BBQ facilities.</p>
                        </br>
                        </br>
                        <p> Features: </p>
                        <li> 4 Spacious bedrooms, 2 systlish bathrooms with a large relaxing bath!</li>
                        <li> Large functional kitchen with premium appliances; 900mm gas cook top, range hood and stone bench tops </li>
                        <li> Fans & ducted air conditioning throughout </li>
                        <li> Large wide double lock up garage </li>
                        <li> Study nook </li>
                        <li> LED lighting throughout </li>
						<li> Brand new house, never lived in</li>
						<li> In a premium sought after location </li>
						<li> Use of facilities in estate for residents only</li>
						<li> NO PETS </li>
                        </br>
                        <p> This rental home is a MUST INSPECT!</p>
	
					</div>
                    <!--/.First row-->
                    <br>
                    <hr class="extra-margins">

        </div>
            <!-- Modal Signin-->
            <?php require 'function_modal_signin.php';?>
            <!-- Modal Registration-->
            <?php require 'function_modal_registration.php';?>
    </main>
        <footer class="page-footer center-on-small-only">
            <?php require 'function_footer.php';?>
        </footer>
        <!--JavaScript Scripts-->
        <?php require 'scripts_code.php';?>
</body>

</html>
<!--Registration Form Database Link-->
<?php require 'database_registration_connect.php';?>