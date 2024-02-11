<section class="w3l-companies-hny-6 position-relative">
  <div class="cusrtomer-layout py-5">
    <div class="container py-5">

      <div class="title-main text-center mx-auto mb-md-4 rounded-pill border">
        <h3 class="title-big">What <span class="text-success"> Our Students <span class="text-danger"> Say </span></h3>
      </div>
      <div id="owl-demo1" class="owl-carousel owl-theme mt-5">

        <?php
        $sl = 0;
        $query_testimonial = "SELECT * FROM testimonial ORDER BY ts_id ASC";
        $result_testimonial = mysqli_query($con, $query_testimonial);

        if (mysqli_num_rows($result_testimonial) > 0) {
          while ($row = mysqli_fetch_assoc($result_testimonial)) {
        ?>
            <div class="item">
              <div class="testimonial-content">
                <div class="testimonial">
                  <div class="testi-des">
                    <div class="test-img"><img src="moral-edu/user/user_images/<?= $row['userPic'] ?>" class="img-fluid" alt="/">
                    </div>
                    <div class="peopl">
                      <h3><?= $row['name'] ?></h3>
                      <p class="indentity"><?= $row['position'] ?></p>
                    </div>
                  </div>
                  <blockquote>
                    <p><?= $row['details'] ?></p>
                  </blockquote>
                  <quote></quote>
                </div>
              </div>
            </div>

        <?php
          }
        } else {
          echo "No testimonial found<br>";
        }

        ?>


      </div>
    </div>
    <div class="quote-special">
      <i class="fa fa-quote-left" aria-hidden="true"></i>
    </div>
  </div>
</section>