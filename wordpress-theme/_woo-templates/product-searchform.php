<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
	<input type="text" class="field" name="s" id="s" placeholder="<?php echo esc_attr_x( 'Найти комикс', 'placeholder', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<input type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>" />
	<input type="hidden" name="post_type" value="product" />
</form>