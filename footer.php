<footer class="w3l-footer-22 position-relative">
  <div class="footer-sub">
    <div class="container">
      <div class="text-txt">
        <div class="row sub-columns">
          <div class="col-lg-4 col-md-6 col-sm-8 sub-one-left">
            <h6>About </h6>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
              doloremque
              laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
            <div class="columns-2">
              <ul class="social">
                <li><a href="#facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                </li>
                <li><a href="#linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                </li>
                <li><a href="#twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                </li>
                <li><a href="#google"><span class="fa fa-google-plus" aria-hidden="true"></span></a>
                </li>
                <li><a href="#github"><span class="fa fa-github" aria-hidden="true"></span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-4 mt-sm-0 mt-5 sub-two-right">
            <h6>Quick links</h6>
            <ul>
              <li><a href="index-2.html"><span class="fa fa-angle-double-right mr-2"></span>Home</a>
              </li>
              <li><a href="about.html"><span class="fa fa-angle-double-right mr-2"></span>About</a>
              </li>
              <li><a href="courses.html"><span class="fa fa-angle-double-right mr-2"></span>Courses</a></li>
              <li><a href="contact.html"><span class="fa fa-angle-double-right mr-2"></span>Contact</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-sm-6 sub-two-right pl-lg-5 mt-lg-0 mt-sm-5 mt-4">
            <h6>Help & Support</h6>
            <ul>
              <li><a href="#live"><span class="fa fa-angle-double-right mr-2"></span>Live
                  Chart</a></li>
              <li><a href="#faq"><span class="fa fa-angle-double-right mr-2"></span>Faq</a>
              </li>
              <li><a href="#support"><span class="fa fa-angle-double-right mr-2"></span>Support</a>
              </li>
              <li><a href="#terms"><span class="fa fa-angle-double-right mr-2"></span>Terms
                  of Services</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-sm-6 sub-one-left mt-lg-0 mt-sm-5 mt-4">
            <h6>Contact </h6>
            <div class="column2">
              <div class="href1"><span class="fa fa-envelope-o" aria-hidden="true"></span><a href="https://p.w3layouts.com/cdn-cgi/l/email-protection#751c1b131a35100d14180519105b161a18"><span class="__cf_email__" data-cfemail="157c7b737a55706d74786579703b767a78">[email&#160;protected]</span></a>
              </div>
              <div class="href2"><span class="fa fa-phone" aria-hidden="true"></span><a href="tel:+44-000-888-999">+44-000-888-999</a>
              </div>
              <div>
                <p class="contact-para"><span class="fa fa-map-marker" aria-hidden="true"></span>London, 235 Terry, 10001</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class="copyright-footer text-center">
    <div class="container">
      <div class="columns">
        <p>@2020 Online Study. All rights reserved. Design by <a href="https://w3layouts.com/" target="_blank"> W3Layouts</a>
        </p>
      </div>
    </div>
  </div>
  <!-- //copyright -->
</footer>
<!-- //footer -->

<!-- Js scripts -->
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
  <span class="fa fa-level-up" aria-hidden="true"></span>
</button>


<!-- partial -->
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/lightgallery.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/plugins/zoom/lg-zoom.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.0.0-beta.3/plugins/fullscreen/lg-fullscreen.umd.js"></script>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Initialize each gallery container separately
    const gallery1 = document.getElementById("gallery1");
    const gallery2 = document.getElementById("gallery2");
    const gallery3 = document.getElementById("gallery3");

    const initializeGallery = (container) => {
      lightGallery(container, {
        speed: 500,
        plugins: [lgZoom, lgFullscreen],
      });

      const requestFullScreen = () => {
        const el = document.documentElement;
        if (el.requestFullscreen) {
          el.requestFullscreen();
        } else if (el.msRequestFullscreen) {
          el.msRequestFullscreen();
        } else if (el.mozRequestFullScreen) {
          el.mozRequestFullScreen();
        } else if (el.webkitRequestFullscreen) {
          el.webkitRequestFullscreen();
        }
      };

      container.addEventListener("lgAfterOpen", () => {
        requestFullScreen();
      });
    };

    initializeGallery(gallery1);
    initializeGallery(gallery2);
    initializeGallery(gallery3);
  });
</script>

<?php include 'script.php' ?>