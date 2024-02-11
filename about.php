<!doctype html>
<html lang="en">

<head>

  <?php include 'header-link.php' ?>

  <?php
  $query_seo = "SELECT * FROM seo_section WHERE type = 'about'";
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
 
  <section class="w3l-text-6 py-5 overflow-hidden bg-white" id="about">
    <div class="text-6-mian py-md-4 py-3">
      <div class="container">

        <?php
        $query_about = "SELECT * FROM about_section ORDER BY id DESC LIMIT 1";
        $result_about = mysqli_query($con, $query_about);
        $row = mysqli_fetch_assoc($result_about);
        ?>

        <div class="row top-cont-grid align-items-center">
          <div class="col-lg-5 left-img pr-lg-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
            <img src="moral-edu/user/user_images/<?= $row['userPic'] ?>" alt="" class="img-responsive img-fluid" />
          </div>
          <div class="col-lg-7 text-6-info mb-lg-0 mb-4 pl-lg-5" data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
            <h6>About Us </h6>
            <h2><?= $row['about_title'] ?></h2>
            <p><?= $row['about_subtitle'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <?php include 'mission.php' ?>

  <?php include 'visions.php' ?>

   
  <?php include 'stats_about.php' ?>
   
  <?php include 'home_testimonial.php' ?>
   
  <?php include 'footer.php' ?>