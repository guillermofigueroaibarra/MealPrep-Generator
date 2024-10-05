<?php

    session_start();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    <link rel="stylesheet" href="fruitystyles.css">


    <title>About</title>


    
</head>

<header>


<?php 
        if(isset($_SESSION["userid"]))
        {
            ?>
                <ul><li><a  href="index.php">HOME </a></li>
                <li><a  href="createmeal.php">CREATE </a></li>
                <li><a class= "active" href="about.php">ABOUT</a></li>
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
<h1>THE IMPORTANCE OF HAVING A BALANCED DIET</h1>

<p>Eating a balanced diet is crucial for maintaining overall health and well-being. It ensures that the body receives the right mix of nutrients needed for energy, growth, and proper functioning of vital systems. Essential foods in a balanced diet include fruits and vegetables, which are rich in vitamins, minerals, and antioxidants that protect against disease and boost the immune system. Whole grains provide sustained energy and are a good source of fiber, which aids digestion. Lean proteins, such as poultry, fish, beans, and legumes, are vital for muscle repair and the production of enzymes and hormones. Healthy fats from sources like avocados, nuts, and olive oil support brain health and help absorb fat-soluble vitamins. Dairy or fortified alternatives contribute to bone health by providing calcium and vitamin D. A balanced diet not only fuels the body but also plays a significant role in preventing chronic diseases, improving mental health, and promoting longevity.</p>

<img  src="balanceddiet.jpg" class="center" style="display: block;  margin-left: auto;margin-right: auto;width:70%" alt="mealpreps">






           
      



    




    </div>



</body>
    <div class="footer">
    <p>&#169; Figueroa </p>
    </div>
</html>





<!--<li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li> -->