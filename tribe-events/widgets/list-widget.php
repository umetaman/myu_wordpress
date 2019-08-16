<?php
/**
 * Events List Widget Template
 * This is the template for the output of the events list widget.
 * All the items are turned on and off through the widget admin.
 * There is currently no default styling, which is needed.
 *
 * This view contains the filters required to create an effective events list widget view.
 *
 * You can recreate an ENTIRELY new events list widget view by doing a template override,
 * and placing a list-widget.php file in a tribe-events/widgets/ directory
 * within your theme directory, which will override the /views/widgets/list-widget.php.
 *
 * You can use any or all filters included in this file or create your own filters in
 * your functions.php. In order to modify or extend a single filter, please see our
 * readme on templates hooks and filters (TO-DO)
 *
 * @version 4.5.13
 * @return string
 *
 * @package TribeEventsCalendar
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_plural = tribe_get_event_label_plural();
$events_label_plural_lowercase = tribe_get_event_label_plural_lowercase();

$posts = tribe_get_list_widget_events();

// Check if any event posts are found.
if ( $posts ) : ?>

	<ul class="myu-list-widget">
		<?php
		// Setup the post data for each event.
		foreach ( $posts as $post ) :
			setup_postdata( $post );
			?>
			<li class="myu-list-widget-element myu-events-list-widget-events <?php tribe_events_event_classes() ?>">
				<?php
				// イベントの画像があるかどうかを判断する
				$thumbnail_url = get_template_directory_uri().'/images/no_image.jpg';
				if(has_post_thumbnail()){
					$thumbnail_url = get_the_post_thumbnail_url();
				}
				?>
				<div class="myu-event-thumbnail-wrapper">
					<img src="<?php echo $thumbnail_url; ?>" alt="<?php echo the_title(); ?>">
				</div>

				<div class="myu-event-info-wrapper">
					<?php do_action( 'tribe_events_list_widget_before_the_event_title' ); ?>
					<!-- イベントのタイトル -->
					<h3 class="myu-event-title">
						<?php the_title(); ?>
					</h3>
					
					<?php do_action( 'tribe_events_list_widget_after_the_event_title' ); ?>
					<!-- イベントの期間 -->
					<?php do_action( 'tribe_events_list_widget_before_the_meta' ) ?>
					<div class="myu-event-duration">
						<p><i class="far fa-calendar"></i><?php echo tribe_events_event_schedule_details(); ?></p>
					</div>
					<?php do_action( 'tribe_events_list_widget_after_the_meta' ) ?>
				</div>
				<a class="myu-event-widget-link" href="<?php echo esc_url( tribe_get_event_link() ); ?>"></a>
			</li>
		<?php
		endforeach;
		?>
	</ul>

	<p class="myu-events-widget-link">
		<a id="widget-events-link-btn" class="myu-btn" href="<?php echo esc_url( tribe_get_events_link() ); ?>" rel="bookmark"><?php printf( esc_html__( 'View All %s', 'the-events-calendar' ), $events_label_plural ); ?></a>
	</p>

<?php
// No events were found.
else : ?>
	<p><?php printf( esc_html__( 'There are no upcoming %s at this time.', 'the-events-calendar' ), $events_label_plural_lowercase ); ?></p>
<?php
endif;
