
<?php
require 'databasee_conn.php';
?>

<?php 

  $id=$_POST['user_id'];
  $sql="SELECT * from employee where id=$id ";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
  
  $name=$row["name"];
  $address=$row["address"];
  $salary=$row["salary"];
  
 

  if(isset($_POST['update'])){
  
    $username=stripslashes($_POST['name']);
    $nameField=$_POST ['name'];
    $addressField=$_POST ['address']; 
    $salaryField=$_POST['salary'];
    $image=$_POST['image'];

$sql="UPDATE employee set name='$nameField', address='$addressField', salary='$salaryField' , image='$image' where id=$id";

$result=mysqli_query($conn,$sql);
if($result){
    echo"success";
    header('location: index.php');

}else{
    die(musqli_error($conn));
}

  }
  
?>


