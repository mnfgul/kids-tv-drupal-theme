<?php 
if(isset($_COOKIE['language']))
{
	drupal_goto("");
}
?>
<div id="landingPage">
	<div class="container">
		<?php
			$block = module_invoke('locale', 'block_view', 'language');
			print $block['content'];
		?>
	</div>
</div>