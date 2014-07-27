<div class="top-bar-container contain-to-grid show-for-medium-up">
    <ul class="title-area no-bullet text-center">
        <li class="logo">
            <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/assets/img/brfoodgroup-logo.svg" alt="BR Food Group" title="BR Food Group"></a>
        </li>
    </ul>
    <div class="row">
        <div class="top-bar-bg small-12">
            <nav class="top-bar center" data-topbar="">
                <section class="top-bar-section">
                    <?php foundationPress_top_bar_l(); ?>
                    <?php foundationPress_top_bar_r(); ?>
                </section>
            </nav>
        </div>
    </div>
</div>