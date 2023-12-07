<section <?php theme_section_id(); ?> class="thankyou contact-form">
	<div class="container">
		<!-- <img src="<?php the_sub_field( 'image' ); ?>" alt=""> -->
		<svg xmlns="http://www.w3.org/2000/svg" width="193.988" height="204.747" viewBox="0 0 193.988 204.747">
			<path id="Path_839" data-name="Path 839" d="M157.079,0,83.43,84.908,84,60.5,0,171.852,68.216,95.63l-1.372,30.059Z" transform="translate(0 38) rotate(-14)" fill="var(--color-black)"/>
		</svg>
		<h2 class="section-title">
			<?php
				the_sub_field( 'title' );
			?>
		</h2>

		<p>
			<?php
				the_sub_field( 'description' );
			?>
		</p>
	</div>
</section>