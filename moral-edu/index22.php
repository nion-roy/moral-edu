<?php
session_start();
if (isset($_SESSION['id'])) {
  $ses = mysqli_query($conn, "select * from user where userid='" . $_SESSION['id'] . "'");
  $sesrow = mysqli_fetch_array($ses);
  if ($ses['access'] == 1) {
    header('location:admin/index.php');
  } elseif ($ses['access'] == 2) {
    header('location:staff/index.php');
  } else {
    header('location:logout_please.php');
  }
}
?>

<?php include('login_header.php'); ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>ITM-SOFTS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8" />
  <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="login/css/style.css" type="text/css" media="all" />
  <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

  <style type="text/css">
    body {
      /* background: url(images/bg.jpg);  */
      background-repeat: no-repeat;
      background-size: 100%;
      margin-left: auto;
      margin-right: auto;
    }
  </style>

</head>

<body>

  <!-- form section start -->
  <section class="w3l-mockup-form">
    <h1> </h1>
    <div class="container">
      <!-- /form -->
      <div class="workinghny-form-grid">
        <div class="main-mockup">
          <div class="alert-close">
            <span class="fa fa-close"></span>
          </div>
          <div class="w3l_form align-self">
            <div class="left_grid_info">
              <img src="login/images/itm-soft-user.png">
            </div>
          </div>
          <div class="content-wthree text-center">
            <span style="color:blue; font-size:18px;"><img src="includes/dim.png" width="110px" /> </span>
            <br>
            <h2>ITM NEW CMS</h2>
            <form action="login.php" method="post">
              <input type="text" class="text" name="username" placeholder="Enter Your User Name" required="">
              <input type="password" class="email" name="password" placeholder="Enter Your Password" required="">
              <button class="btn" type="submit">Login</button>
            </form>
            <div class="social-icons w3layouts" style="display:none;">
              <ul>
                <li>
                  <a target="_blank" href="https://www.facebook.com/itmsofts" class="facebook"><span class="fab fa-facebook"></span> </a>
                </li>

                <li>
                  <a href="#url" class="pinterest"><span class="fas fa-envelope"></span> </a>
                  <a href="#url" class="pinterest"><span class="fas fa-laptop"></span> </a>
                  <a href="#url" class="pinterest"><span class="fas fa-phone-square"></span> </a>
                </li>

                <li>
                  <a href="#url" class="pinterest"><span class="fab fa-pinterest"></span> </a>
                </li>


              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- //form -->
    </div>
    <!-- copyright-->
    <div class="copyright text-center">
      <p class="copy-footer-29">From ©2022 | Powered By <a href="https://itmsofts.com">ITM-SOFTS</a></p>
    </div>
    <!-- //copyright-->
  </section>
  <!-- //form section start -->

  <script src="login/js/jquery.min.js"></script>
  <script>
    $(document).ready(function(c) {
      $('.alert-close').on('click', function(c) {
        $('.main-mockup').fadeOut('slow', function(c) {
          $('.main-mockup').remove();
        });
      });
    });
  </script>

</body>

</html>