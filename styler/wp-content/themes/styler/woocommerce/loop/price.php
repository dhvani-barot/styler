<?php
/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>

<?php if ( $price_html = $product->get_price_html() ) : ?>
	<?php $symbol = get_woocommerce_currency_symbol(); ?>
	<div class="products__inner clearfix">
		<span class="products__price-new"><?php echo $symbol.wc_format_decimal( $product->get_sale_price(), 2 ); ?></span>
		<span class="products__price-old"><?php echo $symbol.wc_format_decimal( $product->get_regular_price(), 2 ); ?></span>
	</div>
<?php endif; ?>
