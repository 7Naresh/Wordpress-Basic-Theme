<footer>
    <div class="container py-2">
        <?php
        if (has_nav_menu('footer_menu')) {
            wp_nav_menu(
                array(
                    'theme_location' => 'footer_menu'
                )
            );
        }
        ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>