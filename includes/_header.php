<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="hamburgers-master/dist/hamburgers.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>


    <!-- HAMBURGER MENU BAR -->
   <button class="hamburger hamburger--squeeze" type="button">
        <span class="hamburger-box">
        <span class="hamburger-inner"></span>
        </span>
    </button>

    <div class="hamburger-bg"></div>
    <!-- menu bar -->
    <div class="nav-links">
       <div></div>
        <ul>
            <a href="index.html"><li>Home</li></a>
            <a href="mylist.html"><li>My List</li></a>
            <a href="FAQ.html"><li>Help</li></a>
        </ul>
   </div>

   <?php
    $link_name = "Page 2";
    $id = 2;
  ?>
  
  <?php $link_name = "Page 2"; ?>
  <p><a href="page2.php"><?php echo $link_name; ?></a></p>

   <!--INVISIBLE NAV BAR FOR DESKTOP SCREEN -->
    <div class="desktop-nav">
        <a href="" class="line">My List</a>
        <a href="" class="line">Help</a> 
    </div>