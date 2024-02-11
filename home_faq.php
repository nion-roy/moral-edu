<style>
  #main {
    margin-top: 1rem;
  }

  #main #faq .card {
    margin-bottom: 20px;
    border: 0;
    background-color: var(--white);
    border-radius: 4px;
    border: 1px solid var(--border-color-light);
  }

  #main #faq .card .card-header {
    padding: 0;
    border: 0;
    background-color: var(--white);
  }

  #main #faq .card .card-header .btn-header-link {
    display: block;
    text-align: left;
    padding: 20px;
  }

  #main #faq .card .card-header .btn-header-link:after {
    content: "\f106";
    font-family: 'Font Awesome 5 Free';
    font-weight: 900;
    float: right;
  }

  #main #faq .card .card-header .btn-header-link.collapsed:after {
    content: "\f107";
  }

  #main #faq .card .collapsing {
    line-height: 30px;
  }

  #main #faq .card .collapse {
    border: 0;
  }

  #main #faq .card .collapse.show {
    line-height: 30px;
  }

  .btn:focus,
  .btn.focus .btn.btn-header-link.collapsed:focus {
    box-shadow: none !important;
  }
</style>

<section class="w3l-faq py-4 overflow-hidden" id="faq">
  <div class="container py-5">
    <div class="row align-items-center">

      <div class="col-lg-9 about-right-faq align-self mb-lg-0 mb-5 pl-xl-5" data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
        <h3 class="title-big mb-3">Frequently Asked Question</h3>
        <p class="">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
          ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet.
          Lorem ipsum viverra feugiat.</p>

      </div>

      <div class="col-lg-3 left-wthree-img pr-lg-4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
        <img src="assets/images/img1.jpg" alt="" class="img-fluid">
      </div>
	  
	  <div class="col-lg-12 about-right-faq align-self mb-lg-0 mb-5 pl-xl-5" data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-delay="100">
    
        <div id="main">
          <div class="accordion" id="faq">

            <?php
            $sl = 0;
            $query_why = "SELECT * FROM faq_section ORDER BY id asc";
            $result_why = mysqli_query($con, $query_why);

            if (mysqli_num_rows($result_why) > 0) {
              while ($row = mysqli_fetch_assoc($result_why)) {
            ?>

                <div class="card">
                  <div class="card-header" id="faqhead_<?= $row['id'] ?>">
                    <a href="#" class="btn btn-header-link collapsed" style="color: inherit;" data-toggle="collapse" data-target="#faq_<?= $row['id'] ?>"><strong><?= $row['title'] ?></strong></a>
                  </div>

                  <div id="faq_<?= $row['id'] ?>" class="collapse" aria-labelledby="faqhead_<?= $row['id'] ?>" data-parent="#faq">
                    <div class="card-body">
                   <?= $row['details'] ?>
				   </div>
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
  </div>
</section>