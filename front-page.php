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
        <h2><?php the_title(); ?></h2>
        <div class="post-content">
            <p>It Works!</p>
        </div>
    </div>
</div>
<?php
    get_footer();
?>