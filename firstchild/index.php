
<?php get_header(); ?>

    
    <h1> <?php bloginfo('title'); ?></h1>

    <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>
    
      <!-- loop content -->

      <?php the_title(); ?>

      <?php the_excerpt();?>
    
    <?php endwhile; ?>
      <p><?php previous_posts_link( 'Older posts' ); ?> - <?php next_posts_link( 'Newer posts' ); ?></p>
    <?php else : ?>
      <p><?php esc_html_e('Sorry, no posts matched your criteria.', 'slug-theme'); ?></p>
    <?php endif; ?>


<?php get_footer(); ?>