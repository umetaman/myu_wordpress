<?php
/**
 * List View Nav Template
 * This file loads the list view navigation.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/nav.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */
if ( ! $wp_query = tribe_get_global_query_object() ) {
	return;
}

$events_label_plural = tribe_get_event_label_plural();

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<nav class="myu-events-nav-pagination" aria-label="<?php echo esc_html( sprintf( esc_html__( '%s List Navigation', 'the-events-calendar' ), $events_label_plural ) ); ?>">
	<ul class="myu-events-sub-nav">

		<?php 
		// 前のイベントがあったとき
		if ( tribe_has_previous_event() ) : ?>
			<!-- 前のイベントへ -->
			<li class="myu-events-nav-previous">
				<a href="<?php echo esc_url(tribe_get_listview_prev_link()); ?>">
					<i class="fas fa-arrow-left"></i>前のイベント
				</a>
			</li>
		<?php endif; ?>

		<?php 
		// 次のイベントがあったとき
		if ( tribe_has_next_event() ) : ?>
			<!-- 前のイベントへ -->
			<li class="myu-events-next-previous">
				<a href="<?php echo esc_url(tribe_get_listview_next_link()); ?>">
					次のイベント<i class="fas fa-arrow-right"></i>
				</a>
			</li>
		<?php endif; ?>

	</ul>
</nav>