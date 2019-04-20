<?php
// Template Name: Archives
?>
<?php get_header(); ?>

<div class="container">
    <div class="contents">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <!-- 投稿された記事の一覧 -->
        <ul id="myu-post-archives">
        <?php
        //すべての記事を取得
        $posts = get_posts(null);

        //繰り返しで出力
        foreach($posts as $post):
        setup_postdata($post);
        ?>
    
        <li>
            <div class="myu-post-archive-wrapper">
                <?php
                //サムネ画像が設定されていないとき、NoImageの画像に置き換える。
                $thumbnail_url = get_template_directory_uri().'/images/no_image.jpg';
                if(has_post_thumbnail()){
                    $thumbnail_url = get_the_post_thumbnail_url();
                }
                ?>
                <!-- 記事のサムネイル -->
                <div class="myu-post-archive-thumbnail-wrapper">
                    <img class="myu-post-archive-thumbnail" src="<?php echo $thumbnail_url; ?>" alt="<?php echo the_title(); ?>">
                </div>
                <!-- 記事のタイトル -->
                <div class="myu-post-archive-info-wrapper">
                    <h2 class="myu-post-archive-title"><?php the_title(); ?></h2>
                    <!-- 日付 -->
                    <p class="myu-post-archive-date"><?php the_date(); ?></p>
                    <!-- カテゴリ -->
<<<<<<< HEAD
                    <p class="myu-post-archive-category"><?php the_category(', '); ?></p>
                    <!-- 抜粋 -->
=======
                    <p class="myu-post-archive-category"><i class="fas fa-folder-open"></i><?php the_category(', '); ?></p>
                    <!-- サムネ画像。持っていたら表示、持っていなかったらNoImage -->
>>>>>>> archive
                    <p class="myu-post-archive-excerpt"><?php the_excerpt(); ?></p>
                </div>
                <a class="myu-post-archive-link" href="<?php the_permalink(); ?>"></a>
            </div>
        </li>

        <?php
        endforeach;
        wp_reset_postdata();
        ?>
        </ul>
    </div>
</div>

<?php get_footer(); ?>