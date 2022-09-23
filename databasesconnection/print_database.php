
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


</head>
<body style="margin:0px;">
  
<table class="table border">
  <tr>
    <th>ID</th>
    <th>AGENT_NAME</th>
    <th>WORKING_AREA</th>
    <th>COMMISSION</th>
    <th>PHONE_NO</th>
   
  </tr>
  <?php include 'header.html' ?>
<?php
$conn = new mysqli('localhost', 'root', '','sales');


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";


$sql1="UPDATE agent SET PHONE_NO='0777777777' WHERE id=2 ";
if ($conn->query($sql1) === TRUE) {
  echo "updated successfully";
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}

// $sql = "INSERT INTO agent (id, AGENT_NAME, WORKING_AREA,COMMISSION,PHONE_NO)
// VALUES (12, 'Doe', 'amman',015,'0777777777')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $sql2="DELETE FROM agent  WHERE id=11 ";
// if ($conn->query($sql2) === TRUE) {
//   echo "Deleted successfully";
// } else {
//   echo "Error: " . $sql2 . "<br>" . $conn->error;
// }

$query = "SELECT * FROM agent"; 



if ($result = $conn->query($query)) {
  
while($row = $result->fetch_assoc()){   
echo "<tr><td>" . htmlspecialchars($row['id']) . "</td>
<td>" . htmlspecialchars($row['AGENT_NAME']) . "</td>
<td>" . htmlspecialchars($row['WORKING_AREA']) . "</td>
<td>" . htmlspecialchars($row['COMMISSION']) . "</td>
<td>" . htmlspecialchars($row['PHONE_NO']) . "</td>




</tr>";  
}



echo "</table>"; 
}





?>


<h1>join</h1>

<table class="table border">
  <tr>
    <th>ORD_DATE</th>
    <th>customer.name</th>
    
    
   
  </tr>

  <?php


$query1 = "SELECT orders.ORD_DATE, customer.name
FROM orders
INNER JOIN customer ON orders.CUST_CODE = customer.id;"; 



if ($result = $conn->query($query1)) {
  
while($row = $result->fetch_assoc()){   
echo "<tr><td>" . htmlspecialchars($row['ORD_DATE']) . "</td>
<td>" . htmlspecialchars($row['name']) . "</td>





</tr>";  
}



echo "</table>"; 
}
  ?>  
  <?php  include 'footer.html'  ?>
</body>
</html>