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
						<img src="img/homes/home1.jpg" class="hoverable" width="800" height="600" />
						
                            <div class ="row">
								<div class="col-lg-1">
									<img src="img/icons/car_icon.png" width = "20" height="20" />
									<h5> 1 </h5>
								</div>
								<div class="col-lg-1">
									<img src="img/icons/bed_icon.png" width = "20" height="20" />
									<h5> 2 </h5>
								</div>
								<div class="col-lg-1">
									<img src="img/icons/shower_icon.png" width = "20" height="20" />
									<h5> 4 </h5>
								</div>
							</div>

						<h3>$450 per week </h3>	
                        </br>
                        <p>This much loved home is ready for a new family to add their personal touch!</p>
                        <p>Here's your opportunity to move into Brisbanes best suburb.</p>		
                        </br>
                        <p> The leafy streets, excellent schools and central location are all the reasons</p>
                        <p> this suburb is highly sought after.</p>
                        </br>
                        <p> This four bedroom two story home is ideal for those seeking convenient living in a</p>
                        <p>family frindly location.</p>
                        <p> Situated on the high side of the sreet with a lovely northerly aspect,</p>
                        <p>this well proportioned residence has been freshly painted throughout and includes</p>
                        <p> spacious living areas, large updated bathroom, hardwood flooring and lock up garage!</p>
                        </br>
                        </br>
                        <p> Features: </p>
                        <li> Two story timber cladding </li>
                        <li> 4 Solar Panels </li>
                        <li> Fresh painting throughout interior </li>
                        <li> Tinted window film to most living area windows </li>
                        <li> Spacious lounge and dining </li>
                        <li> Outside entertaining area </li>
                        </br>
                        <p> Within close proximity to Brisbanes best educational facilities, easy access to parks</p>
                        <p> and entertainment district </p>			
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