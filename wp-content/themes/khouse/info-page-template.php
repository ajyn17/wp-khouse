<?php

/*Template Name: Info layout*/
get_header();
    if (have_posts()):
        while (have_posts()) : the_post(); ?>
            <article class="info-page">
                <h2><?php the_title(); ?></h2>
                
                <div class="info-box">
                    <h4>Disclaimer TItle</h4>
                    <p>DUMMY TEXT</p>
                </div>
                <article class="content">
                    <?php the_content(); ?>                    
                </article>
            </article>
        <?php endwhile;
    else:
            echo '<p> Nothing </p>';
    endif;

get_footer();

?>
