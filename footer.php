<?php /*
<h1 class="footer-top"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/indoor.png" alt=""></a></h1>
*/ ?>
<div class="tel-wrap">
  <div class="tel-top">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/FIT ロゴ (1).png" alt="FIT INDOOR TENNIS SCHOOL">
    <div class="tel-top-txt">お問い合わせはコチラ</div>
  </div>
  <div class="tel-tel">
    <div class="tel-tel-box">
      <i class="fa-solid fa-phone faa-ring animated"></i><a href="tel:">052-848-4030</a>
    </div>
  </div>
</div>

<footer id="footer">

  <div class="footer-wrapper">
    <nav class="footer-nav">
      <div class="footer-container">
        <div>&#9654; スクール </div>
        <div>
          <ul class="footer-submenu footer-submenu-li1">
            <li> <a href="<?php echo get_page_link(169); ?>">スクールの魅力</a></li>
            <li><a href="<?php echo get_page_link(51); ?>">システム・料金 </a></li>
            <li> <a href="<?php echo get_page_link(53); ?>">クラスのご案内</a></li>
            <li> <a href="<?php echo get_page_link(55); ?>">時間割</a></li>
            <li> <a href="<?php echo get_page_link(268); ?>">代行コーチのお知らせ</a></li>
            <li> <a href="https://www1.nesty-gcloud.net/fityoyaku/">お休み・振替の予約</a></li>


          </ul>
        </div>
      </div>

      <div class="footer-container">

        <div>&#9654;施設・スタッフ紹介 </div>
        <div>
          <ul class="footer-submenu footer-submenu-li2">
            <li><a href="<?php echo get_page_link(34); ?>">施設紹介 </a></li>
            <li><a href="<?php echo get_page_link(26); ?>"> スタッフ紹介</a></li>
          </ul>
        </div>

      </div>

      <div class="footer-container">

        <div> &#9654;レンタルコート</div>
        <div>
          <ul class="footer-submenu footer-submenu-li3">
            <li><a href="<?php echo get_page_link(57); ?>">システム・料金 </a></li>
            <li><a href="<?php echo get_page_link(59); ?>">レンタルコートの空き状況 </a></li>

          </ul>
        </div>

      </div>

      <div class="footer-container">

        <div class="footer-nav-question">&#9654;お問い合わせ</div>
        <div>
          <ul class="footer-submenu footer-submenu-li4">
            <li><a href="<?php echo get_page_link(61); ?>">体験レッスンのご案内 </a></li>
            <li> <a href="<?php echo get_page_link(65); ?>">総合フォーム</a></li>
          </ul>
        </div>

      </div>

    </nav>
  </div>
  <p class="copyright">Copyright &copy; Fit Tennis School. All Rights Reserved.</p>
</footer>



<?php wp_footer(); ?>


<script>
  jQuery(function() {
    jQuery('.js-btn').on('click', function() { // js-btnクラスをクリックすると、
      jQuery('.menu , .btn , .btn-line').toggleClass('open'); // メニューとバーガーの線にopenクラスをつけ外しする
    })
  });
</script>

<script>
  const timeurl = document.querySelector('#testtest a').getAttribute('href')
  console.log(timeurl);

  const newtimeurl = document.querySelector('#new-jbtn a').setAttribute('href', timeurl)
  console.log(newtimeurl);
</script>

<script>
  const timeurl2 = document.querySelector('#testtest2 a').getAttribute('href')
  console.log(timeurl2);

  const newtimeurl2 = document.querySelector('#new-jbtn2 a').setAttribute('href', timeurl2)
  console.log(newtimeurl2);
</script>

<script>
  const timeurl3 = document.querySelector('#testtest3 a').getAttribute('href')
  console.log(timeurl3);

  const newtimeurl3 = document.querySelector('#new-jbtn3 a').setAttribute('href', timeurl3)
  console.log(newtimeurl3);
</script>
</body>

</html>