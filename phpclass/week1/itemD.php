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
        //array count value
        

        $array = array(1, "hello", 1, "hi",1, "bye");
        print_r(array_count_values($array));

        // array flip
        $letters = array("a" => 1, "b" => 2, "c" => 2,"d"=>1,"e"=>3);
        $letters = array_flip($letters);
        print_r($letters);
        
        //array key exist
        $search_array = array('first' => 1, 'second' => 4);
        if (array_key_exists('second', $search_array)) {
        echo "The 'second' element is in the array";
        }
        //array map
        $func = function($value) {
        return $value * 2;
        };

        print_r(array_map($func, range(5, 9)));
        
        
        ?>
    </body>
</html>
