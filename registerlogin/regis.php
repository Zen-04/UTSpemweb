<?php
    include "connection.php";
    ob_start(); 
    if(isset($_POST['submit'])){
        $nim = $_POST['nim'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = md5 ($_POST['password']);
        $q = " INSERT INTO `users`(`email`, `password`, `nim`, `username`) VALUES ('$email', '$password', '$nim', '$name' )";

        $query = mysqli_query($conn,$q);
        header('Location: index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .container {
            padding-top: 12em;
            width: 30%;
        }

        h1 {
            margin-bottom: 1em;
            text-align: center;
        }
        .btn {
            margin-top: 2em;
        }
    </style>
</head>
<body>
    <main>
        <div class="container">
        <!-- Content here -->
            <div class="card">
                <div class="card-body">
                    <h1>Register</h1>
                    <p>Sudah punya akun? Login <span><a href="index.php">disini</a></span></p>
                    <form method="post">
                        <div class="form-group">
                            <label for="nimInput">NIM</label>
                            <input type="nim" class="form-control" id="nimInput" aria-describedby="nimHelp" placeholder="Enter your nim" name="nim" required>
                        </div>
                        <div class="form-group">
                            <label for="nameInput">Name</label>
                            <input type="name" class="form-control" id="nameInput" aria-describedby="nameHelp" placeholder="Enter your name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase, and at least 8 or more characters" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </main>    
</body>
</html>