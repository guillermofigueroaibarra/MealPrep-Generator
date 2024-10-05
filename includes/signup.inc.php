<?php 



if(isset($_POST["submit"]))

{


    // extracting data from index.php
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

    
    


    // instantiate signupcontr class or linking classes from signup-contr.classess.php
    // database goes first because singup needs it then singup cause signup needs it firsts
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);



    

    // running error handler
    $signup->signupUser();







    // going back to fron page, display users there is no error signing up
    header("location: ../index.php?error=none");
}