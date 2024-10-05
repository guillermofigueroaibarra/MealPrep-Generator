<?php



class SignupContr extends Signup {


    private $uid;
    private $pwd;
    private $pwdRepeat;
    private $email;


    public function __construct($uid, $pwd, $pwdRepeat, $email) {

        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
        $this->email = $email;




    }

// public function that signup.inc.php will be using to sign up user
    public function signupUser(){
        if($this->emptyInput() == false){
          // if input is empty display error message
          header("location: ../index.php?error=emptyinput");
          exit();

        }

        if($this->invalidUid() == false){
          // if username is invalid
          header("location: ../index.php?error=username");
          exit();

        }

        if($this->invalidEmail() == false){
          // if email is invalid
          header("location: ../index.php?error=email");
          exit();

        }

        if($this->pwdMatch() == false){
          // if passwords don't match
          header("location: ../index.php?error=passwordmatch");
          exit();

        }

        if($this->uidTakenCheck() == false){
          // if username or email are taken already
          header("location: ../index.php?error=useroremailtaken");
          exit();

        }


        $this->setUser($this->uid, $this->pwd, $this->email);


     }

    




   private function emptyInput(){

    // function checks if username or password or password repeat or email are empty
    $result = null;

    if(empty($this->uid) || empty($this->pwd) || empty($this->pwdRepeat) || empty($this->email )){

        $result = false;
      }
      else{
        $result = true;
      }
      return $result;
   }





   private function invalidUid(){

    // function checks if username has valid characters includes letters and numbers only
    $result = null; 
    if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid))
    {
      $result = false;
    }
    else{
      $result = true;
    }
    return $result;

   }



   private function invalidEmail(){
    // function checks if email address is valid using a built in function 
    $result = null; 
    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL))
    {
      $result = false;
    }
    else{
      $result = true;
    }
    return $result;

   }




   private function pwdMatch(){
    // function checks if repeated password matches
    $result = null;
    // if password not same as repeat password return false
    if ($this->pwd !== $this->pwdRepeat){

        $result = false;
      }
    // otherwise return true
      else{
        $result = true;
      }
      return $result;
   }



   private function uidTakenCheck(){
    
    $result = null;
    // check if username or email are taken
    if (!$this->checkUser($this->uid, $this->email)){
        // if not taken return false
        $result = false;
      }
      else{
        $result = true;
      }
      return $result;
   }





}