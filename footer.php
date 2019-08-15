<footer>
    <div class="footer-inner">
        <div class="footer-nav-wrapper">
        <?php
        wp_nav_menu(array(
            "theme_location" => "footer-nav",
            "container" => "nav",
            "container_class" => "footer-nav",
            "container_id" => "footer-nav",
            "fallback_cb" => ""
        ));
        ?>
        </div>
        <div class="copyright">
            <p><i class="far fa-copyright"></i> <?php bloginfo("name"); ?></p>
        </div>  
    </div>
</footer>
<?php
    wp_footer();
?>
</body>
</html>