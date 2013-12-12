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
        
        $var = "string";
        $var = array();
        $var = 90;
        $var = true;
        
        $var = array("item1","item2","item3",90,false);
               /* print_r($var);
                var_dump($var);*/
       
        $var = array("item1"=>"first","item2"=>"second","item3"=>"third");
        echo $var['item3'];
        //print_r($var);
        
        
        
        foreach ($var as $key=> $value) {
             echo "<p>$key = $value</p>";
        }
        
        if(is_string($value) || is_array($var)){
            echo 'yup';
        }
        
        ?>
    </body>
</html>
