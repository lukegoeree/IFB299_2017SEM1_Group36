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
			<h1>
			Property Managers Contact
			</h1>
			<div class="owner">
			<a href="ownerprofile.php"> <img src="img/owner/female.jpg" alt="LOGO" heigh "200" width="200"></a><br>
			<p>
			<b>Name: Natalia Smith</b></br>
			<b>Email:</b> natalia_smith@gmail.com </br>
			<b>Mobile:</b> 0431 226 559</br>
			<b>Phone:</b> 07 3359 4265</br>
			<b>Alternate:</b> 073315 4279</br>
			<b>Home Address:</b> 15 Meemar Street, Chermside QLD 4032 </br>
			<b>Malling Address:</b> Same as Above </br>
			</p>
			</div>	
			
			<div class="owner">
			<a href="ownerprofile2.php"> <img src="img/owner/male.jpg" alt="OwnerLogo" heigh "200" width="200"></a><br>
			<p>
			<b>Name: Harry Potter</b></br>
			<b>Email:</b> harry_potter@gmail.com </br>
			<b>Mobile:</b> 0402 101 103</br>
			<b>Phone:</b> 07 3315 4963</br>
			<b>Alternate:</b> NA</br>
			<b>Home Address:</b> 2 Albion Street, Sandgate QLD 4017 </br>
			<b>Malling Address:</b> Same as Above </br>
			</p>
			</div>	
			
			<div class="owner">
			<a href="ownerprofile3.php"> <img src="img/owner/male.jpg" alt="OwnerLogo" heigh "200" width="200"></a><br>
			<p>
			<b>Name: Andrew King</b></br>
			<b>Email:</b> andrew_king@gmail.com </br>
			<b>Mobile:</b> 0411 326 985</br>
			<b>Phone:</b> 07 3315 4643</br>
			<b>Alternate:</b> NA</br>
			<b>Home Address:</b> 2 Farm Street, Newmarket QLD 4051 </br>
			<b>Malling Address:</b> Same as Above </br>
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