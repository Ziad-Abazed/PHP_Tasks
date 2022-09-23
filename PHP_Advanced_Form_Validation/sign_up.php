
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/csss.css" />
    <title>register</title>
</head>

<body style="background-color:white;">
   
    <div class="container">
     
            <div class="col-lg-8 col-sm-12 reg">

                <form id="form-reg" onsubmit="validationForm(event)" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <h1>create an account</h1>


                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">First Name<span>*</span></label>
                        <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="name1">
                        <div class="error" id="nameErr"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">middle Name<span>*</span></label>
                        <input type="text" class="form-control" id="exampleInputName2" aria-describedby="nameHelp" name="name2">
                        <div class="error" id="nameErr"></div>
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">Last Name<span>*</span></label>
                        <input type="text" class="form-control" id="exampleInputName3" aria-describedby="nameHelp" name="name3">
                        <div class="error" id="nameErr"></div>
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">Family Name<span>*</span></label>
                        <input type="text" class="form-control" id="exampleInputName4" aria-describedby="nameHelp"name ="name4">
                        <div class="error" id="nameErr"></div>
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address<span>*</span></label>
                        <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mail">
                        <div class="error" id="emailErr"></div>
                        <small>ex:username@domain.com</small>
                    </div>

                    <div class="mb-3">
                        <label for="date" class="form-label">date of birth</label>
                        <input type="date" class="form-control" id="date" name="date" >
                     
                    </div>
                   
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">create Password<span>*</span></label>
                        <div class="eye">
                            <i class="bi bi-eye-slash" id="togglePassword" ></i>
                              <input type="password" class="form-control" id="exampleInputPassword1" name="pass"/>
                          </div>
                     
                        <div class="error" id="passErr"></div>
                        <small>The Password should be between 6-18 characters.</small>
                        <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Confirm Password<span>*</span></label>
                        <div class="eye">
                            <i class="bi bi-eye-slash" id="togglePassword" ></i>
                              <input type="password" class="form-control" id="exampleInputPassword2" name="passCon"/>
                          </div>
                     
                        <div class="error" id="passErr2"></div>
                      
                        
                    </div>
                    <div id="registeredMsg"></div>
                    <div class="d-grid gap-2">
                        <button type="submit" id="btn" class="form-control btn sign-up" name="submit">sign up</button>
                      <p> Already have account? <a href="sign_in.php">login</a></p>
                    </div>

                </form>
            </div>
     



        </div>
    </div>

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['name1'])) {
        echo "You must fill in the first name"."<br>";
    }else{
   
        $firstnamevalue = $_POST['name1'];
        $firstbool=true;

    }
    //middle name
    if (empty($_POST['name2'])) {
        echo "You must fill in the middle name"."<br>";
    }else{
   
        $middlenamevalue = $_POST['name2'];
        $middlebool=true;

    }
//last name
    if (empty($_POST['name3'])) {
         echo "You must fill in the last name"."<br>";
    }else{
   
        $lastnamevalue = $_POST['name3'];
        $lastbool=true;

    }
    //family name
    if (empty($_POST['name4'])) {
         echo "You must fill in the family name"."<br>";
    }else{
   
        $familynamevalue = $_POST['name4'];
        $familybool=true;

    }
    //email
    if (empty($_POST['mail'])) {
         echo "You must fill in the email"."<br>";
    }
    elseif(!filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)){
        echo "The email must be a valid email address."."<br>";

    }
    
    else{
   
        $mailValue = $_POST['mail'];
        $mailbool=true;

    }
    //date
    if (empty($_POST['date'])) {
         echo "You must fill in the date"."<br>";
    }else{
   
        $date = $_POST['date'];
        $datebool=true;

    }
    $passlen=$_POST['pass'];

   // password1
    if (empty($_POST['pass'])) {
         echo "You must fill in the password"."<br>";
    }
    elseif(strlen($passlen)<6 ){
        echo "The password must be at least 6 characters."."<br>";
        
      }elseif(strlen($passlen) >18){
         echo "The password may not be greater than 18 characters."."<br>";
        
      }
    else{
   
        $passValue = $_POST['pass'];
        $passbool=true;

    }
    //password2
    if (empty($_POST['passCon'])) {
         echo "You must fill in theConfirm Password";
    }
    elseif($_POST['passCon']!=$_POST['pass']){
    echo "The password not match";
    }
    else{
   
       
        $firstbool=true;

    }
  
   
  

    if($mailbool==true&&$firstbool==true&&$passbool==true&&$middlebool==true&&$lastbool==true&&$familybool==true){

        $sql = "INSERT INTO users (fname,midname,lname,famname,email,bod,password,usertype)
        VALUES ('$firstnamevalue', '$middlenamevalue', '$lastnamevalue','$familynamevalue','$mailValue','$date','$passValue','user')";
        $conn->query($sql);

        
       }
}	


?>
  <!-- <script src="java_script/script_check.js"></script>  -->



</body>

</html>