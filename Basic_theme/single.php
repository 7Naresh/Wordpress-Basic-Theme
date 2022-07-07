<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-9">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('medium_large') ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <h1><?php the_title(); ?></h1>
            <?php get_template_part('template-part/includes/single', 'post'); ?>
            <?php wp_link_pages(); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>