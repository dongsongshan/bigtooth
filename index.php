<?php get_header(); ?>
<?php bloginfo( 'name' ); ?>
<?php bloginfo( 'version' ); ?>
<?php
if ( have_posts() ) :
    while ( have_posts() ) :
    the_post();
    the_content();
    endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'devhub' );
    endif;
?>

<?php get_footer(); ?>