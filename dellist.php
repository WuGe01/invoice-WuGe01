<?php
include "./layout/pdo.php";
session_start();
session_start();
$id=$_GET['id'];
$sql="delete from invoices where `id`='$id'";

$res=$pdo->exec($sql);

if($res>0){
    header("location:list.php");
    // echo "01";
}else{
    echo "失敗" . "<br>";
    echo $sql ;
}

?>

