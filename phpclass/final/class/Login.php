<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Rami
 */
class Login {
    public static function processLogin(){
        $_SESSION["allowAccess"] = false;
        if (isset($_POST["password"]) && $_POST["password"] == $_POST["password"]){
         $_SESSION["allowAccess"] = true;
         $_session["email"] = $_POST["email"];
         header("Location:admin.php");
        }
}
    public static function confirmAccess(){
        if ( ! isset($_SESSION["allowAccess"])
                || $_SESSION["allowAccess"] != true){
            header("Location:login.php");
        }
    }
}
