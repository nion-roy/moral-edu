    <section class="w3l-teams-32-main py-5">
      <div class="teams-32 py-5">
        <div class="container">
          <div class="title-main text-center mx-auto mb-md-4 rounded-pill border bg-white">
            <h3 class="title-big">Our <span class="text-success"> Expert <span class="text-danger"> Teachers </span></h3>
          </div>
          <div class="row main-contteam-32 mt-5">

            <?php
            $sl = 0;
            $query_teacher = "SELECT * FROM teacher_section ORDER BY id ASC LIMIT 6";
            $result_teacher = mysqli_query($con, $query_teacher);

            if (mysqli_num_rows($result_teacher) > 0) {
              while ($row = mysqli_fetch_assoc($result_teacher)) {
            ?>

                <div class="col-lg-3 col-6 team-main-19" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="<?= ++$sl ?>00">
                  <div class="column-19">
                    <a href="#team"><img class="img-fluid" src="moral-edu/user/user_images/<?= $row['userPic'] ?>" alt=""></a>
                  </div>
                  <div class="right-team-9">
                    <h6><a href="#team" class="title-team-32"><?= $row['teacher_title'] ?></a></h6>
                    <p class="sm-text-32"><?= $row['teacher_subtitle'] ?></p>
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
      </div>
    </section>