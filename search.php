<?php get_header(); ?>
    
		<div class="yui-container">
			<h2 class="page-header">
				Search results for: <span class="os-blue"><?php echo get_search_query(); ?></span>
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
				
				<div class="sidebar">
					<form method="get" action="<?php echo esc_url(home_url('/')); ?>">
						<input type="text" name="s" placeholder="Search..." />
					</form> 
				</div>
			
			</div>
		
<?php get_footer(); ?>