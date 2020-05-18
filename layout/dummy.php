<?php
include "pdo.php";

$num=1000;
$font=['A','B','C','D','E','F','G','H','I','J','K','L','N','G'];
for($i=0;$i<$num;$i++){
    $code=$font[rand(0,13)] . $font[rand(0,13)];
    $date=[
        'period'=>rand(1,6),
        'years'=>2020,
        'code'=>$code,
        'number'=>rand(12345678,87654321),
        'period'=>rand(100,10000)

    ];

    save("invoices",$date);
    echo $date['code'] . $date['number'] . "<br>";
}

function save($table,$arg){
    global $pdo;
    if(isset($arg['id'])){
        foreach ($arg as $key => $value) {
            if($key!='id'){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }
        }
        $sql="update $table set " . join(',',$tmp) . " where `id`='".$arg['id']."'";
    }else{
        $sql="insert into " . $table . "(`" . join("`,`",array_keys($arg)) . "`)" . " values " . "('" . join("','",$arg) . "')";
    }
    return $pdo->exec($sql);
}
?>