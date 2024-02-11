<!doctype html>
<html lang="en">


<head>
  <?php include 'header-link.php' ?>

  <?php
  $query_seo = "SELECT * FROM seo_section WHERE type = 'course details'";
  $result_seo = mysqli_query($con, $query_seo);
  $row = mysqli_fetch_assoc($result_seo);
  ?>

  <meta name="author" content="<?= $row['author'] ?>">
  <meta name="keyword" content="<?= $row['keyword'] ?>">
  <meta name="description" content="<?= $row['description'] ?>">
  <title><?= $row['title'] ?></title>
  <link rel="canonical" href="<?= $row['canonical_link'] ?>" />


  <style>
    .portfolio-header {
      box-shadow: 0 30px 50px 0 rgba(51, 51, 51, 0.08);
      border-style: dotted !important;
    }

    .accordion-button:focus {
      box-shadow: none !important;
    }

    .apply_btn {
      position: absolute;
      bottom: 0;
      left: 40%;
      transform: translate(-25%, 50%);
    }
  </style>

</head>

<body>

  <?php
  if (isset($_GET['view']) && !empty($_GET['view'])) {
    $id = $_GET['view'];
    $stmt_edit = $DB_con->prepare('SELECT * FROM service WHERE sv_id =:uid');
    $stmt_edit->execute(array(':uid' => $id));
    $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
    extract($edit_row);
  } ?>

  <?php include 'nav-bar.php' ?>
  <!-- header -->

  <!-- inner banner -->
  <div class="inner-banner border-bottom">
    <section class="w3l-breadcrumb">
      <div class="container">
        <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">line Courses</h4>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.php">Home</a></li>
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Courses</li>
        </ul>
      </div>
    </section>
  </div>
  <!-- inner banner -->

  <!-- course details section -->
  <section class="course-details-section py-5 ">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 m-md-0 mb-5 wow fadeInUp " data-wow-delay="0.1s">
          <div class="portfolio-header p-3 border rounded position-relative bg-white">
            <img class="img-fluid rounded mb-3" src="moral-edu/user/user_images/<?php echo $userPic; ?>" alt="<?php echo $sv_name; ?>">
            <div class="portfolio-text">
              <ul class="nav">
                <li class="nav-item border-bottom py-2 d-flex justify-content-between align-items-center w-100">
                  <span><i class="fas fa-clock text-primary"></i> Duration</span>
                  <span><?php echo $duration; ?></span>
                </li>
                <li class="nav-item py-2 pb-3 d-flex justify-content-between align-items-center w-100">
                  <span><i class="fas fa-book text-primary"></i> Total Semester</span>
                  <span><?php echo $total_semester; ?></span>
                </li>
              </ul>
            </div>
            <div class="apply_btn">
              <a href="online-admin" class="btn btn-primary text-white mx-auto px-4">Apply Now</a>
            </div>
          </div>
        </div>

        <div class="col-lg-8 col-md-8  rounded p-3 shadow bg-white">
          <div class="mb-4">
            <h2 class="mb-3 text-center"><?php echo $sv_name; ?></h2>
            <p class="mb-5"><?php echo $sv_details; ?></p>
          </div>
        </div>
      </div>

    </div>

  </section>
  <!-- course details section -->

  <!-- footer -->
  <?php include 'footer.php' ?>