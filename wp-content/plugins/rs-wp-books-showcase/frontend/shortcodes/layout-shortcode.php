<?php
function rswpbs_loop_layout($args = array()){
	extract($args);
	?>
	<div class="<?php echo esc_attr($bookColumnClases);?>">
		<div class="rswpthemes-book-container<?php echo esc_attr($book_container_classes);?>">
			<?php
			if ('true' == $showBookImage) :
			?>
			<div class="rswpthemes-book-loop-image<?php echo esc_attr($thumbnail_wrapper_classes);?>">
				<a href="<?php the_permalink(); ?>">
				<?php
					if ('book_cover' == $bookImageType) :
						echo rswpbs_get_book_image(get_the_ID());
					else:
						if (class_exists('Rswpbs_Pro')) {
							rswpbs_book_mockup_image(get_the_ID());
						}
					endif;
					?>
				</a>
			</div>
			<?php
			endif;
			?>
			<div class="rswpthemes-book-loop-content-wrapper<?php echo esc_attr($content_wrapper_classes);?>">
				<?php
				if ('true' == $showBookTitle):
				?>
				<h2 class="book-title">
					<a href="<?php the_permalink(); ?>">
						<?php
						if ('book_name' == $bookTitleType) :
						 echo esc_html(rswpbs_get_book_name(get_the_ID()));
						else:
							the_title();
						endif;
						?>
					</a>
				</h2>
				<?php
				endif;
				if ('true' == $showBookAuthor) :
				?>
				<h4 class="book-author"><strong><?php echo rswpbs_static_text_by(); ?></strong>
					<?php
					echo wp_kses_post(rswpbs_get_book_author(get_the_ID()));
					?>
				</h4>
				<?php
				endif;
				if ('true' == $showBookPrice) :
				?>
				<div class="book-price d-flex">
					<?php echo wp_kses_post(rswpbs_get_book_price(get_the_ID())); ?>
				</div>
				<?php endif;
				if ('true' == $showBookExcerpt && !empty(rswpbs_get_book_desc())) :
				?>
				<div class="book-desc d-flex">
			      <?php echo wp_kses_post(rswpbs_get_book_desc(get_the_ID(), $excerptLimit)); ?>
			    </div>
			    <?php
				endif;
				?>
				<div class="rswpbs-book-buttons-wrapper">
				<?php
				if ('true' == $showBookBuyBtn) :
			    ?>
			    <div class="book-buy-btn d-flex">
			      <?php echo wp_kses_post(rswpbs_get_book_buy_btn()); ?>
			    </div>
			    <?php
				endif;
				if ('true' == $show_read_more_button) :
			    ?>
			    <div class="rswpbs-loop-read-more-button">
			    	<a href="<?php the_permalink();?>"><?php echo esc_html(rswpbs_static_text_read_more());?></a>
			    </div>
			    <?php
				endif;
				?>
				</div>
				<?php
				if ( class_exists('Rswpbs_Pro') && 'true' == $showMsl) :
			    ?>
			    <div class="book-multiple-sales-links d-flex">
			     <?php echo rswpbs_pro_book_also_available_web_list(get_the_ID(), $mslTitleAlign); ?>
			    </div>
			    <?php
				endif;
			    ?>
			</div>
		</div>
	</div>
	<?php
}