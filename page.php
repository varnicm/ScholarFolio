<?php get_header(); ?>
<div class="container pb-5 pt-3 bg-white">
        <div class="row">
        <div class="col-md-9">
        <?php bootstrap_breadcrumb(); ?>
    <div id="main" class="site-main ps-3" role="main">

    <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            // Output the page content.
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php
                        the_content();

                    ?>
                </div><!-- .entry-content -->


            </article>
        <?php endwhile; ?>

    </div><!-- .site-main -->
    </div>
<div class="col-md-3">
<?php if ( is_active_sidebar( 'custom-sidebar' ) ) : ?>
    <div id="sidebar" class="widget-area">
        <?php dynamic_sidebar( 'custom-sidebar' ); ?>
    </div>
<?php endif; ?>
</div>
</div>
</div><!-- #main -->
<?php get_footer(); ?>
