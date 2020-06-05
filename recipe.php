<?php 
include "includes/database.php";
 $id = $_GET['id'];
 
 //Perform Database Query
 $query = "SELECT * FROM recipe WHERE `id` LIKE '$id'"; //returns everything from "recipe" db - it works
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
    <title>Recipe Page</title>
    <link rel="stylesheet" href="hamburgers-master/dist/hamburgers2.css">
    <link rel="stylesheet" href="recipe.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="checkbox.css">
</head>
<body>

<?php include "includes/_header.php";?>


<?php while ($row = mysqli_fetch_assoc($result)) {   
  
$step = $row['step_imgs'];
$each = explode("*", $step);

?>   



<!-- MAIN IMIAGE FOR MOBILE HIDDEN IN TABLET AND DESKTOP -->
<div class="header-image">
    <img src="IDM232-assets/main_img/<?php echo $row['main_img']; ?>" alt="">
</div>



 <!-- RECIPE -->
    <div class="afterheader"> 
        <div class="side">

            <div class="headerimg">
                <img src="IDM232-assets/main_img/<?php echo $row['main_img']; ?>" alt="">
            </div>
            <div class="header" >
                <div id="title"><p><b><?php echo $row['tle'];?></b></p></div>
                <div id="subtitle"><p><?php echo $row['subtitle'];?></p></div>
            </div>
            
            <div class="icons">
                <div><img src="images/icons/time.svg" alt=""><p><?php echo $row['cook_time'];?></p></div>
                <div><img src="images/icons/serve.svg" alt=""><p><?php echo $row['servings'];?></p></div>
                <div><img src="images/icons/calories.svg" alt=""><p><?php echo $row['cal_per_serving'];?></p></div>
            </div>

            <div class="description">
                <p>
                <?php echo $row['description'];?>
                </p>
            </div>
        </div>

        <!-- INGREDIENTS -->
        <div class="ingredient">
            <h1>Ingredients</h1>
        </div>

    <div class="side2">
        
        <div class="ing-pic"><img src="IDM232-assets/ingredients_img/<?php echo $row['ingredients_img']; ?>" alt=""></div>
        
<!-- INGREDIENTS -->
        <div class="ingredient-info">
           
                <div class="item">
                    
                    <?php 

                        //call all the ingredient
                        $ingredStr = $row['all_ingredients'];
                    
                        // convert string to array
                        $ingredArray = explode("*", $ingredStr);
                        
                        //increment the value of the [ ] until the full number of ingredient
                        for ($lp=0; $lp<count($ingredArray); $lp++){
                            $oneIngred = $ingredArray[$lp];
                        //     echo "<p>".$oneIngred."</p>"."<hr>";
                        // }
                    ?>
                    <div class="inline">
                        <!--ingredient name-->
                        <p id="food"><?php echo $oneIngred;?></p>
                        
                        <!--checkbox-->
                        <div class="box1">
                        <div id="app">
                            <div class="card">
                            <ul id="list">
                                <li class="item">
                                <div class="custom-checkbox">
                                    <input type="checkbox"/>
                                    <svg viewBox="0 0 35.6 35.6">
                                    <circle class="background" cx="17.8" cy="17.8" r="17.8"></circle>
                                    <circle class="stroke" cx="17.8" cy="17.8" r="14.37"></circle>
                                    <polyline class="check" points="11.78 18.12 15.55 22.23 25.17 12.87"></polyline>
                                    </svg>
                                </div>
                                </li>
                            </ul>
                            </div>
                        </div>

                    </div>
                    
     
 
                </div>
                <hr>

                <?php } ?>
             
            </div>
      
    </div>
                        </div>


        <!-- INSTRUCTION -->

        <div class="instruction">
            <h1>Instruction</h1>
        </div>
        
        <div id="exp-col">
            <button id="exp">
                <p><b>Expand</b></p>
            </button>
            <button id="col">
                <p><b>Collapse</b></p>
            </button>
        </div>
        

        <div class="steps">
            <div class="step one">
                <p><?php echo $row['step_title_1'];?></p>
                <div class="inside">
                    <img src="IDM232-assets/step_imgs/<?php echo $each[0];?>" alt="Step 1">
                    <p><?php echo $row['step_desc_1'];?></p>
                </div>
            </div>
            <div class="step two">
                <p><?php echo $row['step_title_2'];?></p>
                <div class="inside">
                    <img src="IDM232-assets/step_imgs/<?php echo $each[1];?>" alt="Step 2">
                    <p><?php echo $row['step_desc_2'];?></p>
                </div>
            </div>
            <div class="step three">
                <p><?php echo $row['step_title_3'];?></p>
                <div class="inside">
                    <img src="IDM232-assets/step_imgs/<?php echo $each[2];?>" alt="Step 3">
                    <p><?php echo $row['step_desc_3'];?></p>
                </div>
            </div>
            <div class="step four">
                <p><?php echo $row['step_title_4'];?></p>
                <div class="inside">
                    <img src="IDM232-assets/step_imgs/<?php echo $each[3];?>" alt="Step 4">
                    <p><?php echo $row['step_desc_4'];?></p>
                </div>
            </div>
            <div class="step five">
                <p><?php echo $row['step_title_5'];?></p>
                <div class="inside">
                    <img src="IDM232-assets/step_imgs/<?php echo $each[4];?>" alt="Step 5">
                    <p><?php echo $row['step_desc_5'];?></p>
                </div>
            </div>
            <div class="step six">
                <p><?php echo $row['step_title_6'];?></p>
                <div class="inside">
                    <img src="IDM232-assets/step_imgs/<?php echo $each[5];?>" alt="Step 6">
                    <p><?php echo $row['step_desc_6'];?></p>
                </div>
            </div>
        </div>
        <?php } ?>


<?php include "includes/_footer.php";?>        

<?php mysqli_free_result($result); ?>
<script src="main.js"></script>

<?php
    mysqli_close($connection);
?>



</body>
</html>