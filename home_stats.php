<section class="w3_stats py-5" id="stats">
  <div class="container py-md-5 py-4">
    <div class="w3-stats">
      <div class="row text-center">

        <?php
        $sl = 0;
        $query_stats = "SELECT * FROM stats ORDER BY st_id ASC";
        $result_stats = mysqli_query($con, $query_stats);

        if (mysqli_num_rows($result_stats) > 0) {
          while ($row = mysqli_fetch_assoc($result_stats)) {
        ?>
            <div class="col-md-3 col-6 my-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="<?= ++$sl ?>00">
              <div class="counter">
                <img src="assets/images/stats1.png" alt="" />
                <div class="timer count-title count-number" data-to="<?= $row['st_num'] ?>" data-speed="100"></div>
                <p class="count-text"><?= $row['st_name'] ?></p>
              </div>
            </div>

        <?php
          }
        } else {
          echo "No stats found<br>";
        }

        ?>

      </div>
    </div>
  </div>
</section>