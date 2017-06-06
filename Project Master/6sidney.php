<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Find A Castle!</title>

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
			
			div.owner {
				position: static;
				border-bottom: 2px solid black;
				margin-bottom: 1rem;
				margin-top: 1rem;
			}

			
			#gallery {
				max-width: 1000px;
				margin-bottom: 30%;
				margin-right: 5rem;
			}

			#gallery li {
				float: left;
				width: 25%;
				height: 25%;
				list-style: none;
				margin-right: 5rem;
			}

			#gallery li a {
				margin: 5px 10px;
				display: block;
				position: relative;
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
			<h2>
			6 Sidney Street, Nundah QLD 4012
			</h2>
			<div class="owner">
			<a href="img/homes/home8.jpg"> <img src="img/homes/home8.jpg" alt="House" heigh "300" width="400"></a><br>
			<p>
			<b>Property Status: </b>Rented</br>
			<b>Lease Contract: </b>1 Year</br>
			<b>Lease Start: </b>2.April.2017</br>
			<b>Lease End: </b>1.April.2018</br>
			<b>Property Manager: </b>Cindy James</br>
			<b>Staff Contract: </b>0433 962 495</br>
			<b>Tenants: </b>Mrs.Mary Brown</br>
			<b>Tenants Contact: </b>0411 596 408</br>
			</p>
			</div>	

			
			
				
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