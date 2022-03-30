<?php
$count = 0;
if (!empty($_SESSION['cart'])) {
    $quantity = array_column($_SESSION['cart'], 'qty');
    foreach ($quantity as $key => $values) {
        $count += (int)$values;
    }
    echo "<sub>$count</sub>";
} else {
    echo "<sub>0</sub>";
}
?>
