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
						<img src="img/homes/home2.jpg" class="hoverable" width="800" height="600" />
						
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
									<h5> 5 </h5>
								</div>
							</div>

						<h3>$1600 per week </h3>	
                        </br>
                        <p>This fabulous fully furnished home has it all, situated in the gated community within Brisbane.</p>
                        <p>Here's your opportunity to move into Brisbanes best suburb.</p>		
                        </br>
                        <p>From the minute you walk through the front door you will be in awe of this properties features, </p>
                        <p>exceptional use of natural light as well as natural stone and timber fit out. Coupled with </p>
						<p>privacy and your own private dock, the luxury lifestyle you are seeking has truly been catered for with this property.</>
                        </br>
                        </br>
                        <p> Features: </p>
                        <li> 4 bedrooms </li>
                        <li> 5 bathrooms </li>
                        <li> 2 car garage and room for a buggy </li>
                        <li> Huge master bedroom with deck and superb water views. Ensuite comprising of double vanity & double shower, spa bath, and separate toilet. Huge walk in robe and coffee station </li>
                        <li> Home office with private access </li>
                        <li> Back to base security system and panic buttons throughout </li>
						<li> Media room with digital sound and snack bar! </li>
						<li> Temperature controlled wine cellar </li>
						<li> Tv lounge and bar </li>
						<li> Formal dinging </li>
						<li> Entertainers kitchen with butler's pantry, marble and stainless stell fittings </li>
						<li> Alfresco entertaining area with BBQ and kitchenette </li>
						<li> Tiled pool plus 8 meter long floating pontoon with direct ocean access </li>
                        </br>
                        <p> The residence is a large resort styled suburb.  THe suburb is a well-knonw tourism destination.</p>
                        <p> Everything within easy reach! </p>			
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