<!doctype html>
<html lang="en">

<head>
  <?php include 'header-link.php' ?>

  <?php
  $query_seo = "SELECT * FROM seo_section WHERE type = 'contact'";
  $result_seo = mysqli_query($con, $query_seo);
  $row = mysqli_fetch_assoc($result_seo);
  ?>

  <meta name="author" content="<?= $row['author'] ?>">
  <meta name="keyword" content="<?= $row['keyword'] ?>">
  <meta name="description" content="<?= $row['description'] ?>">
  <title><?= $row['title'] ?></title>
  <link rel="canonical" href="<?= $row['canonical_link'] ?>" />


</head>


<body>

  <?php include 'nav-bar.php' ?>
  <!--//header-->
  <!-- inner banner -->
  <div class="inner-banner border-bottom">
    <section class="w3l-breadcrumb">
      <div class="container">
        <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">Contact Us</h4>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.php">Home</a></li>
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Contact Us</li>
        </ul>
      </div>
    </section>
  </div>
  <!-- //inner banner -->


  </div>
  <!-- contact -->
  <section class="contact bg-white py-5" id="contact">
    <div class="container py-md-4 py-3">
      <div class="title-main text-center mx-auto mb-md-4">
        <h3 class="title-big">Get In Touch</h3>
        <p class="sub-title mt-2">Cum doctus civibus efficiantur in imperdiet deterruisset. Cras efficitur, metus gravida suscipit cursus, dui diam pre lorem id lectus.</p>
      </div>


      <?php

      if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $contactReg = mysqli_query($con, "INSERT INTO contact_info (name, email, phone, subject, message) VALUES ('$name','$email', '$phone', '$subject', '$message')");
        if (isset($contactReg)) {
          $contact = 'Message Sent Successfully';
        }
      }

      if (isset($contact)) { ?>
        <div class="alert alert-success" role="alert">
          <h3><?= $contact ?> </h3>
        </div>
        <script>
          setTimeout(function() {
            window.location.href = '<?php echo $_SERVER['REQUEST_URI']; ?>';
          }, 3000);
        </script>
      <?php } ?>

      <div class="row mt-5 mx-0">

        <!-- contact form -->
        <div class="col-12 content-form-right mb-5">
          <div class="form-w3ls p-md-5 p-4">
            <h4 class="mb-4 sec-title-w3 text-center">Send us a message</h4>
            <form action="<?= $_SERVER['PHP_SELF'] ?>" class="pt-lg-4" method="post">
              <div class="row">
                <div class="form-group col-lg-6">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="">
                </div>
                <div class="form-group col-lg-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-lg-6">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required="">
                </div>
                <div class="form-group col-lg-6">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <textarea name="message" class="form-control" id="message" placeholder="Message" required=""></textarea>
                  </div>
                </div>
              </div>
              <div class="input-group1 text-right">
                <button class="btn button-style" name="submit" type="submit">Submit
                  <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                </button>
              </div>
            </form>
          </div>
        </div>


        <!-- map -->
        <div class="col-12 rounded overflow-hidden map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423286.27404345275!2d-118.69191921441556!3d34.02016130939095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1522474296007" allowfullscreen></iframe>
        </div>

      </div>
    </div>
  </section>

  </div>
  <!-- support -->
  <div class="support py-5" id="support">
    <div class="container py-5">
      <h3 class="title-w3ls text-center mb-5">Help & Support</h3>
      <div class="row support-bottom text-center">
        <div class="col-lg-4 col-sm-6 support-grid">
          <span class="fa fa-laptop"></span>
          <h5 class="text-uppercase mt-3 mb-2">Online Support</h5>
          <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
          <a href="#call" class="btn button-style button-2 mt-4">
            Call Now
          </a>
        </div>
        <div class="col-lg-4 col-sm-6 support-grid mt-sm-0 mt-4">
          <span class="fa fa-comments"></span>
          <h5 class="text-uppercase mt-3 mb-2">Live Chat 24/7</h5>
          <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
          <a href="#chat" class="btn button-style button-2 mt-4">
            Let's Chat
          </a>
        </div>
        <div class="col-lg-4 col-sm-6 support-grid mt-lg-0 mt-4">
          <span class="fa fa-question"></span>
          <h5 class="text-uppercase mt-3 mb-2">Any Questions</h5>
          <p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
          <a href="#ask" class="btn button-style button-2 mt-4">
            Ask Now
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- support -->
  <div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->

  </div>
  <!-- footer -->

  <?php include 'footer.php' ?>