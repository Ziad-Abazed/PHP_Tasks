<?php
session_start();
require 'database.php';

if(isset($_POST['delete']))
{
    $user_id = mysqli_real_escape_string($conn, $_POST['delete']);

    $query = "DELETE FROM users WHERE id='$user_id' ";
    $query_run = mysqli_query($conn, $query);
    header("Location: admin.php");
    exit(0);
    
}

if(isset($_POST['update']))
{
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $name1 = mysqli_real_escape_string($conn, $_POST['name1']);
    $name2 = mysqli_real_escape_string($conn, $_POST['name2']);
    $name3 = mysqli_real_escape_string($conn, $_POST['name3']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $date = mysqli_real_escape_string($conn, $_POST['bod']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "UPDATE users SET fname='$name', midname='$name1',lname='$name2',famname='$name3',email='$email',bod='$date', password='$pass' WHERE id='$user_id' ";
    $query_run = mysqli_query($conn, $query);
    header("Location: admin.php");
    exit(0);
    

}




?>
