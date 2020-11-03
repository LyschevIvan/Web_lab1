<?php
session_start();
$start = microtime(true);
date_default_timezone_set("Europe/Moscow");
$now = date("H:i:s");
$x = 0;
$y = 0;
$r = 0;
if(is_numeric($_POST["x-inp"])){
    $x = $_POST["x-inp"];
}
if(is_numeric($_POST["y-inp"])){
    $y = $_POST["y-inp"];
}
if(is_numeric($_POST["r-inp"])){
    $r = $_POST["r-inp"];
}

$in_zone = false;
if (($x <= 0)and($y>=0)){
    if(($x >= -1*$r)and($y <= $r)){
        $in_zone = true;
    }
}
elseif (($x<=0)and($y<=0)){
    if(pow($x, 2) + pow($y,2) <= pow($r/2,2)){
        $in_zone = true;
    }
}
elseif (($x>=0)and($y<=0)){
    if($y >= $x -$r){
        $in_zone = true;
    }
}
$stop = microtime(true);
$timeWork=$stop-$start;
$timeWork=1000*round($timeWork,7);
if($in_zone) $in_zone = "Входит";
else $in_zone = "Не входит";

$rez = array($r,$x,$y,$in_zone,$now,$timeWork);

if(!isset($_SESSION['history'])){
    $_SESSION['history'] = array();

}
array_push($_SESSION['history'], $rez);
echo "<tr>";
    foreach ($rez as $value){

        echo "<td style='text-align: center'>";
        echo  $value;
        echo "</td>";

    }
echo "</tr>";
session_write_close();

