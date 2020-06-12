<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
   <link rel="stylesheet" href="hamburgers-master/dist/hamburgers.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="main.css"> 
</head>
<body>



<!-- NEW HAMBURGER  -->

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

<!-- MY LIST AND HELP FOR TABLET AND DESKTOP -->

<div class="desktop-nav">
        <a href="searchresults.php" class="line">All Recipes</a>
        <a href="FAQ.php" class="line">Help</a> 
    </div>

    

    <!-- BANNER DESIGN -->

    <div class="mini-icon">
        <div>
            <img id="avocado" src="images/homepage/avocado.svg" alt="">
        </div>
        <div>
            <img id="spinach" src="images/homepage/spinach.svg" alt="">
        </div>
        <div>
            <img id="mushroom" src="images/homepage/mushroom.svg" alt="">
        </div>
        <div>
            <img id="onion" src="images/homepage/onion.svg" alt="">
        </div>
        <div>
            <img id="garlic" src="images/homepage/garlic.svg" alt="">
        </div>
        <div>
            <img id="lemon" src="images/homepage/lemon.svg" alt="">
        </div>
    </div>

    <div class="dish">
        <img id="one" src="IDM232-assets/circle_img/1218_2PRE07_Thai-Curry-Chicken_96739_WEB_SQ_hi_res copy.png" alt="dish">
        <img id="two" src="IDM232-assets/circle_img/0101_2PM_Steak-Diane_97315_SQ_hi_res copy.png" alt="dish">
        <img id="three" src="IDM232-assets/circle_img/0101_2PV1_Broccoli-Bucatini-Fettuccine_97230_SQ_hi_res copy.png" alt="dish">
        <img id="four" src="IDM232-assets/circle_img/0108_FPF_Barramundi_0304_WEB_SQ_hi_res copy.png" alt="dish">
        <img id="five" src="IDM232-assets/circle_img/0108_2PV1_Roasted-Pepper-Pasta_97907_SQ_hi_res copy.png" alt="dish">
        <p>Make Every Bite Count!</p>
    </div>
        

    <!-- RECIPE CATEGORIES -->

    <div class="main">
        <div class="logo">
                <img src="images/natsu_logo_text_whiteborder.png" alt="">
        </div>
        
        <div class="main-background">
            
            <div class="searchbar">
                <form action="searchresults.php" method="post">
                    <button type="submit" name="submit" value="Submit"><img src="images/search_icon.svg" alt=""></button>
                    <input type="text" placeholder="Pasta, Vegan, Chicken..." name="search" value="">
                </form>
            </div>
            <div class="categories-grid">
                <div class="box">
                    <form action="category.php" method="post">
                        <button type="submit" name="category" value="Submit"><img src="images/homepage/vegan.png" alt="vegan"></button>
                        <div class="center"><p>VEGAN</p></div>
                        <input type="hidden" name="category" value="vegan">
                    </form>
                </div>
                <div class="box">
                    <form action="category.php" method="post">
                        <button type="submit" name="category" value="Submit"><img src="images/homepage/dinner.png" alt="dinner"></button>
                        <div class="center"><p>DINNER</p></div>
                        <input type="hidden" name="category" value="dinner">
                    </form>
                </div>
                <div class="box">
                    <form action="category.php" method="post">
                        <button type="submit" name="category" value="Submit"><img src="images/homepage/salad.png" alt="salad"></button>
                        <div class="center"><p>SALAD</p></div>
                        <input type="hidden" name="category" value="salad">
                    </form>
                </div>
                <div class="box">
                    <form action="category.php" method="post">
                        <button type="submit" name="category" value="Submit"><img src="images/homepage/potluck.png" alt="dinner"></button>
                        <div class="center"><p>POTLUCK</p></div>
                        <input type="hidden" name="category" value="potluck">
                    </form>
                </div>
                <div class="box">
                    <form action="category.php" method="post">
                        <button type="submit" name="category" value="Submit"><img src="images/homepage/asian.png" alt="asian"></button>
                        <div class="center"><p>ASIAN</p></div>
                        <input type="hidden" name="category" value="asian">
                    </form>
                </div>
                <div class="box">
                    <form action="category.php" method="post">
                        <button type="submit" name="category" value="Submit"><img src="images/homepage/mexican.png" alt="mexican"></button>
                        <div class="center"><p>MEXICAN</p></div>
                        <input type="hidden" name="category" value="mexican">
                    </form>
                </div>
                <div class="box italian">
                    <form action="category.php" method="post">
                        <button type="submit" name="category" value="Submit"><img src="images/homepage/italian.png" alt="italian"></button>
                        <div class="center"><p>ITALIAN</p></div>
                        <input type="hidden" name="category" value="italian">
                    </form>
                </div>
                <a href="random_recipe.php"><div class="box random">                    
                    <img src="images/homepage/random.png" alt="random">
                </div></a>

            </div>
        </div>
    </div>

    <?php include "includes/_footer.php";?>

    <script src="main.js"></script>
</body>
</html>