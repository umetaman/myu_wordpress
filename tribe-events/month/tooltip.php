<?php
/**
 * Please see single-event.php in this directory for detailed instructions on how to use and modify these templates.
 *
 * Override this template in your own theme by creating a file at:
 *
 *     [your-theme]/tribe-events/month/tooltip.php
 * @version 4.6.21
 */
?>

<script type="text/html" id="tribe_tmpl_tooltip">
	<div id="myu-events-tooltip-[[=eventId]]" class="myu-events-tooltip">
		<h3 class="entry-title summary">[[=raw title]]<\/h3>

		<div class="myu-events-event-body">
			<div class="myu-event-duration">
				<abbr class="myu-events-abbr myu-event-date-start">[[=dateDisplay]] <\/abbr>
			<\/div>
			[[ if(imageTooltipSrc.length) { ]]
			<div class="myu-events-event-thumb">
				<img src="[[=imageTooltipSrc]]" alt="[[=title]]" \/>
			<\/div>
			[[ } ]]
			[[ if(excerpt.length) { ]]
			<div class="myu-event-description">[[=raw excerpt]]<\/div>
			[[ } ]]
			<span class="myu-events-arrow"><\/span>
		<\/div>
	<\/div>
</script>

<script type="text/html" id="myu_tmpl_tooltip_featured">
	<div id="myu-events-tooltip-[[=eventId]]" class="myu-events-tooltip myu-event-featured">
		[[ if(imageTooltipSrc.length) { ]]
			<div class="myu-events-event-thumb">
				<img src="[[=imageTooltipSrc]]" alt="[[=title]]" \/>
			<\/div>
		[[ } ]]

		<h3 class="entry-title summary">[[=raw title]]<\/h3>

		<div class="myu-events-event-body">
			<div class="myu-event-duration">
				<abbr class="myu-events-abbr myu-event-date-start">[[=dateDisplay]] <\/abbr>
			<\/div>

			[[ if(excerpt.length) { ]]
			<div class="myu-event-description">[[=raw excerpt]]<\/div>
			[[ } ]]
			<span class="myu-events-arrow"><\/span>
		<\/div>
	<\/div>
</script>
