<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Baker Bakery Payment Checkout Page</title>
  <link rel="stylesheet" type="text/css" href="css files/payment.css">
</head>
<body>

<!-- start of payment checkout  -->
<main class="page payment-page">
    <section class="payment-form dark">
      <div class="container">
        <form>
          <div class="products">
            
          <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Payment ID</th>
                                <th scope="col">Order ID</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Payment Method</th>
                                <th scope="col">Transaction ID</th>
                                <th scope="col">Remark</th>
                            </tr>
                        </thead>
                        <tbody class="customtable">
                        <?php
                            $UID = $_SESSION['uid'];
                            $counter = 1;
                            include "connection.php";
                            $viewquery = "SELECT * from payment where uid='$UID'";
                            foreach ($dbconnection->query($viewquery) as $row){
                                $pa = $row['payid'];
                                $oi = $row['oid'];
                                $am = $row['amount'];
                                $py = $row['payment'];
                                $tr = $row['tranid'];
                                $re = $row['remark'];

                                echo"<tr>";
                                echo"<td> $pa </td>";
                                echo"<td> $oi </td>";
                                echo"<td> $am </td>";
                                echo"<td> $py </td>";
                                echo"<td> $tr </td>";
                                echo"<td> $re </td>";
                                echo" </tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                    
                </div>


          </div>
        </form>
      </div>
    </section>
  </main>

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