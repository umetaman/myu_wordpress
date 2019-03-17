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