<!Doctype html>
<html>
    <head>
      <meta charset="utf-8">

     </head>
    <title="test of php first program">
    </title=>
    <body>
       <?php

         echo "<h1>I am programming</h1>";
         echo "<h2>I am programming</h2>";
         echo "<h3>I am programming</h3>";
         echo "<h4>I am programming</h4>";
         echo "<h5>I am programming</h5>";
         echo "<h6>I am programming</h6>";

         $value1=  "Rajib";
         $value2= "Sanjay";
         echo ("employees of selvel".$value1."and".$value2);
        ?>
        <?php
            $arr=array(23,2334,45,65,34,45,2344,2432,2423,52,23436,6564,354534,67456);
            print_r($arr);
            echo current($arr) ."<br>";
            next($arr);
            echo current($arr)."<br>";
         ?>

    </body>

      </html>
