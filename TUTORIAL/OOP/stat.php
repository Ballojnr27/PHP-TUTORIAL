<?php 
    
    //static properties allow us to access the properties in a class via the class directly and not via the functions

  class Weather {

    public static $tempConditions = ['cold', 'mild', 'warm'];

    public static function celsiusToFarenheit($c){
      return $c * 9 / 5 + 32;
    }

    public static function determineTempCondition($f){
      if($f < 40){
        return self::$tempConditions[0];
      } elseif($f < 70){
        return self::$tempConditions[1];
      } else {
        return self::$tempConditions[2];
      }
    }

  }

  //print_r(Weather::$tempConditions) . '</br>';
  //echo Weather::celsiusToFarenheit(20) . '</br>';
  echo Weather::determineTempCondition(80);

?>

<html lang="en">
<head>
  <title>PHP OOP</title>
</head>
<body>
  
</body>
</html>
