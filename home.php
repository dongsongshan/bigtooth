<?php get_header(); ?>
<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        echo "<a href='";
        the_permalink();
        echo "'>";
        the_title();
        echo "</a>";

    
    echo "<hr>";
    
    endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'devhub' );
    endif;
?>

<?php get_footer(); ?>