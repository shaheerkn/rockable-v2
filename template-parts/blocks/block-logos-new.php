<?php
$classes = 'layout-' . get_query_var('layout_index');
if (get_sub_field('section_classes')) {
  $classes .= ' ' . get_sub_field('section_classes');
}
?>
<section <?php theme_section_id(); ?> class="<?php echo $classes; ?> logos">

  <?php
    while (have_rows( 'logos' ) ) : the_row(); ?>
      <div class="container">
        <?php
        $row_items = get_sub_field('row_items');
        $images = '4_logos_repeater';

        if ( $row_items == 3 ) {
          $images = '3_logos_repeater';
        }
        // echo get_sub_field( '4_logos' );

        while ( have_rows( $images ) ) : the_row();
          ?>
          <div data-aos="fade-up" data-aos-duration="1000">
            <div class="logos__logo <?php echo ( get_sub_field( 'hide_on_mobile' ) ) ? 'hide' : ''; ?>">
              <?php theme_get_attachment( get_sub_field('image') , 'full', '', true, true ); ?>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endwhile; ?>
</section>