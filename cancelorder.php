<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Baker Bakery Payment Checkout Page</title>
  <link rel="stylesheet" type="text/css" href="css files/payment.css">
</head>
<body>

<div class="col-md-4">
                        <div class="search"> 
                            
                        <form method="post" action="">
                            <input type="text" class="form-control" placeholder="Enter Payment ID to Search..." name="prodName">
                            <button class="btn btn-primary" name="Search">Search</button> 
                        </form>
                        </div>
                    </div>
<!-- start of payment checkout  -->
<?php
$UID = $_SESSION['uid'];
echo "$UID";

if(isset($_POST["Search"])){
    $an = $_POST["prodName"];
    include 'connection.php';
    $sql = "SELECT * From payment where payid='$an'";

    foreach ($dbconnection->query($sql) as $row){
        $remk = $row['remark'];
        $remka = '';
        $uID = $row['uid'];
        if($remk == $remka){
            if($UID == $uID){
                echo "<form class='updateform' method='post'>";
                echo "<div class='form-group'>";
                echo "<label for='exampleInputEmail1'>Payment ID</label>";
                echo "<input class='form-control' type='text' name='uid' value='".$row['payid']."'>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<label for='exampleInputEmail1'>Order ID</label>";
                echo "<input class='form-control' type='text' name='uname' value='".$row['oid']."'>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<label for='exampleInputEmail1'>Total Amount</label>";
                echo "<input class='form-control' type='text' name='uemail' value='".$row['amount']."' required>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<label for='exampleInputEmail1'>Customer ID</label>";
                echo "<input class='form-control' type='text' name='upassword' value='".$row['uid']."' required>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<label for='exampleInputEmail1'>Payment Method</label>";
                echo "<input class='form-control' type='text' name='uphone' value='".$row['payment']."'>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<label for='exampleInputEmail1'>Transaction ID</label>";
                echo "<input class='form-control' type='text' name='ucity' value='".$row['tranid']."'>";
                echo "</div>";
                echo "<div class='form-group'>";
                echo "<label for='exampleInputEmail1'>Remark</label>";
                echo "<input class='form-control' type='text' name='uaddress' value='".$row['remark']."'>";
                echo "</div>";
                echo "<div class='text-center'>";
                echo "<button class='btn btn-success btn-block' type='submit' name='cancel'>Cancel Order</button>";
                echo "</div>";
                echo "</form>";
            }
            else{
                echo "You Can Only Cancel Your Orders";
            }
        }
        else{
            echo "Can't Cancel";
        }
    
    }
}

if(isset($_POST["cancel"])){
    include('connection.php');
    $admid = $_POST['uid'];
    $admname = $_POST['uname'];
    $admemail = $_POST['uemail'];
    $admpassword = $_POST['upassword'];
    $admphone = $_POST['uphone'];
    $admcity = $_POST['ucity'];
    $admaddress = "Cancel";
    
    $sql="UPDATE payment SET oid=\"$admname\", amount=\"$admemail\", uid=\"$admpassword\", payment=\"$admphone\", tranid=\"$admcity\", remark=\"$admaddress\" Where payid=\"$admid\"";   
    if($dbconnection->query($sql) === TRUE) {
        echo "<script>alert('Payment Cancel.!')</script>";
      echo "<script>window.location = 'cusorder.php'</script>";
      } 
      else {
           echo "Error Confim Payment: " . $dbconnection->error;
      }
}
?>
<!-- start of contact us -->
<div id="contact">
  <h2>Contact Our Store <hr></h2>
<div class="row">
    <div class="col-sm-4">
        <h3><strong>Have a question?</strong></h3><br>
        <p>We're always here to lend a helping hand.</p><br>
        <p>We also have physical store for you to visit.</p><br>
        <p>Consumer Care Team days are Monday-Friday.</p><br>
        <p>Consumer Care Team times are 7AM - 7PM</p><br>
        <a href="review.html#faq">FAQ</a>
    </div> 
    <div class="col-sm-4">
      <h3><strong>Shop Location</strong></h3><br>
      <p>Address at:</p>
      <p><b>Myanmar, Yangon, BarStreet, Ground Floor, No111</b></p>
      <p>Email us at:</p>
      <p><b>bakerbakery@.gmail.com</b></p>
      <p>Call us at:</p>
      <p><b>+95 9 44131 5589</b></p><br>
    </div> 
    <div class="col-sm-4">
      <h3><strong>Google MAP Location</strong></h3><br>
      <div class="gmap">
      <iframe style="border:black; border-width:2px; border-style:solid;" width="100%" height="240px" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Myanmar%20Yangon%20Barstreet+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="600" frameborder="0"></iframe></div>
    </div>
</div>
    
</div> <!-- end of contact us -->

<hr class="fhr">
<p style="text-align: center; font-family:Times New Roman; font-size: 16px;">Design and Maintaince by Group-6</p>


</body>
</html>

