  <!-- visions section -->
  <section class="w3l-text-6 py-5 overflow-hidden" id="visions">
    <div class="text-6-mian py-md-4 py-3">
      <div class="container">

        <?php
        $query_vision = "SELECT * FROM vision ORDER BY ms_id DESC LIMIT 1";
        $result_vision = mysqli_query($con, $query_vision);
        $row = mysqli_fetch_assoc($result_vision);
        ?>


        <div class="row top-cont-grid align-items-center">
          <div class="col-lg-6 left-img pr-lg-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
            <img src="moral-edu/user/user_images/<?= $row['userPic'] ?>" alt="" class="img-responsive img-fluid" />
          </div>
          <div class="col-lg-6 text-6-info mb-lg-0 mb-4 pl-lg-5" data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-delay="200">
            <h2><?= $row['name'] ?></h2>
            <p><?= $row['details'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- visions section -->