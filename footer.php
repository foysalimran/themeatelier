   <!--====== Footer section start ======-->
   <footer class="ta-footer<?php if (!is_front_page()) : ?> bg-secondary<?php endif; ?>">
     <div class="container">
       <div class="pt-20 pb-20">
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
   <!-- Start of Async Drift Code -->
   <script>
     "use strict";

     ! function() {
       var t = window.driftt = window.drift = window.driftt || [];
       if (!t.init) {
         if (t.invoked) return void(window.console && console.error && console.error("Drift snippet included twice."));
         t.invoked = !0, t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on"],
           t.factory = function(e) {
             return function() {
               var n = Array.prototype.slice.call(arguments);
               return n.unshift(e), t.push(n), t;
             };
           }, t.methods.forEach(function(e) {
             t[e] = t.factory(e);
           }), t.load = function(t) {
             var e = 3e5,
               n = Math.ceil(new Date() / e) * e,
               o = document.createElement("script");
             o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
             var i = document.getElementsByTagName("script")[0];
             i.parentNode.insertBefore(o, i);
           };
       }
     }();
     drift.SNIPPET_VERSION = '0.3.1';
     drift.load('6h5tuhy2swrh');
   </script>
   <!-- End of Async Drift Code -->
   </body>

   </html>