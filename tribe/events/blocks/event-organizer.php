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
<div class="myu-block-organizer-container">
	<!-- 主催者 -->
	<div class="myu-block-organizer-title">
		<h3><i class="fas fa-user-alt"></i>主催者</h3>
		<?php if(!empty($website)): ?>
		<!-- <h4><?php echo tribe_get_organizer( $organizer ); ?></h4> -->
		
		<?php endif; ?>
		<?php
		//主催者のWebサイトの表記があった場合は、リンク付きとする。
		if(empty($website)){
			echo '<h4>'.tribe_get_organizer($organizer)."</h4>";
		}else{
			$raw_website_link = wp_strip_all_tags($website);

			echo '<h4><a href="'.$raw_website_link.'">'.tribe_get_organizer($organizer)."</a></h4>";
		}
		?>
	</div>

	<?php if ( ! empty( $phone ) ) : ?>
		<p class="myu-block-organizer-phone"><i class="fas fa-mobile-alt"></i><?php echo esc_html( $phone ); ?></p>
	<?php endif; ?>
	<?php if ( ! empty( $email ) ) : ?>
		<p class="myu-block-organizer-email"><i class="fas fa-envelope"></i><?php echo esc_html( $email ); ?></p>
	<?php endif; ?>
</div>
