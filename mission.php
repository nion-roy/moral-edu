  <!-- mission section -->
  <section class="w3l-text-6 py-5" id="mission">
    <div class="text-6-mian py-md-4 py-3">
      <div class="container">

        <?php
        $query_mission = "SELECT * FROM mission ORDER BY ms_id DESC LIMIT 1";
        $result_mission = mysqli_query($con, $query_mission);
        $row = mysqli_fetch_assoc($result_mission);
        ?>


        <div class="row top-cont-grid align-items-center">
          <div class="col-lg-6 text-6-info mb-lg-0 mb-4 pl-lg-5" data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
            <h2><?= $row['name'] ?></h2>
            <p><?= $row['details'] ?></p>
          </div>
          <div class="col-lg-6 left-img pr-lg-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="200">
            <img src="moral-edu/user/user_images/<?= $row['userPic'] ?>" alt="" class="img-responsive img-fluid" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- mission section -->