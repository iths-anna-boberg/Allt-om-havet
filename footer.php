    <footer class="d-flex flex-wrap justify-content-between aoh-footer">
      <?php
        $logo = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $logo , 'full' );
        $image_url = $image[0];
        if(function_exists('the_custom_logo')){
          echo "<img class='pl-4 aoh-footer-logo' src='$image_url' alt='allt om havet-logo'>";
        }
      ?>

      <div></div>

      <?php if (is_active_sidebar('footer-widget-area')) : ?>
        <div id="footer-widget-area" class="col-lg-4 d-flex justify-content-around p-4">
          <?php dynamic_sidebar('footer-widget-area'); ?>
        </div>
      <?php endif; ?>
    </footer>
    
    <?php wp_footer(); ?>
  </body>
</html>