<section class="about js-about" style="background-image: url(<?php the_field('background_about'); ?>);">
	<div class="container about__container">
		<h2 class="title2 about__title">
			<span class="title2__unit"><?php the_field('title_about'); ?></span>
		</h2>
		<div class="row">
			<div class="col-sm-6">
				<div class="about__text">
					<?php the_field('desc_about'); ?>
				</div>
			</div>
			<div class="col-sm-6">

				<?php if( have_rows('repeater_about') ): ?>
					<ul class="list about__list">
						<?php while ( have_rows('repeater_about') ) : the_row(); ?>

						<li class="list__item"><?php the_sub_field('item_repeater_about'); ?></li>

						<?php endwhile; ?>
					</ul>
				<?php endif; ?>

			</div>
		</div>
		<a href="<?php the_field('link_btn_about'); ?>" class="button about__button"><?php the_field('text_btn_about'); ?></a>
	</div>
</section>