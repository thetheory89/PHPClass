<?php include 'dependancy.php';?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Signup</title>
    </head>
    <body>
        <?php
        // put your code here
        Signup::processSignup();
        
        ?>
        <form name="mainform" action="" method="post">
            
            
            Full name: <input type="text" name="fullname" value="" /><br/>
             E-Mail: <input type="text" name="email" value="" />
             Comments:<br /> <textarea cols="20" rows="5" name="comments"></textarea><br />
             <input type="submit" value="Submit" />
             
        </form>
        
    </body>
</html>
