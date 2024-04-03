<!-- où l’on mettra le bas du site et les balises fermantes de notre page -->

</main>

<footer>
    <?php
            wp_nav_menu([
                'theme_location' => 'footer', 
                'menu_class' => 'test-menu'
            ]);
        ?>
    <img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/photo_CV.JPG" alt="Photo">
</footer>

    <?php wp_footer(); ?>
</body>
</html>
