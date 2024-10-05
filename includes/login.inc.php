<?php 



if(isset($_POST["submit"]))

{


    // extracting data from index.php
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
 

    
    


    // instantiate LoginContr class or linking classes from Login-contr.classess.php
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";
    $login = new LoginContr($uid, $pwd);



    

    // running error handler
    $login->loginUser();







    // going back to fron page, display users there is no error signing up
    header("location: ../index.php?error=none");
}