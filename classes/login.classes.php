<?php


// extend this class with dbh class to access database
class Login extends Dbh {



    protected function getUser($uid, $pwd) {

        // select login from database
        $stmt = $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_uid = ? OR users_email = ?;'); 


        // if logins can't be found display an error message
        if(!$stmt->execute(array($uid, $pwd))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();

        }


        
        // if login credentials are not found echo error message
        if($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../index.php?error=usernotfound");
            exit();
        }

       $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC); // use built in method to returned password in associative array form
       $checkPwd = password_verify($pwd, $pwdHashed[0]["users_pwd"]); // use build in method password_verify to check if password matches


       // check if database returned true or false for password match
       if($checkPwd == false) {

            $stmt = null;
            header("location: ../index.php?error=wrongpassword"); // return error message if wrong password
            exit();
       }
       elseif($checkPwd == true){
        // if password matched, start login process, select user from database, user can login with either email or username AND with password
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE users_uid = ? OR users_email = ? AND users_pwd = ?;'); 
            header("location: ../index.php?error=usernotfound");


            // if didn't enter user enters username or email and password
            if(!$stmt->execute(array($uid, $uid,  $pwd))) {
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();

            }



            // if user not found display error message
            if($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../index.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC); // set equal to associative array with logins
            session_start();
            $_SESSION["userid"] = $user[0]["users_id"];
            $_SESSION["useruid"] = $user[0]["users_uid"];
            $stmt = null;
        }


       

        
 


        

        
 


        $stmt = null;
}








}