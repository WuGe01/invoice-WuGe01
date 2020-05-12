<?php
include "./layout/pdo.php";
session_start();
$years=$_POST['years'];
$period=$_POST['period'];
$sql1="select `id`, `code`, `number` from `invoices` where `period` = '$period' AND `years` = '$years' ";
// echo  $sql1 . "<br>";
$sql2="select * from `award` where `period` = '$period' AND `years` = '$years' ";
// echo  $sql2;
$row1=$pdo->query($sql1)->fetchAll(PDO::FETCH_ASSOC);
$row2=$pdo->query($sql2)->fetch(PDO::FETCH_ASSOC);
echo  "<pre>";
echo print_r($row1);
echo  "</pre>";
echo  "<pre>";
echo print_r($row2);
echo  "</pre>";
$Special_award=strrev($row2['Special_award']);
$S_award=strrev($row2['S_award']);
$h1_award=strrev($row2['h1_award']);
$h2_award=strrev($row2['h2_award']);
$h3_award=strrev($row2['h3_award']);
$six_award=strrev($row2['six_award']);
$six2_award=strrev($row2['six2_award']);
$six3_award=strrev($row2['six3_award']);
echo $Special_award."<br>";
echo $S_award."<br>";
echo $h1_award."<br>";
echo $h2_award."<br>";
echo $h3_award."<br>";
echo $six_award."<br>";
echo $six2_award."<br>";
echo $six3_award."<br>";
echo substr($Special_award, 0,3);

foreach($row1 as $r){



}



?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include "./layout/title.php" ;?></title>
    <link rel="stylesheet" href="./plugins/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php include "./layout/header.php" ;?>
</body>
</html> -->