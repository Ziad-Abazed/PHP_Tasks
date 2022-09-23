<?php
session_start();
require 'database.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>user Edit</title>
</head>
<body>
  
    <div class="container mt-5">

     
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>user Edit 
                            <a href="admin.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $user_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM users WHERE id='$user_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $user = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="user_id" value="<?= $user['id']; ?>">

                                    <div class="mb-3">
                                        <label>first Name</label>
                                        <input type="text" name="name" value="<?=$user['fname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>last Name</label>
                                        <input type="text" name="name1" value="<?=$user['midname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>middle Name</label>
                                        <input type="text" name="name2" value="<?=$user['lname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>family Name</label>
                                        <input type="text" name="name3" value="<?=$user['famname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Student Email</label>
                                        <input type="email" name="email" value="<?=$user['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>date of birth</label>
                                        <input type="text" name="bod" value="<?=$user['bod'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>password :</label>
                                        <input type="text" name="password" value="<?=$user['password'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update" class="btn btn-primary">
                                            Update Student
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>