<?php
include "./layout/pdo.php";
session_start();
$sql="insert into `invoices`(
    `period`,
    `years`,
    `code`,
    `number`,
    `expend`) values(
    '".$_POST['period']."',
    '".$_POST['years']."',
    '".$_POST['code']."',
    '".$_POST['number']."',
    '".$_POST['expend']."')";

  
$res=$pdo->exec($sql);
if($res==1){
    echo "新增成功";
    // echo "period=".$_POST['period']."<br>";
    // echo "period=".$_POST['years']."<br>";
    // echo "period=".$_POST['code']."<br>";
    // echo "period=".$_POST['number']."<br>";
    // echo "period=".$_POST['expend']."<br>";
    header("location:index.php");
    // header("Refresh:1;url=index.php");
}else{
    echo "新增失敗<br>";
    echo $sql."<br>";  
    echo "period=".$_POST['period']."<br>";
    echo "period=".$_POST['years']."<br>";
    echo "period=".$_POST['code']."<br>";
    echo "period=".$_POST['number']."<br>";
    echo "period=".$_POST['expend']."<br>";
    header("Refresh:1;url=index.php");
}
?>