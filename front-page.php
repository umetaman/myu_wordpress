<?php
    get_header();

    //3つまで最新の記事を取得する
    // $posts = get_posts(array('posts_per_page' => 3));
?>



<div class="container">
    <?php
    get_sidebar();
    dynamic_sidebar("myu-main-widgets");
    wp_reset_postdata();
    ?>
    <div class="contents">
        <div class="post-content">
        <?php
        the_content();
        ?>
        </div>
    </div>
</div>
<!-- ページ上部へ戻る -->
<p id="page-top"><a href="#"><i class="fas fa-angle-up"></i></a></p>

<script>
jQuery(function($){
    var topButton = $('#page-top');
    
    $(function(){
        topButton.hide();

        //表示設定
        $(window).scroll(function(){
            if($(this).scrollTop() > 80){
                topButton.fadeIn();
            }else{
                topButton.fadeOut();
            }
        })
    });

    topButton.click(function(){
        $('body,html').animate(
            {scrollTop: 0}, 500
        );

        return false;
    });
});
</script>

<?php
    get_footer();
?>