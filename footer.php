<footer class="container-fluid bg-dark">
  <?php wp_enqueue_style('blog_style'); ?>
  <div class="row">
    <div class="col-sm">
      <p>
        Copyright <?php echo Date('Y'); ?> - <?php echo bloginfo('name') ?>
      </p>
    </div>
    <div class="col-sm">
      <p>
        jeswebdevelopment.com
      </p>
    </div>
    <div class="col-sm text-right footNav">
      <p>
      <a class="text-white" href="http://jeswebdevelopment.com/">| Home |</a>
      <a class="text-white" href="http://jeswebdevelopment.com/index.php/work/"> Work |</a>
      <a class="text-white" href="http://jeswebdevelopment.com/index.php/about/"> About |</a>
      <a class="text-white" href="http://jeswebdevelopment.com/index.php/blog/"> Blog |</a>
      <a class="text-white" href="http://jeswebdevelopment.com/index.php/contact/"> Contact |</a>
    </p>
    </div>
    <div class="col-sm text-right">
      <a id="myBtn" class="btn btn-primary" href="#top">Top</a>
    </div>
  </div>
</footer>
  <?php wp_footer(); ?>
</body>
</html>
