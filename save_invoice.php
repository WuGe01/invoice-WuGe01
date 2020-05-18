<?php
include_once "./layout/pdo.php";

session_start();
$date=[
    'period'=>$_POST['period'],
    'years'=>$_POST['years'],
    'code'=>$_POST['code'],
    'number'=>$_POST['number'],
    'expend'=>$_POST['expend']
];
$sql=save("invoices",$date);


  
$res=$pdo->exec($sql);
if($res==1){
    header("location:index.php");
}else{
    echo $sql."<br>";  
    header("location:index.php");
}

?>