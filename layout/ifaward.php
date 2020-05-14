<?php
$years=$_POST['years'];
$period=$_POST['period'];
$sql1="select * from `invoices` where `period` = '$period' AND `years` = '$years' ";
$sql2="select * from `award` where `period` = '$period' AND `years` = '$years' ";
$row1=$pdo->query($sql1)->fetchAll(PDO::FETCH_ASSOC);
$row2=$pdo->query($sql2)->fetch(PDO::FETCH_ASSOC);
$Special_award=strrev($row2['Special_award']);
$S_award=strrev($row2['S_award']);
$h1_award=strrev($row2['h1_award']);
$h2_award=strrev($row2['h2_award']);
$h3_award=strrev($row2['h3_award']);
$six_award=strrev($row2['six_award']);
$six2_award=strrev($row2['six2_award']);
$six3_award=strrev($row2['six3_award']);



// echo "<table class='text-center table'>";
$money=0;
foreach($row1 as $r){
echo "<tr>";
// echo $r['number']."<br>"; 
$number=strrev($r['number']);

if($number == $Special_award){
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
    echo "10,000,000元";
    echo "</td>";
    $money=($money+10000000);
}else if($number == $S_award){
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
    echo "2,000,000元";
    echo "</td>";
    $money=($money+2000000);
    // 頭獎1
}else if(substr($number, 0,7) == substr($h1_award, 0,7)){
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
    echo "40,000元";
    echo "</td>";
    $money=($money+40000);
    
}else if(substr($number, 0,6) == substr($h1_award, 0,6)){
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
    echo "10,000元";
    echo "</td>";
    $money=($money+10000);
    
}else if(substr($number, 0,5) == substr($h1_award, 0,5)){
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
    echo "4,000元";
    echo "</td>";
    $money=($money+4000);
    
}else if(substr($number, 0,4) == substr($h1_award, 0,4)){
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
    echo "1,000元";
    echo "</td>";
    $money=($money+1000);
    
}else if(substr($number, 0,3) == substr($h1_award, 0,3)){
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
    echo "200元";
    echo "</td>";
    $money=($money+200);
    

    // 頭獎2
}else if(substr($number, 0,7) == substr($h2_award, 0,7)){
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
    echo "40,000元";
    echo "</td>";
    $money=($money+40000);
    
}else if(substr($number, 0,6) == substr($h2_award, 0,6)){
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
    echo "10,000元";
    echo "</td>";
    $money=($money+10000);
    
}else if(substr($number, 0,5) == substr($h2_award, 0,5)){
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
    echo "4,000元";
    echo "</td>";
    $money=($money+4000);
    
}else if(substr($number, 0,4) == substr($h2_award, 0,4)){
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
    echo "1,000元";
    echo "</td>";
    $money=($money+1000);
    
}else if(substr($number, 0,3) == substr($h2_award, 0,3)){
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
    echo "200元";
    echo "</td>";
    $money=($money+200);
    

    // 頭獎3
}else if(substr($number, 0,7) == substr($h3_award, 0,7)){
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
    echo "40,000元";
    echo "</td>";
    $money=($money+40000);
    
}else if(substr($number, 0,6) == substr($h3_award, 0,6)){
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
    echo "10,000元";
    echo "</td>";
    $money=($money+10000);
    
}else if(substr($number, 0,5) == substr($h3_award, 0,5)){
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
    echo "4,000元";
    echo "</td>";
    $money=($money+4000);

}else if(substr($number, 0,4) == substr($h3_award, 0,4)){
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
    echo "1,000元";
    echo "</td>";
    $money=($money+1000);

}else if(substr($number, 0,3) == substr($h3_award, 0,3)){
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
    echo "200元";
    echo "</td>";
    $money=($money+200);

    // 六獎
}else if(substr($number, 0,3) == $six_award){
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
    echo "200元";  
    echo "</td>";
    $money=($money+200);
    
}else if(substr($number, 0,3) == $six2_award){
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
    echo "200元";  
    echo "</td>";
    $money=($money+200);
    
}else if(substr($number, 0,3) == $six3_award){
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
    echo "200元";  
    echo "</td>";
    $money=($money+200);
    
}
echo "</tr>";
};
echo "<tr>";
echo "<td colspan='4'>";
echo "</td>";
echo "<td>";
echo "<div>";
echo "<button type='button'  class='btn btn-outline-success '>合計:" . $money . "</button>";
echo "</td>";
echo "</div>";
echo "</tr>";
echo "</table>";
echo "<div class= 'btn-group-lg justify-content-center d-flex mt-3' >";
echo "<a href='index.php'  class='btn btn-secondary'>回首頁</a>";
echo "</div>";
?>