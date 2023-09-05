<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>
<?php
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="">
			<?php the_content(); ?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
