<!--====== Footer section start ======-->
<footer class="ta-footer<?php if (!(is_front_page()  ||is_page('Deals'))) : ?> bg-secondary<?php endif; ?>">

  <div class="container">
    <div class="py-12 md:py-20">
      <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
        <?php
        if (is_active_sidebar('footer__widget')) {
          dynamic_sidebar('footer__widget');
        };
        ?>
      </div>
    </div>
    <div class="pt-5 pb-6 text-center border-t border-secondary ta-footer-bottom">
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
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6773aa4eaf5bfec1dbe50a49/1igdt2hbr';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>