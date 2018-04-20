<?php if(!is_front_page() && is_home()) : ?>
		<div class="sidebar">
			<form method="get" action="<?php echo esc_url(home_url('/')); ?>">
				<input type="text" name="s" placeholder="Search..." />
			</form>

			<?php if(is_active_sidebar('sidebar')) : ?>
				<?php dynamic_sidebar('sidebar'); ?>
			<?php endif; ?>
		</div>
		
	
<?php endif; ?>
			
		</div><!-- .yui-container -->
				
			<!-- ft -->	
            <footer id="ft">
				<div class="footer-note right">OmissionStudios is eternally <span>dedicated to serving the world family.</span></div>
	            <p id="copyright">
					
		        &copy <?php bloginfo('name'); ?>, <?php echo date('Y'); ?>; All Rights Reserved.
	            </p>
				<?php /* wp_nav_menu(array('theme_location'=>'footer')); */?>
				<div class="footer-note left">Web design by <a href="http://www.omissionstudios.com" title="OmissionStudios"><img style="display:inline-block;position:relative;top:-9px;" id="os-logo-small" src="<?php bloginfo('template_directory'); ?>/img/os-logo-small.png" alt="OmissionStudios small logo" /></a></div>
            </footer>
            <!-- end ft -->
			</div>
		<!-- end bd -->
       </div>
        <!-- end doc -->
		<?php  wp_footer(); ?>
		<script type="text/javascript" language="Javascript" src="script.js"></script>
	</body>
</html>

