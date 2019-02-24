<?php
    get_header();
?>

<div class="container">
    <div id="main-infomation">
    <?php
        //メインウィジェット追加
        dynamic_sidebar("main-info");
    ?>
    </div>
    <div class="contents">
        <div class="post-content">
        <?php
        the_content();
        ?>
        </div>
    </div>
</div>
<?php
    get_footer();
?>