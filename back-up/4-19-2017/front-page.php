<?php get_header(); ?>
    
<!-- bd -->   
<div id="bd">
    <!-- yui-b -->
	
        <div class="yui-gb">
		
			<div class="yui-u first">
			
				<div class="col one">
					<div class="column1">
						
						<div class="frontpage-widget-container">
							<?php if(is_active_sidebar('column1')) : ?>
								<?php dynamic_sidebar('column1'); ?>
							<?php endif; ?>
						</div>
					</div>
				
				</div>
			
			</div>
			<div class="yui-u">
			
				<div class="col">
					
					<div class="column2">
						<div class="frontpage-widget-container">
							<?php if(is_active_sidebar('column2')) : ?>
								<?php dynamic_sidebar('column2'); ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			
			</div>
			<div class="yui-u">
			
				<div class="col three">
				
					<div class="column3">
						<div class="frontpage-widget-container">
							<?php if(is_active_sidebar('column3')) : ?>
								<?php dynamic_sidebar('column3'); ?>
							<?php endif; ?>
						</div>
					</div>
				
				</div>
			
			</div>
			
		</div>
		<!-- end yui-gb-->
		
<?php get_footer(); ?>