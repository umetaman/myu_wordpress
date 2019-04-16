<?php
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @version 4.6.19
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Setup an array of venue details for use later in the template
$venue_details = tribe_get_venue_details();

// The address string via tribe_get_venue_details will often be populated even when there's
// no address, so let's get the address string on its own for a couple of checks below.
$venue_address = tribe_get_address();

// Venue
$has_venue_address = ( ! empty( $venue_details['address'] ) ) ? ' location' : '';

// Organizer
$organizer = tribe_get_organizer();

?>

<!-- イベントのタイトル -->
<?php do_action( 'tribe_events_before_the_event_title' ) ?>
<h3 class="myu-single-event-title">
	<!-- イベントのタイトルはリンク付きとする -->
	<a class="url" href="<?php echo esc_url( tribe_get_event_link() ); ?>" title="<?php the_title_attribute() ?>" rel="bookmark">
		<?php the_title() ?>
	</a>
</h3>

<?php do_action( 'tribe_events_after_the_event_title' ) ?>

<!-- イベントの時刻と場所 -->
<?php do_action( 'tribe_events_before_the_meta' ) ?>
<div class="myu-single-event-meta <?php echo esc_attr( $has_venue . $has_venue_address ); ?>">

	<!-- 時刻 -->
	<div class="myu-single-event-time-details">
		<?php echo tribe_events_event_schedule_details(); ?>
	</div>

	<?php 
	// 場所は設定されていたら表示する
	if ( $venue_details ) : ?>
		<!-- 場所 -->
		<div class="myu-single-event-venue-details">
			<p>
			<?php
			if($venue_details['linked_name'] != null){
				echo '<i class="fas fa-map-marker-alt"></i>'.$venue_details['linked_name'];
			}
			?>
			</p>
		</div>
	<?php endif; ?>
</div>

<?php do_action( 'tribe_events_after_the_meta' ) ?>

<div class="myu-single-event-infomation-container">
	<!-- イベントのサムネイル、正方形を推奨 -->
	<div class="myu-single-event-thumbnail-flex-wrapper">
		<?php
			echo the_post_thumbnail( null, array("class" => "myu-single-event-thumbnail") );
		?>
	</div>

<!-- イベントの内容 -->
<?php do_action( 'tribe_events_before_the_content' ) ?>
	<div class="myu-single-event-detail-container">
		<!-- 紹介文 -->
		<div class="myu-single-event-description">
			<?php echo tribe_events_get_the_excerpt(); ?>
		</div>

		<div class="view-event-detail-btn">
			<a href="<?php echo esc_url( tribe_get_event_link() ); ?>" class="myu-single-event-read-more" rel="bookmark">
				<?php esc_html_e( 'Find out more', 'the-events-calendar' ) ?>
			</a>
		</div>
	</div>
</div>

<?php
do_action( 'tribe_events_after_the_content' );