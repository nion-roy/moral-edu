<!doctype html>
<html lang="en">


<head>
  <?php include 'header-link.php' ?>

  <?php
  $query_seo = "SELECT * FROM seo_section WHERE type = 'blog'";
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
  <!--//header-->
  <!-- inner banner -->
  <div class="inner-banner border-bottom">
    <section class="w3l-breadcrumb">
      <div class="container">
        <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">Blog Posts</h4>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.php">Home</a></li>
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Blog Page</li>
        </ul>
      </div>
    </section>
  </div>
  <!-- //inner banner -->
  <div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->


  </div>
  <!-- blog section -->
  <div class="w3l-grids-block-5 py-5">
    <section id="grids5-block">
      <div class="container">

        <div class="row">
          <?php
          $sl = 0;
          $query_blog = "SELECT * FROM blog_section ORDER BY id DESC";
          $result_blog = mysqli_query($con, $query_blog);

          if (mysqli_num_rows($result_blog) > 0) {
            while ($row = mysqli_fetch_assoc($result_blog)) {
              $title = strlen($row['title']) > 60 ? substr($row['title'], 0, 30) . '...' : $row['title'];
              $details = strlen($row['details']) > 60 ? substr($row['details'], 0, 120) . '...' : $row['details'];
          ?>
              <div class="col-lg-4 col-sm-6 my-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="<?= ++$sl ?>00">
                <div class="grids5-info">
                  <a href="blog-single?id=<?= $row['id'] ?>"><img src="moral-edu/user/user_images/<?= $row['userPic'] ?>" alt="" /></a>
                  <div class="blog-info">
                    <h5><?= $row['date'] ?></h5>
                    <h4><a href="blog-single?id=<?= $row['id'] ?>"><?= $title ?></a></h4>
                    <p><?= $details ?></p>
                  </div>
                </div>
              </div>

          <?php
            }
          } else {
            echo "No blog found<br>";
          }
          ?>


        </div>
      </div>
    </section>
  </div>
  <!-- //blog section -->
  <div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->

  </div>
  <!-- footer -->

  <?php include 'footer.php' ?>