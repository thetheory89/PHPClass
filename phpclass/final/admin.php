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
        Login::confirmAccess();
        
        $email = ( isset($_POST["email"]) ? $_POST["email"] : "" );
        
        $db = new PDO(Config::DB_DNS ,Config::DB_USER,Config::DB_PASSWORD);
        $statement = $db->prepare('select user_id from users WHERE email = :emailValue');
        $statement->bindParam(':emailValue', $_POST["email"], PDO::PARAM_STR);
        $idResult = $statement->fetch(PDO::FETCH_ASSOC);
         
            $statement->execute();
            echo "<p>".$idResult."</p>";
            
            $statement2 = $db->prepare('update page set title = :titleValue WHERE user_id = :idValue');
            $statement2->bindParam(':idValue', $idResult, PDO::PARAM_STR);
            $statement2->bindParam(':titleValue', $title, PDO::PARAM_STR);

            $statement2->execute(); 
        
        ?>
    </body>
</html>
