<!doctype html>
<html lang="en">


<head>
  <?php include 'header-link.php' ?>


  <?php
  $query_seo = "SELECT * FROM seo_section WHERE type = 'team'";
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
        <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">Our Team</h4>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.php">Home</a></li>
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Our Team</li>
        </ul>
      </div>
    </section>
  </div>

  <!-- team -->
  <section class="w3l-teams py-5" id="team">
    <div class="container py-5">

      <div class="row">

        <?php
        $sl = 0;
        $query_team = "SELECT * FROM team_section ORDER BY id ASC";
        $result_team = mysqli_query($con, $query_team);

        if (mysqli_num_rows($result_team) > 0) {
          while ($row = mysqli_fetch_assoc($result_team)) {
        ?>
            <div class="col-lg-3 col-md-4 col-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="<?= ++$sl ?>00">
              <div class="our-team">
                <div class="pic">
                  <img class="img-fluid" src="moral-edu/user/user_images/<?= $row['userPic'] ?>" alt="">
                </div>
                <div class="team-content">
                  <div class="team-info">
                    <h3 class="title"><?= $row['team_title'] ?></h3>
                    <span class="post"><?= $row['team_subtitle'] ?></span>
                  </div>
                </div>
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
  </section>
  <!-- team -->

  <!-- footer -->
  <?php include 'footer.php' ?>