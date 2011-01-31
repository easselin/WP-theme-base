<div id="footer">
<p>
Copyright &#169; <?php print(date(Y)); ?> <?php bloginfo('name'); ?>
<br />
Blog propulsé par <a href="http://wordpress.org/">WordPress</a> et con&ccedil;u par <a href="http://www.ericasselin.com">ericasselin.com</a>
</p>
<?php wp_footer(); ?>
</div> <!-- fermeture footer -->

<?php
if ( function_exists( 'yoast_analytics' ) ) { 
  yoast_analytics(); 
}
?>

</div> <!-- fermeture wrapper -->

  <!-- Javascript at the bottom for fast page loading -->

  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/plugins.js?v=1"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js?v=1"></script>

  <!--[if lt IE 7 ]>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/dd_belatedpng.js?v=1"></script>
  <![endif]-->

</body>
</html>