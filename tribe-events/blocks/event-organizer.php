<?php
/**
 * Block: Event Organizer
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/blocks/event-tags.php
 *
 * See more documentation about our Blocks Editor templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version 4.7
 *
 */

$organizer = $this->attr( 'organizer' );

if ( ! $organizer ) {
	return;
}

$phone   = tribe_get_organizer_phone( $organizer );
$website = tribe_get_organizer_website_link( $organizer );
$email   = tribe_get_organizer_email( $organizer );

?>
<div class="tribe-block tribe-block__organizer__details tribe-clearfix">
	<div class="tribe-block__organizer__title">
		<h3><i class="fas fa-user-alt"></i>主催者</h3>
		<h4><?php echo tribe_get_organizer( $organizer ); ?></h4>
	</div>
	<?php if ( ! empty( $phone ) ) : ?>
		<p class="tribe-block__organizer__phone"><i class="fas fa-mobile-alt"></i><?php echo esc_html( $phone ); ?></p>
	<?php endif; ?>
	<?php if ( ! empty( $website ) ) : ?>
		<p class="tribe-block__organizer__website"><i class="fas fa-globe"></i><?php echo $website; ?></p>
	<?php endif; ?>
	<?php if ( ! empty( $email ) ) : ?>
		<p class="tribe-block__organizer__email"><i class="fas fa-envelope"></i><?php echo esc_html( $email ); ?></p>
	<?php endif; ?>
</div>
