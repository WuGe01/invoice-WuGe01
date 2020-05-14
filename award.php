<?php
include "./layout/pdo.php";
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include "./layout/title.php" ;?></title>
    <link rel="stylesheet" href="./plugins/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="bg-dark">
    <!-- <?php include "./layout/header.php" ;?> -->
    <h1 class="text-white d-flex mt-5 justify-content-center">中獎清單</h1>

    <div class="card  shadow p-3 container justify-content-center align-items-center">
    <table class='text-center table'>
    <tr>
    <th>發票年份</th>
    <th>發票期份</th>
    <th>發票獎號</th>
    <th>發票金額</th>
    <th>中獎獎金</th>
    </tr>
    <?php include "./layout/ifaward.php"; ?>
      
    <div class= "btn-group-lg justify-content-center d-flex" >
    <a href="index.php"  class="btn btn-secondary mt-3">回首頁</a>
    </div>
    </div>


</body>
</html>