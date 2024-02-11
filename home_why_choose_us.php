<section class="w3l-why_us py-md-5 py-4 overflow-hidden" id="why_us">
  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-lg-5 left-wthree-img pr-lg-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
        <img src="assets/images/img1.jpg" alt="" class="img-fluid">
      </div>
      <div class="col-lg-7 about-right-faq align-self mb-lg-0 mb-5 pl-xl-5" data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
        <h3 class="title-big mb-3">Why Choose Us?</h3>
        <p class="">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
          ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet.
          Lorem ipsum viverra feugiat.</p>
        <div class="row mt-lg-5 mt-4 mb-2">

          <?php
          $sl = 0;
          $query_why = "SELECT * FROM why_section ORDER BY id DESC";
          $result_why = mysqli_query($con, $query_why);

          if (mysqli_num_rows($result_why) > 0) {
            while ($row = mysqli_fetch_assoc($result_why)) {
          ?>
              <div class="col-sm-6 my-3">
                <div class="d-flex align-items-center left-insp-art">
                  <img src="moral-edu/user//user_images/<?= $row['userPic'] ?>" alt="<?= $row['title'] ?>" class="img-fluid mr-3">
                  <h6><?= $row['title'] ?></h6>
                </div>
              </div>

          <?php
            }
          }
          ?>


        </div>
      </div>
    </div>
  </div>
</section>