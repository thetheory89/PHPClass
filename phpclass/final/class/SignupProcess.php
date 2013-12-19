<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SignupProcess
 *
 * @author Rami
 */
class SignupProcess extends DB{
    protected $errors = array();
    
    public function getSignupData(){
        $result = array();
        $db= $this->getDB();
        if(NULL != $db){
            $stmt = $db->prepare('select website, email, password from users');
             $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
         }
         return $result;
}
    public function websiteEntryIsValid(){
        if(array_key_exists("website", $_POST)){
                if(! Validator::websiteIsValid($_POST["website"])){
                    $this->errors["website"] = "website is not valid.";
                }
            }else{
                $this->errors["website"] = "website is required";
            }
            return(!empty($this->errors["website"]) ? true : FALSE);
}
    public function emailEntryIsValid(){
         if(array_key_exists("email", $_POST)){
                if(! Validator::emailIsValid($_POST["email"])){
                    $this->errors["email"] = "Email not valid";
                }
            }else{
                $this->errors["email"] = "Email required";
            }
            return(!empty($this->errors["email"]) ? true : FALSE);
}
    public function passwordEntryIsValid(){
        if(array_key_exists("password", $_POST)){
                if(! Validator::passwordIsValid($_POST["password"])){
                    $this->errors["password"] = "password not valid";
                }
            }else{
                $this->errors["password"] = "password required";
            }
            return(!empty($this->errors["password"]) ? true : FALSE);
}

    function processSignup(){
        $db= $this->getDB();
        if(NULL != $db){
            $statement = $db->prepare('insert into users set website = :websiteValue, '
           . 'email = :emailValue, password = :passwordValue');
            $password = sha1($password);
            $statement->bindParam(':websiteValue', $_POST["website"], PDO::PARAM_STR);
            $statement->bindParam(':emailValue', $_POST["email"], PDO::PARAM_STR);
            $statement->bindParam(':passwordValue', $_POST["password"], PDO::PARAM_STR);
        if($statement->execute()){
            $lastID = intval($db->lastInsertId() );
            $statement = $db->prepare('insert into page set user_id = :lastID');
            $statement->bindParam(':lastID', $lastID, PDO::PARAM_INT);
        if( $statement->execute()){
            header("Location:login.php");
        }
        }
      return (count($this->errors)? false : true);
      }
   }

}
