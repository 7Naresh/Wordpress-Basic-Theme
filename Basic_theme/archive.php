<?php get_header(); ?>
<div class="container">
    <h1><?php echo single_cat_title(); ?></h1>

    <?php get_template_part('template-part/includes/content', 'archive'); ?>

    <?php previous_posts_link(); ?>
    <?php next_posts_link(); ?>
</div>
<?php get_footer(); ?>