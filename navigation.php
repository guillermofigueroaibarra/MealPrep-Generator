<?php 
        if(isset($_SESSION["userid"]))
        {
            ?>
                <!--<li><a href="#"><?php echo $_SESSION["useruid"]; ?></a></li> -->

                <ul><li><a href="#home">HOME </a></li>
                <li><a href="includes/logout.inc.php">LOGOUT</a></li>
                <li><a href="#about">ABOUT</a></li></ul>

            <?php
        } 
        else
        {

    ?>     
            
             <ul><li><a class= "active" href="#home">HOME</a></li>
            <li><a href = "#">SIGN UP/LOGIN</a></li>
            <li><a href="#about">ABOUT</a></li></ul>
           
        <?php
            }
           
           
           
        ?>