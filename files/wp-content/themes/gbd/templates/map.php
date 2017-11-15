<?php $location_1 = get_field('map_1'); ?>

<?php if( !empty($location_1) ): ?>
	<div class="map acf-map" id="map">
		<div class="marker" data-lat="<?php echo $location_1['lat']; ?>" data-lng="<?php echo $location_1['lng']; ?>"></div>
	</div>
<?php endif; ?>
