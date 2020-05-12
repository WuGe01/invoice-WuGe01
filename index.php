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
  <!-- <?php include "./layout/header.php" ;?> -->
  <h1 class="text-white d-flex mt-5 justify-content-center">統一發票兌獎系統</h1>
  <div class="justify-content-center align-items-center d-flex mt-5">

  
    <div class="card container shadow p-3">
    <div class="btn-group mb-3 d-flex">
     
        <a href="list.php" type="button" class="btn btn-outline-secondary">發票列表</a>
        <!-- <a href="invoice.php" type="button" class="btn btn-outline-secondary">輸入獎號</a> -->
        <?php include "./layout/e_invoice.php" ;?>
        <a href="award.php" type="button" class="btn btn-outline-secondary">兌獎</a>

      </div>

      <form action="save_invoice.php" method="post">
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
            <option selected>請選擇發票年份</option>
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
            <option selected>請選擇發票期別</option>
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
          <input type="text" class="form-control" id="invoice_code" name="code">
        </div>
        <div class="col">
          <input type="text" class="form-control" id="invoice_number" name="number">
        </div>
      </div>
      <div class="form-group row">
        <div div class="col-2">          
          <label for="invoice_expend">花費:</label>
        </div>
        <div class="col">
          <input type="text" class="form-control" id="invoice_expend" name="expend">
        </div>
      </div>
      <div class="btn-group d-flex">
        <button type="reset" class="btn btn-warning">重設</button>
        <button type="submit" class="btn btn-primary">送出</button>
      </div>

    </form>
  </div>
  </div>
</body>

</html>