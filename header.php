<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<!-- START -->
		<header id="masthead" class="site-header">

			<nav class="navbar navbar-expand-md">
				<div class="container justify-content-center container-fluid">
					<a class="navbar-brand" href="<?= esc_url(home_url()); ?>">
						<?php
						$navlogo = get_field('coastal_construction_services_nav_logo', 'option');
						$navlogourlalt = $navlogo['alt'];
						$navlogotitle = $navlogo['title'];
						$navlogourl = $navlogo['url']; ?>
						<img class="logo p-5 img-fluid" src="<?php if ($navlogourl) echo esc_url($navlogourl) ?: 'CCS'; ?>" height="75" width="185" alt="<?php if ($navlogourlalt) echo esc_attr($navlogourlalt) ?: 'Coastal Construction Services Logo'; ?>" />
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="true" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="main-menu">
						<?php
						wp_nav_menu(array(
							'theme_location' => 'main-menu',
							'container' => true,
							'menu_class' => 'd-flex flex-wrap py-3 text-white',
							'fallback_cb' => '__return_false',
							'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto gap-3 mb-2 mb-lg-0 w-100 justify-content-end text-white %2$s">%3$s</ul>',
							'depth' => 2,
							'walker' => new bootstrap_5_wp_nav_menu_walker()
						));
						?>
					</div>
				</div>
			</nav>
		</header><!-- #masthead -->
		<!-- END -->
		<div id="content" class="site-content">