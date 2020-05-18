<?php
$years=$_POST['years'];
$period=$_POST['period'];
$date=[
    'years'=>$years,
    'period'=>$period
];
$row1=all("invoices",$date);
$row2=all("award",$date);
$Special_award=strrev($row2[0]['Special_award']);
$S_award=strrev($row2[0]['S_award']);
$h1_award=strrev($row2[0]['h1_award']);
$h2_award=strrev($row2[0]['h2_award']);
$h3_award=strrev($row2[0]['h3_award']);
$six_award=strrev($row2[0]['six_award']);
$six2_award=strrev($row2[0]['six2_award']);
$six3_award=strrev($row2[0]['six3_award']);
$money=0;
foreach($row1 as $r){
echo "<tr>";
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
    echo "<td>特別獎</td>";
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
    echo "<td>特獎</td>";
    echo "<td>";
    echo "2,000,000元";
    echo "</td>";
    $money=($money+2000000);
}else if($number == $h1_award || $number == $h2_award || $number == $h3_award){
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
    echo "<td>頭獎</td>";
    echo "<td>";
    echo "200,000元";
    echo "</td>";
    $money=($money+200000);
}else if(substr($number, 0,7) == substr($h1_award, 0,7) || substr($number, 0,7) == substr($h2_award, 0,7) || substr($number, 0,7) == substr($h3_award, 0,7)){
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
    echo "<td>二獎</td>";
    echo "<td>";
    echo "40,000元";
    echo "</td>";
    $money=($money+40000);
}else if(substr($number, 0,6) == substr($h1_award, 0,6) || substr($number, 0,6) == substr($h2_award, 0,6) || substr($number, 0,6) == substr($h3_award, 0,6)){
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
    echo "<td>三獎</td>";
    echo "<td>";
    echo "10,000元";
    echo "</td>";
    $money=($money+10000);
}else if(substr($number, 0,5) == substr($h1_award, 0,5) || substr($number, 0,5) == substr($h2_award, 0,5) ||substr($number, 0,5) == substr($h3_award, 0,5)){
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
    echo "<td>四獎</td>";
    echo "<td>";
    echo "4,000元";
    echo "</td>";
    $money=($money+4000);
}else if(substr($number, 0,4) == substr($h1_award, 0,4) || substr($number, 0,4) == substr($h2_award, 0,4) || substr($number, 0,4) == substr($h3_award, 0,4)){
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
    echo "<td>五獎</td>";
    echo "<td>";
    echo "1,000元";
    echo "</td>";
    $money=($money+1000);
}else if(substr($number, 0,3) == substr($h1_award, 0,3) || substr($number, 0,3) == substr($h2_award, 0,3) || substr($number, 0,3) == substr($h3_award, 0,3) || substr($number, 0,3) == $six_award || substr($number, 0,3) == $six2_award || substr($number, 0,3) == $six3_award){
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
    echo "<td>六獎</td>";
    echo "<td>";
    echo "200元";
    echo "</td>";
    $money=($money+200);
}

echo "</tr>";
};
echo "</table>";

echo "<div class= 'btn-group-lg justify-content-center d-flex mt-3' >";
echo "<a href='index.php'  class='btn btn-secondary'>回首頁-獎金合計:" . $money . "元</a>";
echo "</div>";
?>