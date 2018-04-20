<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>OmissionStudios | Web and Graphic Design, Halifax NS</title>
		<link rel="icon" 
		  type="image/png" 
		  href="images/favicon.png" />
		<meta name="description" content="Omission Studios Web Design, Halifax, Nova Scotia" />
		<meta name="keywords" content="omission studios,web design,web development,about,arjuna ghose,arjuna d. ghose" />
		<script src="https://simbi.com/widgets.js" async defer></script>
		<?php wp_head(); ?>
		<meta property="og:type" content="website" />
		
		
			<meta property="og:image" content="http://www.omissionstudios.com/wp-content/uploads/2017/12/omissionstudios-os-logo.png" />
				
		
    </head>
	<?php
		if(is_home()) :
			$os_classes = array('os-class1', 'os-class2', 'myclass');
		elseif(page_id == 29) :
			$os_classes = array('os-contact-page');
		else :
			$os_classes = array('os-class0');
		endif;
	?>
	<body <?php body_class($os_classes); ?>>
	<?php 
		//If you have a really simple site with just one menu, you can use wp_nav_menu() with no arguments:
		/* wp_nav_menu(array('theme_location'=>'primary')); */?>
		
		 <div id="doc4">
        
		    <!-- hd -->
		    <header id="hd">
				<div class="row">
					<div class="col-md-12">
						<!-- Static navbar -->
						<nav class="navbar navbar-default">
							<div class="container-fluid">
							  <div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								  <span class="sr-only">Toggle navigation</span>
								  <span class="icon-bar"></span>
								  <span class="icon-bar"></span>
								  <span class="icon-bar"></span>
								</button>
							  </div>
							  <div id="navbar" class="navbar-collapse collapse">
								  <?php 
									//If you have a really simple site with just one menu, you can use wp_nav_menu() with no arguments:
									wp_nav_menu(array(
										'theme_location'=>'primary',
										'container'=>false,
										'menu_class'=>'nav navbar-nav navbar-right'
										)
									);
								?>
							  </div><!--/.nav-collapse -->
							</div><!--/.container-fluid -->
						  </nav>
						
					</div>
				</div>
				
				<div class="logo-container">
					<img id="omissionstudios-logo-larger-device" src="<?php bloginfo('template_directory'); ?>/img/omissionstudios-logo-yellow-orange-w-om-symbol.png" alt="Omission Studios logo and Aum symbol" />
					<h1 id="title"><?php /*  bloginfo("name"); */?></h1>
					<h2 id="description"><?php /* bloginfo("description"); */ ?></h2 />
				</div>
			<img id="sri-chinmoy-front" src="<?php bloginfo('template_directory'); ?>/img/sri-chinmoy-orange-1.png" alt="Sri Chinmoy" />
			<div id="row-contianer">
			
			</div>
			
			
			</header>
            <!-- end hd -->
			
	<!-- bd -->   
<div id="bd">
