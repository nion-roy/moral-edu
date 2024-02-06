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
        <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">Gallery</h4>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.php">Home</a></li>
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Gallery</li>
        </ul>
      </div>
    </section>
  </div>
  <!-- inner banner -->

  <!-- gallery -->
  <section class="gallery py-5" id="gallery">
    <div class="container py-md-4 py-3">

      <div class="title-main text-center mx-auto mb-md-4 rounded-pill border" data-aos="fade-top" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
        <h3 class="title-big">Our <span class="text-success"> Gallery</h3>
      </div>


      <div class="main-grid-gallery">
        <div class="row mt-5 mx-0 gallery-container" id="gallery1">



          <?php
          $sl = 0;
          $query_gallery = "SELECT * FROM gallery ORDER BY id DESC";
          $result_gallery = mysqli_query($con, $query_gallery);

          if (mysqli_num_rows($result_gallery) > 0) {
            while ($row = mysqli_fetch_assoc($result_gallery)) {
          ?>

              <div class="col-lg-4 col-sm-6 col-12 my-3 gallery-item" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="<?= ++$sl ?>00" data-src="moral-edu/user/user_images/<?= $row['userPic'] ?>">
                <a href="javascript:void(0)">
                  <div class="gallery-img">
                    <img class="img-fluid rounded shadow" src="moral-edu/user/user_images/<?= $row['userPic'] ?>" />
                  </div>
                </a>
              </div>
          <?php
            }
          } else {
            echo "No slider found<br>";
          }

          ?>

        </div>
      </div>
    </div>
  </section>
  <!-- gallery -->

  <!-- footer -->
  <?php include 'footer.php' ?>
  <!-- footer -->