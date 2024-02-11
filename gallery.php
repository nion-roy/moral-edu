<!doctype html>
<html lang="en">

<head>
  <?php include 'header-link.php' ?>

  <?php
  $query_seo = "SELECT * FROM seo_section WHERE type = 'gallery'";
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
        <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">Gallery</h4>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.php">Home</a></li>
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Gallery</li>
        </ul>
      </div>
    </section>
  </div>

  <section class="gallery py-5" id="gallery">
    <div class="container">
      <div class="main-grid-gallery">
        <div class="row mx-0 gallery-container" id="gallery1">


          <?php
          $sl = 0;
          $query_gallery = "SELECT * FROM gallery ORDER BY id DESC";
          $result_gallery = mysqli_query($con, $query_gallery);

          if (mysqli_num_rows($result_gallery) > 0) {
            while ($row = mysqli_fetch_assoc($result_gallery)) {
          ?>

              <div class="col-lg-4 col-sm-6 col-12 my-3 gallery-item" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="<?= ++$sl ?>00" data-src="moral-edu/user/user_images/<?= $row['userPic'] ?>">
                <div class="rounded overflow-hidden">
                  <a href="javascript:void(0)">
                    <div class="gallery-img">
                      <img class="img-fluid" src="moral-edu/user/user_images/<?= $row['userPic'] ?>" />
                    </div>
                    <div class="blog-info py-4 bg-white text-center">
                      <h4><?= $row['title'] ?></h4>
                    </div>
                  </a>
                </div>
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


  <?php include 'footer.php' ?>