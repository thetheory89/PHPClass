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
        
        print_r($_GET);
        if(count($_GET)&& array_key_exists("cityughfh", $_GET)){
            echo $_GET["cityughfh"];
        }
        
        
        
        ?>
        <a href = "?name=rami&cityughfh=providence&state=RI"> click </a>
    </body>
</html>
