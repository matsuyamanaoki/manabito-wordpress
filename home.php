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
					<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
					?>
					<li>
						<time datetime="<?php the_time( 'Y-m-d' ); ?>">
							<?php the_time( get_option( 'date_format' ) ); ?>
						</time>
						<span class="topics-title">
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</span>
					</li>
					<?php
						endwhile;
					else:
					?>
					<li>現在お知らせはありません。</li>
				<?php endif; ?>
        </ol>
      </section>
    </main>

		<?php get_sidebar(); ?>
  </div>
  <?php get_footer(); ?>
