<?php

include("database.php");
$mailValue="";
$firstnamevalue="";
$middlenamevalue="";
$lastnamevalue="";
$familynamevalue="";
$passValue="";
$date="";

$mailbool=false;
$firstbool=false;
$middlebool=false;
$lastbool=false;
$familybool=false;
$passbool=false;
$datebool=false;

if (isset($_POST['submit'])) {
    if (empty($_POST['name1'])) {
        $errors = "You must fill in the first name";
    }else{
   
        $firstnamevalue = $_POST['name1'];
        $firstbool=true;

    }
    //middle name
    if (empty($_POST['name2'])) {
        $errors = "You must fill in the middle name";
    }else{
   
        $middlenamevalue = $_POST['name2'];
        $middlebool=true;

    }
//last name
    if (empty($_POST['name3'])) {
        $errors = "You must fill in the last name";
    }else{
   
        $lastnamevalue = $_POST['name3'];
        $lastbool=true;

    }
    //family name
    if (empty($_POST['name4'])) {
        $errors = "You must fill in the family name";
    }else{
   
        $familynamevalue = $_POST['name4'];
        $familybool=true;

    }
    //email
    if (empty($_POST['mail'])) {
        $errors = "You must fill in the email";
    }
    elseif(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST['mail'])){
        $errors=  "The email must be a valid email address.";

    }
    
    else{
   
        $mailValue = $_POST['mail'];
        $mailbool=true;

    }
    //date
    if (empty($_POST['date'])) {
        $errors = "You must fill in the date";
    }else{
   
        $date = $_POST['date'];
        $datebool=true;

    }
    $passlen=$_POST['pass'];
    //password1
    if (empty($_POST['pass'])) {
        $errors = "You must fill in the password";
    }
    else if($passlen.length()<6 ){
        $errors  = "The password must be at least 6 characters.";
        
      }else if($passlen.length() >18){
        $errors = "The password may not be greater than 18 characters.";
        
      }
    else{
   
        $passValue = $_POST['name1'];
        $passbool=true;

    }
    //password2
    if (empty($_POST['passCon'])) {
        $errors = "You must fill in theConfirm Password";
    }
    elseif($_POST['passCon']!=$_POST['pass']){
        $errors = "The password not match";
    }
    else{
   
       
        $firstbool=true;

    }
   

    if($mailbool==true&&$firstbool==true&&$passbool==true&&$middlebool==true&&$lastbool==true&&$familybool==true){
$sql = "INSERT INTO users (fname,midname,lname,famname,email,bod,password)
VALUES ('$firstnamevalue', '$middlenamevalue', '$lastnamevalue','$familynamevalue','$mailValue','$date','$passValue')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
        
       }
}	
?>