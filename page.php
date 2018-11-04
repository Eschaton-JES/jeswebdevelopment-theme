<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <div class="col-sm blog-main">
        <div class="jumbotron bg-light blog-main">
          <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
              <div class="blog-post">
                <h1 class="blog-post-title">
                  <?php the_title(''); ?>
                </h1>
                <hr />
                <p><?php the_content(); ?></p>
              </div><!-- /.blog-post -->
          <?php endwhile; ?>
          <?php else : ?>
            <p><?php __('No Page Found'); ?></p>
          <?php endif; ?>
          </div>
        </div><!-- /.blog-main -->
      </div>
    </div>
  <?php get_footer(); ?>
