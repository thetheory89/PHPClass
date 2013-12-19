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
        Location::guestbook();
         
        ?>
    </body>
     <form action="#" method="post">
         Username <input type="text" name="username" value=""/>
         <br /><br />
         Passcode <input type="password" name="passcode" value="" />
    <br />
    <input type="submit" value="Submit" />
        </form>
</html>
