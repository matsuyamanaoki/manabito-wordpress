<?php get_header(); ?>
  <div id="eye_catch" class="eye-catch">
    <ul>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/pickup1.jpg" width="840" height="404" alt="企画展覧会。日本×写真。開催期間2015年8月28日より東京、大阪、福岡、名古屋、仙台巡回">
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/pickup2.jpg" width="840" height="404" alt="全国から集まった写真、約200点展示">
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/pickup3.jpg" width="840" height="404" alt="壁に風景写真が3点掛けられている">
      </li>
    </ul>
  </div>
  <div class="contents">
    <main>
      <section class="l-section">
        <h2 class="section-title">トピックス</h2>
        <ol class="topics-list">
          <li>
            <time datetime="2015-09-20">2015年09月20日</time>
            <span class="topics-title">総入場者数が1万人を突破いたしました。</span>
          </li>
          <li>
            <time datetime="2015-09-18">2015年09月18日</time>
            <span class="topics-title">大阪会場で展覧会がスタートいたしました。たくさんの皆様のご来場をお待ちしております。</span>
          </li>
          <li>
            <time datetime="2015-09-13">2015年09月13日</time>
            <span class="topics-title">9月下旬に大阪会場で写真家5名によるギャラリートークを開催いたします。詳しい日程は決まり次第お知らせいたします。</span>
          </li>
          <li>
            <time datetime="2015-09-10">2015年09月10日</time>
            <span class="topics-title">東京会場は終了いたしました。たくさんの皆様のご来場ありがとうございました。</span>
          </li>
        </ol>
      </section>
    </main>
    <aside>
      <div class="side-bnr">
        <a href="gallery.html">
          <img src="<?php echo get_template_directory_uri(); ?>/images/btn_gallery.jpg" width="200" height="114" alt="作品紹介">
        </a>
      </div>
      <div class="side-bnr">
        <a href="contact.html">
          <img src="<?php echo get_template_directory_uri(); ?>/images/btn_tickets.jpg" width="200" height="84" alt="前売り券申し込み">
          <span>前売り券好評発売中</span>
        </a>
      </div>
    </aside>
  </div>
  <?php get_footer(); ?>
