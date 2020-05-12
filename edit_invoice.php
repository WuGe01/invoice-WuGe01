<?php
include "./layout/pdo.php";
session_start();
$id=$_POST['id'];
$years=$_POST['years'];
$period=$_POST['period'];
$code=$_POST['code'];
$number=$_POST['number'];
$expend=$_POST['expend'];
// echo "<pre>";
// echo print_r($_POST);
// echo "</pre>";
$sql="update `invoices` set `years`='$years', `period`='$period', `code`='$code', `number`='$number', `expend`='$expend' where `id`='$id' ";
$res=$pdo->exec($sql);

if($res){
    header("location:list.php");
}else{
    header("location:list.php");
    echo "<h1><div>更新失敗</div></h1>";
    // header("Refresh:3;url=list.php");
    echo $sql;
}

?>