<?php
$start_time = microtime(TRUE);

$visitors = file_get_contents('mailpage.txt');
$visitors = $visitors+1;

file_put_contents('mailpage.txt',$visitors);

$content = file_get_contents('mailpage.txt');
echo "<h1>the number of visitors is: ".$content."</h1><br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
   
</head>
<body>
<?php

echo "<h1>the file name is ".basename($_SERVER['SCRIPT_NAME'])."</h1><br>";
echo "<h2>the project name is ".basename(dirname(__FILE__))."</h2><br>";
?>
<h1>form data</h1>
 <?php

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<h4>The Pass and Email was sent by POST Method</h4>';
    echo $_POST['email']."<br>";
    echo "the password: ".$_POST['password']."<br>";
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo '<h4>The Pass and Email was sent by GET Method</h4>';
    echo $_GET['email']."<br>";
    echo "the password: ".$_GET['password']."<br>";
}


?>

</body>

</html>

<?php

$end_time = microtime(TRUE);
$time_taken =($end_time - $start_time)*1000;
$time_taken = round($time_taken,5);
echo '<h3><br>Page generated in '.$time_taken.' seconds.'."<br></h3>";
$cookie_name="ziad ";
if(!isset($_COOKIE[$cookie_name])) {
    echo "<br><br>Cookie named '" . $cookie_name . "' is not set!";
  } else {
    echo "<br><br>Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
    echo "<br>".  $end_time;

  }
?>