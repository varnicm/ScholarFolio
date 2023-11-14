<footer class="container footer mt-auto p-5 text-light ">
        <div class="row">
          <?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
            <?php dynamic_sidebar( 'footer-widget-area' ); ?>
          <?php endif; ?>  
 
        </div>
</footer>
<div class="container mb-3">
<div class="row bg-dark text-light">
    <?php if ( is_active_sidebar( 'after-footer-widget-area' ) ) : ?>
      <?php dynamic_sidebar( 'after-footer-widget-area' ); ?>
    <?php endif; ?>  


  </div>

</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>