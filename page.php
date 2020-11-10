<?php
    //haveposts question is there available post?
    //the posts() it enables other posts related function 

    while(have_posts()) {
        the_post(); 
        ?>
        <h1> This is a page not a post</h1>
        <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div>
    <?php }

?>