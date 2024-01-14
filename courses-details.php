<!doctype html>
<html lang="en">


<head>
  <meta name="author" content="">
  <meta name="keyword" content="">
  <meta name="description" content="">

  <?php include 'header-link.php' ?>

  <style>
    .left_content_module {
      border-radius: 4px;
      padding: 5px;
    }

    .left_content_module h5 {
      color: rgb(255, 255, 255);
    }

    .right_content_module h5 {
      margin-bottom: 8px;
    }

    .right_content_module .nav-item {
      margin-right: 12px;
      display: flex;
      align-items: center;
      color: var(--font-color);
      font-size: 16px;
    }

    .right_content_module .nav-item:last-child {
      margin: 0;
    }

    .right_content_module .material-symbols-outlined {
      font-size: 22px;
      color: var(--font-color);
      margin-right: 4px;
    }

    #accordion.show {
      border-color: red !important;
      background: none !important;
    }

    #accordion.show:hover {
      background: transparent !important;
    }

    .accordion_content_module {
      margin: 16px;
      padding-top: 16px;
      margin-top: 6px;
      border-top: 1px solid var(--border-color-light);
    }

    .accordion_content_module h5 {
      font-size: 14px;
      padding-left: 26px;
    }

    .accordion_content_module h5 span {
      font-size: 12px;
    }

    .accordion_content_module ul {
      padding: 8px 12px 0 40px;
      display: flex;
      flex-wrap: wrap;
    }

    .accordion_content_module ul li {
      list-style-type: disc;
      margin-right: 24px;
    }


    .accordion .card:nth-child(1) .left_content_module {
      background-color: #dc3545 !important;
    }

    .accordion .card:nth-child(2) .left_content_module {
      background-color: #28a745 !important;
    }

    .accordion .card:nth-child(3) .left_content_module {
      background-color: #ffc107 !important;
    }

    .accordion .card:nth-child(4) .left_content_module {
      background-color: #0062cc !important;
    }

    #accordion .card {
      margin-bottom: 1rem;
      border: 1px solid var(--border-color-light);
      border-radius: 4px;
      transition: 0.2s;
    }

    #accordion .card:last-child {
      margin: 0;
    }

    #accordion .card:hover {
      background: var(--bg-light);
    }

    #accordion .card .card-header {
      border: 0;
      padding: 0;
      margin: 0;
      background: transparent;
    }

    #accordion .card .card-header .btn-header-link {
      display: block;
      text-align: left;
      padding: 20px;
      position: relative;
      border-radius: 0;
    }

    #accordion .card .card-header .btn-header-link:after {
      content: "\f106";
      font-family: 'Font Awesome 5 Free';
      font-weight: 900;
      position: absolute;
      top: 33%;
      right: 20px;
    }

    #accordion .card .card-header .btn-header-link.collapsed:after {
      content: "\f107";
    }

    #accordion .card .collapsing {
      background: transparent;
      line-height: 30px;
    }

    #accordion .card .collapse.show {
      background: transparent;
      line-height: 30px;
    }

    .btn:focus,
    .btn.focus .btn.btn-header-link.collapsed:focus {
      box-shadow: none !important;
    }

    .card.card-expanded {
      transition: 0.2s;
      border: 1px solid red !important;
    }

    .card:hover.card-expanded {
      background: transparent !important;
    }

    .dot {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background-color: var(--font-color);
    }

    .course-details-section {
      position: relative;
    }

    .course-details-section .left-wthree-img-video-sticky {
      position: sticky;
      top: 12vh;
      height: 100%;
    }


    .margin_bottom {
      margin-bottom: 4rem;
    }
  </style>


</head>

<body>

  <?php include 'nav-bar.php' ?>
  <!-- header -->

  <!-- inner banner -->
  <div class="inner-banner">
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
 
  <!-- course details section -->

  <!-- footer -->
  <?php include 'footer.php' ?>


  <script>
    // Add event listener to toggle class on accordion show/hide
    $('.collapse').on('show.bs.collapse', function() {
      $(this).closest('.card').addClass('card-expanded');
    });

    $('.collapse').on('hide.bs.collapse', function() {
      $(this).closest('.card').removeClass('card-expanded');
    });
  </script>