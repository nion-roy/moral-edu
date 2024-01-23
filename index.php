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
    <div class="w3l-index-block4 pb-5">
      <div class="features-bg pb-lg-5 pt-lg-4 py-4">
        <div class="container">
          <div class="title-main text-center mx-auto mb-md-4 rounded-pill border">
            <h3 class="title-big">Our <span class="text-success"> Special <span class="text-danger"> Courses </span></h3>
          </div>
          <?php include 'home_course.php' ?>
        </div>
      </div>
    </div>
    <!-- course section -->

    <!-- about section -->
    <?php include 'home_why_choose_us.php' ?>
    <!-- about section -->

    <!-- why choose us section -->
    <?php include 'home_faq.php' ?>
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