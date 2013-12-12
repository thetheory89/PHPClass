<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Processform
 *
 * @author Rami
 */
class Processform {
    //put your code here
    
    public function validate(){
      if(count($_POST)){
          if(! $this->validateEmail){
            echo '<p>email is not vaild</p>';
      }
      if(count($_POST)){
          if(! $this->nameisValid){
            echo '<p>email is not vaild</p>';
      }
    }
    public function emailIsValid(){
        $email= filter_input(INPUT_POST, "email");
        return Validator::emailIsValid($email);
    }
    public function  nameIsValid(){
      $name= filter_input(INPUT_POST, "name");
      return true;
    }
}
