<div class="main-slder owl-carousel owl-theme js-main-slder">

	<?php if( have_rows('repeater_slider') ): ?>

	    <?php while ( have_rows('repeater_slider') ) : the_row(); ?>
	  
	        <div class="main-slder__unit" style="background-image: url('<?php the_sub_field('img_repeater_slider'); ?>');">
				<div class="container">
					<div class="main-slder__title"><?php the_sub_field('text_repeater_slider'); ?></div>
				</div>
			</div>

	    <?php endwhile; ?>

	<?php endif; ?>

</div>