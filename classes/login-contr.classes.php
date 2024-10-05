<?php



class LoginContr extends Login {


    private $uid;
    private $pwd;
  


    public function __construct($uid, $pwd) {

        $this->uid = $uid;
        $this->pwd = $pwd;
       

    }



    public function loginUser(){
        if($this->emptyInput() == false){
          // if input is empty display error message
          header("location: ../index.php?error=emptyinput");
          exit();
    
        }

        // otherwise get user
        $this->getUser($this->uid, $this->pwd);

    }



   private function emptyInput(){
    // function checks if username or password are empty
    $result = false;

    if(empty($this->uid) || empty($this->pwd)){

        $result = false;
      }
      else{
        $result = true;
      }
      return $result;
   }



    


 }







