<?php
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
?>
