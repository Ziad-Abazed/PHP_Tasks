
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

                <form id="form-reg" onsubmit="validationForm(event)" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                    <h1>add employee</h1>
                  


                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">First Name:</label>
                        <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="name">
                        <div class="error" id="nameErr"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">Address:</label>
                        <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="address">
                        <div class="error" id="nameErr"></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">Salary:</label>
                        <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="salary">
                        <div class="error" id="nameErr"></div>
                    </div>

                  
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label><h5>Image</h5></label>
                            <input type="file" name="image">
                        </div>
                  
                
                    <div class="d-grid gap-2">
                        <button type="submit" id="btn" class="form-control btn sign-up" value="Submit" name="upload_save_btn">add employee</button>
                        <a href="index.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> back to admin Dashboard</a>
                    </div>

                </form>
            </div>
     



        </div>
    </div>

    <?php


include("databasee_conn.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   

  if(isset($_POST['upload_save_btn']))
  {
    $username=stripslashes($_POST['name']);
    $image=time() . '-' . $_FILES['image']['name'];

   // the image to a specific folder first and this folder for example called (images)

   $target_dir="images/";
   $target_file=$target_dir . basename($image);
    
      
     
      $name = $_POST["name"];
      $address = $_POST["address"];
      $salary = $_POST["salary"];
  
  
      if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
        $sql="INSERT INTO employee (name,image,	address, salary) 
       VALUES('$name','$image','$address','$salary')";

       
//if the data has been saved in the database , redirect the user to the main page
        if(mysqli_query($conn, $sql)){
            header('location:index.php');
        }
    }
  }

}	


?>



</body>
</html>