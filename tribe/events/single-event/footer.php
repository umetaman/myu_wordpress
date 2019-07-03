<?php
/**
 * Single Event Footer Template Part
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/single-event/footer.php
 *
 * See more documentation about our Blocks Editor templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version 4.7
 *
 */
?>

<?php
$events_label_singular = tribe_get_event_label_singular();
?>
<div id="myu-events-footer">
	<h3 class="myu-events-visuallyhidden"><?php printf( esc_html__( '%s Navigation', 'the-events-calendar' ), $events_label_singular ); ?></h3>
	<ul class="myu-events-sub-nav">
		<!-- 前のイベントへ -->
		<li class="myu-events-nav-previous">
			<?php tribe_the_prev_event_link( '<i class="fas fa-arrow-left"></i>%title%' ) ?></li>
		<!-- 次のイベントへ -->
		<li class="myu-events-nav-next">
			<?php tribe_the_next_event_link( '%title%<i class="fas fa-arrow-right"></i>' ) ?>
		</li>
	</ul>
</div>
