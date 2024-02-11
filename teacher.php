<!doctype html>
<html lang="en">


<head>
  <?php include 'header-link.php' ?>

  <?php
  $query_seo = "SELECT * FROM seo_section WHERE type = 'teacher'";
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
        <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">Our Teacher</h4>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.php">Home</a></li>
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Our Teacher</li>
        </ul>
      </div>
    </section>
  </div>

  <!-- teacher -->
  <section class="w3l-teams-32-main py-5">
    <div class="teams-32 py-5">
      <div class="container">
        <div class="row main-contteam-32">

          <?php
          $sl = 0;
          $query_teacher = "SELECT * FROM teacher_section ORDER BY id ASC";
          $result_teacher = mysqli_query($con, $query_teacher);

          if (mysqli_num_rows($result_teacher) > 0) {
            while ($row = mysqli_fetch_assoc($result_teacher)) {
          ?>

              <div class="col-lg-3 col-6 team-main-19" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="<?= ++$sl ?>00">
                <div class="column-19">
                  <a href="#team"><img class="img-fluid" src="moral-edu/user/user_images/<?= $row['userPic'] ?>" alt=""></a>
                </div>
                <div class="right-team-9">
                  <h6><a href="#team" class="title-team-32"><?= $row['teacher_title'] ?></a></h6>
                  <p class="sm-text-32"><?= $row['teacher_subtitle'] ?></p>
                </div>
              </div>

          <?php
            }
          } else {
            echo "No team member found<br>";
          }

          ?>

        </div>
      </div>
    </div>
  </section>
  <!-- teacher -->

  <!-- footer -->
  <?php include 'footer.php' ?>