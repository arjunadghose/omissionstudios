<?php get_header(); ?>
    
		<div class="yui-container">
			<div class="yui-gb">
				<div class="yui-u first">
					<?php if( have_posts() ) : ?>
						<?php while( have_posts() ) : the_post(); ?>
							<div class="content">
								<h2><span><?php the_title(); ?></span></h2>
							<?php if(has_post_thumbnail()) : ?>
								<div class="post-thumbnail">
									<?php the_post_thumbnail('thumbnail'); ?>
								</div>
							<?php endif; ?>
							<?php the_content(); ?>
								
							</div>
						<?php endwhile; ?>
					<?php else : ?>
							<!-- Instead of just spitting out text we are using wpautop(), and what this does is it takes
							double line breaks and automatically makes them into paragraphs. It's a good function to
							use when you just want to output text. -->
							<?php echo wpautop( 'Sorry, no posts were found.' ); ?>
					<?php endif; ?>
				</div>
				<div class="yui-u">
					<div class="frontpage-widget-container">
						<?php if(is_active_sidebar('contact-form')) : ?>
							<?php dynamic_sidebar('contact-form'); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	

<?php get_footer(); ?>