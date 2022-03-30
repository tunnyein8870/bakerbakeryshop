<?php
$date = '2022-01-01';
// echo $date;
for($a = 0; $a<=11; $a++){
    
    $month = date('Y-m-d',strtotime("$date +$a months"));
    $monthname = date('F', strtotime($month));
    $i = $a +1;
    $dofm = cal_days_in_month(CAL_GREGORIAN, $i, 2022);
    // echo "$month $monthname $dofm";
    // echo "<br>";
    for($b = 0; $b<$dofm; $b++){
        $day = date('Y-m-d',strtotime("$month +$b days"));
        echo $day;
        echo "<br>";
    }
}
// $staticstarte = date('Y-m-d',strtotime("$staticstart -21 days"));
// echo $staticstarte;
// for($b = 0; $b<=3; $b++){
//     $week = date('Y-m-d',strtotime("$staticstarte +$b weeks"));
//     // echo $week;
//     $weeke = date('Y-m-d',strtotime("$week +7 days"));
//     // echo "<br>";
//     // echo $weeke;
//     // echo "<br>";
//     for($a=0; $a<=6; $a++){
//         $day = date('Y-m-d',strtotime("$week +$a days"));
//         // echo $day;
//         // echo "<br>";
//     }
// }



?>
