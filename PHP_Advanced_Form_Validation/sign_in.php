<?php
    include 'database.php';
    session_start();
    $emailErr=$emailErr2=$passErr="";
    if (isset($_POST['email']) && isset($_POST['passin'])) {
      
        
        function validate($data){
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        }
        $uname =validate($_POST['email']);
        $pass =validate($_POST['passin']);
        
    
        if (empty($uname)) {
            $emailErr= "Please enter your email";
    
        }if(empty($pass)){
            $passErr= "Please enter your passwored";
    
        }
        if(!empty($pass) && !empty($uname)){
            $sql = "SELECT * FROM users WHERE email ='$uname' AND password='$pass'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
    
                if ($row['email'] === $uname && $row['password'] === $pass&&$row['usertype']=="admin") {
                    echo "Logged in!";
 
                 
    
                    header("Location:admin.php");
 
    
                }else{$emailErr2= "wrong pass or email";}

                if ($row['email'] === $uname && $row['password'] === $pass&&$row['usertype']=="user") {
                    echo "Logged in!";
 
                    $_SESSION['first_name'] = $row['fname'];
                    $_SESSION['last_name'] = $row['lname'];
    
                    header("Location:home.php");
 
                }
                }else{$emailErr2= "wrong pass or email";}
    
            }
    
    }
   
?>


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
    
    <title>sign in</title>
</head>

<body >
   


    <div class="container">
  

            <div class="col-lg-5 col-sm-12 reg" >
               

                <form id="form-reg" onsubmit="validationData(event)" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <h1 >sign in</h1>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address<span>*</span></label>
                        <input type="" class="form-control" id="EmailSignIN" aria-describedby="emailHelp" name="email">
                        <div class="error" id="nameErr"><?php echo $emailErr; ?></div>
                        
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password<span>*</span></label>
                        <div class="eye">
                            <i class="bi bi-eye-slash" id="togglePassword" ></i>
                              <input type="password" class="form-control" id="passSignIN" name="passin"/>
                              <div class="error" id="nameErr"><?php echo $passErr; ?></div>
                          </div>
                     
                        <div class="error" id="passErr"></div>
                        <div class="error" id="nameErr"><?php echo $emailErr; ?></div>
                     
                     
                     
                
                        
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" id="btnIN" class="form-control btn sign-up" name="submit">sign in</button>
                        <p> CREATE account? <a href="sign_up.php">signup</a></p>
                    </div>

                </form>
            </div>



        
    </div>
   

</body>


</html>