<footer class="container-fluid bg-dark">
  <?php wp_enqueue_style('blog_style'); ?>
  <div class="row">
    <div class="col-sm">
        Copyright <?php echo Date('Y'); ?> - <?php echo bloginfo('name') ?>
    </div>
    <div class="col-sm" style="text-align: center;">
      <a class="social-link" href="https://twitter.com/JES_WebDev" target="_blank">
        <i class="fab fa-twitter fa-lg"></i>
      </a>
      <a class="social-link" href="https://www.linkedin.com/in/jesse-sugden-210677145/" target="_blank">
        <i class="fab fa-linkedin-in fa-lg"></i>
      </a>
      <!-- <a class="social-link" href="https://twitter.com/JES_WebDev" target="_blank">
        <i class="fab fa-twitter fa-lg"></i>
      </a> -->
    </div>
    <div class="col-sm text-right footNav">
      <a class="text-white" href="https://jeswebdevelopment.com/">| Home |</a>
      <a class="text-white" href="https://jeswebdevelopment.com/portfolio/"> Portfolio |</a>
      <a class="text-white" href="https://jeswebdevelopment.com/about/"> About |</a>
      <a class="text-white" href="https://jeswebdevelopment.com/blog/"> Blog |</a>
      <a class="text-white" href="https://jeswebdevelopment.com/contact/"> Contact |</a>
    </div>
    <!-- <div class="col-sm text-right">
      <a id="myBtn" class="btn btn-primary" href="#top">Top</a>
    </div> -->
  </div>
  <!-- Hotjar Tracking Code for https://jeswebdevelopment.com/ -->
  <script>
      (function(h,o,t,j,a,r){
          h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
          h._hjSettings={hjid:1067104,hjsv:6};
          a=o.getElementsByTagName('head')[0];
          r=o.createElement('script');r.async=1;
          r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
          a.appendChild(r);
      })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
  </script>
</footer>
<link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">

  <?php wp_footer(); ?>
</body>
</html>
