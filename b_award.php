<?php
include "./layout/pdo.php";
session_start();
$years=$_POST['years'];
$period=$_POST['period'];
switch ($period) {
    case '1':
        $ped="1.2月";
        break;
    case '2':
        $ped="3.4月";
        break;
    case '3':
        $ped="5.6月";
        break;
    case '4':
        $ped="7.8月";
        break;
    case '5':
        $ped="9.10月";
        break;
    case '6':
        $ped="11.12月";
        break;
}
$date=['years'=>$years,'period'=>$period];
$row=find("award",$date);
// print_r($row);
// echo $row[0]['years'];
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
    <h1 class="text-white d-flex mt-5 justify-content-center"><?php echo $years . "年" . $ped;?>發票兌獎</h1>
    <div class="justify-content-center align-items-center d-flex mt-5 container">
    <div class="card shadow p-3 col-6">
    <div class="btn-group mb-3 d-flex row">

    <?php
    if($period != 1){       
    echo "<div class='col p-1 ml-2 mr-2'>  ";  
    echo "<form action='#' method='post'>";
    echo "<input type='number' name='years' value=". $years ." hidden>";
    echo "<input type='number' name='period' value='1' hidden>";
    echo  "<button type='submit' class='btn btn-outline-secondary p-2 w-100'>1.2月</button>";
    echo "</form>";
    echo "</div>";
    }
    if($period != 2){       
    echo "<div class='col p-1 ml-2 mr-2'>  ";  
    echo "<form action='#' method='post'>";
    echo "<input type='number' name='years' value=". $years ." hidden>";
    echo "<input type='number' name='period' value='2' hidden>";
    echo  "<button type='submit' class='btn btn-outline-secondary p-2 w-100'>3.4月</button>";
    echo "</form>";
    echo "</div>";
    }
    if($period != 3){       
    echo "<div class='col p-1 ml-2 mr-2'>  ";  
    echo "<form action='#' method='post'>";
    echo "<input type='number' name='years' value=". $years ." hidden>";
    echo "<input type='number' name='period' value='3' hidden>";
    echo  "<button type='submit' class='btn btn-outline-secondary p-2 w-100'>5.6月</button>";
    echo "</form>";
    echo "</div>";
    }
    if($period != 4){       
    echo "<div class='col p-1 ml-2 mr-2'>  ";  
    echo "<form action='#' method='post'>";
    echo "<input type='number' name='years' value=". $years ." hidden>";
    echo "<input type='number' name='period' value='4' hidden>";
    echo  "<button type='submit' class='btn btn-outline-secondary p-2 w-100'>7.8月</button>";
    echo "</form>";
    echo "</div>";
    }
    if($period != 5){       
    echo "<div class='col p-1 ml-2 mr-2'>  ";  
    echo "<form action='#' method='post'>";
    echo "<input type='number' name='years' value=". $years ." hidden>";
    echo "<input type='number' name='period' value='5' hidden>";
    echo  "<button type='submit' class='btn btn-outline-secondary p-2 w-100'>9.10月</button>";
    echo "</form>";
    echo "</div>";
    }
    if($period != 6){       
    echo "<div class='col p-1 ml-2 mr-2'>  ";  
    echo "<form action='#' method='post'>";
    echo "<input type='number' name='years' value=". $years ." hidden>";
    echo "<input type='number' name='period' value='6' hidden>";
    echo  "<button type='submit' class='btn btn-outline-secondary p-2 w-100'>11.12月</button>";
    echo "</form>";
    echo "</div>";
    }
    ?>
    </div>
    <form action="award.php" method="post">
        <input type="number" name="years" value="<?=$row[0]['years'];?>" hidden>
        <input type="number" name="period" value="<?=$row[0]['period'];?>" hidden>
<?php 
if(empty($row[0]['id']) == 0){
    echo "<input type='number' name='id' value=". $row[0]['id'] ." hidden>";
}
?>

    <div class="form-group row">
        <div class="col-2"> 
          <label>特別獎:</label>
        </div>
        <div class="col"> 
        <input type="number" class="form-control" id="invoice_Special_award" name="Special_award" value="<?=$row[0]['Special_award'];?>" required>
        </div>     
      </div>
    <div class="form-group row">
        <div class="col-2"> 
          <label>特獎:</label>
        </div>
        <div class="col"> 
        <input type="number" class="form-control" id="invoice_S_award" name="S_award" value="<?=$row[0]['S_award'];?>" required>
        </div>     
      </div>
    <div class="form-group row">
        <div class="col-2"> 
          <label>頭獎:</label>
        </div>
        <div class="col"> 
        <input type="number" class="form-control mb-1" id="invoice_h1_award" name="h1_award" value="<?=$row[0]['h1_award'];?>" required>
        <input type="number" class="form-control mb-1" id="invoice_h2_award" name="h2_award" value="<?=$row[0]['h2_award'];?>" required>
        <input type="number" class="form-control" id="invoice_h3_award" name="h3_award" value="<?=$row[0]['h3_award'];?>" required>
        </div>     
      </div>
    <div class="form-group row">
        <div class="col-2"> 
          <label>二獎:</label>
        </div>
        <div class="col text-center"> 
          末七碼與頭獎相同者各得獎金四萬元
        </div>     
      </div>
    <div class="form-group row">
        <div class="col-2"> 
          <label>三獎:</label>
        </div>
        <div class="col text-center"> 
         末六碼與頭獎相同者各得獎金一萬元
        </div>     
      </div>
    <div class="form-group row">
        <div class="col-2"> 
          <label>四獎:</label>
        </div>
        <div class="col text-center"> 
          末五碼與頭獎相同者各得獎金四千元
        </div>     
      </div>
    <div class="form-group row">
        <div class="col-2"> 
          <label>五獎:</label>
        </div>
        <div class="col text-center"> 
          末四碼與頭獎相同者各得獎金一千元
        </div>     
      </div>
    <div class="form-group row">
        <div class="col-2"> 
          <label>六獎</label>
        </div>
        <div class="col text-center"> 
          末三碼與頭獎相同者各得獎金二百元
        </div>     
      </div>
    <div class="form-group row">
        <div class="col-3"> 
          <label>增開六獎:</label>
        </div>

        <div class="col">
        <input type="number" class="form-control" id="invoice_six_award" name="six_award" value="<?=$row[0]['six_award'];?>" required>
        </div>
        <div class="col">
        <input type="number" class="form-control" id="invoice_six2_award" value="<?=$row[0]['six2_award'];?>" name="six2_award" >
        </div>
        <div class="col">
        <input type="number" class="form-control" id="invoice_six3_award" value="<?=$row[0]['six3_award'];?>" name="six3_award" >
        </div>
  
      </div>

      <div class="btn-group d-flex">
        <a href='index.php'  class='btn btn-info'>回首頁</a>
        <button type="submit" class="btn btn-primary">送出</button>
      </div>
    </div>
    </div>
</body>
</html>