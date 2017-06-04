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