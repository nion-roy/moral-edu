<?php require_once 'moral-edu/includes/conn.php'; ?>
<?php require_once 'moral-edu/includes/dbconfig.php'; ?>

<!doctype html>
<html lang="en">


<head>
  <meta name="author" content="">
  <meta name="keyword" content="">
  <meta name="description" content="">

  <?php include 'header-link.php' ?>

</head>

<body>

  <?php include 'nav-bar.php' ?>
  <!-- header -->

  <!-- inner banner -->
  <div class="inner-banner border-bottom">
    <section class="w3l-breadcrumb">
      <div class="container">
        <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">Online Courses</h4>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.php">Home</a></li>
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Courses</li>
        </ul>
      </div>
    </section>
  </div>
  <!-- inner banner -->

  <!-- course section -->
  <?php include 'home_course.php' ?>
  <!-- course section -->

  <!-- stats -->
  <?php include 'home_stats.php' ?>
  <!-- stats -->

  <!-- video section -->
  <?php include 'video_section.php' ?>
  <!-- video section -->

  <!-- footer -->
  <?php include 'footer.php' ?>