<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php
				if ( has_custom_logo() ) {
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
					var_dump( $image );
				}
				?>
      </a>
    </div>
    <nav class="nav-global">
      <ul>
        <li>
          <a href="about.html">展覧会について</a>
        </li>
        <li>
          <a href="schedule.html">スケジュール</a>
        </li>
        <li>
          <a href="gallery.html">作品紹介</a>
        </li>
        <li>
          <a href="contact.html">前売り券申し込み</a>
        </li>
      </ul>
    </nav>
  </header>
