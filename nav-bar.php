<?php
if (isset($_POST['submitCourse'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $course = $_POST['course'];
  $course_type = $_POST['course_type'];

  $courseApply = mysqli_query($con, "INSERT INTO course_apply (name, email, phone, course, course_type, entry_date) VALUES ('$name','$email', '$phone', '$course', '$course_type', NOW())");
  if (isset($courseApply)) {
    $course = 'Course Apply Successfully';
  }
}
?>


<header id="site-header" class="fixed-top">
  <div class="container">
    <?php
    if (isset($course)) { ?>
      <div class="alert alert-success shadow rounded-pill text-center" role="alert">
        <h3><?= $course ?></h3>
      </div>
      <script>
        setTimeout(function() {
          window.location.href = '<?php echo $_SERVER['REQUEST_URI']; ?>';
        }, 3000);
      </script>


    <?php } else { ?>
      <nav class="navbar navbar-expand-lg stroke shadow rounded-pill">
        <h4>
          <a class="text-danger" href="index">
            <img class="img-fluid" src="assets/images/logo.jpg" alt="Moral Learning Institute"> <strong></strong>
          </a>
        </h4>
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item <?= ($activePage == 'index') ? 'active' : ''; ?>">
              <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
            </li>


            <li class="nav-item">
              <a class="nav-link dropdown-toggle <?= ($activePage == 'about' || $activePage == 'team' || $activePage == 'teacher' || $activePage == 'success-students') ? 'active' : ''; ?>" href="#" id="navbarDropdown" data-toggle="dropdown">
                About <span class="fa fa-angle-down"></span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item <?= ($activePage == 'about') ? 'active' : ''; ?>" href="about">About Us</a>
                <a class="dropdown-item <?= ($activePage == 'team') ? 'active' : ''; ?>" href="team">Our Team</a>
                <a class="dropdown-item <?= ($activePage == 'teacher') ? 'active' : ''; ?>" href="teacher">Our Teachers</a>
                <a class="dropdown-item <?= ($activePage == 'success-students') ? 'active' : ''; ?>" href="success-students">Success Students</a>
              </div>
            </li>

            <li class="nav-item <?= ($activePage == 'courses') ? 'active' : ''; ?>">
              <a class="nav-link" href="courses">Courses</a>
            </li>
            <li class="nav-item <?= ($activePage == 'gallery') ? 'active' : ''; ?>">
              <a class="nav-link" href="gallery">Gallery</a>
            </li>
            <li class="nav-item <?= ($activePage == 'blog') ? 'active' : ''; ?>">
              <a class="nav-link" href="blog">Blog</a>
            </li>
            <li class="nav-item <?= ($activePage == 'contact') ? 'active' : ''; ?>">
              <a class="nav-link" href="contact">Contact Us</a>
            </li>
            <!-- search button -->
            <div class="search-right">
              <button type="button" class="btn button-style" data-toggle="modal" data-target="#applyModal">Apply</button>
            </div>
            <!-- //search button -->
          </ul>
        </div>



      </nav>
    <?php
    } ?>

  </div>
</header>


<!-- Modal -->
<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="apply">
          <div class="row align-items-center">
            <div class="col-md-4 mb-4 m-md-0 apply-left">
              <img src="assets/images/logo.jpg" alt="" style="width: 80px; height: 80px;" />
              <h3 class="mb-3"><strong>Welcome</strong></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, iusto? Impedit ipsum in soluta corrupti numquam sit sapiente dolorum quaerat.</p>
            </div>

            <div class="col-md-8 apply-right">
              <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <div id="applyContent">
                  <div class="row apply-form">
                    <div class="col-12 mb-3">
                      <h3><strong>Fill the form with correct information</strong></h3>
                      <p>After filling the form our representative will contact you shortly.</p>
                    </div>
                    <div class="col-12 mb-3">
                      <hr>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-label" for="name">Full Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Full Name" required>
                      </div>

                      <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email" required>
                      </div>

                      <div class="form-group">
                        <label class="form-label" for="phone">Contact</label>
                        <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter Contact Number" required>
                      </div>

                      <div class="form-group">
                        <label class="form-label" for="course">Course</label>
                        <select name="course" id="course" required="required" class="form-control">
                          <option selected disabled>-- Selected Course --</option>
                          <?php
                          $sl = 0;
                          $query_course = "SELECT * FROM service ORDER BY sv_id DESC";
                          $result_course = mysqli_query($con, $query_course);

                          if (mysqli_num_rows($result_course) > 0) {
                            while ($row = mysqli_fetch_assoc($result_course)) {
                          ?>
                              <option value="<?= $row['sv_name'] ?>"><?= $row['sv_name'] ?></option>
                          <?php
                            }
                          }
                          ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="course_type">Course Type</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="course_type" value="offline" id="offline">
                          <label class="form-check-label" for="offline">
                            অফলাইন / (OFFLINE)
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="course_type" value="online" id="online">
                          <label class="form-check-label" for="online">
                            অনলাইন / (ONLINE)
                          </label>
                        </div>
                      </div>

                      <div class="form-group m-0 mt-4">
                        <button type="button" class="btn btn-danger px-5 py-2 my-1" data-dismiss="modal">Close</button>
                        <button type="submit" name="submitCourse" class="btn btn-success px-5 py-2 my-1">Confirm</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>