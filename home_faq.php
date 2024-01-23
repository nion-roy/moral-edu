<style>
  #main {
    margin: 50px 0;
  }

  #main #faq .card {
    margin-bottom: 20px;
    border: 0;
    background-color: var(--bg-light);
    border-radius: 4px;
    border: 1px solid var(--border-color-light);
  }

  #main #faq .card .card-header {
    padding: 0;
    border: 0;
    background: transparent;
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

<section class="w3l-servicesblock py-md-5 py-4">
  <div class="container pb-2">
    <div class="row align-items-center">

      <div class="col-lg-6 about-right-faq align-self mb-lg-0 mb-5 pl-xl-5">
        <h3 class="title-big mb-3">Frequently Asked Question</h3>
        <p class="">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
          ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet.
          Lorem ipsum viverra feugiat.</p>

        <div id="main">
          <div class="accordion" id="faq">
            <div class="card">
              <div class="card-header" id="faqhead1">
                <a href="#" class="btn btn-header-link collapsed" style="color: inherit;" data-toggle="collapse" data-target="#faq1">Why Choose Us</a>
              </div>

              <div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                  moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                  shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                  proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                  aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="faqhead2">
                <a href="#" class="btn btn-header-link collapsed" style="color: inherit;" data-toggle="collapse" data-target="#faq2">Why Choose Us</a>
              </div>

              <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                  moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                  shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                  proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                  aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="faqhead3">
                <a href="#" class="btn btn-header-link collapsed" style="color: inherit;" data-toggle="collapse" data-target="#faq3">Why Choose Us</a>
              </div>

              <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                  moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                  shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                  proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                  aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>

      <div class="col-lg-6 left-wthree-img pr-lg-4">
        <img src="assets/images/img1.jpg" alt="" class="img-fluid">
      </div>

    </div>
  </div>
</section>