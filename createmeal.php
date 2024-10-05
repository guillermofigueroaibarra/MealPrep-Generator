<?php

    session_start();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fruitystyles.css">


    <title>Create Meal</title>


    
</head>

<header>


<?php 
        if(isset($_SESSION["userid"]))
        {
            ?>
                <ul><li><a  href="index.php">HOME </a></li>
                <li><a class= "active" href="about.php">CREATE</a></li>
                <li><a  href="about.php">ABOUT</a></li>
                <li><a href="includes/logout.inc.php">LOGOUT</a></li></ul>
               
            
            <?php
        } 
        else
        {

    ?>     
            
             <ul><li><a href="index.php">HOME</a></li>
            <li><a class= "active" href="about.php">ABOUT</a></li></ul>
            
           
        <?php
            }
           
           
           
        ?>

</header>
<body>
<div style="padding:20px;margin-top:30px;height:1500px;">
<h1>CREATE A MEAL-PREP</h1>



           
      



    




    </div>



</body>
    <div class="footer">
    <p>&#169; Figueroa </p>
    </div>
</html>





<!--<li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li> -->