<?php 
include "includes/database.php";

//form
if (isset($_POST['submit'])) {
    //if form is submitted
    $search= $_POST['search'];
}

  //Perform Database Query
$query = 
"SELECT * FROM recipe 
WHERE lower(`tle`) LIKE '%{$search}%'
OR lower(`description`) LIKE '%{$search}%'
OR lower(`type`) LIKE '%{$search}%'
ORDER BY `id` ASC";


; //returns everything from "recipe" db - it works
// $query .= "WHERE lower(`type`) LIKE '%orange%'";//everything from tle
// $query .= "OR lower(`description`) LIKE '%{$search_term}%'";//everything from description
// $query .= "OR lower(`type`) LIKE '%{$search_term}%'";//everything from type
// $query .= "ORDER BY `id` ASC";
$result = mysqli_query($connection, $query); //connecting database and bringing what I asked for in "$query"
 
// Check there are no errors with our SQL statement
 if (!$result) {
    die ("Database query failed.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="hamburgers-master/dist/hamburgers.css">
    <link rel="stylesheet" href="searchresults.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
   

<?php include "includes/_header.php";?> <!-- Nav Bar -->

<?php
print_r($_POST);

$search = $_POST['search']
?>

<h1>Search: <?php echo $search; ?></h1>
<?php while ($row = mysqli_fetch_assoc($result)) {?> 



    <!-- SEARCH RESULTS RECIPE -->
    <div class="result">

        <a href="recipe.php"><div class="result-container">
            
            <div class="result-grid">
                <div class="dish"><img src="IDM232-assets/circle_img/<?php echo $row['rounded_img'];?>" alt=""></div>
                <div class="name"><p><?php echo $row['tle']." ".$row['subtitle'];?></p></div>
                <div class="icon">
                    <div class="sub-icon">
                        <img src="images/icons/time.svg" alt="">
                        <p><?php echo $row['cook_time'];?></p>
                    </div>
                    <div class="sub-icon">
                        <img src="images/icons/calories.svg" alt="">
                        <p><?php echo $row['cal'];?></p>
                    </div>
                </div>
            </div>

        </div></a>

        <div class="result-container">
            <div class="result-grid">
                <div class="dish"><img src="IDM232-assets/images/Recipe_Ancho-Orange_Chicken_with_Kale_Rice_Roasted_Carrots/0101_FPP_Chicken-Rice_97338_WEB_SQ_hi_res copy.png" alt=""></div>
                <div class="name"><p>Ancho Orange Chicken with Kale Rice and Roasted Carrots</p></div>
                <div class="icon">
                    <div class="sub-icon">
                        <img src="images/icons/time.svg" alt="">
                        <p>40min</p>
                    </div>
                    <div class="sub-icon">
                        <img src="images/icons/calories.svg" alt="">
                        <p>500cal</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="result-container">
            <div class="result-grid">
                <div class="dish"><img src="IDM232-assets/images/Recipe_Ancho-Orange_Chicken_with_Kale_Rice_Roasted_Carrots/0101_FPP_Chicken-Rice_97338_WEB_SQ_hi_res copy.png" alt=""></div>
                <div class="name"><p>Ancho Orange Chicken with Kale Rice and Roasted Carrots</p></div>
                <div class="icon">
                    <div class="sub-icon">
                        <img src="images/icons/time.svg" alt="">
                        <p>40min</p>
                    </div>
                    <div class="sub-icon">
                        <img src="images/icons/calories.svg" alt="">
                        <p>500cal</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="result-container">
            <div class="result-grid">
                <div class="dish"><img src="IDM232-assets/images/Recipe_Ancho-Orange_Chicken_with_Kale_Rice_Roasted_Carrots/0101_FPP_Chicken-Rice_97338_WEB_SQ_hi_res copy.png" alt=""></div>
                <div class="name"><p>Ancho Orange Chicken with Kale Rice and Roasted Carrots</p></div>
                <div class="icon">
                    <div class="sub-icon">
                        <img src="images/icons/time.svg" alt="">
                        <p>40min</p>
                    </div>
                    <div class="sub-icon">
                        <img src="images/icons/calories.svg" alt="">
                        <p>500cal</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="result-container">
            <div class="result-grid">
                <div class="dish"><img src="IDM232-assets/images/Recipe_Ancho-Orange_Chicken_with_Kale_Rice_Roasted_Carrots/0101_FPP_Chicken-Rice_97338_WEB_SQ_hi_res copy.png" alt=""></div>
                <div class="name"><p>Ancho Orange Chicken with Kale Rice and Roasted Carrots</p></div>
                <div class="icon">
                    <div class="sub-icon">
                        <img src="images/icons/time.svg" alt="">
                        <p>40min</p>
                    </div>
                    <div class="sub-icon">
                        <img src="images/icons/calories.svg" alt="">
                        <p>500cal</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="result-container">
            <div class="result-grid">
                <div class="dish"><img src="IDM232-assets/images/Recipe_Ancho-Orange_Chicken_with_Kale_Rice_Roasted_Carrots/0101_FPP_Chicken-Rice_97338_WEB_SQ_hi_res copy.png" alt=""></div>
                <div class="name"><p>Ancho Orange Chicken with Kale Rice and Roasted Carrots</p></div>
                <div class="icon">
                    <div class="sub-icon">
                        <img src="images/icons/time.svg" alt="">
                        <p>40min</p>
                    </div>
                    <div class="sub-icon">
                        <img src="images/icons/calories.svg" alt="">
                        <p>500cal</p>
                    </div>
                </div>
            </div>
        </div>

</div>
<?php } ?> 
<?php mysqli_free_result($result); ?>

<script src="main.js"></script>

<?php
    mysqli_close($connection);
?>

</body>
</html>