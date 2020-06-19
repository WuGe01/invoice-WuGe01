<?php
include "./layout/pdo.php";
session_start();
$id=$_GET['id'];
$sql="select * from invoices where `id`='$id'";
$user=$pdo->query($sql)->fetch();
// echo "<pre>";
// echo print_r($user);
// echo "</pre>";
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
    <script src="./plugins/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-dark">

  <h1 class="text-white d-flex mt-5 justify-content-center">統一發票編輯</h1>
  <div class="justify-content-center align-items-center d-flex mt-5">
  <form action="edit_invoice.php" method="post">

    <div class="card container shadow p-3">

      <div class="form-group row">
        <div class="col-2"> 
          <label>今天:</label>
        </div>
        <div class="col"> 
          <label ><?php echo date("Y-m-d");?></label>
        </div>     
      </div>

      <div class="form-group row">
        <div class="col-2">
          <label for="invoice_years" >年份:</label>
        </div>
        <div class="col">
        <select name="years" class="custom-select" id="invoice_years">
            <option selected><?php echo $user['years'] ;?></option>
            <option value="<?php echo date("Y",strtotime(" -1 year"));?>"><?php echo date("Y",strtotime(" -1 year"));?></option>
            <option value="<?php echo date("Y");?>"><?php echo date("Y");?></option>
            <option value="<?php echo date("Y",strtotime(" 1 year"));?>"><?php echo date("Y",strtotime(" 1 year"));?></option>
          </select>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-2">         
          <label for="invoice_period">期別:</label>
        </div>
        <div class="col">
          <select name="period" class="custom-select" id="invoice_period">
            <option selected value="<?php echo $user['period'] ;?>"><?php 
            switch ($user['period']){
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
            ?></option>
            <option value="1">1,2月</option>
            <option value="2">3,4月</option>
            <option value="3">5,6月</option>
            <option value="4">7,8月</option>
            <option value="5">9,10月</option>
            <option value="6">11,12月</option>
          </select>
        </div>
      </div>


      <div class="form-group row">
        <div class="col-2">         
          <label for="invoice_code invoice_number">獎號:</label>
        </div>
        <div class="col-2">
          <input type="text" class="form-control" id="invoice_code" name="code" value="<?php echo $user['code'] ;?>">
        </div>
        <div class="col">
          <input type="number" class="form-control" id="invoice_number" name="number" value="<?php echo $user['number'] ;?>">
        </div>
      </div>
      <div class="form-group row">
        <div div class="col-2">          
          <label for="invoice_expend">花費:</label>
        </div>
        <div class="col">
          <input type="number" class="form-control" id="invoice_expend" name="expend" value="<?php echo $user['expend'] ;?>">
        </div>
      </div>
      <div class="btn-group d-flex">

        <button type="submit" class="btn btn-primary" name="id" value="<?php echo $id ;?>">送出</button>
      </div>

    </div>
  </form>
  </div>
</body>
</html>