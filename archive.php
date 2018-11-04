<hr />
<div class="blog-post">
  <h3 class="blog-post-title">
    <?php if(is_single()) : ?>
      <?php  ?>
    <?php else : ?>
      <a class="text-white" href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
      </a>
    <?php endif; ?>
  </h3>
  <p class="blog-post-meta">
    <?php the_time('F Y'); ?>
  </p>
  <hr />
  <div class="row">
  <?php if(has_post_thumbnail()) : ?>
    <div class="post-thumb col-sm">
      <?php the_post_thumbnail(); ?>
    </div>
  <hr />

  <?php endif; ?>

  <?php if(is_single()) : ?>
    	<?php the_content(); ?>
  </div>
  <?php else : ?>
    <div class="col-sm pd-tb">
    	<?php the_excerpt(); ?>
    </div>
  </div>
  <?php endif; ?>


</div><!-- /.blog-post -->
