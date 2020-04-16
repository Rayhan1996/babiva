<?php
/**
 * The template part for displaying content
 * @package Ecommerce Solution
 * @subpackage ecommerce_solution
 * @since 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="layout3">
    <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
    <?php if( get_theme_mod( 'ecommerce_solution_post_featured_image',true) != '') { ?>
      <div class="box-image">
        <?php the_post_thumbnail(); ?>
      </div>
    <?php }?>
    <div class="metabox">
      <?php if( get_theme_mod( 'ecommerce_solution_metafields_date',true) != '') { ?>
        <i class="<?php echo esc_attr(get_theme_mod('ecommerce_solution_post_date_icon','far fa-calendar-alt')); ?>"></i><span class="entry-date"><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
      <?php }?>
      <?php if( get_theme_mod( 'ecommerce_solution_metafields_author',true) != '') { ?>
        <i class="<?php echo esc_attr(get_theme_mod('ecommerce_solution_post_author_icon','fas fa-user')); ?>"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></span>
      <?php }?>
      <?php if( get_theme_mod( 'ecommerce_solution_metafields_comment',true) != '') { ?>
        <i class="<?php echo esc_attr(get_theme_mod('ecommerce_solution_post_comment_icon','fas fa-comments')); ?>"></i><span class="entry-comments"> <?php comments_number( __('0 Comment', 'ecommerce-solution'), __('0 Comments', 'ecommerce-solution'), __('% Comments', 'ecommerce-solution') ); ?></span>
      <?php }?>
    </div>
    <div class="new-text">
      <?php $theme_lay = get_theme_mod( 'ecommerce_solution_content_settings','Excerpt');
      if($theme_lay == 'Content'){ ?>
        <?php the_content(); ?>
      <?php }
      if($theme_lay == 'Excerpt'){ ?>
        <?php if(get_the_excerpt()) { ?>
          <?php $excerpt = get_the_excerpt(); echo esc_html( ecommerce_solution_string_limit_words( $excerpt, esc_attr(get_theme_mod('ecommerce_solution_post_excerpt_number','30')))); ?>
        <?php }?>
      <?php }?>
    </div>
  </div>
</article>