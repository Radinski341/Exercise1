<?php get_header(); ?>

<?php if(have_posts()): while (have_posts()): the_post(); ?>
<div class="content-aria">
    <article>
        <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
        <p><?php the_excerpt(); ?></p>
    </article>
</div>

	<?php endwhile; ?>
<?php else: ?>
    <div class="container">
        <p>No articles found in <strong><?php echo get_queried_object()->slug; ?></strong> category</p>
    </div>

<?php endif; ?>
<p>archive.php</p>
<?php get_footer(); ?>
