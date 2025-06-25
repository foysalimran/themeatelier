<?php
$selected_sections = get_post_meta(get_the_ID(), 'page_metabox', true);
$footer_helpful_links = isset($selected_sections['footer_helpful_links']) ? $selected_sections['footer_helpful_links'] : '';
?>


<!--====== Footer section start ======-->
<footer class="ta-footer cwp-footer">

  <div class="container">
    <div class="py-12 lg:py-20">
      <div class="grid grid-cols-12 gap-7 xl:gap-10">
        <div class="col-span-12 lg:col-span-4">
          <?php echo do_shortcode('[fluentform id="4"]') ?>
        </div>
        <div class="col-span-12 lg:col-span-8">
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-7 xl:gap-10">
            <div>
              <h3 class="mb-5 text-base uppercase">The Company</h3>
              <nav>
                <ul>
                  <li><a href="/portfolio">Portfolio</a></li>
                  <li><a href="/blog">Blog</a></li>
                  <li><a href="/contact">Contact Us</a></li>
                </ul>
              </nav>
              <div class="cwp-footer-icon">
                <h3 class="mb-5 text-base uppercase">Let’s Connect</h3>
                <ul>
                  <li><a href="https://www.facebook.com/ThemeAtelier"><i class="icofont-facebook"></i></a></li>
                  <li><a href="https://twitter.com/themeatelier"><i class="icofont-twitter"></i></a></li>
                  <li><a href="https://www.youtube.com/@themeatelier"><i class="icofont-youtube-play"></i></a></li>
                  <li><a href="https://www.linkedin.com/company/themeatelier"><i class="icofont-linkedin"></i></a></li>
                  <li><a href="https://profiles.wordpress.org/themeatelier"><i class="icofont-brand-wordpress"></i></a></li>
                </ul>
              </div>
            </div>
            <div>
              <h3 class="mb-5 text-base uppercase">Helpful Links</h3>
              <nav>
                <?php echo wp_kses_post($footer_helpful_links); ?>
              </nav>
            </div>
            <div>
              <h3 class="mb-5 text-base uppercase">Terms & Conditions</h3>
              <nav>
                <ul>
                  <li><a href="/refund-policy">Refund Policy</a></li>
                  <li><a href="/terms-conditions">Terms & Conditions</a></li>
                  <li><a href="/privacy-policy">Privacy Policy</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="pt-5 pb-6 text-center border-t !border-border-color border-solid">
            <p>&copy; <span class="text-primary"><a href="<?php echo site_url(); ?>">Themeatelier</a> </span>
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