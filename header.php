<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php
				if ( has_custom_logo() ) {
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image          = wp_get_attachment_image_src( $custom_logo_id, 'full' );
					$html           = '<img src="' . $image[0] . '"';
					$html          .= ' width="' . $image[1] . '"';
					$html          .= ' height="' . $image[2] . '"';
					$html          .= ' alt="' . esc_attr( get_bloginfo( 'name' ) ) . '">';

					echo $html;
				}
				?>
      </a>
    </div>
    <nav class="nav-global">
      <?php
			$args = array(
				'container'      => '',
				'items_wrap'     => '<ul>%3$s</ul>',
				'theme_location' => 'global'
			);
			wp_nav_menu( $args );
			?>
    </nav>
  </header>
