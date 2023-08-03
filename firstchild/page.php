
<?php get_header(); ?>

<main class="main">

    <div class=" m-auto ">
    
        <?php if (have_posts()) :?><?php while(have_posts()) : the_post(); ?>
        
        <!-- loop content -->

            <?php the_content(esc_html__('Read More...', 'slug-theme'));?>
            

        <?php endwhile; ?>
        <?php previous_posts_link( 'Older posts' ); ?><?php next_posts_link( 'Newer posts' ); ?>
        <?php else : ?>
        <?php esc_html_e('Sorry, no posts matched your criteria.', 'slug-theme'); ?>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>