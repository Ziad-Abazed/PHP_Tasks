<?php
$start_time = microtime(TRUE);
$cookie_name = "user";
$cookie_value = $name;
setcookie($cookie_name, $cookie_value,time() + 5);

$visitors = file_get_contents('visitors.txt');
$visitors = $visitors+1;

file_put_contents('visitors.txt',$visitors);

$content = file_get_contents('visitors.txt');
echo "<h1>the number of visitors is: ".$content."</h1><br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task_php</title>
   
</head>
<body>
<?php

echo "<h1>the file name is ".basename($_SERVER['SCRIPT_NAME'])."</h1><br>";
echo "<h2>the project name is ".basename(dirname(__FILE__))."</h2><br>";
?>
<form method="post" name="myemailform" action="mail_pass.php">

    <p>Enter email:</p>
    	<input type="text" name="email">
    <br>
    
    <p>Enter password:	</p>
    <input type="password" name="password">
    
    <input type="submit" value="Send Form">
    </form>

   


<form action="https://www.google.com/search?">
    <label for="fname">search</label><br>
    <input type="text" id="fname" name="q" value="">
    <input type="submit" value="Go">
  </form> 
    
  


</body>

</html>

<?php

$end_time = microtime(TRUE);
$time_taken =($end_time - $start_time)*1000;
$time_taken = round($time_taken,5);
echo 'Page generated in '.$time_taken.' seconds.'."<br>";
$cookie_name="ziad ";
if(!isset($_COOKIE[$cookie_name])) {
    echo "<br><br>Cookie named '" . $cookie_name . "' is not set!";
  } else {
    echo "<br><br>Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
    echo "<br>".  $end_time;

  }
?>
