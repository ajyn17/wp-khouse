<?php
get_header();
    if (have_posts()):
?>
      <h2><?php
    
            if(is_category()){
                single_cat_title();
            }
            elseif(is_day()){
                echo get_the_date();
            }
            elseif(is_month()){
                echo 'month';
            }
            elseif(is_year()){
                echo 'Yearly Arhcives' get_the_date(Y);
            }            
            elseif(is_author()){
                the_post();
                echo 'Author Archives:' . get_the_author();
                rewind_posts();
            }
            else{
                echo 'Archives'
            }

        ?></h2>
       <?php
        while (have_posts()) : the_post(); ?>
            <article class="post">
                <article class="page">
                
                
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
