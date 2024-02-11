<!doctype html>
<html lang="en">

<head>
  <?php include 'header-link.php'; ?>

  <?php
  $query_seo = "SELECT * FROM seo_section WHERE type = 'blog details'";
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
  <?php
  error_reporting(~E_NOTICE);
  if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    // Assuming $DB_con is your PDO database connection
    $stmt_show = $DB_con->prepare('SELECT * FROM blog_section WHERE id = :uid');
    $stmt_show->execute(array(':uid' => $id)); // Changed $slug to $id
    $show_row = $stmt_show->fetch(PDO::FETCH_ASSOC);
    extract($show_row);
  } else {
    header("Location: index.php"); // Corrected the redirection URL
    exit(); // Added exit to terminate script execution after redirection
  }
  ?>
  <?php include 'nav-bar.php'; ?>
  <!-- inner banner -->
  <div class="inner-banner border-bottom">
    <section class="w3l-breadcrumb">
      <div class="container">
        <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">Blog Single</h4>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.php">Home</a></li>
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Blog Single</li>
        </ul>
      </div>
    </section>
  </div>

  </div>
  <!-- blog single -->
  <div class="single-w3l py-5 mb-5">
    <div class="container pt-5">
      <div class="inner_sec_info">
        <div class="single-left">
          <div class="single-left1">
            <div class="text-center mb-5">
              <img src="moral-edu/user/user_images/<?= $userPic ?>" alt=" " class="img-fluid" />
            </div>
            <h4 class="card-title">
              <a href="blog-single?id=<?= $id ?>"><?= $title ?></a>
            </h4>
            <?= $details ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <?php include 'footer.php'; ?>
</body>

</html>