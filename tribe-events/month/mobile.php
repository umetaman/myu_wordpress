<?php
/**
 * Please see single-event.php in this directory for detailed instructions on how to use and modify these templates.
 *
 * Override this template in your own theme by creating a file at:
 *
 *     [your-theme]/tribe-events/month/mobile.php
 *
 * @version  4.7.1
 */
?>

<script type="text/html" id="myu_tmpl_month_mobile_day_header">
	<div class="myu-mobile-day" data-day="[[=date]]">[[ if(has_events) { ]]
		<h3 class="myu-mobile-day-heading">[[=i18n.for_date]] <span>[[=raw date_name]]<\/span><\/h3>[[ } ]]
	<\/div>
</script>

<script type="text/html" id="myu_tmpl_month_mobile">
	<div class="myu-events-mobile myu-clearfix myu-events-mobile-event-[[=eventId]][[ if(categoryClasses.length) { ]] [[= categoryClasses]][[ } ]]">
		<h4 class="summary">
			<a class="url" href="[[=permalink]]" title="[[=title]]" rel="bookmark">[[=raw title]]<\/a>
		<\/h4>

		<div class="myu-events-event-body">
			<div class="myu-events-event-schedule-details">
				<span class="myu-event-date-start">[[=dateDisplay]] <\/span>
			<\/div>
			[[ if(imageSrc.length) { ]]
			<div class="myu-events-event-image">
				<a href="[[=permalink]]" title="[[=title]]">
					<img src="[[=imageSrc]]" alt="[[=title]]" title="[[=title]]">
				<\/a>
			<\/div>
			[[ } ]]
			[[ if(excerpt.length) { ]]
			<div class="myu-event-description"> [[=raw excerpt]] <\/div>
			[[ } ]]
			<a href="[[=permalink]]" class="myu-events-read-more" rel="bookmark">[[=i18n.find_out_more]]<\/a>
		<\/div>
	<\/div>
</script>
