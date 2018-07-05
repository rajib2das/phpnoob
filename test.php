<!Doctype html>
<html>
    <head>
      <meta charset="utf-8">

     </head>
    <title="test of php first program">
    </title=>
    <body>


         <fieldset style=";">
                  <legend>Wikipedia is the Best</legend>

          Wikipedia noahd  ncoihdoi  pojc ipkdfoisudo  joxcjjkxjhjl<br>
          cojocjojc  kco[k pckpkp'[''c''  ]] sedfwe   fewfwfe few

          <p>
          We try our best to learn and to learn is by doing!!!
          </p>
         </fieldset>

  <?php
   echo "This is the first php script";
   //phpinfo();{taking up too much of the view}
   //first comment on for a php projects.
    ?>
</body>
</html>
<?php
    $data = array("books"=>"alice in wonderland","authors"=>"mark twain","price"=>"100");
    $data = array_map('strtoupper',$data);

    echo "<br>";
    //first array prctice
    print_r( array_change_key_case ($data,CASE_UPPER));
    var_dump($data);//returns the
?>
<br>
 <br>
<?php

  $text1= "abcd";
  $text2= "w3schools.com";
  $x1= 65545.22;
  $x2= -22;

 echo str_word_count("$text2");// str_word_count counts the number of words in a sentence.
 echo "<h1>$text1<h1>";
 echo (" <h2>We all love to learn programming from <h2><br>".$text2.
 "<br><B>its really good<br>");

 echo ("<br><h1>line breakes always have to be inside the echo quotes<h3>");
 echo ("<h2>AAM imli kathal<h2>");

 print $x1+$x2;
 echo "<br>";
 var_dump($x1);
 ?>
