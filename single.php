<?php
    get_header();
?>
<div class="container">
    <div class="contents">
        <div class="post-content">
        <?php
        the_content();
        ?>
        </div>
    </div>
    <?php
        get_sidebar();
    ?>
</div>
<?php
    get_footer();
?>