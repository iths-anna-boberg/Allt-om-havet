    <footer class="d-flex flex-wrap justify-content-between aoh-footer">
      <img class="pl-4 aoh-footer-logo" src="./mockup-assets/aoh-logo.png" alt="allt om havet-logo">

      <?php if (is_active_sidebar('footer')) : ?>
        <div class="footer-widget-area">
          <?php dynamic_sidebar('footer'); ?>
        </div>
      <?php endif; ?>

      <div class="col-lg-4 d-flex justify-content-around p-4">
        <span class="aoh-text-white">info@alltomhavet.se</span>
        <span class="aoh-text-white">0746-24 31 42</span>
      </div>
    </footer>
  </body>
</html>