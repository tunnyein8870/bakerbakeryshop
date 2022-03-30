<?php
include('connection.php');

if (isset($_POST['ac'])) {
    if (!isset($_SESSION['uname'])) {
        echo "<script>alert('Please Login First To Order items...')</script>";
    } else {
        if (isset($_SESSION['cart'])) {
            $item_array_id = array_column($_SESSION['cart'], "pid");
            if (in_array($_POST['id'], $item_array_id)) {
                echo "<script>alert('Product is already added in the cart..!')</script>";
            } else {
                $cart_count = count($_SESSION['cart']);
                $item_array = array('pid' => $_POST['id'], 'qty' => $_POST['qty']);
                $_SESSION['cart'][$cart_count] = $item_array;
            }
        } else {
            $item_array = array('pid' => $_POST['id'], 'qty' => $_POST['qty']);
            $_SESSION['cart'][0] = $item_array;
        }
    }
}
?>