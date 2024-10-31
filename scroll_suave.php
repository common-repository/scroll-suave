<?php
/*
Plugin Name:  Scroll Suave para Wordpress
URI: https://wordpress.org/plugins/scroll-suave-para-wordpress
Description: Adiciona um efeito suave à rolagem da página por links internos
Version: 1
Author: Jaelson Jacinto de Araújo
Author URI: http://500px.com/jaelsonjacinto
*/

function scroll_suave(){ ?>
	<script type="text/javascript">
		var x = document.getElementsByTagName("body");
		x[0].style.scrollBehavior = "smooth";
		x[0].style.overflowY = "scroll";
	</script>
	<?php }

add_action('wp_footer', 'scroll_suave');
?>