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
        function token(){
            return uniqid();
        }
        
        $rows = 100;
        $col = 1;
        echo "<table border='1'>";
        for ($index = 0; $index < 100; $index++) {
           if(($index % 2) == 0) {
                echo "<tr bgcolor = #fff>";
            } else {
                echo "<tr bgcolor= #505050>";
            }
                $date = date("F j, Y, g:1 a");
                echo "<td>".$date." ".token(). "</td>";
                    
                echo "</tr>";
                    
                
                }
        
        echo "</table>";
            
                
        
        
         
            
        ?>
    </body>
</html>
