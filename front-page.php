<?php get_header(); ?>

<div class="about">
    <?php
    echo do_shortcode('[smartslider3 slider="2"]');
    ?>
    <div class="about-container">
        <div class="about-top">
            <h2>フィットインドアテニススクールについて</h2>
        </div>
        <div class="about-mid">
            <div class="about-mid-txt">
                <h3>室内で手軽にテニスを楽しめる環境をご用意しています。</h3>

                <p>愛知県日進市にあるフィットインドアテニススクールは、冷暖房完備の
                    室内コートで思う存分にテニスができる施設です。</p>
                <p>足腰に優しいカーペットコート、ゆったりできるラウンジ、
                    シャワールーム、試打ラケットを備えており、</p>
                <p>小さなお子様から大人の方まで
                    初めてテニスをされる方に最適な環境が整っています。</p>
            </div>

            <div class="about-mid-btn">
                <a href="<?php bloginfo('url') ?>/feature">フィットインドアテニススクールの魅力<span>&gt;</span>
                </a>
            </div>
        </div>

    </div>

</div>




<div class="topic-top">
    <div class="topic">
        <h2>TOPIC</h2>
        <div class="topic-content">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="coulumn">
                        <article id="<?php the_ID(); ?>" <?php post_class('topic'); ?>>
                            <div class="topic_meta">
                                <?php the_category(); ?>
                                <h2 class="topic_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>

                        </article>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="topic_list"><a href="<?php bloginfo('url') ?>/topic">Topic一覧<span>&gt;</span></a></div>
    </div>

</div>






<div class="access-wrap">
    <h2>アクセス</h2>
    <div class="access">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5489.067111648073!2d137.01421888115118!3d35.11123446912876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x49098a7f8495c481%3A0x2c5e2c65548c8c3d!2z44OV44Kj44OD44OI44Kk44Oz44OJ44Ki44OG44OL44K544K544Kv44O844Or!5e0!3m2!1sja!2sjp!4v1646638965026!5m2!1sja!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="map-right">
            <div class="map-right-top">
                <p>営業時間</p>
                <ul>
                    <li>月曜～土曜：9:00～23:00</li>
                    <li>土曜：7:30～21:50</li>
                    <li>日曜：7:30～17:50</li>
                </ul>
            </div>
            <div class="map-right-mid">
                <p>住所</p>
                <ul>
                    <li>〒470-0126<br> 日進市赤池町モチロ61-77</li>
                    <li>TEL 052-848-4030 </li>
                </ul>
            </div>
            <div class="map-right-bottom">
                <p></p>
                <ul>
                    <li>赤池駅より徒歩１５分</li>
                </ul>

            </div>

            <div class="top-facs">

                <div class="top-fac">
                    <div class="top-fac-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/駐車場のアイコン.png" alt="">
                    </div>

                    <div class="top-fac-txt">
                        <p>駐車場64台</p>
                    </div>
                </div>
                <div class="top-fac">
                    <div class="top-fac-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/エアコン素材1.png" alt="">
                    </div>

                    <div class="top-fac-txt">
                        <p>冷暖房完備の快適な空間</p>
                    </div>
                </div>

                <div class="top-fac">
                    <div class="top-fac-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/テニスの無料アイコン6.png" alt="">
                    </div>

                    <div class="top-fac-txt">
                        <p>試打ラケット・シューズの用意あり</p>
                    </div>
                </div>

                <div class="top-fac">
                    <div class="top-fac-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/シャワーのアイコン3.png" alt="">
                    </div>

                    <div class="top-fac-txt">
                        <p>シャワー・ロッカー</p>
                    </div>
                </div>


            </div>

        </div>

    </div>
</div>









<?php get_footer(); ?>