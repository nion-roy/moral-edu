<?php require_once 'moral-edu/includes/conn.php'; ?>
<?php require_once 'moral-edu/includes/dbconfig.php'; ?>

<!doctype html>
<html lang="en">


<head>

  <?php include 'header-link.php' ?>

  <?php
  $query_seo = "SELECT * FROM seo_section WHERE type = 'course'";
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