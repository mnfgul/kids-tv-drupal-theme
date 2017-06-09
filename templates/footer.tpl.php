<footer id="footer">
	<div id="footerMenu">
		<?php
		$menu = menu_navigation_links('menu-footer-menu');
		print theme('links__system_menu-footer-menu', array(
          'links' => $menu,
          'attributes' => array(
            'id' => 'footer_menu_links',
            'class' => array('inline-links no-style', 'clearfix'),
          )
        )); 
		?>
	</div>
	<div id="copyright" class="container">
		<?php print t("All rights reserved"); ?> © 2014 Zarok TV
	</div>
</footer>
