<?php
/*
Template Name: Products
*/
get_header(); ?>
<div class="row">
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
</div>
<div class="row">
	<div class="small-12 medium-4 columns">
		<p><strong>Pre-Baked Kolaches</strong></p>
		<ul>
			<li>Pork/Beef Link</li>
			<li>Pork/Beef &amp; Cheese Link</li>
			<li>Pork/Beef, Jalapeno &amp;amp; Cheese Link</li>
			<li>Sausage, Egg &amp; Cheese</li>
			<li>Bacon, Egg &amp; Cheese</li>
			<li>Apple</li>
			<li>Blueberry</li>
			<li>Cherry</li>
			<li>Cream Cheese</li>
			<li>Strawberry &amp; Cream Cheese</li>
		</ul>
	</div>
	<div class="small-12 medium-4 columns">
		<p><strong>Roller Grill Products</strong></p>
		<ul>
			<li>Pretzel Dog</li>
			<li>Corn Dog</li>
			<li>Hot Dog</li>
		</ul>
		<p><strong><span>Muffins</span></strong></p>
		<ul>
			<li>Banana</li>
			<li>Blueberry</li>
			<li>Apply</li>
			<li>Carrot Cake</li>
			<li>Can Apple with Almonds</li>
			<li>White Chocolate Macadamia</li>
		</ul>
	</div>
	<div class="small-12 medium-4 columns">
		<p><strong>Mini-Pies</strong></p>
		<ul>
			<li>Apple</li>
			<li>Cherry</li>
			<li>Blueberry</li>
			<li>Pecan</li>
			<li>Pumpkin</li>
		</ul>
		<p><strong>Cheesecakes</strong></p>
		<ul>
			<li>Red Velvet</li>
			<li>Vanilla</li>
			<li>Chocolate</li>
			<li>Chocolate &amp; Vanilla Swirl</li>
			<li>Orea</li>
		</ul>
	</div>
</div>
<div class="row">
  <div class="large-12 columns">
    <h1>Product Photos</h1>
        <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
          <li><img src="<?php bloginfo('template_url'); ?>/assets/img/product-apple.jpg"></li>
          <li><img src="<?php bloginfo('template_url'); ?>/assets/img/product-strawberry.jpg"></a></li>
          <li><img src="<?php bloginfo('template_url'); ?>/assets/img/product-cherry.jpg"></a></li>
          <li><img src="<?php bloginfo('template_url'); ?>/assets/img/product-cheese.jpg"></a></li>
          <li><img src="<?php bloginfo('template_url'); ?>/assets/img/product-chocolate.jpg"></a></li>
          <li><img src="<?php bloginfo('template_url'); ?>/assets/img/product-apricot.jpg"></a></li>
          <li><img src="<?php bloginfo('template_url'); ?>/assets/img/product-hameggcheese.jpg"></a></li>
          <li><img src="<?php bloginfo('template_url'); ?>/assets/img/product-sausage-link.jpg"></a></li>
          <li><img src="<?php bloginfo('template_url'); ?>/assets/img/product-sausage-egg.jpg"></a></li>
        </ul>
     </div>
</div>


<?php get_footer(); ?>
