<section id="home" class="w3l-banner py-5">
  <div class="container pt-5 pb-md-4">
    <div class="row align-items-center">
      <div class="col-md-6 banner-left pt-md-0 pt-5" data-aos="fade-up" data-aos-delay="100">
        <h3 class="mb-sm-4 mb-3 title">This is the new way<br> to Learn <span class="type-js"><span class="text-js">Online</span></span></h3>
        <div class="mt-md-5 mt-4 mb-lg-0 mb-4">
          <a class="btn button-style" href="about.html">Get Started<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
        </div>
      </div>
      <div class="col-md-6 banner-right mt-md-0 mt-4" data-aos="fade-down" data-aos-delay="100">
        <div class="w3l-companies-hny-6">
          <div id="owl-demo2" class="owl-carousel owl-theme mt-5">
            <?php
            $query_slider = "SELECT * FROM slider_section ORDER BY id DESC";
            $result_slider = mysqli_query($con, $query_slider);

            if (mysqli_num_rows($result_slider) > 0) {
              while ($row = mysqli_fetch_assoc($result_slider)) {
            ?>
                <div class="item">
                  <img class="img-fluid" src="moral-edu/user/user_images/<?= $row['userPic'] ?>" alt=" ">
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
    </div>
  </div>
</section>