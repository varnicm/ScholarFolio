
<?php
// Include the header.
get_header();
?>
<main class="container pb-4 bg-white">
    <div id="content" class="pt-2 site-content">
        <div class="row">

<!-- <div class="col-md-12">


<div class="p-5 mb-4 bg-body-tertiary rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Custom jumbotron</h1>
        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <button class="btn btn-primary btn-lg" type="button">Example button</button>
      </div>
    </div>

    <h1>Hello, world!</h1>
</div> -->

<div class="col-md-9">
<?php 
if ( have_posts() ) : while ( have_posts() ) : the_post();
 if ( has_post_thumbnail() ) : 
     $image= get_the_post_thumbnail_url(get_the_ID(), 'medium'); 
 endif; 
 ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="card mb-3 card-post2">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?php echo $image; ?>" class="img-fluid" alt="<?php the_title(); ?>">
            </div> 
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5> 
                    <div class="entry-content card-text">
                      <?php the_excerpt(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

<?php endwhile; else : ?>

    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php endif; ?>


    
</div>
<div class="col-md-3">
<div class="card mb-3 bg-secondary-subtle card-post">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Button</a>
  </div>
</div>

<?php if ( is_active_sidebar( 'custom-sidebar' ) ) : ?>
    <div id="sidebar" class="widget-area">
        <?php dynamic_sidebar( 'custom-sidebar' ); ?>
    </div>
<?php endif; ?>


</div>




</div>
</div>
</main>
<?php
    get_footer();
?>