  <!doctype html>
  <html lang="en">

  <head>

    <?php include 'header-link.php' ?>

    <?php
    $query_seo = "SELECT * FROM seo_section WHERE type = 'home'";
    $result_seo = mysqli_query($con, $query_seo);
    $row = mysqli_fetch_assoc($result_seo);
    ?>

    <meta name="author" content="<?= $row['author'] ?>">
    <meta name="keyword" content="<?= $row['keyword'] ?>">
    <meta name="description" content="<?= $row['description'] ?>">
    <title><?= $row['title'] ?></title>
    <link rel="canonical" href="<?= $row['canonical_link'] ?>" />



    <style>
      .title-main {
        border: 1px solid var(--border-color-light);
        box-shadow: -1px 2px 12px -9px rgba(0, 0, 0, 0.41);
        padding: 8px;
      }

      .w3l-companies-hny-6 .owl-carousel .owl-item img {
        border-radius: 4px;
      }
    </style>

  </head>

  <body>

    <?php include 'nav-bar.php' ?>

    <?php include 'banner_header.php' ?>

    <?php include 'home_course.php' ?>

    <?php include 'home_why_choose_us.php' ?>

    <?php include 'stats_home.php' ?>

    <?php include 'home_teacher.php' ?>

    <?php include 'home_testimonial.php' ?>

    <? php // include 'home_office_tour.php' 
    ?>

    <?php include 'gallery-home.php' ?>


    <?php include 'home_faq.php' ?>

    <!-- footer -->
    <?php include 'footer.php' ?>
    <!-- footer -->