<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Validator
 *
 * @author Rami
 */
class Validator {
    //put your code here
      
    public static function emailIsValid( $str ) {
        if ( is_string($str) && !empty($str) ) {
            return true;
        }
        return false;
    }
    
    public static function usernameIsValid( $str ) {
        if ( is_string($str) && !empty($str) ) {
            return true;
        }
        return false;
    }
    
    public static function passwordIsValid( $str ) {
        if ( is_string($str) && !empty($str) ) {
            return true;
        }
        return false;
    }
}
