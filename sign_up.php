<?php
include('connection.php');
if (isset($_POST['signup'])) {
  $signup_sql = "SELECT * FROM user";
  $signup_result = mysqli_query($dbconnection, $signup_sql);
  $flag = false;
  while ($row = mysqli_fetch_assoc($signup_result)) {
    if ($row['uname'] == $_POST['uname']) {
      echo "<script>alert('Username Already Exists... Invalid Username!')</script>";
      echo "
                          <script>
                            window.location = 'sign_up.php'
                          </script>";
      exit();
    } else if ($row['uemail'] == $_POST['uemail']) {
      echo "<script>alert('Email Already Exists... Try Another Email!')</script>";
      echo "<script>window.location = 'sign_up.php'</script>";
      exit();
    } else {
      $flag;
    }
  } // while end

  if (!$flag) {
    if ($_POST['upassword'] == $_POST['upassword-repeat']) {
      include('connection.php');
      $uname = $_POST['uname'];
      $uemail = $_POST['uemail'];
      $upassword = $_POST['upassword'];
      $uphone = $_POST['uphone'];
      $ucity = $_POST['ucity'];
      $utownship = $_POST['utownship'];
      $uaddress = $_POST['uaddress'];

      $sql = "INSERT INTO user (uname,uemail,upassword,uphone,ucity,utownship,uaddress) VALUES ('$uname','$uemail','$upassword','$uphone','$ucity','$utownship','$uaddress')";

      if (mysqli_query($dbconnection, $sql)) {
        echo "<script>
                          alert('Successfully Signed Up. Thanks for your registeration!')
                          </script>";
        echo "<script>window.location = 'index.php'</script>";
      } // check sql            
    } // check password repreat 
    else {
      // check confirm password
      echo "<script>alert('Password does not match. Please Try Again!')</script>";
    }
  } // flag end   
}
?>
<?php include('header.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="css files/sign_up.css">
  <title>Baker Bakery Sign-Up Page</title>
</head>

<body>
  <!-- start of sign-in form -->
  <div class="register-photo">
    <div class="form-container">
      <div class="image-holder">
      </div>
      <form class="signupform" action="" method="post">
        <h2 class="text-center"><strong>Sign-Up to Baked Bakery</strong></h2>

        <div class="form-group">
          <input class="form-control" type="text" id="uname" name="uname" placeholder="Username" autofocus>
        </div>
        <div class="form-group">
          <input class="form-control" type="text" id="uemail" name="uemail" placeholder="Email" required>
        </div>
        <div class="form-group">
          <input class="form-control" type="password" name="upassword" placeholder="Password" required>
        </div>
        <div class="form-group">
          <input class="form-control" type="password" name="upassword-repeat" placeholder="Password (repeat)" required>
        </div>
        <div class="form-group">
          <input class="form-control" type="text" name="uphone" placeholder="Phone No" required>
        </div>

        <script type="text/javascript">
          var citiesByState = {
            Yangon: ["Tamwe", "Thingangyun", "Kyauktada", "Ahlone", "Botahtung", "North Dagon", "Sanchaung", "Lanmadaw"],
            Mandalay: ["Aungmyethazan", "Chanayethazan ", "Chanmyathazi", "Maha Aungmye", "Pyigyidagun", "Amarapura ", "Patheingyi"],
            Naypyidaw: ["Ottarathiri", "Pobbathiri", "Dekkhinathiri"],
            Mawlamyine: [ "Kyaikmaraw", "Chaungzon", "Thanbyuzayat", "Mudon", "Ye"],
            Bago: ["Daik-U", "Kawa", "Nyaunglebin", "Shwegyin", "Kyautaga"],
            Taunggyi: ["Lawksawk", "Nyaungshwe", "Pekon"],
            Pathein: ["Kangyidaunt", "Kyaunggon", "Kyonpyaw", "Ngapudaw", "Thabaung"],
            Myeik: ["Karathuri", "Khamaukgyi", "Pyigyimandaing"],
            // Mogok: ["Mogok"],
            // Magway: ["kochi", "Kanpur"],
            // Sagaing: ["kochi", "Kanpur"],
            // Aunglan: ["kochi", "Kanpur"],
            // Lashio: ["kochi", "Kanpur"],
            // PyinOoLwin: ["kochi", "Kanpur"],
            // Kalay: ["kochi", "Kanpur"],
            // Myawaddy: ["kochi", "Kanpur"],
            // Taikkyi: ["kochi", "Kanpur"],
            // HpaAn: ["kochi", "Kanpur"],
            // Kalaw: ["kochi", "Kanpur"]
          }

          function makeSubmenu(value) {
            if (value.length == 0) document.getElementById("townshipSelect").innerHTML = "<option></option>";
            else {
              var citiesOptions = "";
              for (cityId in citiesByState[value]) {
                citiesOptions += "<option>" + citiesByState[value][cityId] + "</option>";
              }
              document.getElementById("townshipSelect").innerHTML = citiesOptions;
            }
          }

          function displaySelected() {
            var country = document.getElementById("citySelect").value;
            var city = document.getElementById("townshipSelect").value;
            alert(country + "\n" + city);
          }

          function resetSelection() {
            document.getElementById("citySelect").selectedIndex = 0;
            document.getElementById("townshipSelect").selectedIndex = 0;
          }
        </script>
        <div class="form-group">
          <select name="ucity" id="citySelect" size="1" onchange="makeSubmenu(this.value)">
            <option value="" disabled selected>Choose City</option>
            <option>Yangon</option>
            <option>Mandalay</option>
            <option>Naypyidaw</option>
            <option>Mawlamyine</option>
            <option>Bago</option>
            <option>Taunggyi</option>
            <option>Pathein</option>
            <option>Myeik</option>
            <!-- <option>Mogok</option>
            <option>Magway</option>
            <option>Sagaing</option>
            <option>Aunglan</option>
            <option>Lashio</option>
            <option>PyinOoLwin</option>
            <option>Kalay</option>
            <option>Myawaddy</option>
            <option>Taikkyi</option>
            <option>HpaAn</option>
            <option>Kalaw</option> -->

          </select>
          <select name="utownship" id="townshipSelect" size="1">
            <option value="" disabled selected>Choose Township</option>
            <option></option>
          </select>
          <!-- <input class="form-control" type="text" name="ucity" placeholder="City"> -->
        </div>
        <div class="form-group">
          <input class="form-control" id="addr" type="text" name="uaddress" placeholder="Address">
        </div>
        <div class="form-group">
          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" required>
              <a href="rule&pol.php">I agree to, Terms of Service, Privacy Policy and Content Policies</a>
            </label>

          </div>
        </div>
        <div class="form-group">
          <button class="btn btn-success btn-block" type="submit" name="signup">Sign-Up</button>
        </div>
        <a class="already" href="sign_in.php">After Sign-UP, Login Now!!</a>
      </form>
    </div>
  </div>

  <!-- city and its state select -->

  <!-- start of contact us -->
  <div id="contact">
    <h2>Contact Our Store
      <hr>
    </h2>
    <div class="row">
      <div class="col-sm-4">
        <h3><strong>Have a question?</strong></h3><br>
        <p>We're always here to lend a helping hand.</p><br>
        <p>We also have physical store for you to visit.</p><br>
        <p>Consumer Care Team days are Monday-Friday.</p><br>
        <p>Consumer Care Team times are 7AM - 7PM</p><br>
        <a href="review.php#faq">FAQ</a>
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
          <iframe style="border:black; border-width:2px; border-style:solid;" width="100%" height="240px" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Myanmar%20Yangon%20Barstreet+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="600" frameborder="0"></iframe>
        </div>
      </div>
    </div>

  </div> <!-- end of contact us -->

  <hr class="fhr">
  <p style="text-align: center; font-family:Times New Roman; font-size: 16px;">Design and Maintaince by Group-6</p>

</body>

</html>