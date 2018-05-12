<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Is It Friday Yet?</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
      <div id="main-content">
          <h1>Is It Friday Yet?</h1>
          <p>
           <?php date_default_timezone_set("Europe/London");?>
           <?php
           if(date('D') == 'Fri') {
              echo "Woo Hoo! It is Friday!!!";
           }else {
               echo "Sorry, it is not Friday yet.<br />";
              $remaining = 5- date('N');
              if ($remaining <0) {$remaining += 7;}
              echo "Only {$remaining} more days to go.";
              
           }
           ?>
            </p>
           
              
              
<!--///         <php echo date("l"); ><br />-->
          <!--<php echo date("D"); ><br />-->
           <!--<php echo date("N"); ><br />-->
           
           <!--<php echo getdate()['weekday']; ><br />-->
          
          <!--<php echo strftime("%A"); ><br />-->
          <!--<php echo strftime("%a"); ><br />-->
          <!--<php echo strftime("%u"); ><br />-->
          <!--<php echo strftime("%w"); ><br /> */-->
         
           
           
<!--//          <pre>
//              <php print_r(getdate()) >
//          </pre> 
              -->
           
      </div>
  </body>
</html>