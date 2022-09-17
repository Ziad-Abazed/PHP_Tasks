<?php
$start_time = microtime(TRUE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
    text-align:center;
    margin:auto;
    width: 60%;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
   
</head>
<body>
    <div>
        <h1>calculator</h1>
    <form method="get">
        <input type="text" name="num1" placeholder="number 1">
        <input type="text" name="num2" placeholder="number 2">
        <select name="operater" id="">
<option value="none">none</option>
<option value="Add">Add</option>
<option value="Subtract">Subtract</option>
<option value="Multiply">Multiply</option>
<option value="Divide">Divide</option>

        </select>
        <br>
        <button type="submit" name="submit" value="submit" >Calculate</button>

    </form>
<h1> The answer id:</h1>
<h2>
<?php
if(isset($_GET['submit'])){
$result1=$_GET["num1"];
$result2=$_GET["num2"];
$operator=$_GET["operater"];

switch($operator){
    case "none": echo "you need to select a method";break;
    case "Add": echo $result1+$result2;break;
    case "Subtract":echo $result1-$result2;break;
    case "Multiply": echo $result1*$result2;break;
    case "Divide":echo $result1/$result2;break;
}

}
?>
</h2>
</div>
</body>

</html>

<?php

$end_time = microtime(TRUE);
$time_taken =($end_time - $start_time)*1000;
$time_taken = round($time_taken,5);
echo '<h3><br>Page generated in '.$time_taken.' seconds.'."<br></h3>";

?>