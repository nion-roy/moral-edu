<div class="w3l-grids-block-5 py-5">
  <section id="grids5-block">
    <div class="container py-5">

      <div class="title-main text-center mx-auto mb-md-4 rounded-pill bg-white border">
        <h3 class="title-big">Our <span class="text-success"> Photo <span class="text-danger"> Gallery </span></h3>
      </div>

      <div class="main-grid-gallery">
        <div class="row mx-0 gallery-container" id="gallery1">


          <?php
          $sl = 0;
          $query_gallery = "SELECT * FROM gallery ORDER BY id DESC LIMIT 6";
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
</div>