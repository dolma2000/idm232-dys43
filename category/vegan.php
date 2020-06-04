<?php 
include "../includes/database.php"; 

 //Perform Database Query
 $query = 
 "SELECT `tle`, `subtitle`, `rounded_img`, `cook_time`, `cal` , `type` 
 FROM recipe
 WHERE `type` LIKE '%vegan%'
 "; //returns everything from "recipe" db - it works
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
    <title>Vegan</title>
    <link rel="stylesheet" href="../../hamburgers-master/dist/hamburgers.css">
    <link rel="stylesheet" href="../../searchresults.css">
    <link rel="stylesheet" href="../../main.css">
</head>
<body>
   

<?php include "../includes/_header.php";?> <!-- Nav Bar -->

<?php while ($row = mysqli_fetch_assoc($result)) { ?> 
    
    <!-- SEARCH RESULTS RECIPE -->
    <div class="result">

        <a href="recipe.php"><div class="result-container">
            
            <div class="result-grid">
                <div class="dish"><img src="../../IDM232-assets/circle_img/<?php echo $row['rounded_img'];?>" alt=""></div>
                <div class="name"><p><?php echo $row['tle']." ".$row['subtitle'];?></p></div>
                <div class="icon">
                    <div class="sub-icon">
                        <img src="../../images/icons/time.svg" alt="">
                        <p><?php echo $row['cook_time'];?></p>
                    </div>
                    <div class="sub-icon">
                        <img src="../../images/icons/calories.svg" alt="">
                        <p><?php echo $row['cal'];?></p>
                    </div>
                </div>
            </div>

    </div></a>



        
</div>

<?php } ?>

<?php mysqli_free_result($result); ?>
    <script src="../../main.js"></script>

<?php
    mysqli_close($connection);
?>
</body>
</html>