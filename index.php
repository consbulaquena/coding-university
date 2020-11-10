<?php get_header(); 

    //haveposts question is there available post?
    //the posts() it enables other posts related function 

    while(have_posts()) {
        the_post(); 
        ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2></a>
        <div><?php the_content(); ?></div>
    <?php }

?>