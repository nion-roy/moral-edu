<!doctype html>
<html lang="en">


<head>
  <?php include 'header-link.php' ?>

  <?php
  $query_seo = "SELECT * FROM seo_section WHERE type = 'student'";
  $result_seo = mysqli_query($con, $query_seo);
  $row = mysqli_fetch_assoc($result_seo);
  ?>

  <meta name="author" content="<?= $row['author'] ?>">
  <meta name="keyword" content="<?= $row['keyword'] ?>">
  <meta name="description" content="<?= $row['description'] ?>">
  <title><?= $row['title'] ?></title>
  <link rel="canonical" href="<?= $row['canonical_link'] ?>" />


  <style>
    @media screen and (min-width: 767px) {
      .main-contsuccess-32 img {
        width: 100%;
        display: block;
        max-width: 100%;
        clip-path: polygon(0 0, 100% 0, 69% 100%, 0% 100%);
      }
    }
  </style>
</head>

<body>
  <?php include 'nav-bar.php' ?>

  <div class="inner-banner border-bottom">
    <section class="w3l-breadcrumb">
      <div class="container">
        <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">Success Students</h4>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.php">Home</a></li>
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Success Students</li>
        </ul>
      </div>
    </section>
  </div>

  <!-- Success Students -->
  <section class="w3l-success-32-main py-5">
    <div class="success-32 py-5">
      <div class="container">
        <div class="row main-contsuccess-32">


          <?php
          $sl = 0;
          $query_student = "SELECT * FROM success_student_section ORDER BY id DESC";
          $result_student = mysqli_query($con, $query_student);

          if (mysqli_num_rows($result_student) > 0) {
            while ($row = mysqli_fetch_assoc($result_student)) {
          ?>

              <div class="col-lg-6 col-12 success-main-19 my-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="<?= ++$sl ?>00">
                <div class="card shadow">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-md-4">
                        <div class="text-center mb-3 mb-md-0">
                          <img class="img-fluid shadow rounded border" src="moral-edu/user/user_images/<?= $row['userPic'] ?>" alt=" ">
                        </div>
                      </div>
                      <div class="col-md-8">
                        <div class="right-success-9">
                          <p class="mb-3"><?= $row['details'] ?></p>
                          <h4 class="mb-1"><strong><?= $row['name'] ?></strong></h4>
                          <p><?= $row['title'] ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



          <?php
            }
          }
          ?>

        </div>
      </div>
    </div>
  </section>
  <!-- Success Students -->

  <!-- footer -->
  <?php include 'footer.php' ?>