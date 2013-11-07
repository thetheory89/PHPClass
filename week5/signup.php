<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php
        // put your code here
        
        $entryErrors = array();
        
        if ( count($_POST) ) {
            
            $signupClass = new Signup();
            
            if ( $signupClass->entryIsValid() ) {
                $signupClass->saveEntry();
                //you show a save entry message and have a link to the login page
                // or just redirect to the login page - header("Location:login.php");
                
            } else {
                $entryErrors = $signupClass->getErrors();
            }
            
        }
        
        
        ?>
<form name="mainform" action="signup.php" method="post">
Email: <input type="text" name="email" /> <br />
<?php
                if( !empty($entryErrors["email"]) ) {
                    echo '<p>',$entryErrors["email"],'</p>';
                 }
            ?>
Username: <input type="text" name="username" /> <br />
<?php
                if( !empty($entryErrors["username"]) ) {
                    echo '<p>',$entryErrors["username"],'</p>';
                 }
            ?>
Password: <input type="password" name="password" /> <br />
<?php
                if( !empty($entryErrors["password"]) ) {
                    echo '<p>',$entryErrors["password"],'</p>';
                 }
            ?>
<input type="submit" value="Submit" />
</form>
</body>
</html>