<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hexagone-Capital
 */

?>
<?php $upload_dir = wp_upload_dir(); ?>

<footer id="colophon" role="content info">

  <nav class="navbar navbar-fixed-bottom" style="
      background: #f2f0ed;
      left: 0;
      bottom: 0;
      width: 100%;">

<div class="container2">
<p><a href="https://www.hexagone-capital.com/carriere/" target="_blank">Carrières</a> &nbsp&nbsp <a href="https://www.hexagone-capital.com/contact/" target="_blank">Contact</a> &nbsp&nbsp <a href="https://www.hexagone-capital.com/protection-des-donnees/" target="_blank">Protection des données</a></p>
<p>Suivez-nous sur les réseaux sociaux pour connaître nos opportunités et évènements</p>
<p><a href="https://www.facebook.com/hexagonecapital/" target="_blank">FACEBOOK</a> &nbsp&nbsp <a href="https://www.linkedin.com/company/hexagone-capital" target="_blank">LINKEDIN</a> &nbsp&nbsp <span class=" popmake-539 popmake-qr-code">WECHAT</span></p>
<p> <img src="https://www.hexagone-capital.com/wp-content/uploads/footbar.png" class="footbar"></p>
<p> <img src="https://www.hexagone-capital.com/wp-content/uploads/HC_Logo_footer.png" class="footlogo"></p>
<p>© 2019 Hexagone Capital</p>
</div>

</nav>
</footer><!-- #colophon -->
</div><!-- #page -->
<script>
$(function() {
         $.scrollify({
           section: ".scrollect",
           sectionName: "scrollect",
           interstitialSection: "",
           easing: "easeOutExpo",
           scrollSpeed: 1100,
           offset: 0,
           scrollbars: true,
           target:"html,body",
           standardScrollElements: false,
           setHeights: true,
           overflowScroll:true,
           updateHash: true,
           touchScroll:true,
           before:function() {},
           after:function() {},
           afterResize:function() {},
           afterRender:function() {}
         });
       });
</script>
<?php wp_footer(); ?>

</body>
</html
