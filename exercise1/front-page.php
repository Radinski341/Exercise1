<?php

/**
 * Template Name: First Custom Page
 */

get_header();
?>
<div class="content-aria">
    <?php if(have_posts()):while (have_posts()):the_post(); ?>
            <article>
                <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                <?php the_excerpt_embed(); ?>
            </article>
    <?php
            endwhile;
        else:
            get_template_part('template-parts/content', 'none');
        endif;
    ?>
</div>
<p>front-page.php</p>

<?php get_footer();
