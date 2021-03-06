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
						<h1>Brisbane house and unit prices tipped to go in opposite directions in 2017</h1>
						<p><i>Jim Malo, Property Reporter</i></br>
						<i>Dec 15, 2016</i></br>
						<p><i>Reference from:</i>
						<a href="https://www.domain.com.au/news/brisbane-house-and-unit-prices-tipped-to-go-in-opposite-directions-in-2017-20161214-gta3ps/" target="_blank">www.domain.com.au</a></p>
						<a href="article2.php"> <img src="img/articles/article2.jpg" alt="Article" heigh "400" width="400"></a>
						<p>The Brisbane housing market is expected to grow steadily in 2017, outperforming other capital cities hit hard by the drop in the national economy.</p>
						<p>But there is good news and bad news. House prices are going to rise in 2017 but units and apartments will drop. </p>
						<p>“I think prices will continue to fall in the Brisbane apartment market,” Domain Group’s chief economist Andrew Wilson said. He credited the dip to a large number of developments opening their doors in 2017.</p>
						<p>House prices would track slightly up in the new year and would be largely unaffected but Brisbane growth had slowed in general in 2016 and would continuing to trend downward, Dr Wilson said. </p>
						<p>The median house price for Brisbane was $532,050 at the end of November and was expected to grow to $553,332 in the next 12 months; the median unit price sat at $367,720, and would shrink to $353,011.</p>
						<p>“Brisbane’s been quite a consistent market over the past few years,” said Dr Wilson. “Although a little lower this year, it’s still a positive result.”</p>
						<p>The falling price for units would likely continue until sometime in 2018; Dr Wilson said that was when demand would catch up with supply. “We’re already seeing approvals for apartments falling,” he said. “As demand rises, as it will, we will see the prices rise.”</p>
						<p>A huge difference in price between Brisbane and the southern capitals drew interstate investor interest toward Queensland apartments, the Property Investment Professionals of Australia said.</p>
						<p>“I think on the whole it’s going to be an affordability story,” said chairman Ben Kingsley. “There’s an almost 70 per cent difference in median value and a only 17 per cent income difference between Brisbane and Sydney.”</p>
						<p>Suncorp senior economist Darryl Conroy said: “The most recent economic data seems to point to a reinvigoration of the investment centre, becoming more active.” He agreed the interstate activity should increase in Queensland while prices stay low.</p>
						<p>Interest in Brisbane’s budget suburbs has remained steady, but Dr Wilson said growth this and next year was driven by houses in the higher priced neighbourhoods throughout Greater Brisbane.</p>
						<p>“The mid- to high-price ranges have done the best,” he said. “Even though we’ve seen some movement in the budget markets, we still haven’t seen as much growth as you’d expect from lower interest rates.”</p>
						<p>He highlighted Burpengary East as a major suburb for growth next year. Re/Max Ultimate principal Mark Cheney said access to the city, balanced with lower density living, kept people attracted to fringe areas.</p>
						<p>“There’s easy access to the highway, 40 minutes to Brisbane if there’s no traffic and 40 minutes to the Sunshine Coast,” he said. “There’s acreage there too.”</p>
						<p>“There’s not much land left near the highway with that infrastructure.”</p>
						<p>Dr Wilson predicted the nation’s struggling economy would warrant another drop in the Reserve Bank’s interest rate next year, which is already at a record low 1.5 per cent. He said it would help continue Brisbane’s growth.</p>
						<p>There’s a pretty clear case for a cut in interest rates,” said Dr Wilson. “The question is whether banks pass on those savings.” </p>
						<p>“For Brisbane, the economy has improved this year, but nationally we’re going to need more stimulus.”</p>
						<p>Rapid apartment construction and an increase in public service jobs have helped the local economy grow, said Dr Wilson.</p>
						<p>He expected house prices would see a 4 per cent increase, but units are expected to drop by the same. </p>
						<p>“Plenty of activity and obviously units and apartments have been a key driver of employment in Queensland,” Mr Conroy said.</p>
						<p>“It has certainly been a tough couple of years for Queensland,” he said. “But we’re starting to see the light at the end of the tunnel.”</p>
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