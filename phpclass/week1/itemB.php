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
        //Values
        $car1 = "Nissan";
        $car2 = "Volvo";
        $car3 = "Toyota";
        $car4 = "BMW";
        $car5 = "Honda";
        
        
        //key value pairs
        $fruits = array( 
            "Banana" => "one",
            "Apple" => "two",
            "Orange" => "three",
            "Grape" => "four",
            "peach" => "five"
        );
        print_r($fruits);
        //Multidimensional arrays
        $beers = array(
            array ("Corona"),
            array ("Heiniken"),
            array ("Bud Light"),
            array ("Coors Light")
        );
        print_r($beers);
        
        
        ?>
    </body>
</html>
