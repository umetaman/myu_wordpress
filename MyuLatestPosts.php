<?php
//独自ウィジェットの定義
class MyuLatestPosts extends WP_Widget{

    function __construct(){
        parent::WP_Widget(false, $name = 'MYU Latest Posts',
        array('description' => 'MYU WordPressオリジナル。最新の記事を表示します。')
        );
    }

    public function widget($args, $instance){
        extract($args);

        //ユーザーが定義したタイトルを取得
        $new_title = !empty($instance['new_title']) ? $instance['new_title'] : "最新情報";
        //表示数を取得
        $entry_count = !empty($instance['entry_count']) ? $instance['entry_count'] : 3;
        //アーカイブへのリンクを取得
        $archive_link = !empty($instance['archive_link']) ? $instance['archive_link'] : '#';
        ?>

        <div id="myu-latest-posts" class="myu-latest-posts-widget">
            <h2 id="myu-latest-posts-title"><?php echo $new_title; ?></h2>

            <?php
            //3つまで最新の記事を取得する

            query_posts("posts_per_page=3");
            while(have_posts()): the_post();
            ?>

            <div class="myu-latest-post">
                <?php
                //サムネ画像が設定されていないとき、NoImageの画像に置き換える。
                $thumbnail_url = get_template_directory_uri().'/images/no_image.jpg';
                if(has_post_thumbnail()){
                    $thumbnail_url = get_the_post_thumbnail_url();
                }
                ?>
                <!-- 記事のサムネイル -->
                <div class="myu-latest-post-thumbnail-wrapper">
                    <img class="myu-latest-post-archive-thumbnail" src="<?php echo $thumbnail_url; ?>" alt="<?php echo the_title(); ?>">
                </div>
                <!-- 記事のタイトル -->
                <div class="myu-latest-post-info-wrapper">
                    <h3 class="myu-latest-post-title"><?php the_title(); ?></h2>
                    <!-- 日付 -->
                    <p class="myu-latest-post-date"><?php the_date(); ?></p>
                    <!-- カテゴリ -->
                    <p class="myu-latest-post-category"><?php the_category(', '); ?></p>
                </div>
                <a href="<?php the_permalink(); ?>"></a>
            </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
            <a href="<?php echo $archive_link; ?>">すべての記事を見る</a>
        </div>
        <?php
    }

    public function update($new_instance, $old_instance){
        $instance = $old_instance;
        
        $instance['new_title'] = strip_tags($new_instance['new_title']);
        $instance['entry_count'] = strip_tags($new_instance['entry_count']);
        $instance['archive_link'] = strip_tags($new_instance['archive_link']);

        return $instance;
    }

    public function form($instance){
        $new_title = esc_attr($instance['new_title']);
        $entry_count = esc_attr($instance['entry_count']);
        $archive_link = esc_attr($instance['archive_link']);
        
        // ここからフォーム
        ?>

        <p>
            <label for="<?php echo $this->get_field_id('new_title'); ?>">
                <?php _e('タイトル'); ?>
            </label>
            <input 
            class="widefat" 
            id="<?php echo $this->get_field_id('new_title'); ?>" 
            name="<?php echo $this->get_field_id('new_title'); ?>" type="text"
            value="<?php echo $new_title; ?>"
            >
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('entry_count'); ?>">
                <?php _e('表示数'); ?>
            </label>
            <input 
            class="widefat" 
            id="<?php echo $this->get_field_id('entry_count'); ?>" 
            name="<?php echo $this->get_field_id('entry_count'); ?>" type="text"
            value="<?php echo $entry_count; ?>"
            >
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('archive_link'); ?>">
                <?php _e('アーカイブへのリンク'); ?>
            </label>
            <input 
            class="widefat" 
            id="<?php echo $this->get_field_id('archive_link'); ?>" 
            name="<?php echo $this->get_field_id('archive_link'); ?>" type="text"
            value="<?php echo $archive_link; ?>"
            >
        </p>
        <?php
    }
}
?>