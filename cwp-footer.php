<!--====== Footer section start ======-->
<footer class="ta-footer<?php if (!(is_front_page()  || is_page('Deals'))) : ?> bg-secondary<?php endif; ?>">

  <div class="container">
    <div class="pt-20 pb-20">
      <div class="cwp-footer grid grid-cols-1 gap-7 sm:grid-cols-2 lg:grid-cols-4">
        <div>
          <?php echo do_shortcode('[fluentform id="4"]') ?>
        </div>
        <div>
          <p>The Company</p>
          <nav>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Affiliates</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">About Us</a></li>
            </ul>
          </nav>
          <div class="cwp-footer-icon">
            <p>Let’s Connect</p>
            <ul>
              <li><a href="#"><i class="icofont-facebook"></i></a></li>
              <li><a href="#"><i class="icofont-twitter"></i></a></li>
              <li><a href="#"><i class="icofont-youtube-play"></i></a></li>
              <li><a href="#"><i class="icofont-linkedin"></i></a></li>
              <li><a href="#"><i class="icofont-brand-wordpress"></i></a></li>
            </ul>
          </div>
        </div>
        <div>
          <p>Helpful Links</p>
          <nav>
            <ul>
              <li><a href="#">Features</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Changelogs</a></li>
              <li><a href="#">FAQs</a></li>
              <li><a href="#">My Account</a></li>
              <li><a href="#">Documentation</a></li>
              <li><a href="#">Video Tutorials</a></li>
              <li><a href="#">Submit a Ticket</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class="pt-5 pb-6 text-center border-t !border-border-color border-solid">
      <p>&copy; <span class="text-primary">Themeatelier </span>
        <span id="currentYear"></span>. All rights reserved.
      </p>
    </div>
  </div>
</footer>
<!--====== Footer section end ======-->

<?php wp_footer(); ?>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
  (function() {
    var s1 = document.createElement("script"),
      s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/6773aa4eaf5bfec1dbe50a49/1igdt2hbr';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
  })();
</script>
<!--End of Tawk.to Script-->
</body>

</html>