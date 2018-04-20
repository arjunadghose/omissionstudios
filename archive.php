<?php get_header(); ?>
    
		<div class="yui-container">
			<h2 class="page-header">
					<?php
						if( is_category() ) {
							echo "Category: "; ?>
							<span class="os-blue"><?php single_cat_title(); ?></span><?php
						} else if( is_author() ) {
							/* the_post() isn't needed all the time; there's a special case where
							this is needed. (same thing with rewind_posts()) */
							the_post();
							echo "Archives by author: " ?>
							<span class="os-blue"><?php echo get_the_author(); ?></span><?php
							rewind_posts();
						} else if( is_tag() ) {
							single_tag_title();
						} else if( is_day() ) {
							echo "Archives By Date: " . get_the_date();
						} else if( is_month() ) {
							echo "Archives By Month: " . get_the_date( 'F Y' );
						} else if( is_year() ) {
							echo "Archives By Year: " . get_the_date( 'Y' );
						} else {
							echo "Archives";
						}
					?>
				</h2>
				<div class="content-container">
					<?php  if( have_posts() ) : ?>
						<?php while( have_posts() ) : the_post(); ?>
							<?php get_template_part('content'); ?>
						<?php endwhile; ?>
					<?php else : ?>
							<!-- Instead of just spitting out text we are using wpautop(), and what this does is it takes
							double line breaks and automatically makes them into paragraphs. It's a good function to
							use when you just want to output text. -->
							<?php echo wpautop( 'Sorry, no posts were found.' ); ?>
					<?php endif; ?> 
				</div>
		
<?php get_footer(); ?>