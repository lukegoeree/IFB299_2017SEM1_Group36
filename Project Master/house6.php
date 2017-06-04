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
						<img src="img/homes/home6.jpg" class="hoverable" width="800" height="600" />
						
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
									<h5> 2 </h5>
								</div>
							</div>

						<h3>$500 per week </h3>	
                        </br>
						<h4> Stunning 4 Bedroom 2 Bathroom House </h4>
						</br>
                        <p>This home is bautifully completed and sure to impress with four good sized bedrooms with 2 bathrooms and a </p>
                        <p>separate toilet.</p>
						<p>Just a short walk to the local beach, ensures great cooling breezes during summer and perfect sunsets during winter </p>
                        </br>
                        <p> A small walk to bus stops, schools and the local shopping centre.  Don't miss out on this magnificent property,</p>
                        <p> inspect now!</p>
                        </br>
                        </br>
                        <p> Features: </p>
                        <li> Two story timber cladding </li>
                        <li> Master Bedroom ensuit and bath </li>
                        <li> Walk in Robes </li>
                        <li> Double lockup garage </li>
                        <li> Wide spacious entry way</li>
                        <li> security screen and deadlocks </li>
                        </br>
                        <p> Within close proximity to our beautiful beaches and parks, this property will be quick to fill, apply now!</p>
                        <p> This opportunity will not last long </p>			
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