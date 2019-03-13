<?php
    get_header();
?>

<div class="container">
    <div class="contents">
    <?php if(have_posts()): the_post(); ?>
    <article <?php post_class('post-article'); ?>>
        <!-- タイトル -->
        <h1 id="post-title"><?php the_title(); ?></h1>
        <!-- 本文取得 -->
        <?php the_content(); ?>
    </article>
    <?php endif; ?>
    </div>
</div>
<?php
    get_footer();
?>