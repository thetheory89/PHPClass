<?php include 'dependency.php';?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Guestbook</title>
    </head>
    <body>
        <?php
        $host = localhost;
        $name = "";
        $email ="";
        $db = "phplab";
        $tbl = "guestbook";
        
        
        // put your code here
        Login::confirmAccess();
        
        
        $gb = new Guestbook();
        $gb->displayGuestbook();
        
        
        
        ?>
    </body>
</html>
