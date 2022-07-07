<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="card mb-2 flex-row">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('medium'); ?>"
                 alt="<?php the_title(); ?>" class="img-fluid">
            <?php endif; ?>
            <div class="card-body">
                <h4 class="card-title"><?php the_title(); ?></h4>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-success">Read More</a>
            </div>
        </div>
<?php endwhile;
else : endif; ?>