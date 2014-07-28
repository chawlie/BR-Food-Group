<?php
/*
Template Name: Home Page
*/
get_header(); ?>
<div class="hero">
	<div class="row">
		<div class="small-12 medium-10 push-1 columns text-center">
			<h1>Our Passion Your Profit</h1>
		</div>
	</div>
</div>
<div class="welcome">
	<div class="row">
		<div class="small-12 large-5 columns">
			<img src="<?php bloginfo('template_url'); ?>/assets/img/rawkolache.jpg">
		</div>
		<div class="small-12 large-7 columns">
			<h2>Welcome to The BR Food Group</h2>
			<p>When you combine experts in baking, professionals in research and development, skilled customer service reps and savvy food brokers, what you’re left with are the raw ingredients for success.</p>
			<span class="button">Learn More About Us</span>
		</div>
</div>
</div>
<div class="row">
	<div class="small-12 medium-4 columns home-feature text-center">
		<img class="icon" src="<?php bloginfo('template_url'); ?>/assets/img/magnify.svg">
		<img src="<?php bloginfo('template_url'); ?>/assets/img/packaging.jpg">
		<span class="button">Our Client List</span>
	</div>
	<div class="small-12 medium-4 columns home-feature text-center">
		<img class="icon" src="<?php bloginfo('template_url'); ?>/assets/img/bread.svg">
		<img src="<?php bloginfo('template_url'); ?>/assets/img/sausage-egg.jpg">
		<span class="button">Our Products</span>
	</div>
	<div class="small-12 medium-4 columns home-feature text-center">
		<img class="icon" src="<?php bloginfo('template_url'); ?>/assets/img/envelope.svg">
		<img src="<?php bloginfo('template_url'); ?>/assets/img/temperature.jpg">
		<span class="button">Contact Us</span>
	</div>
<!-- <div class="row">
	<div class="small-12 large-12 columns" role="main">

	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
 			<?php comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
</div> -->

<?php get_footer(); ?>
