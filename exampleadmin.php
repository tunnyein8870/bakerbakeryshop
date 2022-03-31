<?php

include('connection.php');
$viewquery = "SELECT * FROM orders ORDER BY oid DESC LIMIT 1";
foreach ($dbconnection->query($viewquery) as $row){
    $id = $row['oid'];
    echo $id;
    $OID = $id +1;
    echo $OID;
}
?>