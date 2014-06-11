<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package cornerstone
 */
?>

	</div><!-- #content -->

	<footer id="footer" class="site-footer" role="contentinfo">
		<div class="container">
			<ul id="uc-footer-links" class="clearfix">
		    	<?php
				$options = get_option('uconn_banner_options');
				$text_string = $options['text_string'];
				$location = $text_string;
				if($location == 'uchc'){
				?>
		        <li>
		        	<a href="http://www.uchc.edu/siteindex/index.html">A-Z Index</a>
		        </li>
		        <li>
		        	<a href="http://www.uchc.edu/" >UConn Health</a>
		        </li>
		        <li>
		        	<a href="http://www.uchc.edu/disclaimer/index.html">Disclaimer, Privacy Notice &amp; Copyright</a>
		        </li>
		        <li>
		        	<a href="http://www.uchc.edu/directions/index.html" >Maps &amp; Directions</a>
		        </li>
		        <li>
		        	<a href="http://www.uchc.edu/contact/index.html">Contact Us</a>
		        </li>
		        <li>
		        	&copy; University of Connecticut Health Center
		        </li>  
		        <?php
				} else {
				?>
				<li>
					&copy; <a href="http://uconn.edu">University of Connecticut</a>
				</li>
				<li>
					<a href="http://uconn.edu/disclaimers-and-copyrights.php">Disclaimers, Privacy &amp; Copyright</a>
				</li>
				<?php
				}
				?>
				<li>
					<a href="<?php echo site_url(); ?>/wp-admin/">Webmaster Login</a>
				</li>
		        <?php
				
		        // Only display the footer if a menu of "Footer" exists in the site. 
				if (wp_get_nav_menu_object('Footer')){
					$defaults = array(
						'menu'			=> 'Footer',
						'container'       => false,
						'items_wrap'      => '%3$s',
						'depth'			=> 1
					);
					wp_nav_menu( $defaults );
		        }
			
				?>
			</ul>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
