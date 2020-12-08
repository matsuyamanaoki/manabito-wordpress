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
		?>
		<article>
			<?php the_title( '<h1>', '</h1>' ); ?>
			<span>
				更新日：
				<time datetime="<?php the_modified_time( 'Y-m-d' ); ?>">
					<?php the_modified_time( get_option( 'date_format' ) ); ?>
				</time>
			</span>
			<span>
				登録日：
				<time datetime="<?php the_time( 'Y-m-d' ); ?>">
					<?php the_time( get_option( 'date_format' ) ); ?>
				</time>
			</span>
		<?php the_content(); ?>
		</article>
		<?php
			endwhile;
		endif;
		?>
	</main>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
