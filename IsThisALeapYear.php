<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Is This a Leap Year?</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
      <div id="main-content">
          <h1>Is This a Leap Year?</h1>
          <p>
           <?php date_default_timezone_set("Europe/London");?>
           <?php
          function is_leap_year($year){
           if ($year % 4 > 0) {
               return false;
           }elseif($year % 100 >0){
               return true;
           }elseif($year%400>0 ) {
               return false;
           } else{
               return true;
           }
          }
          
          if (isset($_GET["year"])){
              $year= intval($_GET["year"]);
          }else{
              $year = date('Y');
              
          }
          
           if (is_leap_year($year)) {
               echo"Yes, {$year} is a leap year. ";
           }else{echo"No, {$year} is not a leap year.";}
           ?>
            </p>
            <form action="" method="get">
                Enter a year to find out if it is a leap year:<br />
                <input type ="text" name="year" value="<?php echo $year; ?>" /><br/>
                <input type="submit" value="submit">
            </form>
       
      </div>
  </body>
</html>