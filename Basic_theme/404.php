<?php 
/* Template Name: 404 Page */
get_header();?>
<div class="container">
    <div class="row">
        <div class="col text-center py-5">
            <h1 class="display-1 font-weight-normal mb-3">404 Page</h1>
            <p class="font-weight-bold"><?php echo 'Oops!, that page can\'t be found' ?></p>
            <?php get_search_form(); ?>
        </div>
    </div>
</div>
<?php get_footer();?>