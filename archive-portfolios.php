<?php
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>
<div class="container">
    <div class="row">
      <div class="col-sm"></div>
        <div class="jumbotron bg-light blog-main">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <hr />
          <div class="blog-post bg-light">
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
              <div class="col-sm">
              	<?php the_excerpt(); ?>
              </div>
            <?php endif; ?>
          <?php endwhile; endif; ?>
            </div>
          </div><!-- /.blog-post -->
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
