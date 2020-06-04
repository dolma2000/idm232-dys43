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
        <a href="FAQ.html" class="line">Help</a> 
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
        <img id="one" src="IDM232-assets/images/Recipe_Thai_Curry_Chicken_with_Carrots_Bok_Choy/1218_2PRE07_Thai-Curry-Chicken_96739_WEB_SQ_hi_res copy.png" alt="dish">
        <img id="two" src="IDM232-assets/images/Recipe_Beef_Medallions_Mushroom_Sauce_with_Mashed_Potatoes/0101_2PM_Steak-Diane_97315_SQ_hi_res copy.png" alt="dish">
        <img id="three" src="IDM232-assets/images/Recipe_Bucatini_Alfredo_with_Broccoli/0101_2PV1_Broccoli-Bucatini-Fettuccine_97230_SQ_hi_res copy.png" alt="dish">
        <img id="four" src="IDM232-assets/images/Recipe_HoneyButter_Barramundi_with_Zaatar_Roasted_Vegetables/0108_FPF_Barramundi_0304_WEB_SQ_hi_res copy.png" alt="dish">
        <img id="five" src="IDM232-assets/images/Recipe_Roasted_Red_Pepper_Pasta_with_LemonParmesan_Broccoli/0108_2PV1_Roasted-Pepper-Pasta_97907_SQ_hi_res copy.png" alt="dish">
    </div>
        

    <!-- RECIPE CATEGORIES -->

    <div class="main">
        <div class="logo">
                <img src="images/natsu_logo_text_whiteborder.png" alt="">
        </div>
        <div class="main-background">
            
            <div class="searchbar">
                <form action="">
                    <button type="submit"><img src="images/search_icon.svg" alt=""></button>
                    <input type="text" placeholder="Pasta, Vegan, Easy, Spicy…" name="search">
                </form>
            </div>
            <div class="categories-grid">
                <a href="category/vegan.php"><div class="box vegan">                    
                    <img src="images/homepage/vegan.png" alt="vegan">
                    <div class="center"><p>VEGAN</p></div>
                </div></a>
                <a href="error.html"><div class="box dinner"> 
                    <img src="images/homepage/dinner.png" alt="dinner">
                    <div class="center"><p>DINNER</p></div>  
                </div></a>
                <div class="box salad">                    
                    <img src="images/homepage/salad.png" alt="salad">
                    <div class="center"><p >SALAD</p></div>
                </div>
                <div class="box potluck">                    
                    <img src="images/homepage/potluck.png" alt="potluck">
                    <div class="center"><p >POTLUCK</p></div>
                </div>
                <div class="box asian">                    
                    <img src="images/homepage/asian.png" alt="asian">
                    <div class="center"><p >ASIAN</p></div>
                </div>
                <div class="box mexican">                    
                    <img src="images/homepage/mexican.png" alt="mexican">
                    <div class="center"><p >MEXICAN</p></div>
                </div>
                <div class="box italian">                    
                    <img src="images/homepage/italian.png" alt="italian">
                    <div class="center"><p >ITALIAN</p></div>
                </div>
                <a href="recipe_random.php"><div class="box random">                    
                    <img src="images/homepage/random.png" alt="italian">
                </div></a>

            </div>
        </div>
    </div>

    <?php include "includes/_footer.php";?>

    <script src="main.js"></script>
</body>
</html>