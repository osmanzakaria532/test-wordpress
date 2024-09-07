<?php
/**
 * Search Form
 *
 * @package Electronic Store
 */
?>
<div class="sidebarsearch">
    <form class="search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    	<input type="text" class="form-control" id="search" placeholder="<?php esc_attr_e( 'Search Here.....', 'electronic-store' ); ?>" value="<?php echo esc_attr( the_search_query() ); ?>" name="s">
    	<button type="submit"><i class="rswpthemes-icon icon-search" aria-hidden="true"></i></button>
    </form>
</div>
