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
    
    public static function emailIsValid($email){
        return(is_string($email)&& !empty($email));
            
    
    
    
    }
    
    
}
