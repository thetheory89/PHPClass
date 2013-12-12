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
        
        print_r($_POST);
        
        
        
        $email= filter_input(INPUT_POST, "email");
        if (count($_POST)){
        
        if(Validator::emailIsValid($email)){
            echo '<p>email is not vaild</p>';
            
        }
        }
        
        ?>
        <form action ="#" method="post">
            Email:<input type ="text" name="email" value="<?php echo $email; ?>"/>
            </br>
            Name:<input type ="name" name="name" value="<?php echo $name; ?>"/>
            </br>
            Password:<input type ="password" name="password" value=""/>
            </br>
            <input type="submit" value="submit"/>
        </form>
    </body>
</html>
