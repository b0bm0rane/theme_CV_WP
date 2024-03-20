<!-- où l’on mettra le bas du site et les balises fermantes de notre page -->

<footer>
    <?php wp_footer(); ?>
    <?php
            wp_nav_menu([
                'theme_location' => 'footer', 
                'menu_class' => 'test-menu'
            ]);
        ?>
</footer>

</body>
</html>
