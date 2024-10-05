<?php


// extend this class with dbh class to access database
class Signup extends Dbh {



    protected function setUser($uid, $pwd, $email) {

        // insert information to data base
        $stmt = $this->connect()->prepare('INSERT INTO users (users_uid, users_pwd, users_email) VALUES (?, ?, ?);'); 

        // encrypt password with hash method
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        // if logins can't be set display error
        if(!$stmt->execute(array($uid, $hashedPwd, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();

        }

       $stmt = null;
    }



    protected function checkUser($uid, $email) {

        // create a variable statement to check if username and email already in sql database
        $stmt = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;'); 



        // if stmt not found in array
        if(!$stmt->execute(array($uid, $email))) {


            // don't run the rest of code and display an error message and send user to home page
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();

        }
        // check if user exist in data base
        $resultCheck = null;
        if($stmt->rowCount() > 0){
            // if user found set to false
            $resultCheck = false;
            
        }
        else{
            // otherwise if user not set true
            $resultCheck = true;
        }

        return $resultCheck;
    }






}