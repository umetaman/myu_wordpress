<?php
    get_header();
?>
<div class="container">
    <div class="contents">
        <?php
        //投稿(post)かどうか
        if(have_posts()){
            the_post();
        }
        ?>

    <article <?php post_class('post-article'); ?>>
        <div class="post-info">
        <!-- 投稿日 -->
        <span class="post-date-info">
            <i class="fas fa-pen-nib"></i>
            <time <?php echo get_the_date('Y-m-d'); ?>>
            <?php
            //投稿日の取得
            echo get_the_date();
            ?>
            </time>
        </span>

        <!-- カテゴリー -->
        <?php if(has_category()): ?>
        <span class="category-data">
            <?php echo get_the_category_list(' '); ?>
        </span>
        <?php endif; ?>
        </div>
        
        <!-- 記事のタイトル -->
        <h1><?php the_title(); ?></h1>
        
        <!-- アイキャッチ画像 -->
        <?php if(has_post_thumbnail()): ?>
        <div class="post-image">
            <?php the_post_thumbnail("large"); ?>
        </div>
        <?php endif; ?>

        <!-- 投稿の本文 -->
        <?php the_content(); ?>

        <!-- タグ -->
        <div class="post-tag">
            <?php
            the_tags('<ul><li>タグ: </li><li>', '</li><li>', '</li></ul>');
            ?>
        </div>
    </article>

    </div>
    <?php
        get_sidebar();
    ?>
</div>
<?php
    get_footer();
?>