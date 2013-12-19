<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Guestbook
 *
 * @author Rami
 */
class Guestbook extends DB{
    //put your code here
    public function getGuestbookData() {
        $result = array();
        $db = $this->getDB();
        if ( NULL != $db ) {
            $stmt = $db->prepare('select name, email, comments from guestbook');
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $result;
    }
    
    public function displayGuestbook() {
        
        $results = $this->getGuestbookData();
        
        if ( count($results) ) {
             echo '<h2>Comments Posted</h2>';
             print_r($results);
        } else {
            echo '<p>No comments posted</p>';
        }
        
        
    }
    
    public function processGuesbook(){
        $db= $this->getDB();
        
                if ( null != $db ) {
            $stmt = $db->prepare('insert into guestbook set name = :nameValue, '
                    . 'email = :emailValue, comments = :commentsValue');
            $stmt->bindParam(':nameValue', $_POST["name"], PDO::PARAM_STR);
            $stmt->bindParam(':emailValue', $_POST["email"], PDO::PARAM_STR);
            $stmt->bindParam(':commentsValue', $_POST["comments"], PDO::PARAM_STR);
            if ( $stmt->execute() ){
                return true;
            }
        } 
    }
}
