<!--NAVIGATION BAR FOR BOTH MOBILE AND TABLET/DESKTOP -->

<!--  HAMBURGER  -->

<div id="dark-bg"></div> <!-- darkened background -->
<div class="hamburger-bg"></div> <!-- orange circle corner -->
<div class="corner"> <!-- navigation list -->
    
    <div class="screen">
        <button class="hamburger hamburger--spin" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
        </button>

        <nav class="nav-links">
            <ul>
                <div class="bar" id="first">
                    <li><b><a href="index.php">Home</a></b></li>
                </div>

                <div class="bar" id="second">
                    <li><b><a href="searchresults.php">All Recipes</a></b></li>
                </div>

                <div class="bar" id="third">
                    <li><b><a href="FAQ.php">Help</a></b></li>
                 </div>
            </ul>
        </nav>
    </div>
</div>

<!-- SEARCH BAR WITH BLUE BACKGROUND -->

<div class="main-bg">
    <div class="searchbar">
        <form action="searchresults.php" method="post">
            <button type="submit" name="submit" value="Submit"><img src="images/search_icon.svg" alt=""></button>
            <input type="text" placeholder="Pasta, Vegan, Chicken..." name="search" value="">
        </form>
    </div>
    <div class="natsulogo">
        <a href="index.php"><img src="images/natsu_logo.png" alt="Natsu"></a>
        <p>NATSU</p>
    </div>
</div>

<!-- MY LIST AND HELP FOR TABLET AND DESKTOP -->

<div class="desktop-nav different">
        <a href="searchresults.php" class="line">All Recipes</a>
        <a href="FAQ.php" class="line">Help</a> 
</div>

<!-- END: NAVIGATION BAR FOR BOTH MOBILE AND TABLET/DESKTOP -->
