<div class="container-fluid hero_section">
    <h1><?php the_title(); ?></h1>
</div>
<div class="container my-4">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
    <?php endwhile;
    else : endif; ?>
    <?php get_search_form(); ?>
</div>