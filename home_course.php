<div class="w3l-index-block4 py-5" id="course">
  <div class="pb-lg-5 pt-lg-4 py-4">
    <div class="container">
      <div class="title-main text-center bg-white mx-auto my-md-4 rounded-pill border" data-aos="fade-top" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
        <h3 class="title-big">Our <span class="text-success"> Special <span class="text-danger"> Courses </span></h3>
      </div>

      <div class="row">

        <?php
        $sl = 0;
        $query_course = "SELECT s.*, sc.cat_name FROM service s INNER JOIN service_category sc ON s.category_id = sc.cat_id ORDER BY s.sv_id DESC";
        $result_course = mysqli_query($con, $query_course);

        if (mysqli_num_rows($result_course) > 0) {
          while ($row = mysqli_fetch_assoc($result_course)) {
        ?>
            <div class="col-lg-4 col-md-6 features15-col-text" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="<?= ++$sl ?>00">
              <a href="courses-details?view=<?= $row['sv_id'] ?>" class="d-flex feature-unit align-items-center bg-white">
                <div class="col-12 text-center">
                  <div class="features15-info">
                    <img class="img-fluid" src="moral-edu/user/user_images/<?php echo $row['userPic']; ?>" alt="<?= $row['sv_name'] ?>">
                  </div>
                  <div class="features15-para">
                    <h6><?= $row['cat_name'] ?></h6>
                    <h4><?= $row['sv_name'] ?></h4>
                  </div>
                </div>
              </a>
            </div>
        <?php
          }
        } else {
          echo "No course found<br>";
        }
        ?>

      </div>
    </div>
  </div>
</div>