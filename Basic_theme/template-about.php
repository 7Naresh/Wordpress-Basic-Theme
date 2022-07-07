<?php /*Template Name: About Us*/?>
<?php get_header('header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-9">
        <?php get_template_part('template-part/includes/content','page') ?>
        </div>
        <div class="col-md-3">
        <?php get_sidebar('primary'); ?>
        </div>
    </div>
</div>
<?php get_footer('footer.php'); ?>