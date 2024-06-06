<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $email = $conn->real_escape_string($_POST['email']);
        $password = $_POST['password'];
        $q = "select * from users where email='$email'";
        $result = $conn->query($q);
        $row = $result->fetch_assoc();
        if ($row) {
            $id = $row['id'];
            if ($row["password"] == md5 ($password)) {
                header("Location: dashboard.php?id=$id");
                exit();
            } else {
                echo "<script>alert('Error: Incorrect password.');</script>";
            }
        } else {
            echo "<script>alert('Error: Email not found.');</script>";
        }
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
            width: 25%;
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
                    <h1>Login</h1>
                    <p>Belum punya akun? silahkan <span><a href="regis.php">klik disini</a></span></p>
                    <form method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
        </div>
        </div>
    </main>    
</body>
</html>