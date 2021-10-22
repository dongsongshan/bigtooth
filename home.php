<?php get_header(); ?>




<div class="container md:w-3/5 mx-auto">
<?php
echo "<ul class='bg-rose-200 leading-loose py-12 divide-y divide-gray-200 divide-dashed'>";
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        
        echo "<li class='flex flex-row justify-between'><a class='block py-2' href='";
        the_permalink();
        echo "'>";
        the_title();
        // the_title_attribute();
        echo "</a><span class='py-2'>";
        the_date();
        the_time();
        // the_post_thumbnail(); 
        the_category( ', ' );
        echo "</span></li>";
    
    endwhile;

    else :
        _e( 'Sorry, no posts matched your criteria.', 'devhub' );
    endif;
echo "<ul>";


the_posts_pagination( array(
    'mid_size' => 3,
    'prev_text' =>'上一页',
    'next_text' =>'下一页',
    'before_page_number' => '<span class="meta-nav screen-reader-text">第 </span>',
    'after_page_number' => '<span class="meta-nav screen-reader-text"> 页</span>',
    ) );
?>
</div>
<?php get_footer(); ?>