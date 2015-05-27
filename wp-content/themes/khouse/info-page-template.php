<?php

/*Template Name: Info layout*/
get_header();
    if (have_posts()):
        while (have_posts()) : the_post(); ?>
            <article class="info-page">
              <nav class="site-nav child-links clearfix">
                    <span class="parent-link"><a href="<?php echo get_the_permalink(get_parent_page_id());?>"><?php echo get_the_title(get_parent_page_id()); ?></a></span>
                    <ul>
                    <?php
                        $args = array (
                            'child_of' => get_parent_page_id(),
                            'title_li' => ''
                        );

                    ?>
                    <?php wp_list_pages($args); ?>
                    </ul>
                </nav>
                <?php if (the_title('','',false) != get_the_title(get_parent_page_id())):?>
                    <h2><?php the_title(); ?></h2>
                <?php endif; ?>
                
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
