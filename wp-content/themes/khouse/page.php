<?php
get_header();
    if (have_posts()):
        while (have_posts()) : the_post(); ?>
            <article class="page">
                <?php
                    $args = array (
                        'child_of' => $post->ID,
                        'title_li' => ''
                    );

                ?>
                <?php wp_list_pages($args); ?>
                
                
                <h2><?php the_title(); ?></h2>
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
