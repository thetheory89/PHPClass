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
        
        if(!empty($errorMsg)){
            echo "<p>",$errorMsg,"</p>";
        }
        if(!empty($successMsg)){
            echo "<p>",$sucessMsg,"</p>";
        }
        
        ?>
        
        <form name="mainform" action="signupProcess.php" method="post">
            
            
             Full name: <input type="text" name="fullname" value="" /><br/>
             Password: <input type="text" name="password" value=""/><br/>
             E-Mail: <input type="text" name="email" value="" />
             <input type="submit" value="Submit" />
             
        </form>
        
    </body>
</html>
