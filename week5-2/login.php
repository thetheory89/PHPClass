<?php include 'dependency.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <?php
        Login::processLogin();
        ?>
         <form action="#" method="post">
            Passcode <input type="password" name="passcode" value="" />
            <br />
          <input type="submit" value="Submit" />
</form>
</body>
</html>
