<?php get_header(); ?>

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
