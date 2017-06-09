<div id="topbox">
	<div class="container">
		<div id="topbox-wrapper" class="row">
			<div class="col-xs-4 col-sm-4 col-md-2 col-md-offset-5">
				<a href="#"><?php print t("Frequency Details"); ?></a>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-2">
				<a href="#" class="socialLinks">
					<img src="<?php print $base_path.$directory?>/assets/img/icon-twitter.png"/>
				</a>
				<a href="#" class="socialLinks">
					<img src="<?php print $base_path.$directory?>/assets/img/icon-fb.png"/>
				</a>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-3">
				<?php
				$block = module_invoke('locale', 'block_view', 'language');
				 print $block['content'];
				?>
			</div>
		</div>
	</div>	
</div>



<div id="header" class="" >
    <div class="container">
        <div id="header-wrapper" class="row">
            
			<div id="logoShadow"></div>

			<div id="" class="col-xs-12 col-sm-3 col-md-3">
			    <a class="navbar-brand" id="logo" href="<?php print $base_path?>" title="Anasayfa">
                    <img src="<?php print $base_path.$directory?>/assets/img/logo.png" class="logo" alt="Zarok TV Logo"/>
                </a>
			</div>
			
			<div class="col-xs-12 col-sm-9 col-md-9">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu-links">
						<span class="text-red hidden-xs m-r-10">MENU</span>
						<span class="fa fa-bars x-large-text m-r-5 m-l-5"></span>
					</button>
				</div>

				<nav id="main-menu-links" class="navbar-collapse collapse" role="navigation">
					<?php
					$menu = menu_navigation_links('main-menu');
					print theme('links__system_main-menu', array(
					  'links' => $menu,
					  'attributes' => array(
						'id' => 'main-menu',
						'class' => array('nav navbar-nav navbar-right', 'clearfix'),
					  )
					)); 
					?>
				</nav>
			</div>
						
        </div>    
    </div>
</div>

<?php if ($messages): ?>
<div id="message-box" class="message-box m-b-15 animated bounce">
    <?php print $messages; ?>
</div>
<?php endif; ?>