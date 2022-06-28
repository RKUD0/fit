<?php get_header(); ?>



<?php if (is_page('staff')) : ?>
    <div class="fs-staff-top">
        <div class="fs-staff-name">
            スタッフ紹介
        </div>
    </div>
    <div class="fs-staff-404">
        ただいま制作中です
    </div>

    <?php /*
                $args = array(
                    'post_type' => 'staff',
                    'posts_per_page' => 30,
                    'order' =>'ASC',
                );
                $the_query =new WP_Query($args);
                if($the_query->have_posts()):
                ?>
                    <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="staff">
                            <div class="staff_name"><h2><?php echo CFS()->get("s_name");?></h2> </div>
                            <div class="staff_info">
                                <div class="staff_info_left">
                                    <div class="staff_img">
                                        <img src="<?php echo CFS()->get("s_img");?>" alt="" loading="lazy">
                                    </div>
                                    
                                </div>
                                <div class="staff_info_right">
                                    <div class="staff_info_message">
                                        <div class="sil">[お客様へ一言]</div>
                                        <div class="sir"><?php echo CFS()->get("s_message");?></div>
                                    </div>

                                    <?php if(post_custom('s_tennisyear')):?>

                                    <div class="staff_info_tennisyear">
                                        <div class="sil">[テニス歴]</div>
                                            <div class="sir"><?php echo CFS()->get("s_tennisyear");?></div>
                                    </div>
                                    <?php endif ?>


                                    <?php if(post_custom('s_gradu')):?>
                                        <div class="staff_info_gradu">
                                            <div class="sil">[出身校]</div>
                                            <div class="sir"> <?php echo CFS()->get("s_gradu");?></div>
                                        </div>
                                    <?php endif ?>


                                    <?php if(post_custom('s_record')):?>

                                    <div class="staff_info_record">
                                    <div class="sil">[戦績]</div>
                                        <div class="sir"><?php echo CFS()->get("s_record");?></div>
                                    </div>
                                    <?php endif ?>


                                    <?php if(post_custom('s_style')):?>

                                    <div class="staff_info_stlye">
                                    <div class="sil">[プレースタイル]</div>
                                        <div class="sir"><?php echo CFS()->get("s_style");?></div>
                                    </div>
                                    <?php endif ?>


                                    <?php if(post_custom('s_good')):?>
                                    <div class="staff_info_shoot">
                                    <div class="sil">[得意なショット]</div>
                                        <div class="sir"><?php echo CFS()->get("s_good");?></div>
                                    </div>
                                    <?php endif ?>

                                    <?php if(post_custom('s_like')):?>

                                    <div class="staff_info_like">
                                    <div class="sil">[趣味]</div>
                                        <div class="sir"><?php echo CFS()->get("s_like");?></div>
                                    </div>
                                    <?php endif ?>

                                </div>
                            </div>
                        </div>
                    <?php endwhile; ;?>
                    <div class="navigation">
                        <?php if(function_exists('wp_pagenavi')): ?>
                        <?php wp_pagenavi(array('query'=>$the_query)); ?> 
                        <?php else : ?>
                        <?php endif; ?>
                </div>

                <?php endif;
                wp_reset_postdata()
                ?>


               <?php */ ?>


















<?php elseif (is_page('facilities')) : ?>
    <div class="fs-f-top">
        <div class="fs-f-name">
            施設紹介
        </div>
    </div>
    <div class="fs-f-main">
        <div class="fs-f-main1">
            <h2>インドアコート</h2>
            <div class="fsfmain1-top">
                <div class="fsfmain1-top1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image2 (1).jpeg" alt="" loading="lazy">
                </div>
                <div class="fsfmain1-top2">
                    <h3>01<br>冷暖房完備！</h3>
                    <p>大型エアコンが各コートに２台ずつ、合計６台設置しており快適にプレーをたのしむことができます。</p>

                    <h3>02<br>日焼けの心配なし！</h3>
                    <p>完全インドアなので、日焼けの心配がいりません。雨の日も、風の日も１年中テニスができます。</p>
                </div>
            </div>
            <div class="fsfmain1-bottom">
                <div class="fsfmain1-bottom1">
                    <h3>03<br>天井が高い！</h3>
                    <p>天井が高いのでインドアでありながら開放感のあるコートになっております。</p>

                    <h3>04<br>小さなお子様も安心</h3>
                    <p>アレルギー対策を施した最新式のカーペットコートなので清潔です。安全に運動能力を高めながらテニスを楽しめます。</p>
                </div>
                <div class="fsfmain1-bottom2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/D78_3947.jpg " alt="">
                </div>

            </div>


        </div>



        <div class="fs-f-main2">
            <?php /* ?>
                    <div class="fs-f-1">
                        <h2>フロント</h2>
                        <div class="fs-f-1-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/D78_3904.JPG " alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/D78_3907.JPG " alt="">
                        </div>
                    </div>
                                        <?php */ ?>

            <div class="fs-f-2">
                <div class="fs-f-2-1">
                    <h2>ショップ</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/D78_3911.jpg " alt="" loading="lazy">
                    <p>プロショップが充実しており商品を各種取り扱っております。ストリングの持込もOKで張り替えもさせて頂いております。</p>
                </div>
                <div class="fs-f-2-1">
                    <h2>試打ラケット</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/iOS の画像 (4).jpg " alt="" loading="lazy">
                    <p>NEWラケットをメインに多機種の試打ラケットを揃えています。（ジュニア用のラケットも多数、用意しております。）</p>
                </div>
            </div>

            <div class="fs-f-3">
                <div class="fs-f-32">
                    <div class="fs-f-3-1">
                        <h2>1階ラウンジ</h2>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/1階ロビー (1).jpg " alt="" loading="lazy">

                    </div>
                    <div class="fs-f-3-1">
                        <h2>2階ラウンジ</h2>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/D78_3917.JPG " alt="" loading="lazy">

                    </div>
                </div>
                <p>明るくて開放的なラウンジは、レッスン風景がよくご覧いただけます。また、レッスン後にお客様同士で会話を楽しんでいただけるスペースとしてもお使いいただけますので、どうぞご利用下さい。</p>
            </div>

            <div class="fs-f-4">
                <h2>ロッカー・シャワールーム</h2>
                <div class="fs-f-1-img">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/D78_3928.jpg" alt="" loading="lazy">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/D78_3927.JPG" alt="" loading="lazy">
                </div>
                <p>レッスンでかいた汗をシャワーで流して、お客様の『リフレッシュできる空間』となるように、「いつでも清潔」を心がけています。シャワーはご自由にお使いいただけますが、ロッカーをご利用の際はフロントにてロッカーキーをお渡ししますので、お気軽にお申し付け下さい</p>
            </div>
        </div>


        <div class="fs-f-main2">
            <div class="fs-f-5">
                <h2>駐車場</h2>
                <div class="fs-f-1-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/駐車場正面.jpg " alt="" loading="lazy">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/駐車場横.jpg " alt="" loading="lazy">
                </div>


            </div>
        </div>
    </div>





<?php elseif (is_page('rentalform')) : ?>



<?php elseif (is_page('lesson')) : ?>
    <div class="f-lesson">
        <div class="f-lesson-top">
            <div class="f-lesson-name">
                <p>体験レッスンのご案内</p>
                <p>気軽に、楽しく！フィットインドアテニスでテニスを楽しみましょう！</p>
            </div>
        </div>
        <div class="f-lesson-main">
            <div class="f-lesson-txt-top">
                <h2>ぜひ無料体験レッスンにお越しください！</h2>
            </div>
            <div class="f-lesson-1">
                <div class="f-lesson-imgs">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/画像2.png" alt="" loading="lazy">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/D78_3972.JPG" alt="" loading="lazy">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/D78_4067.JPG" alt="" loading="lazy">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/D78_4257.JPG" alt="" loading="lazy">
                </div>
                <div class="f-lesson-about">
                    <div class="f-lesson-about1">
                        フィットインドアテニススクールの体験レッスンには、<br>

                        <span>テニスがはじめての方専用クラス</span>がございます。<br>

                        「今日からテニスを始める！」そんな方々に、<br>

                        ラケットの握り方から丁寧にお教えいたします。<br>

                        無料レンタルのラケット・シューズを完備しておりますので、<br>

                        運動のできる服装でお越しください。<br>
                    </div>
                    <div class="f-lesson-about2">
                        <span class="flt">テニス経験者の方は通常レッスンを無料でご体験いただけます。</span> <br>

                        中高生以下のジュニアクラスは1回、一般クラスでは2回無料で受講いただけます。<br>

                        ぜひ、レッスンの雰囲気を体験してみてください。
                    </div>
                </div>
            </div>


            <div class="f-lesson-2">
                <div class="f-lesson-2-top">
                    <h2>お申し込み方法</h2>
                </div>
                <div class="f-lesson-2-txt">
                    <p>下記時間割表からご希望のクラスをお選びいただき、お申込み下さい。<br>

                        クラスレベルについてはこちらからご覧いただけます。<br>

                        ⇒<a href="<?php echo get_page_link(53); ?>">クラスレベルのご案内ページ</a> <br>

                        （クラスがお決まりでない方や、まずはお問い合わせをしたいという方は未記入で構いません。 ）</p>

                    <p> 下記お問合せフォームから24時間受付中です。<br>

                        ※お申込み内容確認後、弊社スタッフから折り返しご連絡をさせていただきます。<br>

                        また、営業時間内はお電話（052-848-4030）でも受け付けています。</p>
                </div>
            </div>

            <div class="f-lesson-3">
                <div class="f-lesson-begin">
                    <p>はじめての方専用クラス時間割表（体験専用クラス）</p>
                </div>
                <?php the_content(); ?>
                <div class="f-lesson-bbtns">
                    <div class="f-lesson-bbtn" id="new-jbtn2">
                        <a href="" download alt=""> ジュニアクラス<br>時間割表<i class="fa fa-arrow-circle-o-right fa-2x"></i></a>
                    </div>
                    <div class="f-lesson-bbtn" id="new-jbtn3">
                        <a href="" download alt=""> 一般クラス<br>時間割表<i class="fa fa-arrow-circle-o-right fa-2x"></i></a>
                    </div>

                </div>
                <div class="f-lesson-normal">
                    <p>通常クラス時間割表</p>
                </div>
                <div class="f-lesson-nbtn">
                    <a href="<?php echo get_page_link(55); ?>">一般・ジュニアスクールの時間割表<i class="fa fa-arrow-circle-o-right fa-2x"></i></a>
                </div>

            </div>

            <div class="f-lesson-4">
                <h2>お申し込みフォーム</h2>
                <?php echo do_shortcode('[contact-form-7 id="168" title="コンタクトフォーム 2"]'); ?>
            </div>

            <div class="f-lesson-5">
                <h2>よくある質問</h2>
                <div class="f-lesson-qa">
                    <div class="f-lesson-q">
                        <span>Q</span>体験レッスンの費用はいくらですか？
                    </div>
                    <div class="f-lesson-a">
                        <span>A</span>当スクールの体験レッスンは無料です。<br>
                        道具のレンタル料などもございません。
                    </div>
                </div>
                <div class="f-lesson-qa">
                    <div class="f-lesson-q">
                        <span>Q</span>持ち物はありますか？また、どんな服装で行けば良いですか？
                    </div>
                    <div class="f-lesson-a">
                        <span>A</span>レンタルラケット、レンタルシューズを完備していますので、道具に<br>
                        ついてはご心配いりません。また、服装は運動がしやすいものであれば<br>
                        大丈夫です。
                    </div>
                </div>

                <div class="f-lesson-qa">
                    <div class="f-lesson-q">
                        <span>Q</span>クラスレベルはどのように決めますか？初心者でも大丈夫でしょうか？
                    </div>
                    <div class="f-lesson-a">
                        <span>A</span>クラスレベルは、テニス歴、試合の出場経験などをもとに判断させてい<br>
                        ただきます。初めての方には初心者クラスがあるのでご安心ください。
                    </div>
                </div>

            </div>


        </div>
    </div>




<?php elseif (is_page('form')) : ?>
    <div class="form-top">
        <div class="form-name">
            総合フォーム
        </div>
    </div>

    <?php echo do_shortcode('[contact-form-7 id="21" title="コンタクトフォーム 1"]'); ?>









<?php elseif (is_page('feature')) : ?>
    <div class="s-ft-top">
        <div class="s-ft-name">
            スクールの魅力
        </div>
    </div>
    <div class="s-ft-main">
        <h2>フィットインドアテニススクールの魅力</h2>
        <div class="s-ft-points">

            <div class="s-ft-point">
                <div class="s-ft-txt1">
                    01
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/D78_4269.jpg" alt="" loading="lazy">
                <div class="s-ft-txt2">
                    冷暖房完備のインドアコート
                </div>
            </div>
            <div class="s-ft-point">
                <div class="s-ft-txt1">
                    02
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/D78_4123.jpg " alt="" loading="lazy">
                <div class="s-ft-txt2">
                    足腰に負担の少ないカーペットコート
                </div>
            </div>

            <div class="s-ft-point">
                <div class="s-ft-txt1">
                    03
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/LINE_ALBUM_2022_1.3.10_220323.JPG " alt="" loading="lazy">
                <div class="s-ft-txt2">
                    テニスがはじめての方も安心な<br>初心者専用の体験クラス
                </div>
            </div>

            <div class="s-ft-point">
                <div class="s-ft-txt1">
                    04
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/D78_3950.JPG " alt="" loading="lazy">
                <div class="s-ft-txt2">
                    お子様の成長に合わせたジュニアクラス設定
                </div>
            </div>

            <div class="s-ft-point">
                <div class="s-ft-txt1">
                    05
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/D78_4152.jpg " alt="" loading="lazy">
                <div class="s-ft-txt2">
                    初心者から上級者まで幅広いクラス設定
                </div>
            </div>

            <div class="s-ft-point">
                <div class="s-ft-txt1">
                    06
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/D78_4091.jpg " alt="" loading="lazy">
                <div class="s-ft-txt2">
                    少人数制だからたくさん打てる！
                </div>
            </div>

            <div class="s-ft-point">
                <div class="s-ft-txt1">
                    07
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/D78_4271.jpg " alt="" loading="lazy">
                <div class="s-ft-txt2">
                    試合がたくさんできるゲームクラス
                </div>
            </div>

            <div class="s-ft-point">
                <div class="s-ft-txt1">
                    08
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/D78_4304.JPG " alt="" loading="lazy">
                <div class="s-ft-txt2">
                    仕事終わりに通える夜間レッスン
                </div>
            </div>

            <div class="s-ft-point">
                <div class="s-ft-txt1">
                    09
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/天井高い.JPG " alt="" loading="lazy">
                <div class="s-ft-txt2">
                    天井が高いので快適空間！
                </div>
            </div>

            <div class="s-ft-point">
                <div class="s-ft-txt1">
                    10
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ロッカー (1).jpg " alt="" loading="lazy">
                <div class="s-ft-txt2">
                    清潔なシャワールーム、ロッカー完備
                </div>
            </div>

        </div>
    </div>


<?php elseif (is_page('schoolsystem')) : ?>
    <div class="s-system-top">
        <div class="s-system-name">
            スクールシステム・料金
        </div>
    </div>

    <div class="s-system-tables">
        <div class="s-system-table s-system-table5">
            <ul>
                <li>システム料金</li>
                <li>料金</li>
            </ul>
            <ul>
                <li>入会金</li>
                <li>5,500円</li>
            </ul>

            <ul>
                <li>年会費</li>
                <li>3,300円</li>
            </ul>
            <ul>
                <li>休会費</li>
                <li>1,100円</li>
            </ul>
            <div class="s-system-ann">
                ※二年目以降の年会費は、月会費と同時に引き落としがされます。
            </div>

        </div>



        <div class="s-system-table">
            <ul>
                <li>一般クラス（月４回）</li>
                <li>時間</li>
                <li>料金</li>
            </ul>
            <ul>
                <li>平日昼間</li>
                <li>80分</li>
                <li>10,560円</li>
            </ul>

            <ul>
                <li>土・日・ナイター</li>
                <li>80分</li>
                <li>11,660円</li>
            </ul>
            <ul>
                <li>フリータイム<span>※</span></li>
                <li>80分</li>
                <li>12,471円</li>
            </ul>
            <div class="s-system-ann">
                ※在籍クラスを決めず、予約をしてお好きな時に受講していただけます。<br>(月4回)<br>
                また振替料も不要です。<br>
                受講可能なクラスは、コーチと相談していただきます。
            </div>

        </div>
        <div class="s-system-table">
            <ul>
                <li>ゲームクラス（月4回＋補講４回）</li>
                <li>時間</li>
                <li>料金</li>
            </ul>
            <ul>
                <li>平日昼間</li>
                <li>80分</li>
                <li>10,560円</li>
            </ul>

            <ul>
                <li>土・日・ナイター</li>
                <li>80分</li>
                <li>11,660円</li>
            </ul>

        </div>


        <div class="s-system-table s-system-tablejr">
            <ul>
                <li>ジュニアクラス</li>
                <li>時間</li>
                <li>料金</li>
            </ul>
            <ul>
                <li>スポンジボール</li>
                <li>60分</li>
                <li>6,600円</li>
            </ul>

            <ul>
                <li>レッドボール</li>
                <li>60分</li>
                <li>7,480円</li>
            </ul>
            <ul>
                <li>オレンジボール</li>
                <li>60分</li>
                <li> 7,480円</li>
            </ul>
            <ul>
                <li>グリーンボール</li>
                <li>60分</li>
                <li> 7,480円</li>
            </ul>

            <ul class="ssten">
                <li>中高生</li>
                <li>80分</li>
                <li>10,560円</li>
            </ul>


        </div>


        <div class="s-system-table s-system-table4">
            <ul>
                <li>スポットレッスン料</li>
                <li>スクール生</li>
                <li>ビジター</li>
            </ul>
            <ul class="sstlong">
                <li>一般・ゲーム（平日昼間）・中高生</li>
                <li>2,619円</li>
                <li>3,300円</li>
            </ul>

            <ul class="sstlong">
                <li>一般・ゲーム（土・日・ナイター）</li>
                <li>3,038円</li>
                <li>3,719円</li>
            </ul>

            <ul>
                <li>ジュニア</li>
                <li>1,988円</li>
                <li>2,200円</li>
            </ul>
        </div>


        <div class="s-system-table s-system-table5">
            <ul>
                <li>振替料</li>
                <li>料金</li>
            </ul>
            <ul>
                <li>一般・ゲーム・中高生</li>
                <li>330円</li>
            </ul>

            <ul class="sstlong">
                <li>一般・ゲーム(平日)・中高生→一般・ゲーム(土・日・ナイター)</li>
                <li>550円</li>
            </ul>
            <ul>
                <li>ジュニア</li>
                <li>100円</li>
            </ul>

            <ul>
                <li>フリータイム</li>
                <li>0円</li>
            </ul>
        </div>

    </div>

    <p></p>

    <div class="s-system-banner">
        <p>スクールシステムの詳細をご覧になりたい方は<a href="<?php echo get_template_directory_uri(); ?>/assets/img/スクールシステムのご案内 (1).pdf" download>コチラ</a>をクリックして下さい。</p>
        <div class="s-system-banner-main">
            <p>まずは体験から始めてみませんか？</p>
            <p>WEBで無料体験予約。</p>
            <p>道具もご用意してお待ちしてます！</p>
            <div class="s-system-btn">
                <a href="<?php echo get_page_link(61); ?>">体験レッスンはこちら<span>&gt;</span></a>
            </div>
        </div>
    </div>




<?php elseif (is_page('campaign')) : ?>
    <div class="camp">
        <div class="camp-img">
            <?php the_content(); ?>

        </div>

    </div>


<?php elseif (is_page('time')) : ?>

    <div class="s-time-top">

        <div class="s-time-name">
            時間割
        </div>
    </div>

    <div class="s-time-main">
        <div class="s-time-nbtn" id="new-jbtn">

            <a href="" download>一週間分の時間割表はこちらからご覧いただけます<i class="fa fa-arrow-circle-o-right fa-2x"></i></a>
        </div>
        <?php the_content(); ?>

        <?php /* ?>
            <div class="s-time-links">
                <div class="s-time-link stl1">
                    <a href="#mon">月曜日</a>
                </div>
                <div class="s-time-link stl2">
                    <a href="#moo">火曜日</a>
                </div>

                <div class="s-time-link stl3">
                    <a href="#mop">水曜日</a>
                </div>

                <div class="s-time-link stl4">
                    <a href="#moq">木曜日</a>
                </div>

                <div class="s-time-link stl5">
                    <a href="#mor">金曜日</a>
                </div>

                <div class="s-time-link stl6">
                    <a href="#mos">土曜日</a>
                </div>

                <div class="s-time-link stl7">
                    <a href="#mot">日曜日</a>
                </div>

            </div>
            <div class="s-time-time">
        
                
               

                    <div class="s-time-main2">
                        <h2>クラスの表記方法</h2>
                        <div class="s-time-m2t">
                            <ul>
                                <li>クラス</li>
                                <li>入門</li>
                                <li>初級</li>
                                <li>初中級</li>
                                <li>中級</li>
                                <li>上級</li>
                                <li>トーナメント<br>中級</li>
                                <li>トーナメント<br>中上級</li>
                                <li>ゲーム初級</li>
                                <li>ゲーム中級</li>
                                <li>スポンジボール</li>
                                <li>レッドボール</li>
                                <li>オレンジボール</li>
                                <li>グリーンボール</li>
                                <li>中高生</li>
                            </ul>
                            <ul>
                                <li>表記</li>
                                <li>入門</li>
                                <li>初</li>
                                <li>初中</li>
                                <li>中</li>
                                <li>上</li>
                                <li>T中</li>
                                <li>T中上</li>
                                <li>ゲーム初</li>
                                <li>ゲーム中</li>
                                <li>S</li>
                                <li>R</li>
                                <li>O</li>
                                <li>G</li>
                                <li></li>
                            </ul>

                        </div>
                    </div>

             
                    <div class="s-time-main3">
                    <?php $num="mon" ?>

                    <?php
                $args = array(
                    'post_type' => 'time',
                    'posts_per_page' => 10,
                    'order' =>'ASC',
                );
                $the_query =new WP_Query($args);
                if($the_query->have_posts()):
                ?>
                    <?php while($the_query->have_posts()) : $the_query->the_post(); ?>

                        <div class="s-time-m3ts">

                            <div class="s-time-m3t">

                                 <div class="s-time-week2"  id=<?php echo "$num"?>> 
                                    <h2><?php echo CFS()->get("week");?></h2>


                                    <div class="s-time-top2">
                                        <a id=<?php echo "$num" ?>>
                                        <p  ><?php echo CFS()->get("week");?></p></a>
                                        <ul>
                                            <li class="s-time-emp"></li>
                                            <li class="s-time-time2">時間</li>
                                            <li class="s-time-c">コート1</li>
                                            <li class="s-time-c">コート2</li>
                                            <li class="s-time-c">コート3</li>


                                        </ul>
                                        
                                      
                                    </div>

                                    <?php if(post_custom('s1c')):?>

                                        <div class="s-time-top3">

                                        <ul>
                                                <li class="s-time-abc">S</li>
                                                <li class="s-time-time3">8:00~9:20</li>
                                                <li class="s-time-cp">
                                                    <ul class="s-time-call">
                                                        <li class="s-time-cl"><?php echo CFS()->get("s1c");?></li>
                                                        <li class="s-time-cl"><?php echo CFS()->get("s2c");?></li>
                                                        <li class="s-time-cl"><?php echo CFS()->get("s3c");?></li>
                                                    </ul>
                                                    <ul class="s-time-pall">
                                                        <li class="s-time-p"><?php echo CFS()->get("s1p");?></li>
                                                        <li class="s-time-p"><?php echo CFS()->get("s2p");?></li>
                                                        <li class="s-time-p"><?php echo CFS()->get("s3p");?></li>
                                                    </ul>
                                                </li>
                                        </div>
                                        <?php endif ?>

                                    <?php if(post_custom('a1c')):?>

                                    <div class="s-time-top3">
                                   
                                    <ul>
                                            <li class="s-time-abc">A</li>
                                            <li class="s-time-time3">9:30~10:50</li>
                                            <li class="s-time-cp">
                                                <ul class="s-time-call">
                                                    <li class="s-time-cl"><?php echo CFS()->get("a1c");?></li>
                                                    <li class="s-time-cl"><?php echo CFS()->get("a2c");?></li>
                                                    <li class="s-time-cl"><?php echo CFS()->get("a3c");?></li>
                                                </ul>
                                                <ul class="s-time-pall">
                                                    <li class="s-time-p"><?php echo CFS()->get("a1p");?></li>
                                                    <li class="s-time-p"><?php echo CFS()->get("a2p");?></li>
                                                    <li class="s-time-p"><?php echo CFS()->get("a3p");?></li>
                                                </ul>
                                            </li>
                                    </div>
                                    <?php endif ?>

                        

                                    <?php if(post_custom('b1c')):?>

                                    <div class="s-time-top3">
                                   
                                   <ul>
                                           <li class="s-time-abc">B</li>
                                           <li class="s-time-time3">10:55~12:15</li>
                                           <li class="s-time-cp">
                                               <ul class="s-time-call">
                                                   <li class="s-time-cl"><?php echo CFS()->get("b1c");?></li>
                                                   <li class="s-time-cl"><?php echo CFS()->get("b2c");?></li>
                                                   <li class="s-time-cl"><?php echo CFS()->get("b3c");?></li>
                                               </ul>
                                               <ul class="s-time-pall">
                                                   <li class="s-time-p"><?php echo CFS()->get("b1p");?></li>
                                                   <li class="s-time-p"><?php echo CFS()->get("b2p");?></li>
                                                   <li class="s-time-p"><?php echo CFS()->get("b3p");?></li>
                                               </ul>
                                           </li>
                                   </div>
                                   <?php endif ?>


                                   <?php if(post_custom('b+1c')):?>

                                        <div class="s-time-top3">

                                        <ul>
                                            <li class="s-time-abc">B</li>
                                            <li class="s-time-time3">11:00~12:20</li>
                                            <li class="s-time-cp">
                                                <ul class="s-time-call">
                                                    <li class="s-time-cl"><?php echo CFS()->get("b+1c");?></li>
                                                    <li class="s-time-cl"><?php echo CFS()->get("b+2c");?></li>
                                                    <li class="s-time-cl"><?php echo CFS()->get("b+3c");?></li>
                                                </ul>
                                                <ul class="s-time-pall">
                                                    <li class="s-time-p"><?php echo CFS()->get("b+1p");?></li>
                                                    <li class="s-time-p"><?php echo CFS()->get("b+2p");?></li>
                                                    <li class="s-time-p"><?php echo CFS()->get("b+3p");?></li>
                                                </ul>
                                            </li>
                                        </div>
                                        <?php endif ?>


                                   <?php if(post_custom('c1c')):?>


                                   <div class="s-time-top3">
                                   
                                   <ul>
                                           <li class="s-time-abc">C</li>
                                           <li class="s-time-time3">13:15~14:35</li>
                                           <li class="s-time-cp">
                                               <ul class="s-time-call">
                                                   <li class="s-time-cl"><?php echo CFS()->get("c1c");?></li>
                                                   <li class="s-time-cl"><?php echo CFS()->get("c2c");?></li>
                                                   <li class="s-time-cl"><?php echo CFS()->get("c3c");?></li>
                                               </ul>
                                               <ul class="s-time-pall">
                                                   <li class="s-time-p"><?php echo CFS()->get("c1p");?></li>
                                                   <li class="s-time-p"><?php echo CFS()->get("c2p");?></li>
                                                   <li class="s-time-p"><?php echo CFS()->get("c3p");?></li>
                                               </ul>
                                           </li>
                                   </div>
                                   <?php endif ?>
                                   <?php if(post_custom('c+1c')):?>


                                        <div class="s-time-top3">

                                        <ul>
                                                <li class="s-time-abc">C</li>
                                                <li class="s-time-time3">12:30~13:50</li>
                                                <li class="s-time-cp">
                                                    <ul class="s-time-call">
                                                        <li class="s-time-cl"><?php echo CFS()->get("c+1c");?></li>
                                                        <li class="s-time-cl"><?php echo CFS()->get("c+2c");?></li>
                                                        <li class="s-time-cl"><?php echo CFS()->get("c+3c");?></li>
                                                    </ul>
                                                    <ul class="s-time-pall">
                                                        <li class="s-time-p"><?php echo CFS()->get("c+1p");?></li>
                                                        <li class="s-time-p"><?php echo CFS()->get("c+2p");?></li>
                                                        <li class="s-time-p"><?php echo CFS()->get("c+3p");?></li>
                                                    </ul>
                                                </li>
                                        </div>
                                        <?php endif ?>


                                   <?php if(post_custom('d1c')):?>


                                   <div class="s-time-top3">
                                   
                                   <ul>
                                           <li class="s-time-abc">D</li>
                                           <li class="s-time-time3">10:55~12:15</li>
                                           <li class="s-time-cp">
                                               <ul class="s-time-call">
                                                   <li class="s-time-cl"><?php echo CFS()->get("d1c");?></li>
                                                   <li class="s-time-cl"><?php echo CFS()->get("d2c");?></li>
                                                   <li class="s-time-cl"><?php echo CFS()->get("d3c");?></li>
                                               </ul>
                                               <ul class="s-time-pall">
                                                   <li class="s-time-p"><?php echo CFS()->get("d1p");?></li>
                                                   <li class="s-time-p"><?php echo CFS()->get("d2p");?></li>
                                                   <li class="s-time-p"><?php echo CFS()->get("d3p");?></li>
                                               </ul>
                                           </li>
                                   </div>
                                   <?php endif ?>
                                   <?php if(post_custom('j21c')):?>


                                        <div class="s-time-top3">

                                        <ul>
                                                <li class="s-time-abc">J2</li>
                                                <li class="s-time-time3">14:00~15:00</li>
                                                <li class="s-time-cp">
                                                    <ul class="s-time-call">
                                                        <li class="s-time-cl"><?php echo CFS()->get("j21c");?></li>
                                                        <li class="s-time-cl"><?php echo CFS()->get("j22c");?></li>
                                                        <li class="s-time-cl"><?php echo CFS()->get("j23c");?></li>
                                                    </ul>
                                                    <ul class="s-time-pall">
                                                        <li class="s-time-p"><?php echo CFS()->get("j21p");?></li>
                                                        <li class="s-time-p"><?php echo CFS()->get("j22p");?></li>
                                                        <li class="s-time-p"><?php echo CFS()->get("j23p");?></li>
                                                    </ul>
                                                </li>
                                        </div>
                                        <?php endif ?>
                                        <?php if(post_custom('j31c')):?>


                                            <div class="s-time-top3">

                                            <ul>
                                                    <li class="s-time-abc">J3</li>
                                                    <li class="s-time-time3">15:00~16:00</li>
                                                    <li class="s-time-cp">
                                                        <ul class="s-time-call">
                                                            <li class="s-time-cl"><?php echo CFS()->get("j31c");?></li>
                                                            <li class="s-time-cl"><?php echo CFS()->get("j32c");?></li>
                                                            <li class="s-time-cl"><?php echo CFS()->get("j33c");?></li>
                                                        </ul>
                                                        <ul class="s-time-pall">
                                                            <li class="s-time-p"><?php echo CFS()->get("j31p");?></li>
                                                            <li class="s-time-p"><?php echo CFS()->get("j32p");?></li>
                                                            <li class="s-time-p"><?php echo CFS()->get("j33p");?></li>
                                                        </ul>
                                                    </li>
                                            </div>
                                            <?php endif ?>
                                            <?php if(post_custom('j4+1c')):?>


                                                <div class="s-time-top3">

                                                <ul>
                                                        <li class="s-time-abc">J4</li>
                                                        <li class="s-time-time3">16:00~17:00</li>
                                                        <li class="s-time-cp">
                                                            <ul class="s-time-call">
                                                                <li class="s-time-cl"><?php echo CFS()->get("j4+1c");?></li>
                                                                <li class="s-time-cl"><?php echo CFS()->get("j4+2c");?></li>
                                                                <li class="s-time-cl"><?php echo CFS()->get("j4+3c");?></li>
                                                            </ul>
                                                            <ul class="s-time-pall">
                                                                <li class="s-time-p"><?php echo CFS()->get("j4+1p");?></li>
                                                                <li class="s-time-p"><?php echo CFS()->get("j4+2p");?></li>
                                                                <li class="s-time-p"><?php echo CFS()->get("j4+3p");?></li>
                                                            </ul>
                                                        </li>
                                                </div>
                                                <?php endif ?>
                                               
                                            <?php if(post_custom('j5+1c')):?>


                                                <div class="s-time-top3">

                                                <ul>
                                                        <li class="s-time-abc">J5</li>
                                                        <li class="s-time-time3">17:00~18:20</li>
                                                        <li class="s-time-cp">
                                                            <ul class="s-time-call">
                                                                <li class="s-time-cl"><?php echo CFS()->get("j5+1c");?></li>
                                                                <li class="s-time-cl"><?php echo CFS()->get("j5+2c");?></li>
                                                                <li class="s-time-cl"><?php echo CFS()->get("j5+3c");?></li>
                                                            </ul>
                                                            <ul class="s-time-pall">
                                                                <li class="s-time-p"><?php echo CFS()->get("j5+1p");?></li>
                                                                <li class="s-time-p"><?php echo CFS()->get("j5+2p");?></li>
                                                                <li class="s-time-p"><?php echo CFS()->get("j5+3p");?></li>
                                                            </ul>
                                                        </li>
                                                </div>
                                                <?php endif ?>
                                                <?php if(post_custom('e1c')):?>


                                                    <div class="s-time-top3">

                                                    <ul>
                                                            <li class="s-time-abc">E</li>
                                                            <li class="s-time-time3">16:00~17:20</li>
                                                            <li class="s-time-cp">
                                                                <ul class="s-time-call">
                                                                    <li class="s-time-cl"><?php echo CFS()->get("e1c");?></li>
                                                                    <li class="s-time-cl"><?php echo CFS()->get("e2c");?></li>
                                                                    <li class="s-time-cl"><?php echo CFS()->get("e3c");?></li>
                                                                </ul>
                                                                <ul class="s-time-pall">
                                                                    <li class="s-time-p"><?php echo CFS()->get("e1p");?></li>
                                                                    <li class="s-time-p"><?php echo CFS()->get("e2p");?></li>
                                                                    <li class="s-time-p"><?php echo CFS()->get("e3p");?></li>
                                                                </ul>
                                                            </li>
                                                    </div>
                                                    <?php endif ?>
                                                    <?php if(post_custom('g+1c')):?>


<div class="s-time-top3">

<ul>
        <li class="s-time-abc">G</li>
        <li class="s-time-time3">18:30~19:50</li>
        <li class="s-time-cp">
            <ul class="s-time-call">
                <li class="s-time-cl"><?php echo CFS()->get("g+1c");?></li>
                <li class="s-time-cl"><?php echo CFS()->get("g+2c");?></li>
                <li class="s-time-cl"><?php echo CFS()->get("g+3c");?></li>
            </ul>
            <ul class="s-time-pall">
                <li class="s-time-p"><?php echo CFS()->get("g+1p");?></li>
                <li class="s-time-p"><?php echo CFS()->get("g+2p");?></li>
                <li class="s-time-p"><?php echo CFS()->get("g+3p");?></li>
            </ul>
        </li>
</div>
<?php endif ?>
<?php if(post_custom('h+1c')):?>


<div class="s-time-top3">

<ul>
        <li class="s-time-abc">H</li>
        <li class="s-time-time3">20:00~21:20</li>
        <li class="s-time-cp">
            <ul class="s-time-call">
                <li class="s-time-cl"><?php echo CFS()->get("h+1c");?></li>
                <li class="s-time-cl"><?php echo CFS()->get("h+2c");?></li>
                <li class="s-time-cl"><?php echo CFS()->get("h+3c");?></li>
            </ul>
            <ul class="s-time-pall">
                <li class="s-time-p"><?php echo CFS()->get("h+1p");?></li>
                <li class="s-time-p"><?php echo CFS()->get("h+2p");?></li>
                <li class="s-time-p"><?php echo CFS()->get("h+3p");?></li>
            </ul>
        </li>
</div>
<?php endif ?>









                                   <?php if(post_custom('j41c')):?>


                                   <div class="s-time-top3">
                                   
                                   <ul>
                                           <li class="s-time-abc">J4</li>
                                           <li class="s-time-time3"></li>
                                           <li class="s-time-cp">
                                               <ul class="s-time-call">
                                                   <li class="s-time-cl"><?php echo CFS()->get("j41c");?></li>
                                                   <li class="s-time-cl"><?php echo CFS()->get("j42c");?></li>
                                                   <li class="s-time-cl"><?php echo CFS()->get("j43c");?></li>
                                               </ul>
                                               <ul class="s-time-pall">
                                                   <li class="s-time-p"><?php echo CFS()->get("j41p");?></li>
                                                   <li class="s-time-p"><?php echo CFS()->get("j42p");?></li>
                                                   <li class="s-time-p"><?php echo CFS()->get("j43p");?></li>
                                               </ul>
                                           </li>
                                   </div>
                                   <?php endif ?>


                                   <?php if(post_custom('j51c')):?>

                                   <div class="s-time-top3">
                                   
                                   <ul>
                                           <li class="s-time-abc">J5</li>
                                           <li class="s-time-time3">9:30~10:50</li>
                                           <li class="s-time-cp">
                                               <ul class="s-time-call">
                                                   <li class="s-time-cl"><?php echo CFS()->get("j51c");?></li>
                                                   <li class="s-time-cl"><?php echo CFS()->get("j52c");?></li>
                                                   <li class="s-time-cl"><?php echo CFS()->get("j53c");?></li>
                                               </ul>
                                               <ul class="s-time-pall">
                                                   <li class="s-time-p"><?php echo CFS()->get("j51p");?></li>
                                                   <li class="s-time-p"><?php echo CFS()->get("j52p");?></li>
                                                   <li class="s-time-p"><?php echo CFS()->get("j53p");?></li>
                                               </ul>
                                           </li>
                                   </div>
                                   <?php endif ?>

                                   <?php if(post_custom('g1c')):?>


                                   <div class="s-time-top3">
                                   
                                   <ul>
                                           <li class="s-time-abc">G</li>
                                           <li class="s-time-time3">10:55~12:15</li>
                                           <li class="s-time-cp">
                                               <ul class="s-time-call">
                                                   <li class="s-time-cl"><?php echo CFS()->get("g1c");?></li>
                                                   <li class="s-time-cl"><?php echo CFS()->get("g2c");?></li>
                                                   <li class="s-time-cl"><?php echo CFS()->get("g3c");?></li>
                                               </ul>
                                               <ul class="s-time-pall">
                                                   <li class="s-time-p"><?php echo CFS()->get("g1p");?></li>
                                                   <li class="s-time-p"><?php echo CFS()->get("g2p");?></li>
                                                   <li class="s-time-p"><?php echo CFS()->get("g3p");?></li>
                                               </ul>
                                           </li>
                                   </div>
                                   <?php endif ?>

                                   <?php if(post_custom('h1c')):?>


                                   <div class="s-time-top3">
                                   
                                   <ul>
                                           <li class="s-time-abc">H</li>
                                           <li class="s-time-time3">19:40</li>
                                           <li class="s-time-cp">
                                               <ul class="s-time-call">
                                                   <li class="s-time-cl"><?php echo CFS()->get("h1c");?></li>
                                                   <li class="s-time-cl"><?php echo CFS()->get("h2c");?></li>
                                                   <li class="s-time-cl"><?php echo CFS()->get("h3c");?></li>
                                               </ul>
                                               <ul class="s-time-pall">
                                                   <li class="s-time-p"><?php echo CFS()->get("h1p");?></li>
                                                   <li class="s-time-p"><?php echo CFS()->get("h2p");?></li>
                                                   <li class="s-time-p"><?php echo CFS()->get("h3p");?></li>
                                               </ul>
                                           </li>
                                   </div>
                                   <?php endif ?>

                                   <?php if(post_custom('i1c')):?>


                                   <div class="s-time-top3">
                                   
                                   <ul>
                                           <li class="s-time-abc">I</li>
                                           <li class="s-time-time3">21:20~22:30</li>
                                           <li class="s-time-cp">
                                               <ul class="s-time-call">
                                                   <li class="s-time-cl"><?php echo CFS()->get("i1c");?></li>
                                                   <li class="s-time-cl"><?php echo CFS()->get("i2c");?></li>
                                                   <li class="s-time-cl"><?php echo CFS()->get("i3c");?></li>
                                               </ul>
                                               <ul class="s-time-pall">
                                                   <li class="s-time-p"><?php echo CFS()->get("i1p");?></li>
                                                   <li class="s-time-p"><?php echo CFS()->get("i2p");?></li>
                                                   <li class="s-time-p"><?php echo CFS()->get("i3p");?></li>
                                               </ul>
                                           </li>
                                   </div>
                                   <?php endif ?>




                                </div>
                            </div>
                        </div>
                       



                    </div>
                        <?php ++$num ?>

                    <?php endwhile ?>
                <?php endif ;
                wp_reset_postdata()
                                ?>
            </div>
   <?php */ ?>

    </div>




<?php elseif (is_page('class')) : ?>
    <div class="s-class-top">
        <div class="s-class-name">
            クラスのご案内
        </div>
    </div>
    <div class="s-class-main">
        <div class="s-class-gen">
            <div class="s-class-h2">
                <h2>一般クラス</h2>
            </div>
            <div class="s-class-imgs">
            </div>
            <div class="s-class-table">
                <ul>
                    <li>入門</li>
                    <li>テニスが初めて。以前テニスの経験はあるけど…。軟式テニスの経験はあるけど…。そういった方を対象に、基本から丁寧に指導・練習をおこないます。
                    </li>
                </ul>
                <ul>
                    <li>初級</li>
                    <li>ストローク・ボレー・サーブ・スマッシュの正しい打ち方やフォームを覚え、
                        簡単なラリーができるように練習を行います。
                    </li>
                </ul>
                <ul>
                    <li>初中級</li>
                    <li>ネットプレーを練習し、ストロークとボレーの打ち合いができるように指導していきます。　また試合形式でルールや動きも覚えていきます。
                    </li>
                </ul>
                <ul>
                    <li>中級</li>
                    <li>反復練習をする中で、より安定したショットを打つための練習やポイントの取り方を練習し、試合でできるようにしていきます。
                    </li>
                </ul>
                <ul>
                    <li>中上級</li>
                    <li>各ショットにスピード・コントロールをつけて打つ練習を行い勝つためのテニスを指導していきます。
                    </li>
                </ul>
                <ul>
                    <li>上級</li>
                    <li>応用ショットの習得、ポジショニング、技術・戦術のバリエーションを増やしテニスの本質をつかみます。
                    </li>
                </ul>
                <ul>
                    <li>トーナメント中級</li>
                    <li>各ショットの精度を高め、実際に試合で使える技術を身につけます。試合に出始めた方におすすめのクラスです。
                    </li>
                </ul>
                <ul>
                    <li>トーナメント中上級</li>
                    <li>試合で勝つためのテクニックと戦術を実践的に行います。試合でなかなか勝てない、ワンランク上の試合に出たい方にお勧めのクラスです。
                    </li>
                </ul>
                <ul>
                    <li>ゲーム初級</li>
                    <li>ゲームのルールやマナーを覚えていきます。ゲームがはじめての方にお勧めです。約２０分間、基礎練習を行い残りの1時間はゲームを楽しみます。
                    </li>
                </ul>
                <ul>
                    <li>ゲーム中級</li>
                    <li>ゲームがメインのクラスです。サービスやラリー系の練習を約２０分行い、残りの約１時間はたっぷりとゲームを行います。
                    </li>
                </ul>


            </div>
            <div class="s-class-pay">
                <a href="<?php echo get_page_link(51); ?>">
                    <p>&#9654;一般クラスの料金表を見る</p>
                </a>
            </div>
        </div>
        <div class="s-class-jr">
            <div class="s-class-h2">
                <h2>ジュニアクラス</h2>
            </div>
            <div class="s-class-imgs">
            </div>
            <div class="s-class-table">
                <ul>
                    <li>スポンジボール</li>
                    <li>４歳～小学１年生。スポンジボールを使用するので安全です。
                        楽しくあそびながらテニスを覚え、基本的な運動能力を身につけます。
                    </li>
                </ul>
                <ul>
                    <li>レッドボール</li>
                    <li>小学１年生～３年生。ボール遊びから始め、やわらかいボールで間隔を覚えながら基本的なフォームをしっかり身につけます。
                    </li>
                </ul>
                <ul>
                    <li>オレンジボール</li>
                    <li>小学３年生～６年生。
                        基本技術はもちろんルールやマナーも覚え試合にもチャレンジしていきます。
                    </li>
                </ul>
                <ul>
                    <li>グリーンボール</li>
                    <li>小学３年生～６年生。オレンジボールクラスで一通りのテクニックを習得した方を対象とし実践的な練習を行います。
                    </li>
                </ul>
                <ul>
                    <li>中高生</li>
                    <li>小学６年生～高校３年生。大人と同じイエローボールを使用します。
                        試合を意識した練習を行い、実践的な能力を身につけていきます。
                    </li>
                </ul>

            </div>
            <div class="s-class-pay">
                <a href="<?php echo get_page_link(51); ?>">
                    <p>&#9654;ジュニアクラスの料金表を見る</p>
                </a>
            </div>

        </div>
        <div class="s-class-war">
            <div class="s-class-war-top">
                <h2>お願い</h2>
            </div>
            <div class="s-class-war-txt">
                <p>・定員が3名以下の場合、他のクラスへ移動していただくことがございますのでご了承ください。</p>
                <p>・コーチの都合により、担当コーチが変更になる場合がございますのでご了承下さい。</p>
                <p>・レッスンに遅刻された場合は、各自必ず準備体操を行ってください。</p>
                <p>・足元に転がっているボールには特にご注意ください。皆様の安全を最優先するためにコーチ陣も最善の注意を払っていきます。</p>
                <p>・コート内でケガをされた場合、応急処置は致しますが、その後の責任は負いかねますのでご了承ください。</p>
                <p>・コート内への飲み物の持ち込みはフタ付の飲み物でお願いします。（ペットボトル・水筒など）</p>
                <p>・駐車場における事故につきましては、責任を負いかねますのでご了承下さい。</p>
                <p>・当敷地内へのペットの持ち込みはご遠慮くださいますようお願い致します。</p>

            </div>

        </div>
    </div>

<?php elseif (is_page('rentalsystem')) : ?>
    <div class="s-rental-top">
        <div class="s-rental-name">
            レンタルコートのシステム・料金
        </div>
    </div>
    <div class="s-rental-main">
        <h2>レンタルコート料金</h2>
        <div class="s-rental-tables">
            <div class="s-rental-table">
                <ul>
                    <li>レンタルコート</li>
                    <li>時間</li>
                    <li>料金</li>
                </ul>
            </div>
            <div class="s-rental-table">
                <ul>
                    <li>スクール生</li>
                    <li>30分</li>
                    <li>440円/人</li>
                </ul>

            </div>
            <div class="s-rental-table">

                <ul>
                    <li>ビジター</li>
                    <li>30分</li>
                    <li>1,100円/人</li>
                </ul>

            </div>
        </div>
        <h2>ご利用案内</h2>
        <p>・複数面ご利用の場合は、２面は５名以上、３面は７名以上となります。</p>
        <p>・３０分単位での受付となります。</p>
        <p>・キャンセル料金はご利用料金のお一人様分となります。前日半額、当日全額）。</p>
        <p>・使用後はボールの片付け、ゴミなどのお持ち帰りをお願いいたします。 </p>
        <p>・レンタルボールか、テニスボールをご持参ください。</p>
        <p>※当日、翌日のレンタルのお申し込みは、お電話にて受け付けております。
            折り返しお電話で申込完了となります。</p>

        <p class="s-rental-pb">※新型コロナウイルス感染症対策に付き、ご来場の際はマスクを着用し、入口で手指消毒のうえお手続きください。<br>また、1面のご利用人数は6名様までとなります。</p>


    </div>
    <div class="s-rental-contact">
        <?php /* echo do_shortcode('[contact-form-7 id="513" title="rental"]');  */ ?>

    </div>


<?php elseif (is_page('court')) : ?>
    <div class="camp">
        <div class="camp-img">
            <?php the_content(); ?>

        </div>

    </div>
    <div class="s-rental-contact">
        <?php /* echo do_shortcode('[contact-form-7 id="513" title="rental"]');  */ ?>

    </div>



<?php elseif (is_page('keijiban')) : ?>
    <div class="camp">
        <div class="camp-img">
            <?php the_content(); ?>

        </div>

    </div>





<?php endif; ?>

<?php get_footer(); ?>