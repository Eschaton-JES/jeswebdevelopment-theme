<?php
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>

<div class="container">
    <div class="">
      <div class=""></div>
        <div class="jumbotron bg-light blog-main">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
              <h2><?php the_title(); ?></h2>
              <p><?php the_time('F jS, Y') ?></p>
              <hr />
              <?php if(has_post_thumbnail()) : ?>
              <div class="post-thumb col-sm">
                <?php the_post_thumbnail(); ?>
              </div>
              <hr />
              <?php endif; ?>
              <div class="entry">
                <p>Position: <?php the_field('position'); ?></p>
                <p>Description: <?php the_content(); ?></p>
                <?php $website_url = get_field('website_url');
                  if ($website_url) {
                    echo '<a href="' . $website_url . '">View the site</a>';
                  }
                ?>


              </div>
            </div>
          <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div><!-- #content -->
<?php get_footer(); ?>
