<?php
/**
 * Venue template part for the Event Venue block
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/blocks/parts/venue.php
 *
 * See more documentation about our Blocks Editor templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version 4.7
 *
 */

if ( ! tribe_get_venue_id() ) {
	return;
}
$attributes = $this->get( 'attributes', array() );

$phone   = tribe_get_phone();
$website = tribe_get_venue_website_link();

?>

<div class="myu-block-venue-meta">
	<div class="myu-block-venue-name">
		<h3 class="myu-block-venue-title"><i class="fas fa-map-marker-alt"></i>場所</h3>
		<p class="myu-block-venue-detail"><?php echo tribe_get_venue() ?></p>
	</div>
</div>
