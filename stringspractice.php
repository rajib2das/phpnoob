<Doctype! Html>
<head>

  <meta charset="utf-8">
  </head>
    <title="string practise for php">
  </title>
  <body>
    <?php
      echo " my name is luffy <br>";
      echo 'my age is 25 <br>';
      $color="red";
      $shirt="sleev-less";
      $combination=$color."  ".$shirt;
      echo "$combination<br>";
      $country =array("India","bangladesh","england","China","South Africa");
      $capital=array("Delhi","Dhaka","London","Beijing","Johannesburg");
      $combo_capital=array_merge($country,$capital);//array_merge function merges two simple arrays together

      $combo_capital1=array_merge($capital,$country);

      print_r($combo_capital);
      print_r($combo_capital1);

     ?>
     <hr>
     <?php
       $str1="there is no end to knowing";
       $str2="as long as there is progress there will be learning";
       $combine=$str1;
       $combine .=$str2;
       echo "Original full string:$combine <br>";
     ?>
     <h1>string functions</h1>

    <b>Uppercase first : </b><?php echo ucfirst($combine); ?><br>
    <b>Uppercase words only  : </b> <?php echo ucwords($combine);?><br>
    <b>Lowercase words only  : </b> <?php echo strtolower($combine);?><br>
    <b>Uppercase for all words  : </b> <?php echo strtoupper($combine);?><br>

      <hr>
      <h2>more string functions </h2>
    <b>Repeat String : </b><?php echo str_repeat($combine,2); ?><br> // repeats the sting a number of times
    <b>substring from the original String : </b><?php echo substr($combine,10,19); ?><br>
    <b>position of String : </b><?php echo strpos($combine,"progress"); ?><br>
    <b>locating character : </b><?php echo strchr($combine,"W"); ?><br>

    <hr>
    <h2>even more string functions </h2>
    <b>returns stringlength : </b><?php echo strlen($combine); ?><br>
    <b>Using trim function : </b><?php echo "A".trim(" B C D").  "E"; ?><br>
    <b>Search particular String : </b><?php echo strstr($combine,"progress"); ?><br>
    <b>Replace String : </b><?php echo str_replace("learning","Inequality",$combine); ?><br>





  </body>
