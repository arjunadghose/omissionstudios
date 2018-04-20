<?php 
//This file shows how a unique template page can be made for a specific page by using that page's ID number.

	get_header(); ?>

	<?php if( have_posts() ) : ?>
		<?php while( have_posts() ) : the_post(); ?>
			<h2><?php the_title(); ?></h2>
			<h1>This page is ID #7</h1>
		<?php	the_content(); ?>
			<hr />
		<?php endwhile; ?>
	<?php else : ?>
			<!-- Instead of just spitting out text we are using wpautop(), and what this does is it takes
			double line breaks and automatically makes them into paragraphs. It's a good function to
			use when you just want to output text. -->
			<?php echo wpautop( 'Sorry, no posts were found.' ); ?>
	<?php endif; ?>

<?php get_footer(); ?>