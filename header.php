<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/events.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/form.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/p5js.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/archive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/widgets.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <?php
        wp_head();//プラグイン用
    ?>
</head>
<body　<?php body_class(); ?>>
    <header>
        <div id="p5-canvas">
            <iframe class="p5-animation" scrolling="no" src="<?php echo get_template_directory_uri().'/p5js/index.html'; ?>" frameborder="0"></iframe>
        </div>
        <div id="dmc-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/p5js/image/web_dmc_header.png" alt="<?php bloginfo("name");?>">
        </div>

        <!-- ヘッダー -->
        <div class="header-nav-wrapper">
            <div id="header-logo-wrapper">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo get_template_directory_uri()."/images/dmc_logo.png"; ?>" alt="">
                </a>
            </div>
        <?php
            wp_nav_menu(
                array(
                    "theme_location" => "header-nav",   //functions.phpに記述した値との関連付け
                    "container" => "nav",               //ナビゲーション全体を囲むタグの指定
                    "container_class" => "header-nav",  //containerのクラス
                    "container_id" => "header-nav",
                    "fallback_cb" => ""                 //ナビゲーションメニューが空のとき
                )
            );
        ?>
        <!-- スマートフォン用のメニューボタン -->
        <button type="button" id="navbutton">
            <i class="fas fa-bars"></i>
        </button>
        </div>
    </header>
</body>
</html>