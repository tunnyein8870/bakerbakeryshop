<?php
include('connection.php');
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
$retrieveQuery = "Select * from product";
$stmt = $dbconnection->prepare($retrieveQuery);
$stmt->execute();
$resultSet = $stmt->get_result();
$data = $resultSet->fetch_all(MYSQLI_ASSOC);
if (isset($_POST['ac'])) {
    if (!isset($_SESSION['uname'])) {
        echo "
              <script>alert('Please Login First To Order items...')</script>
            ";
    } else if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $flag = FALSE;
        $id = $_POST['id'];

        foreach ($_SESSION['cart'] as $k => $v) {
            if ($k == $id) {
                $flag = TRUE;
                $v += 1;
                $_SESSION['cart'][$k] = $v;
                break;
            }
        }
        if ($flag == FALSE) {
            $_SESSION['cart'][$id] = 1;
        }
    }
}
