<?php

for($i = 1; $i < 12; $i++) {
    $dofm = cal_days_in_month(CAL_GREGORIAN, $i, 2022);
	echo "$dofm <br>";
	
}

?>