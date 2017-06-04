<!-- Modified last 6/5 by Luke -->
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
                <!--SideBar-->
                <?php require 'function_sidebar.php';?>
                <!--Main column-->
                <div class="col-lg-8">
					
					<div class="article1">
						<h1>Property market improving in Brisbane</h1>
						<p><i>Olivia Lambert</i></br>
						<i>Mar 23, 2016 7:09PM</i></br>
						<p><i>Reference from:</i>
						<a href="http://www.news.com.au/finance/real-estate/buying/property-market-improving-in-brisbane/news-story/e62aa3750f9c18718302fb4ce2a399b4" target="_blank">www.news.com.au</a></p>
						<a href="article3.php"> <img src="img/articles/article3.jpg" alt="Article" heigh "400" width="400"></a>
						<p><b>NOW is a really good time to live in Brisbane.</b></p>
						<p>It’s an even better time to own a house in Brisbane as it has just been dubbed the most stable city in Australia.</p>
						<p>Brisbane’s average house prices have climbed again for its 14th quarter in a row.</p>
						<p>A new report released by the Real Estate Institute of Queensland said average house prices in December last year reached $632,000, about six per cent higher than 12 months ago.</p>
						<p>In the September quarter last year, house prices reached $615,000, about $5000 more than what was recorded in the June quarter.</p>
						<p>House prices in Brisbane have now risen 14.2 per cent in five years and family homes with four bedrooms, two bathrooms and a lock up garage have become hot property, with some even selling for more than the new average price.</p>
						<p>REIQ chief executive Antonia Mercorella said sellers were experiencing higher returns on what they paid for properties and buyers and homeowners could have confidence in the market because of the steady growth.</p>
						<p>“We prefer this consistent, sustainable growth over a period of time rather than a booming market,” she said.</p>
						<p>“This allows consumers, both vendors and buyers, to have confidence in what the market is doing so there are no nasty surprises around the corner.”</p>
						<p>Ms Mercorella said there was a level of fear when buying and selling in Sydney and Melbourne, fear that was just not there in Brisbane.</p>
						<p>For those now worried the rising house prices will push them out of entering the market, Ms Mercorella said there were still plenty of properties on the cusp of Brisbane that sold for an average of $500,000.</p>
						<p>“Sydney and Melbourne are no comparison when it comes to affordability — when it comes to that, Brisbane is way out in front,” she said.</p>
						<p>“We are always conscious of becoming too expensive and yes some people will feel nervous about the Brisbane median hitting the $632,000 mark but the affordability is still strong outside of the Brisbane local government area.”</p>
						<p>Brisbane is transforming and thriving and Ms Mercorella said that was making it a more desirable place to live.</p>
						<p>“We are seeing lots of new units and apartments coming up in the inner city area and we are embracing a new style of living,” she said.</p>
						<p>“We also have a number of exciting developments like the Queen Wharf project, which is going to completely transform the face of Brisbane.”</p>
						<p>Ms Mercorella said many run down and derelict properties around Brisbane were also being demolished, making room for newer homes.</p>
						<p>It is also developing a laneway culture, which Ms Mercorella said was modernising and maturing the city.</p>
						<p>The median housing price is a new record for Brisbane and Ms Mercorella said there were great investment opportunities in the city at the moment.</p>
						<p>“Whether you’re a local or interstate investor, we have some of the strongest rental returns around the country,” she said.</p>
						<p>“You could get a 60 per cent rental return depending on where in Brisbane you buy.</p>
						<p>“Not only are you able to pick up an asset less than what you’d pay in Melbourne or Sydney, but the rate of return in many instances is greater in Brisbane.”</p>
						<p>Realestate.com.au reports Holland Park and Holland Park West have the hottest properties in Brisbane at the moment, making it the best place to sell but the most competitive place to buy.</p>
						<p>The median house price in Holland Park is $650,000 and $667,000 in Holland Park West.</p>
						<p>Windsor, Coorparoo, Taringa, East Brisbane, Wilston, Gordon Park, Burleigh Heads and Camp Hill are also in the list of the 10 best places to own a home in Queensland.</p>
					</div>
                    <!--/.First row-->
                    <br>
                    <hr class="extra-margins">
                    <!--Second row-->
                    <div class="row">
                        <div class="row">
                            <!--Article Tiles-->  
                            <?php require 'function_articles.php';?>
                        </div>
                </div>
                <!--/.Main column-->
            </div>
        </div>
        <!--/.Main layout-->
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