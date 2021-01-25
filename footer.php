    <div>
    <div class="footer-spacer"></div>
    <footer class="d-flex flex-wrap flex-direction-column flex-direction-lg-row justify-content-between align-items-center aoh-footer">
      <?php
        $logo = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $logo , 'full' );
        $image_url = $image[0];
        if(function_exists('the_custom_logo')){
          echo "<img class='pl-lg-4 mx-auto mx-lg-0 aoh-footer-logo' src='$image_url' alt='allt om havet-logo'>";
        }
      ?>

      <div></div>

      <?php if (is_active_sidebar('footer-widget-area')) : ?>
        <ul id="footer-widget-area" class="col-lg-4 mb-lg-0 d-flex justify-content-center justify-content-lg-end">
          <?php dynamic_sidebar('footer-widget-area'); ?>
        </ul>
      <?php endif; ?>
    </footer>
    </div>
    
    <?php wp_footer(); ?>
  </body>
</html>