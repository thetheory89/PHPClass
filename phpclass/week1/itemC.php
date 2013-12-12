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
        //explode
        $cookieJar = "cookie1 cookie2 cookie3 cookie4 cookie4 cookie5 cookie6";
        $cookies = explode(" ",$cookieJar);
        echo $cookies[2];
        echo $cookies[5];
        
        //htmlentities
        $str1 = "theres a 'monkey' in the <b>tree</b>";
        echo htmlentities($str1);
        echo htmlentities($str1, ENT_QUOTES);
        
        //md5
        $str2 = "iPhone";
        echo "<p>echo md5</p>";
           echo md5($str2);
                 
             
             
        //strip_tags
        $text = '<p>I like pandas</p>';
        echo strip_tags($text);
        echo "/n";
        echo strip_tags($text,'<p>');
        
        //trim
        $text   = "\t\tThese are a few words :) ...  ";
        $binary = "\x09Example string\x0A";
        $hello  = "Hello World";
        var_dump($text, $binary, $hello);

        print "\n";

        $trimmed = trim($text);
        var_dump($trimmed);

        $trimmed = trim($text, " \t.");
        var_dump($trimmed);

        $trimmed = trim($hello, "Hdle");
        var_dump($trimmed);

        $trimmed = trim($hello, 'HdWr');
        var_dump($trimmed);


        $clean = trim($binary, "\x00..\x1F");
        var_dump($clean);
        
        //ucword
        $str3 = "hello";
        $str3 = ucwords($str3);
        $str3 = ucwords(ucfirst($str3));
        
        //strlen
        $fullname1 ="Rami Ogando";
        echo strlen($fullname1);
        
        //str_shuffle
        $fullname2 ="Rami Ogando";
        echo str_shuffle($fullname2);
        
        ?>
    </body>
</html>
