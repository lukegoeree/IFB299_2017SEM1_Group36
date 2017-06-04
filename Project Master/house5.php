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
        <nav class="navbar navbar-toggleable-md navbar-dark">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo/site_logo.jpg" width="300" height="100" alt="Site Logo">
                </a>
                <div class="collapse navbar-collapse" id="navbarNav1">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="index.php" class="nav-link">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="signin">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="registration">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
	    <!--/.Navbar-->

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
        <!--/.Main layout-->
         <!-- Modal Login-->
        <div class="modal fade" id="myModalSignIn" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>LOGIN</h4>             
                    </div>
                    <!--End Modal Header-->

                    <div class="modal-body">
                        <form role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" id="usrname" placeholder="Enter Username">
                            </div>
                            <!--Username-->
                            <div class="form-group">
                                <input type="password" class="form-control" id="psw" placeholder="Enter Password">
                            </div>
                            <!--Password-->
                            <button type="submit" class="btn btn-default btn-block">Login</button>
                        </form>
                    </div>
                    <!--End Modal Body-->
                </div>
                <!--End Modal Content-->
            </div>
            <!--End Modal Dialog-->
        </div>
        <!--End Modal-->

         <!-- Modal Register-->
        <form action="index.php" method="post">
            <div class="modal fade" id="myModalReg" role="dialog">
            
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>REGISTRATION</h4>             
                        </div>
                        <!--End Modal Header-->

                        <div class="modal-body">
                            <form role="form">
                                <!--First Name-->
                                <div class="form-group">
                                    <input type="text" class="form-control" id="fNameEntry" name="fname" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="sNameEntry" name="lname" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="emailEntry" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="confEmailEntry" placeholder="Confirm Email">
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="contactNoEntry" name="phoneNum" placeholder="Contact Number">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="passwordEntry" name="pwd" placeholder="Enter Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="confPasswordEntry" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="priv" id="custTypeRenter" value="1" checked="checked"> Renter
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="priv" id="custTypeOwner" value="2"> Property Owner
                                </div>
                                <button type="submit" class="btn btn-default btn-block" name="submit" value="submit">Register</button>
                            </form>
                        </div>
                        <!--End Modal Body-->
                    </div>
                    <!--End Modal Content-->
                </div>
                <!--End Modal Dialog-->
                
            </div>
            <!--End Modal-->
        </form>

    </main>

    <!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--First column-->
                <div class="col-md-3 offset-lg-1 hidden-lg-down">
                    <h5 class="title">ABOUT FIND A CASTLE!</h5>
                    <p>"Find A Castle!" is the go to page for finding a rental property across Australia.</p>

                    <p>"Find A Castle!" is powered by Bootsrap.css and designed by Group 3 6 Development</p>
                </div>
                <!--/.First column-->

                <hr class="hidden-md-up">

                <!--Second column-->
                <div class="col-lg-2 col-md-4 offset-lg-1">
                    <h5 class="title">Offices</h5>
                    <ul>
                        <li><a href="#!">Brisbane</a></li>
                        <li><a href="#!">Melbourne</a></li>
                        <li><a href="#!">Sydney</a></li>
                        <li><a href="#!">Perth</a></li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="hidden-md-up">

                <!--Third column-->
                <div class="col-lg-2 col-md-4">
                    <h5 class="title">Contact</h5>
                    <ul>
                        <li><a href="#!">Head Office</a></li>
                        <li><a href="#!">Sales</a></li>
                        <li><a href="#!">Rentals</a></li>
                        <li><a href="#!">Owners</a></li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="hidden-md-up">

                <!--Fourth column-->
                <div class="col-lg-2 col-md-4">
                    <h5 class="title">Legalities</h5>
                    <ul>
                        <li><a href="#!">Contracts</a></li>
                        <li><a href="#!">RTA</a></li>
                        <li><a href="#!">Bonds</a></li>
                        <li><a href="#!">T/C's</a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <hr>

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2017 Copyright: <a href="#"> WWW.FINDACASTLE.COM.AU </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
    
    <script>
    new WOW().init();
    </script>
    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script>
        $(document).ready(function(){
            $("#signin").click(function(){
                $("#myModalSignIn").modal();
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#registration").click(function(){
                $("#myModalReg").modal();
            });
        });
    </script>
</body>

</html>

<?php
$con = mysqli_connect("localhost","root","") or die("not connected");
mysqli_select_db($con, "property_site") or die("no db found");

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phoneNum = $_POST['phoneNum'];
    $pwd = $_POST['pwd'];
    $priv = $_POST['priv'];

    $query = "INSERT INTO user_prof (fname,lname,email,phoneNum,pwd,priv) VALUES ('$fname','$lname','$email','$phoneNum','$pwd','$priv')";
    if(mysqli_query($con,$query)){
        echo "data submitted";
    }
    else {
        echo "data gone AWOL!!";
    }
}
?>