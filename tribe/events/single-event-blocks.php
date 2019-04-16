<?php
/**
 * Single Event Template
 *
 * A single event complete template, divided in smaller template parts.
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/single-event-blocks.php
 *
 * See more documentation about our Blocks Editor templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version 4.7
 *
 */

$event_id = $this->get( 'post_id' );

$is_recurring = '';

if ( ! empty( $event_id ) && function_exists( 'tribe_is_recurring_event' ) ) {
	$is_recurring = tribe_is_recurring_event( $event_id );
}
?>

<div id="myu-events-content" class="myu-events-single">
	<!-- イベントのタイトル -->
	<?php $this->template( 'single-event/title' ); ?>
	<!-- イベントの内容 -->
	<?php $this->template( 'single-event/content' ); ?>
	<!-- ナビゲーション -->
	<?php $this->template( 'single-event/footer' ); ?>
</div>