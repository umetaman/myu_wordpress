<?php
/**
 * Day View Nav
 * This file contains the day view navigation.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/day/nav.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<nav class="myu-events-nav-pagination" aria-label="<?php esc_html_e( 'Day Navigation', 'the-events-calendar' ) ?>">
	<ul class="myu-events-sub-nav">

		<!-- 前の日 -->
		<li class="myu-events-nav-previous">
			<?php 
			tribe_the_day_link( 'previous day', '<i class="fas fa-arrow-left"></i>'."前の日" );
			 ?>
		</li>

		<!-- 次の日へ -->
		<li class="myu-events-nav-next">
			<?php 
			tribe_the_day_link( 'next day', "次の日".'<i class="fas fa-arrow-right"></i>' );
			?>
		</li>

	</ul>
</nav>