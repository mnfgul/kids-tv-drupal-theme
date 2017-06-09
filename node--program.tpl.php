<div id="n-<?php print $node->nid; ?>" class="row program-page  <?php print $classes; ?>">
	<?php
     	print render($content['rate_like']['#markup']);
     ?>
	<div class="col-md-5 col-xs-12 p-t-15">
		 <?php print render($content['field_program_photo'][0]); ?>

	</div>
	<div class="col-md-7 col-xs-12 p-t-15">
		<h3 class="page-sub-title no-margin p-b-15"><?php print $title; ?></h3>
		<p class="ageLevel muted"><?php print render($content['field_age_level']); ?></p>
		<div class="program-info">
		<?php
			print render($body[0]['value']);
		?>
		</div>
		<div class="program-dates p-t-15">
			<h5 class="text-purple"><?php print t("Airing Date and Time");?>:</h5>
			<?php print render($content['field_program_date']); ?>
		</div>
	</div>
</div>