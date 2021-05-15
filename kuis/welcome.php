<?php 
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");

    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="welcome.css">
</head>
<body>

    <div class="container">
        <div class="row-content">
            <div class="col-md-6 mb-3">
                <img src="image2.svg" class="img-fluid" alt="image">
            </div>
                <div class="text">
                    <h1><b>SELAMAT DATANG</b></h1><br>
                    <h4>Di Website Penyedia Informasi Tempat Wisata</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>