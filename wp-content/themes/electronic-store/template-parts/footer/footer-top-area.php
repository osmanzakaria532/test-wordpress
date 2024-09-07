<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) : ?>
<section class="footer-content footer-top-area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5 col-xl-3 col-lg-5">
			   <?php dynamic_sidebar( 'footer-1' ); ?>
			</div>
			<div class="col-md-5 col-xl-3 col-lg-5">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</div>
			<div class="col-md-5 col-xl-3 col-lg-5">
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</div>
			<div class="col-md-5 col-xl-3 col-lg-5">
				<?php dynamic_sidebar( 'footer-4' ); ?>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
