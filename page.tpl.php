<?php 

include_once('templates/header.tpl.php');

//if language is not selected redirect to home page
if(!isset($_COOKIE['language']))
{
	drupal_goto("node/5");
}

?>


<?php if(drupal_is_front_page()){?>
<div id="bannerWrapper" >
	<div class="container">
		<div class="row">
			<div id="bannerYayinAkisi" class="col-xs-12 col-sm-3 col-md-3">
				<?php  print views_embed_view('program_schedule', 'page_4'); ?>
				<h4 id="yayinTitle" class="p-all-10 text-center no-margin"><?php print t("Airing Schedule"); ?></h4>
			</div>
			<div id="banners" class="col-xs-12 col-sm-9 col-md-8 pull-right">
				<?php include_once('banners.tpl.php');?>
			</div>
		</div>
	</div>
</div>
<div class="bannerShadow m-b-20"></div>

<div class="container p-b-50" id="page-content-home">
    <div class="row">
		<div class="col-md-3 col-xs-12">
			<div id="mostLiked" class="homeBox m-t-15 m-b-15">
				<div class="boxContent">
					<?php  print views_embed_view('most_liked', 'default'); ?>
				</div>
				<div class="boxFooter bgPurpleGrad p-all-10"><?php print t("Most Liked"); ?></div>
				<span class="boxEyes"></span>
			</div>
		</div>
		<div class="col-md-6 col-xs-12">
			<div id="latestPrograms" class="homeBox m-t-15 m-b-15">
				<div class="boxContent clearfix">
				<?php  print views_embed_view('programs', 'block_1'); ?>
				</div>
				<div class="boxFooter bgPinkGrad p-all-10"><?php print t("Programs"); ?></div>
				<span class="boxEyes"></span>
			</div>
		</div>
		<div class="col-md-3 col-xs-12">
			<div id="mostLiked" class="homeBox m-t-15 m-b-15">
				<div class="boxContent no-padding text-center">
					<a href="yayin-akisi/day"><img src="<?php print  $directory;?>/assets/img/yayin-akisi-tv.png"/></a>
				</div>
				<div class="boxFooter bgTealGrad p-all-10"><?php print t("Airing Schedule"); ?></div>
			</div>
		</div>
    </div>
	
	<div class="row m-t-15 m-b-15">
		<div class="col-md-12">
			<div id="clips" class="homeBox z-depth-2 ">
				<div class="boxContent clearfix"><?php  print views_embed_view('latest_clips', 'block_1'); ?></div>
				<div class="boxFooter bgGreenGrad p-all-10"><?php print t("Clips"); ?></div>
				<span class="boxEyes"></span>
			</div>
		</div>
    </div>
	
</div>

<?php }else{?>

<div id="content">
    <div id="content-wrapper" class="container">
        
        <div class="row">
            <div id="col-left" class="col-md-12 col-xs-12">

                <div class="page" class="clearfix">
                  <div class="element-invisible"><a id="main-content"></a></div>
					<?php print $breadcrumb; ?>
                  <?php if ($page['help']): ?>
                    <div id="help">
                      <?php print render($page['help']); ?>
                    </div>
                  <?php endif; ?>
					<?php if ($tabs): ?>
						<div class="tabs">
							<?php print render($tabs); ?>
						</div>
					<?php endif; ?>
					
					<h4 class="page-title"><span class="semi-bold all-caps"><?php print $title;?></span></h4>
					<?php print render($page['content']); ?>                    
                </div>

                
            </div>
        </div>
           
    </div>
</div>    
<?php }?>
<?php include_once('templates/footer.tpl.php');?>
