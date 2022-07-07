<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <p><?php echo get_the_date('l jS F, Y'); ?></p>
                <?php the_content(); ?>
                <?php
                $first_name = get_the_author_meta('first_name');
                $last_name = get_the_author_meta('last_name');
                ?>
                <p><i>Posted By:</i> <?php echo $first_name; ?> <?php echo $last_name; ?></p>
                <?php
                $tags = get_the_tags();
                if ($tags) :
                        foreach ($tags as $tag) : ?>
                                <a href="<?php echo get_tag_link($tag->term_id); ?>" class="badge badge-danger p-2">
                                        <?php echo $tag->name; ?>
                                </a>
                <?php endforeach;
                endif; ?>
                <?php
                $category = get_the_category();
                foreach ($category as $cat) : ?>
                        <a href="<?php echo get_category_link($cat->term_id) ?>" class="btn btn-success">
                                <?php echo $cat->name; ?>
                        </a>
                <?php endforeach; ?>
                <?php comments_template(); ?>
<?php endwhile;
else : endif; ?>