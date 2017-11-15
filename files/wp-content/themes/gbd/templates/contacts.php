<section class="contacts">
	<div class="container">
		<h2 class="title2 contacts__title">
			<span class="title2__unit"><?php the_field('title_contacts'); ?></span>
		</h2>
		<?php $location_1 = get_field('map_1'); ?>
		<?php $location_2 = get_field('map_2'); ?>
		<div class="contacts__select js-contacts-select">
			<div class="contacts__select-head"></div>
			<ul class="contacts__select-list">
				<li class="contacts__select-item" id="item_1" data-lat="<?php echo $location_1['lat']; ?>" data-lng="<?php echo $location_1['lng']; ?>">
					Our Office in Cyprus
				</li>
				<li class="contacts__select-item" id="item_2" data-lat="<?php echo $location_2['lat']; ?>" data-lng="<?php echo $location_2['lng']; ?>">
					Our Office in Cyprus2
				</li>
			</ul>
		</div>
		<div class="row">
			<div class="col-sm-6">

				<?php if( have_rows('repeater_1_contacts') ): ?>
					<div class="contacts__address" id="adress_1">
						<?php while ( have_rows('repeater_1_contacts') ) : the_row(); ?>

						<div class="contacts__address-item"><?php the_sub_field('adress_repeater_1_contacts'); ?></div>

						<?php endwhile; ?>
					</div>
				<?php endif; ?>

				<?php if( have_rows('repeater_2_contacts') ): ?>
					<div class="contacts__address" id="adress_2">
						<?php while ( have_rows('repeater_2_contacts') ) : the_row(); ?>

						<div class="contacts__address-item"><?php the_sub_field('adress_repeater_2_contacts'); ?></div>

						<?php endwhile; ?>
					</div>
				<?php endif; ?>

			</div>
			<div class="col-sm-6">

				<?php if ( defined( 'ICL_LANGUAGE_CODE' ) ) { ?>

					<?php if ( ICL_LANGUAGE_CODE == 'ru' ) { ?>
				  		<div id="form_1">
				  			<?php echo do_shortcode('[contact-form-7 id="163" title="Контактная форма (Наш офис на Кипре)" html_class="contacts__form"]'); ?>
				  		</div>
				  		<div id="form_2">
				  			<?php echo do_shortcode('[contact-form-7 id="164" title="Контактная форма (Наш офис на Кипре2)" html_class="contacts__form"]'); ?>
				  		</div>
				  	<?php } else { ?>
				  		<div id="form_1">
				  			<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form (Our Office in Cyprus)" html_class="contacts__form"]'); ?>
				  		</div>
				  		<div id="form_2">
				  			<?php echo do_shortcode('[contact-form-7 id="97" title="Contact form (Our Office in Cyprus2)" html_class="contacts__form"]'); ?>
				  		</div>
				  	<?php } ?>

				<?php } ?>
				
			</div>
		</div>
	</div>
</section>