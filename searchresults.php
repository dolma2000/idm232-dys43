<?php 
include "includes/database.php";

//form
if (isset($_POST['submit'])) {
    //if form is submitted
    $search= $_POST['search'];
}

 //Perform Database Query
 $query = 
 "SELECT * FROM recipes 
 WHERE lower(`tle`) LIKE '%{$search}%'
 OR lower(`description`) LIKE '%{$search}%'
 OR lower(`type`) LIKE '%{$search}%'
 ORDER BY `id` ASC"; 
 
 $result = mysqli_query($connection, $query); //connecting database and bringing what I asked for in "$query"
 
 // Check there are no errors with our SQL statement
  if (!$result) {
     die ("Database query failed.");
 }
 
 function redirect_to($location){
     header('Location:'.$location);
 }
 
 if ($result->num_rows==0) {
     redirect_to("error.php");
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

//To grab the inputted value form the search bar
<?php
$search = $_POST['search']
?>

<div class="everything">
<?php while ($row = mysqli_fetch_assoc($result)) {?> 


    <!-- SEARCH RESULTS RECIPE -->
    <?php $id = $row['id'];?>
    
    <div class="result">

        <a href="recipe.php?id=<?php echo $id;?>">
        
            <div class="result-container">
                
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

            </div>
        </a>
        


</div>

<?php } ?> 


<?php mysqli_free_result($result); ?>

</div>

<?php include "includes/_footer.php";?> 

<script src="main.js"></script>

<?php
    mysqli_close($connection);
?>

</body>
</html>