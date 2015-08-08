			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

<!--					<p class="source-org copyright">&copy; --><?php //echo date('Y'); ?><!-- arielibarra.com</p>-->
                    <ul class="follow-me">
                        <li>&copy; <?php echo date('Y'); ?> arielibarra.com</li>
                        <li>|</li>
                        <li>follow me on</li>
                        <li>
                            <a target="_blank" href="https://github.com/aIbarrab">
                                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/library/images/github_icon_white.png" alt=""/>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://twitter.com/aibarrab">
                                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/library/images/twitter_icon_white.png" alt=""/>
                            </a>
                        </li>
                    </ul>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
