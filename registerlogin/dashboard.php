<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        h1 {
            text-align: center;
            margin-top: 10em;
        }
    </style>
</head>
<body>
    <div class="container">
  <!-- Content here -->
    <?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $video_id = 'p7YXXieghto';
        $sql = "select * from users where id='$id'";
        $result = $conn->query($sql);
        if(!$result){
            die("Invalid query!");
        }
        while($row=$result->fetch_assoc()) {
            echo "<h1>Selamat Anda Berhasil Login, {$row['username']} {$row['nim']}</h1>";
        }
    }
    ?>
        <img class="giphy-gif-img giphy-img-loaded" src="https://media0.giphy.com/media/v1.Y2lkPTc5MGI3NjExZGsxbzlvcHN2MmVncW81bXpxNno3NmxqejF4MDVyeHptdG94Yzc2biZlcD12MV9naWZzX3NlYXJjaCZjdD1n/Vuw9m5wXviFIQ/200.gif" style="background:#00ff99; display: block; margin: auto;" width="40%" height="60%" alt="Rick Astley GIF">
    </div>
</body>
</html>