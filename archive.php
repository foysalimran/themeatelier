<?php get_header(); ?>

<main id="primary">
	<?php if (have_posts()) : ?>
		<section class="h-[380px] bg-secondary">
			<div class="container text-center">
				<?php
				the_archive_title('<h1 class="mb-0 text-3xl sm:text-4xl pt-44">', '</h1>');
				the_archive_description('<div class="text-lg">', '</div>');
				?>
			</div>
		</section>

		<div class="container">
			<?php
			while (have_posts()) : ?>
				<div class="grid gap-8 mt-16 md:grid-cols-2 lg:grid-cols-3">
				<?php the_post();
				get_template_part('template-parts/content', get_post_type());
			endwhile; ?>
				</div><?php
					else :
						get_template_part('template-parts/content', 'none');

					endif;
						?>

			<div class="mt-12">
				<div class="ta-pagination">
					<?php the_posts_pagination(
						array(
							"screen_reader_text" => ' ',
							"prev_text"          => '<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>',
							"next_text"          => '<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>'
						)
					) ?>
				</div>
			</div>
		</div>
</main><!-- #main -->
<?php
get_footer();
