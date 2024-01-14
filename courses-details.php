<!doctype html>
<html lang="en">


<head>
  <meta name="author" content="">
  <meta name="keyword" content="">
  <meta name="description" content="">

  <?php include 'header-link.php' ?>

  <style>
    .left_content_module {
      border-radius: 4px;
      padding: 5px;
    }

    .left_content_module h5 {
      color: rgb(255, 255, 255);
    }

    .right_content_module h5 {
      margin-bottom: 8px;
    }

    .right_content_module .nav-item {
      margin-right: 12px;
      display: flex;
      align-items: center;
      color: var(--font-color);
      font-size: 16px;
    }

    .right_content_module .nav-item:last-child {
      margin: 0;
    }

    .right_content_module .material-symbols-outlined {
      font-size: 22px;
      color: var(--font-color);
      margin-right: 4px;
    }

    #accordion.show {
      border-color: red !important;
      background: none !important;
    }

    #accordion.show:hover {
      background: transparent !important;
    }

    .accordion_content_module {
      margin: 16px;
      padding-top: 16px;
      margin-top: 6px;
      border-top: 1px solid var(--border-color-light);
    }

    .accordion_content_module h5 {
      font-size: 14px;
      padding-left: 26px;
    }

    .accordion_content_module h5 span {
      font-size: 12px;
    }

    .accordion_content_module ul {
      padding: 8px 12px 0 40px;
      display: flex;
      flex-wrap: wrap;
    }

    .accordion_content_module ul li {
      list-style-type: disc;
      margin-right: 24px;
    }


    .accordion .card:nth-child(1) .left_content_module {
      background-color: #dc3545 !important;
    }

    .accordion .card:nth-child(2) .left_content_module {
      background-color: #28a745 !important;
    }

    .accordion .card:nth-child(3) .left_content_module {
      background-color: #ffc107 !important;
    }

    .accordion .card:nth-child(4) .left_content_module {
      background-color: #0062cc !important;
    }

    #accordion .card {
      margin-bottom: 1rem;
      border: 1px solid var(--border-color-light);
      border-radius: 4px;
      transition: 0.2s;
    }

    #accordion .card:last-child {
      margin: 0;
    }

    #accordion .card:hover {
      background: var(--bg-light);
    }

    #accordion .card .card-header {
      border: 0;
      padding: 0;
      margin: 0;
      background: transparent;
    }

    #accordion .card .card-header .btn-header-link {
      display: block;
      text-align: left;
      padding: 20px;
      position: relative;
      border-radius: 0;
    }

    #accordion .card .card-header .btn-header-link:after {
      content: "\f106";
      font-family: 'Font Awesome 5 Free';
      font-weight: 900;
      position: absolute;
      top: 33%;
      right: 20px;
    }

    #accordion .card .card-header .btn-header-link.collapsed:after {
      content: "\f107";
    }

    #accordion .card .collapsing {
      background: transparent;
      line-height: 30px;
    }

    #accordion .card .collapse.show {
      background: transparent;
      line-height: 30px;
    }

    .btn:focus,
    .btn.focus .btn.btn-header-link.collapsed:focus {
      box-shadow: none !important;
    }

    .card.card-expanded {
      transition: 0.2s;
      border: 1px solid red !important;
    }

    .card:hover.card-expanded {
      background: transparent !important;
    }

    .dot {
      width: 6px;
      height: 6px;
      border-radius: 50%;
      background-color: var(--font-color);
    }

    .course-details-section {
      position: relative;
    }

    .course-details-section .left-wthree-img-video-sticky {
      position: sticky;
      top: 12vh;
      height: 100%;
    }


    .margin_bottom {
      margin-bottom: 4rem;
    }
  </style>


</head>

<body>

  <?php include 'nav-bar.php' ?>
  <!-- header -->

  <!-- inner banner -->
  <div class="inner-banner">
    <section class="w3l-breadcrumb">
      <div class="container">
        <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">line Courses</h4>
        <ul class="breadcrumbs-custom-path">
          <li><a href="index.php">Home</a></li>
          <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Courses</li>
        </ul>
      </div>
    </section>
  </div>
  <!-- inner banner -->

  <!-- course details section -->
  <section class="course-details-section">
    <div class="w3l-index-block4 pb-5">
      <div class="course-details-bg pb-lg-5 pt-lg-4 py-4">
        <div class="container">

          <div class="row">

            <div class="col-lg-5 left-wthree-img-video text-righ pr-lg-5 mt-lg-0 my-5 d-lg-none">
              <div class="row">
                <div class="col-12 margin_bottom">
                  <div class="position-relative text-center">
                    <img src="assets/images/video.jpg" alt="" class="img-fluid radius-image-full">
                    <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                      <span class="video-play-icon">
                        <span class="fa fa-play"></span>
                      </span>
                    </a>
                    <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                    <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                      <iframe src="https://player.vimeo.com/video/248099609?color=26e5d8&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="course_details">
                    <h3 class="mb-3 font-weight-bold">Course Details</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur ducimus eaque magnam odio sapiente reiciendis ipsam praesentium, incidunt labore animi itaque quas culpa omnis dolorem repellendus placeat ipsum nisi ea. Veniam voluptatem facere numquam temporibus, laborum facilis laboriosam eius inventore quis ratione necessitatibus nemo voluptates tenetur non blanditiis praesentium reprehenderit labore animi harum? Commodi soluta beatae esse illo dolores, omnis fugiat, minus quisquam dolorum blanditiis consequuntur ex iusto neque deleniti alias debitis, aliquam natus libero similique dolor. Velit impedit error consectetur quae? Ipsum officia accusamus laudantium sunt odio laborum nam, fugit assumenda rerum officiis qui dolor, dolorem cum aperiam?</p>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-lg-7 about-right-accordion align-self pl-lg-5">


              <div class="row">
                <div class="col-12 margin_bottom">
                  <h3 class="title-big">You can watch now our online courses!</h3>
                  <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni corrupti quas facilis quaerat mollitia dicta quae, provident fugiat eos, nobis minus numquam deserunt doloribus temporibus esse doloremque expedita, ex veniam.</p>
                </div>

                <div class="col-12 margin_bottom">
                  <div class="courseStudyPlan_summary d-flex align-items-center border-bottom pb-3">
                    <h3 class="nowrap text-uppercase font-weight-bold">Study Plan</h3>
                    <div class="d-flex align-items-center">
                      <p class="body_b2 px-2">09 Module</p>
                      <div class="dot"></div>
                      <p class="body_b2 px-2">05 Assignment</p>
                      <div class="dot"></div>
                      <p class="body_b2 px-2">10 Test</p>
                    </div>
                  </div>


                  <div class="accordion mt-3" id="accordion">

                    <div class="card">
                      <div class="card-header" id="accordionhead1">
                        <a href="javascript:void(0)" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#accordion1" aria-expanded="true" aria-controls="accordion1">
                          <div class="row">
                            <div class="col-3">
                              <div class="left_content_module text-center">
                                <h5>Module</h5>
                                <h5>01</h5>
                              </div>
                            </div>
                            <div class="col-9">
                              <div class="right_content_module">
                                <h5>Shopify Basics Understanding</h5>
                                <div class="d-flex align-items-center">
                                  <ul class="nav align-items-center">
                                    <li class="nav-item"><span class="material-symbols-outlined"> school </span> Class</li>
                                    <li class="nav-item"><span class="material-symbols-outlined"> description </span> Practical</li>
                                    <li class="nav-item"><span class="material-symbols-outlined"> note_alt </span>Test</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>

                      <div id="accordion1" class="collapse" aria-labelledby="accordionhead1" data-parent="#accordion">
                        <div class="card-body">
                          <div class="accordion_content_module_wrap">
                            <div class="accordion_content_module">
                              <h5>Class 01 <span class="badge badge-success">Welcome and Orientation</span></h5>
                              <ul>
                                <li>Introduction to the course</li>
                                <li>Setting expectations and goals</li>
                                <li>Ice-breaking activities</li>
                              </ul>
                            </div>
                            <div class="accordion_content_module">
                              <h5>Class 02 <span class="badge badge-success">English Phonetics and Pronunciation</span></h5>
                              <ul>
                                <li>Basics of English phonetics</li>
                                <li>Common pronunciation challenges</li>
                                <li>Practical exercises for improving pronunciation</li>
                              </ul>
                            </div>
                            <div class="accordion_content_module">
                              <h5>Class 03 <span class="badge badge-success">Vocabulary Building</span></h5>
                              <ul>
                                <li>Essential vocabulary for daily communication</li>
                                <li>Word formation and usage</li>
                                <li>Vocabulary enhancement activities</li>
                              </ul>
                            </div>
                            <div class="accordion_content_module">
                              <h5>Class 04 <span class="badge badge-success">Listening Skills</span></h5>
                              <ul>
                                <li>Active listening techniques</li>
                                <li>Understanding different accents</li>
                                <li>Listening comprehension exercise's</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="card">
                      <div class="card-header" id="accordionhead2">
                        <a href="javascript:void(0)" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#accordion2" aria-expanded="true" aria-controls="accordion2">
                          <div class="row">
                            <div class="col-3">
                              <div class="left_content_module text-center">
                                <h5>Module</h5>
                                <h5>02</h5>
                              </div>
                            </div>
                            <div class="col-9">
                              <div class="right_content_module">
                                <h5>Shopify Basics Understanding</h5>
                                <div class="d-flex align-items-center">
                                  <ul class="nav align-items-center">
                                    <li class="nav-item"><span class="material-symbols-outlined"> school </span> Class</li>
                                    <li class="nav-item"><span class="material-symbols-outlined"> description </span> Practical</li>
                                    <li class="nav-item"><span class="material-symbols-outlined"> note_alt </span>Test</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>

                      <div id="accordion2" class="collapse" aria-labelledby="accordionhead2" data-parent="#accordion">
                        <div class="card-body">
                          <div class="accordion_content_module_wrap">
                            <div class="accordion_content_module">
                              <h5>Class 01 <span class="badge badge-success">Welcome and Orientation</span></h5>
                              <ul>
                                <li>Introduction to the course</li>
                                <li>Setting expectations and goals</li>
                                <li>Ice-breaking activities</li>
                              </ul>
                            </div>
                            <div class="accordion_content_module">
                              <h5>Class 02 <span class="badge badge-success">English Phonetics and Pronunciation</span></h5>
                              <ul>
                                <li>Basics of English phonetics</li>
                                <li>Common pronunciation challenges</li>
                                <li>Practical exercises for improving pronunciation</li>
                              </ul>
                            </div>
                            <div class="accordion_content_module">
                              <h5>Class 03 <span class="badge badge-success">Vocabulary Building</span></h5>
                              <ul>
                                <li>Essential vocabulary for daily communication</li>
                                <li>Word formation and usage</li>
                                <li>Vocabulary enhancement activities</li>
                              </ul>
                            </div>
                            <div class="accordion_content_module">
                              <h5>Class 04 <span class="badge badge-success">Listening Skills</span></h5>
                              <ul>
                                <li>Active listening techniques</li>
                                <li>Understanding different accents</li>
                                <li>Listening comprehension exercise's</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="card">
                      <div class="card-header" id="accordionhead3">
                        <a href="javascript:void(0)" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#accordion3" aria-expanded="true" aria-controls="accordion2">
                          <div class="row">
                            <div class="col-3">
                              <div class="left_content_module text-center">
                                <h5>Module</h5>
                                <h5>03</h5>
                              </div>
                            </div>
                            <div class="col-9">
                              <div class="right_content_module">
                                <h5>Shopify Basics Understanding</h5>
                                <div class="d-flex align-items-center">
                                  <ul class="nav align-items-center">
                                    <li class="nav-item"><span class="material-symbols-outlined"> school </span> Class</li>
                                    <li class="nav-item"><span class="material-symbols-outlined"> description </span> Practical</li>
                                    <li class="nav-item"><span class="material-symbols-outlined"> note_alt </span>Test</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>

                      <div id="accordion3" class="collapse" aria-labelledby="accordionhead3" data-parent="#accordion">
                        <div class="card-body">
                          <div class="accordion_content_module_wrap">
                            <div class="accordion_content_module">
                              <h5>Class 01 <span class="badge badge-success">Welcome and Orientation</span></h5>
                              <ul>
                                <li>Introduction to the course</li>
                                <li>Setting expectations and goals</li>
                                <li>Ice-breaking activities</li>
                              </ul>
                            </div>
                            <div class="accordion_content_module">
                              <h5>Class 02 <span class="badge badge-success">English Phonetics and Pronunciation</span></h5>
                              <ul>
                                <li>Basics of English phonetics</li>
                                <li>Common pronunciation challenges</li>
                                <li>Practical exercises for improving pronunciation</li>
                              </ul>
                            </div>
                            <div class="accordion_content_module">
                              <h5>Class 03 <span class="badge badge-success">Vocabulary Building</span></h5>
                              <ul>
                                <li>Essential vocabulary for daily communication</li>
                                <li>Word formation and usage</li>
                                <li>Vocabulary enhancement activities</li>
                              </ul>
                            </div>
                            <div class="accordion_content_module">
                              <h5>Class 04 <span class="badge badge-success">Listening Skills</span></h5>
                              <ul>
                                <li>Active listening techniques</li>
                                <li>Understanding different accents</li>
                                <li>Listening comprehension exercise's</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <div class="card">
                      <div class="card-header" id="accordionhead4">
                        <a href="javascript:void(0)" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#accordion4" aria-expanded="true" aria-controls="accordion2">
                          <div class="row">
                            <div class="col-3">
                              <div class="left_content_module text-center">
                                <h5>Module</h5>
                                <h5>04</h5>
                              </div>
                            </div>
                            <div class="col-9">
                              <div class="right_content_module">
                                <h5>Shopify Basics Understanding</h5>
                                <div class="d-flex align-items-center">
                                  <ul class="nav align-items-center">
                                    <li class="nav-item"><span class="material-symbols-outlined"> school </span> Class</li>
                                    <li class="nav-item"><span class="material-symbols-outlined"> description </span> Practical</li>
                                    <li class="nav-item"><span class="material-symbols-outlined"> note_alt </span>Test</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>

                      <div id="accordion4" class="collapse" aria-labelledby="accordionhead4" data-parent="#accordion">
                        <div class="card-body">
                          <div class="accordion_content_module_wrap">
                            <div class="accordion_content_module">
                              <h5>Class 01 <span class="badge badge-success">Welcome and Orientation</span></h5>
                              <ul>
                                <li>Introduction to the course</li>
                                <li>Setting expectations and goals</li>
                                <li>Ice-breaking activities</li>
                              </ul>
                            </div>
                            <div class="accordion_content_module">
                              <h5>Class 02 <span class="badge badge-success">English Phonetics and Pronunciation</span></h5>
                              <ul>
                                <li>Basics of English phonetics</li>
                                <li>Common pronunciation challenges</li>
                                <li>Practical exercises for improving pronunciation</li>
                              </ul>
                            </div>
                            <div class="accordion_content_module">
                              <h5>Class 03 <span class="badge badge-success">Vocabulary Building</span></h5>
                              <ul>
                                <li>Essential vocabulary for daily communication</li>
                                <li>Word formation and usage</li>
                                <li>Vocabulary enhancement activities</li>
                              </ul>
                            </div>
                            <div class="accordion_content_module">
                              <h5>Class 04 <span class="badge badge-success">Listening Skills</span></h5>
                              <ul>
                                <li>Active listening techniques</li>
                                <li>Understanding different accents</li>
                                <li>Listening comprehension exercise's</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
                </div>

                <div class="col-12 margin_bottom">
                  <h3 class="pb-3 border-bottom font-weight-bold">Course Assessment</h3>
                  <ul class="ml-4 mt-3">
                    <li class="d-flex align-items-center">
                      <div class="dot mr-2"></div> <span>Daily quizzes and assignments</span>
                    </li>
                    <li class="d-flex align-items-center">
                      <div class="dot mr-2"></div> <span>Weekly assessments</span>
                    </li>
                    <li class="d-flex align-items-center">
                      <div class="dot mr-2"></div> <span>Final project for certification: Oral presentation on a chosen topics</span>
                    </li>
                  </ul>
                </div>


                <div class="col-12 margin_bottom">
                  <h3 class="pb-3 border-bottom font-weight-bold">Resources</h3>
                  <ul class="ml-4 mt-3">
                    <li class="d-flex align-items-center">
                      <div class="dot mr-2"></div> <span>Textbook: "Essential Grammar in Use – Raymond Murphy"</span>
                    </li>
                    <li class="d-flex align-items-center">
                      <div class="dot mr-2"></div> <span>Standard lecture sheets</span>
                    </li>
                    <li class="d-flex align-items-center">
                      <div class="dot mr-2"></div> <span>Online various resources for additional practice</span>
                    </li>
                    <li class="d-flex align-items-center">
                      <div class="dot mr-2"></div> <span>Audio and video materials for listening exercises</span>
                    </li>
                    <li class="d-flex align-items-center">
                      <div class="dot mr-2"></div> <span>Comprehensive language club and 9 to 9 support center</span>
                    </li>
                  </ul>
                </div>

                <div class="col-12 margin_bottom">
                  <h3 class="pb-3 border-bottom font-weight-bold">Note</h3>
                  <ul class="ml-4 mt-3">
                    <p>This course outline is flexible and can be adapted based on the specific needs and progress of the participants. Adjustments may be made to cater to the strengths and weaknesses of the class.</p>
                  </ul>
                </div>

              </div>


            </div>

            <div class="col-lg-5 left-wthree-img-video left-wthree-img-video-sticky text-righ pr-lg-5 mt-lg-0 mt-5 d-none d-lg-block">
              <div class="row">
                <div class="col-12 margin_bottom">
                  <div class="position-relative text-center">
                    <img src="assets/images/video.jpg" alt="" class="img-fluid radius-image-full">
                    <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
                      <span class="video-play-icon">
                        <span class="fa fa-play"></span>
                      </span>
                    </a>
                    <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                    <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                      <iframe src="https://player.vimeo.com/video/248099609?color=26e5d8&amp;title=0&amp;byline=0&amp;portrait=0" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>

                <div class="col-12">
                  <div class="course_details">
                    <h3 class="mb-3 font-weight-bold">Course Details</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur ducimus eaque magnam odio sapiente reiciendis ipsam praesentium, incidunt labore animi itaque quas culpa omnis dolorem repellendus placeat ipsum nisi ea. Veniam voluptatem facere numquam temporibus, laborum facilis laboriosam eius inventore quis ratione necessitatibus nemo voluptates tenetur non blanditiis praesentium reprehenderit labore animi harum? Commodi soluta beatae esse illo dolores, omnis fugiat, minus quisquam dolorum blanditiis consequuntur ex iusto neque deleniti alias debitis, aliquam natus libero similique dolor. Velit impedit error consectetur quae? Ipsum officia accusamus laudantium sunt odio laborum nam, fugit assumenda rerum officiis qui dolor, dolorem cum aperiam?</p>
                  </div>
                </div>

              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- course details section -->

  <!-- footer -->
  <?php include 'footer.php' ?>


  <script>
    // Add event listener to toggle class on accordion show/hide
    $('.collapse').on('show.bs.collapse', function() {
      $(this).closest('.card').addClass('card-expanded');
    });

    $('.collapse').on('hide.bs.collapse', function() {
      $(this).closest('.card').removeClass('card-expanded');
    });
  </script>