<?php
/**
 * Template Name: Thankyou
 */

get_header();
?>

	<section <?php theme_section_id(); ?> class="<?php echo $classes; ?> logos">
		<div class="container">
			<?php
				the_field( 'image' );
				theme_the_field( 'title', '<h2 class="section-title">', '</h2>', true );
			?>
		</div>
	</section>

<?php
get_footer();
