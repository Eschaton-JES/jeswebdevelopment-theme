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
            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
              <h1><?php the_title(); ?></h1>
              <p><?php the_time('F jS, Y') ?></p>
              <hr />
              <?php if(has_post_thumbnail()) : ?>
              <div class="post-thumb-single col-sm">
                <?php the_post_thumbnail(); ?>
              </div>
              <hr />
              <?php endif; ?>
              <div class="entry">
                  <?php
                  if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                  }
                  ?>
                <?php the_content(); ?>
              </div>
              <hr />
              <div class="navigation">
                <div class="prev-alignleft">
                <?php previous_post_link(); ?>
                </div>
                <div class="next-alignright">
                <?php next_post_link(); ?>
                </div>
              </div> <!-- end navigation -->
            </div>
          <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div><!-- #content -->
<?php get_footer(); ?>
