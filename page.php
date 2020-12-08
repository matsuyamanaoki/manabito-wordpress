<?php get_header(); ?>

<?php if( shortcode_exists( 'wp-structuring-markup-breadcrumb' ) ) : ?>
<nav class="breadcrumb">
	<?php echo do_shortcode( '[wp-structuring-markup-breadcrumb]' ); ?>
</nav>
<?php endif; ?>

<div class="contents">
	<main>
		<?php
		if (have_posts() ) :
			while ( have_posts() ) :
				the_post();
				the_content();
			endwhile;
		endif;
		?>
	</main>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
