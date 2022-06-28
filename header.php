<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=divice-width,initial-scale=1">
    <title><?php bloginfo('name');?></title>
    <link href ="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <link href ="<?php echo get_template_directory_uri(); ?>/res_style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.css" type="text/css" media="all" />
<?php
wp_enqueue_style('font-awesome','https://use.fontawesome.com/releases/v5.6.1/css/all.css');
wp_enqueue_script('jquery');
wp_head();
?>
<script src="https://kit.fontawesome.com/00ba366826.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zeyada&display=swap" rel="stylesheet">

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open();?>

    <header class="header">
        <div class="container">
            <div class="header-top">
            </div>
            <div class="header-main">
                <div class="header-logo">
                <div> <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/FIT ロゴ (1).png " alt="FIT INDOOR TENNIS SCHOOL"></div>
                    <div id="header-logo-right" class="header-logo-right">
                        <h2>フィットインドアテニススクール</h2><br>
                        <h2>INDOOR TENNIS SCHOOL</h2>
                    </div></a>
                </div>
                <nav class="header-right">
                    <ul>
                        <li class="main-menu1">スクール
                            <ul class="sub-menu1">
                                        <li> <a href="<?php echo get_page_link( 169 );?>">スクールの魅力</a></li>
                                        <li><a href="<?php echo get_page_link( 51 );?>">システム・料金 </a></li>
                                        <li> <a href="<?php echo get_page_link( 53 );?>">クラスのご案内</a></li>
                                        <li> <a href="<?php echo get_page_link( 55 );?>">時間割</a></li>
                                        <li> <a href="<?php echo get_page_link( 268 );?>">代行コーチのお知らせ</a></li>
                                        <li> <a href="https://www1.nesty-gcloud.net/fityoyaku/">お休み・振替の予約</a></li>

                            </ul>
                        </li>


                        <li class="main-menu2">レンタルコート
                            <ul class="sub-menu2">
                                        <li><a href="<?php echo get_page_link( 57 );?>">システム・料金 </a></li>
                                        <li><a href="<?php echo get_page_link( 59 );?>">空き状況 </a></li>

                            </ul>
                        </li>


                        <li class="main-menu3">施設・スタッフ紹介
                               <ul class="sub-menu3">
                                            <li><a href="<?php echo get_page_link( 34 );?>">施設紹介 </a></li>
                                            <li><a href="<?php echo get_page_link( 26 );?>"> スタッフ紹介</a></li>
                                </ul>
                         </li>


                         <li class="main-menu4">お問い合わせ
                                 <ul class="sub-menu4">
                                            <li><a href="<?php echo get_page_link( 61 );?>">体験レッスンのご案内 </a></li>
                                            <li> <a href="<?php echo get_page_link( 65 );?>">総合フォーム</a></li>
                                </ul>
                        </li>
                    </ul>
                </nav>






                <button type="button" class="btn js-btn hamburger-menu">
                    <span class="btn-line"></span>
                    <div class="nav-menu">MENU</div> 
            </button>
                <nav>
                <ul class="menu">
                    <details><summary>スクール</summary>
                        <li class="menu-list .menu-list1">
                            <ul class="s-menu">
                                <li> <a href="<?php echo get_page_link( 169 );?>">&raquo;スクールの魅力</a></li>
                                <li><a href="<?php echo get_page_link( 51 );?>">&raquo;システム・料金 </a></li>
                                <li> <a href="<?php echo get_page_link( 53 );?>">&raquo;クラスのご案内</a></li>
                                <li> <a href="<?php echo get_page_link( 55 );?>">&raquo;時間割</a></li>
                                <li> <a href="<?php echo get_page_link( 268 );?>">&raquo;代行コーチのお知らせ</a></li>
                                <li> <a href="https://www1.nesty-gcloud.net/fityoyaku/">&raquo;お休み・振替の予約</a></li>


                            </ul>
                    </li>
</details>
<details><summary>レンタルコート</summary>

                    <li class="menu-list menu-list-r"> 
                        <ul class="s-menu .menu-list1">
                            <li><a href="<?php echo get_page_link( 57 );?>">&raquo;システム・料金 </a></li>
                            <li><a href="<?php echo get_page_link( 59 );?>">&raquo;レンタルコートの空き状況 </a></li>

                        </ul>
                    </li>
                </details>
<details><summary>施設・スタッフ紹介</summary>

                        <li class="menu-list .menu-list3">
                                <ul class="s-menu">
                                    <li><a href="<?php echo get_page_link( 34 );?>">&raquo;施設紹介 </a></li>
                                    <li><a href="<?php echo get_page_link( 26 );?>"> &raquo;スタッフ紹介</a></li>
                                </ul>
                                </li>
</details>
<details><summary>お問い合わせ</summary>

                    <li class="menu-list .menu-list4"> 
                            <ul class="s-menu">
                                    <li><a href="<?php echo get_page_link( 61 );?>">&raquo;体験レッスンのご案内 </a></li>
                                    <li> <a href="<?php echo get_page_link( 65 );?>">&raquo;総合フォーム</a></li>
                            </ul>
                            </li>
</details>

                </ul>
            </nav>
                
            </div>
            

            


        </div>
    </header>
    
<div class="bottom-banner">
    <div class="bottom-banner-container">
        <div class="bbcw">
            <div class="bottom-banner-leftwrap">
            
                <div class="bottom-banner-left">
                    <a href="<?php echo get_page_link( 61 );?>">
                        <div class="bbl-img"> 体験レッスンのご案内
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ラケットアイコン.png" alt="" id="bbl-img">
                        </div>
                    </a> 
                </div>
        
            </div>
        </div>
        <div class="bbcw">
            <div class="bottom-banner-rightwrap">
                <div class="bottom-banner-right">
                    <a href="<?php echo get_page_link( 205 );?>">
                            <div class="bbr-img"> 最新のキャンペーン情報
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/メガホンアイコン.png" alt="" id="bbr-img">
                            </div>
                        </a> 
                </div>
            </div>
        </div>
    </div>
</div>

    
</body>