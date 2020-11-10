<?php

    get_header();
    //haveposts question is there available post?
    //the posts() it enables other posts related function 

    while(have_posts()) {
        the_post(); 
        ?>
        <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>
    <?php }

    get_footer();
    
?>