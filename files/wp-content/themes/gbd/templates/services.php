<section class="services">
	<div class="container-fluid">

		<h2 class="title2 services__title">
			<span class="title2__unit"><?php the_field('title_services'); ?></span>
		</h2>

		<?php $terms = get_field('select_services'); ?>

		<div class="row services__row">

			<?php foreach( (array)$terms as $term ): ?>

				<div class="col-sm-4 services__col">
					<a href="<?php echo get_term_link($term->term_id,'category') ?>" class="services__unit">
						<div class="services__img">
							<img src="<?php the_field('img_category', $term); ?>" alt="alt" class="img-full">
						</div>
						<div class="services__name">
							<div class="services__name-text"><?php echo $term->name; ?></div>
						</div>
					</a>
				</div>

			<?php endforeach; ?>

		</div>

	</div>
</section>