<?php
/**
 *  Template Name: landing Page
 *
 *
 */

get_header('lp');?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php  if( have_posts() ): ?>
				<?php while( have_posts() ) : the_post();?>

					<h1><?php the_title();?></h1>

					<div class="content">
					<?php the_content();?>
					</div>

				<?php endwhile;?>
			<?php endif;?>
		</main><!-- .site-main -->
</div><!-- .content-area -->


<?php get_footer('lp');?>