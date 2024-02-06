<!doctype html>
<html lang="en">

<head>
  <meta name="author" content="">
  <meta name="keyword" content="">
  <meta name="description" content="">

  <?php include 'header-link.php' ?>

  <style>
    .w3l-text-6 .text-6-mian h2 {
      line-height: 20px;
      margin-bottom: 15px;
      text-transform: uppercase;
      font-weight: 600;
      padding: 8px 8px 8px 15px;
      border-left: 2px solid var(--secondary-color);
    }
  </style>

</head>

<body>

  <?php include 'nav-bar.php' ?>
  <!--header-->

  <!-- inner banner -->
  <div class="inner-banner border-bottom">
    <section class="w3l-breadcrumb">
      <div class="container">
        <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">About Us</h4>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.php">Home</a></li>
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>About Us</li>
        </ul>
      </div>
    </section>
  </div>
  <!-- inner banner -->

  <!-- about section -->
  <section class="w3l-text-6 py-5 overflow-hidden" id="about">
    <div class="text-6-mian py-md-4 py-3">
      <div class="container">

        <?php
        $query_about = "SELECT * FROM about_section ORDER BY id DESC LIMIT 1";
        $result_about = mysqli_query($con, $query_about);
        $row = mysqli_fetch_assoc($result_about);
        ?>

        <div class="row top-cont-grid align-items-center">
          <div class="col-lg-6 left-img pr-lg-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
            <img src="moral-edu/user/user_images/<?= $row['userPic'] ?>" alt="" class="img-responsive img-fluid" />
          </div>
          <div class="col-lg-6 text-6-info mb-lg-0 mb-4 pl-lg-5" data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
            <h2><?= $row['about_title'] ?></h2>
            <p><?= $row['about_subtitle'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about section -->

  <?php include 'mission.php' ?>

  <?php include 'visions.php' ?>

  <!-- stats -->
  <?php include 'home_stats.php' ?>
  <!-- stats -->

  <!-- testimonials -->
  <?php include 'home_testimonial.php' ?>
  <!-- testimonials-->

  <!-- footer -->
  <?php include 'footer.php' ?>