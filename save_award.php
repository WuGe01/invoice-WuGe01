<?php
include "./layout/pdo.php";
session_start();
$sql="insert into `award`(
    `period`,
    `years`,
    `Special_award`,
    `S_award`,
    `h1_award`,
    `h2_award`,
    `h3_award`,
    `six_award`,
    `six2_award`,
    `six3_award`) values(
    '".$_POST['period']."',
    '".$_POST['years']."',
    '".$_POST['Special_award']."',
    '".$_POST['S_award']."',
    '".$_POST['h1_award']."',
    '".$_POST['h2_award']."',
    '".$_POST['h3_award']."',
    '".$_POST['six_award']."',
    '".$_POST['six2_award']."',
    '".$_POST['six3_award']."')";

  
$res=$pdo->exec($sql);
if($res==1){
    echo "新增成功";
    echo $sql;
    header("location:index.php");
    // header("Refresh:1;url=index.php");
}else{
    echo "新增失敗<br>";
    echo $sql."<br>";  

    header("Refresh:1;url=index.php");
}
?>