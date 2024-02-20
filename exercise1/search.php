<?php get_header() ?>

<div class="content-aria">
    <?php if(have_posts()):while (have_posts()):the_post(); ?>
            <article>
                <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                <?php the_excerpt(); ?>
            </article>
    <?php
            endwhile;
        else:
            _e('No results matched your search query');
        endif;
    ?>

</div>
<p>search.php</p>

<?php get_footer() ?>
