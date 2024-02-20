<?php get_header(); ?>
<?php
the_post();

?>

<div class="bread-crumbs">
    <a href="/wordpress/index.php">Home</a>/
    <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
    <hr>
</div>

<div class="container">
    <div>
        <h1><?php the_title() ?></h1>

        <?php the_content(); ?>

        <p><i>Published by: <strong><?php the_author_link(); ?></strong></i></p>
    </div>
</div>
<p>single.php</p>
<?php get_footer(); ?>
