</section>
<div class="footer" role="banner">
	<footer class="row">
		<div class="small-12 medium-3 hide-for-small columns"><hr></div>
		<div class="small-12 medium-6 columns">
			<section class="text-center">
				<h2>Give us a call:</h2>
				<p class="phone">836-466-4990</p>
				<p>Copyright ©2014 BR Food Group.</p>
			</section>
		</div>
		<div class="small-12 medium-3 hide-for-small columns"><hr></div>
		<?php do_action('foundationPress_before_footer'); ?>
		<?php dynamic_sidebar("footer-widgets"); ?>
		<?php do_action('foundationPress_after_footer'); ?>
	</footer>
	<div class="footer-bottom"></div>
</div>
<a class="exit-off-canvas"></a>

	<?php do_action('foundationPress_layout_end'); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>
