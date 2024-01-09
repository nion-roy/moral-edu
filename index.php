  <!doctype html>
  <html lang="en">

  <head>

    <meta name="author" content="">
    <meta name="keyword" content="">
    <meta name="description" content="">

    <?php include 'header-link.php' ?>


    <style> 
      .title-main {
        border: 1px solid var(--border-color-light);
        box-shadow: -1px 2px 12px -9px rgba(0, 0, 0, 0.41);
        padding: 8px;
      } 

      .accordion .card-header:after {
        font-family: 'FontAwesome';
        content: "\f068";
        float: right;
      }

      .accordion .card-header.collapsed:after {
        /* symbol for "collapsed" panels */
        content: "\f067";
      }

      .collapsed {
        cursor: pointer;
      }
    </style>

  </head>

  <body>

    <!-- header -->
    <?php include 'nav-bar.php' ?>
    <!-- header -->

    <!-- banner section -->
    <?php include 'banner_header.php' ?>
    <!-- banner section -->

    <!-- course section -->
    <?php include 'home_course.php' ?>
    <!-- course section -->

    <!-- about section -->
    <?php include 'home_about.php' ?>
    <!-- about section -->

    <!-- why choose us section -->
    <?php include 'home_why_choose_us.php' ?>
    <!-- why choose us section -->

    <!-- teacher block -->
    <?php include 'home_teacher.php' ?>
    <!-- teacher block -->

    <!-- testimonials -->
    <?php include 'home_testimonial.php' ?>
    <!-- testimonials -->

    <!-- blog section -->
    <?php include 'home_office_tour.php' ?>
    <!-- blog section -->

    <!-- footer -->
    <?php include 'footer.php' ?>
    <!-- footer -->