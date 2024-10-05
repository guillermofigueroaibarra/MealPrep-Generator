<?php

    session_start();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
    <link rel="stylesheet" href="fruitystyles.css">


    <title>Signup</title>


    
</head>

<header>


<?php 
        if(isset($_SESSION["userid"]))
        {
            ?>
                <ul><li><a class= "active" href="#home">HOME </a></li>
                <li><a  href="createmeal.php">CREATE </a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="includes/logout.inc.php">LOGOUT</a></li></ul>
                
            <?php
        } 
        else
        {

    ?>     
            
             <ul><li><a class= "active" href="#home">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li></ul>
            
           
        <?php
            }
           
           
           
        ?>

</header>
<body>
<div style="padding:20px;margin-top:30px;height:1500px;">

 




  <?php 
        if(isset($_SESSION["userid"]))
        {
            ?>
                <h1>Welcome! you're logged in <?php echo $_SESSION["useruid"]; ?></h1>
                

             

                <p>Eating a balanced diet, guided by the food pyramid, is essential for maintaining optimal health and well-being. The food pyramid serves as a visual guide to help individuals make informed choices about the variety and quantity of foods they consume. It emphasizes the importance of including a wide range of nutrients in the diet, with a focus on whole grains, fruits, and vegetables forming the foundation. These food groups provide essential vitamins, minerals, and fiber, which are crucial for overall health. The pyramid also highlights the need for moderate portions of protein-rich foods, such as lean meats, fish, and legumes, as well as dairy products, which are important for muscle and bone health. Fats and sugars, positioned at the top of the pyramid, should be consumed sparingly to avoid excess calorie intake and related health issues. By following the guidelines of the food pyramid, individuals can achieve a balanced diet that supports long-term health, reduces the risk of chronic diseases, and promotes a sustainable lifestyle.</p>
                <img  src="foodpyramid.jpg" class="center" style="display: block;  margin-left: auto;margin-right: auto;width:50%;" alt="food pyramid">
            <?php
        } 
        else
        {

    ?>   
        <br/>  
        <img  src="healthyFood.jpg" class="center" style="display: block;  margin-left: auto;margin-right: auto;" alt="mealpreps">

        <h1>CREATE YOUR MEAL-PREP IDEAS!</h1>
        <p>This website generates meal-prep planning ideas, helping you generate customized meal ideas to cook for the entire week. By considering your dietary preferences, nutritional goals, and time constraints, it creates a personalized meal plan that fits your lifestyle. The website provides detailed recipes, shopping lists, and cooking instructions, making it easy to prepare and enjoy nutritious meals without the stress of planning. Whether you're looking to eat healthier, save time and money, or explore new dishes, this tool simplifies meal prepping and helps you stay organized throughout the week.</p>
        <section class="index-login">
        <div class="wrapper">
            <h4>SIGN UP</h4>
            <div class="index-login-signup">
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                    <input type="text" name="email" placeholder="E-mail">
                    <br>
                    <button type="submit" name="submit" >SIGN UP</button>
                </form>
            </div>

        

                <div class="index-login-login">
                    <h4>LOG IN</h4>
                    
                    <form action="includes/login.inc.php" method="post">
                        <input type="text" name="uid" placeholder="Username">
                        <input type="password" name="pwd" placeholder="Password">
                        <br>
                        <button type="submit" name="submit">LOG IN</button>
                    </form>
                </div>



        </div>
    </section>

           
        <?php
            }
           
           
           
        ?>



    




    </div>



</body>
    <div class="footer">
    <p>&#169; Figueroa </p>
    </div>
</html>





<!--<li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li> -->