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
						<img src="img/homes/home4.jpg" class="hoverable" width="800" height="600" />
						
                            <div class ="row">
								<div class="col-lg-1">
									<img src="img/icons/car_icon.png" width = "20" height="20" />
									<h5> 3 </h5>
								</div>
								<div class="col-lg-1">
									<img src="img/icons/bed_icon.png" width = "20" height="20" />
									<h5> 5 </h5>
								</div>
								<div class="col-lg-1">
									<img src="img/icons/shower_icon.png" width = "20" height="20" />
									<h5> 3 </h5>
								</div>
							</div>

						<h3>$1,100 per week </h3>	
                        </br>
                        <p>This beautiful waterfront home is located in the world class golfing estate of Brisbane and offers very spacious family living.</p>
						<p>Upstairs comprises of master bedroom with full ensuite including a freestanding bath, 3 other generous sized bedrooms, central bathroom with separate powder room, large sitting area or second lounge room & balcony overlooking the pool area & the canal.</p>
						<p>Downstairs is complete with another master bedroom at the front of the property with ensuite, powder room, separate media room, open plan living/dining area, kitchen with butlers pantry overlooking the sparkling pool and waterway.</p>
                        </br>
                        </br>
                        <p> Features: </p>
                        <li> Large Master upstairs with fabulous walk in robe and en-suite </li>
                        <li> En-suite has freestanding bath, dual vanities and rain head shower </li>
                        <li> Large Master downstairs complete with robe & ensuite </li>
                        <li> 3 more bedrooms are upstairs all complete with ceiling fans & robes </li>
                        <li> Centralised bathroom with separate powder room. </li>
                        <li> Gourmet kitchen with 5 burner gas cook top and SMEG appliances </li>
                        </br>
                        <p> This area offers real community living with many choices of dining and entertaining within easy walking distance</p>
                        			
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