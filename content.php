<?php if(is_search() || is_archive()) : ?>

<div class="content">
	<div class="inner-content">
		<h4><a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a></h4>
		<span class="meta">
			<small>By
				<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
					<?php the_author(); ?>
				</a>
					on <?php the_time('D., j M. Y');?> 
					| Categories:
					<?php 
						$categories = get_the_category();
						$separator = ", ";
						$output = '';
						
						if ($categories) {
							foreach ($categories as $category) {
								$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
							}
						}
						
						echo trim($output, $separator);
					?>
			</small>
		</span>
	<?php if(has_post_thumbnail()) : ?>
		<div class="post-thumbnail">
			<?php the_post_thumbnail('medium'); ?>
		</div>
	<?php endif; ?>
	<p><?php the_excerpt(); ?></p>
		<h3 class="blurb-three-dots"><a href="<?php the_permalink(); ?>">&#8226;&nbsp;&#8226;&nbsp;&#8226;</a></h3>
	</div>
</div>

<?php elseif(is_single()) : ?>

<div class="content">
	<div class="inner-content">
		<h3><?php the_title(); ?></h3>
		<p class="meta">
			<small>By
				<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
					<?php the_author(); ?>
				</a>
					on <?php the_time('D., j M. Y');?> 
					| Categories:
					<?php 
						$categories = get_the_category();
						$separator = ", ";
						$output = '';
						
						if ($categories) {
							foreach ($categories as $category) {
								$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
							}
						}
						
						echo trim($output, $separator);
					?>
			</small>
		</p>
	<?php if(has_post_thumbnail()) : ?>
		<div class="post-thumbnail">
			<?php the_post_thumbnail('medium'); ?>
		</div>
	<?php endif; ?>
	<p><?php the_content(); ?></p>
	</div>
</div>

<?php else : ?>

<div class="content">
	<div class="inner-content">
		<h3><a href="<?php the_permalink(); ?>"><span><?php the_title(); ?></span></a></h3>
		<span class="meta">
			<small>By
				<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
					<?php the_author(); ?>
				</a>
					on <?php the_time('D., j M. Y');?> 
					| Categories:
					<?php 
						$categories = get_the_category();
						$separator = ", ";
						$output = '';
						
						if ($categories) {
							foreach ($categories as $category) {
								$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
							}
						}
						
						echo trim($output, $separator);
					?>
			</small>
		</span>
	<?php if(has_post_thumbnail()) : ?>
		<div class="post-thumbnail">
			<?php the_post_thumbnail('medium'); ?>
		</div>
	<?php endif; ?>
	<p><?php the_excerpt(); ?></p>
		<h3 class="blurb-three-dots"><a href="<?php the_permalink(); ?>">&#8226;&nbsp;&#8226;&nbsp;&#8226;</a></h3>
	</div>
</div>

<?php endif; ?>