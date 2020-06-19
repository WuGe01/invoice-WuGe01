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
    <script src="./plugins/jquery-3.5.0.min.js"></script>
</head>
<body class="bg-dark">
    <!-- <?php include "./layout/header.php" ;?> -->
    <h1 class="text-white d-flex mt-5 justify-content-center">發票列表</h1>
    <div class="card container mt-5">


<table class='text-center table'>
<tr>
<th>發票年份</th>
<th>發票期份</th>
<th>發票獎號</th>
<th>發票金額</th>
<th></th>
</tr>
    
<?php
$years=(!empty($_POST['years']))?$_POST['years']:$_GET['y'];
$period=(!empty($_POST['period']))?$_POST['period']:$_GET['pe'];
$sql2="SELECT count(*) FROM `invoices` where `period` = '$period' AND `years` = '$years' order by `id`";
$total=$pdo->query($sql2)->fetchcolumn();
$num=10;
$pages=ceil($total/$num);
$now=(!empty($_GET['p']))?$_GET['p']:1;
($now>$pages)?$now=$pages:$now;
($now<1)?$now=1:$now;
$start=($now-1)*$num;
$sql="select * from `invoices` where `period` = '$period' AND `years` = '$years' order by `id` limit $start,$num";
$row=$pdo->query($sql)->fetchAll();
// 保留空間-登入判斷區
foreach($row as $r){
echo "<tr>";
echo "<td>" . $r['years'] . "</td>";
echo "<td>";
switch ($r['period']){
    case "1":
        echo "1,2月";
        break;
    case "2":
        echo "3,4月";
        break;
    case "3":
        echo "5,6月";
        break;
    case "4":
        echo "7,8月";
        break;
    case "5":
        echo "9,10月";
        break;
    case "6":
        echo "11,12月";
        break;
}
echo "</td>";
echo "<td>" . $r['code'] . "-" . $r['number'] . "</td>";
echo "<td>" . $r['expend'] . "</td>";

echo "<td>";
echo "<div class='btn-group-sm d-flex justify-content-end'>";
echo "<a href='editlist.php?id=" . $r['id']  . "'class='btn btn-warning '>編輯</a>";
echo "<a href='dellist.php?id=" . $r['id']  . "'class='btn btn-danger text-white'>刪除</a>";
echo "</div>";
echo "</td>" ;
echo "</tr>";
}


?>
</table>
  <div class="btn-group-lg justify-content-between d-flex" role="group">
    <a href="?p=<?=($now-1);?>&y=<?=$years;?>&pe=<?=$period;?>"  class="btn btn-secondary mb-3">上一頁</a>
    <a href="index.php"  class="btn btn-secondary mb-3">回首頁</a>
    <a href="?p=<?=($now+1);?>&y=<?=$years;?>&pe=<?=$period;?>"  class="btn btn-secondary mb-3">下一頁</a>
  </div>

</body>
</html>