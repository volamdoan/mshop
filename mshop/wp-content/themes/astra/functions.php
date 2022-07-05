<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '3.8.2' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '3.6.3' );

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-update.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-pb-compatibility.php';


/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

if ( is_admin() ) {

	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';

}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymus functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';

add_action( 'woocommerce_after_shop_loop_item_title', 'wc_product_sold_count' );
add_action( 'woocommerce_single_product_summary', 'wc_product_sold_count', 11 );
function wc_product_sold_count() {
 global $product;
 $units_sold = get_post_meta( $product->get_id(), 'total_sales', true );
 echo '<p class="da-ban">' . sprintf( __( 'Đã bán: %s', 'woocommerce' ), $units_sold ) . '</p>';
}


function isures_flashsale_countdown_and_stock_prod()
{
    $thepostid = get_the_ID();
    $sale_price_dates_to  = ($date_to = get_post_meta($thepostid, '_sale_price_dates_to', true)) ? date_i18n('Y-m-d', $date_to) : '';
 
 
    $sale_from =  ($date_from = get_post_meta($thepostid, '_sale_price_dates_from', true)) ? date_i18n('Y-m-d', $date_from) : '';
    $strtotime_date_from = strtotime($sale_from);
    $strtotime_date_to = strtotime($sale_price_dates_to);
    if (!empty($sale_price_dates_to) && $strtotime_date_to > $strtotime_date_from && $strtotime_date_to >= strtotime(date("Y/m/d"))) {
?>
 
 
        <div class="crazy-deal-details pc">
            <div class="crazy-deal-details-right">
                <time class="crazy-deal-details-countdown">Kết thúc sau <span data-count="<?php echo $sale_price_dates_to; ?>" id="isures-sale-fl"></span></time>
                <?php
                global $product;
                $stock  = $product->get_stock_quantity();
                $buy = get_post_meta($product->get_id(), 'total_sales', true);
                if (!empty($stock) && $buy > 0) {
 
 
                    $round = round(($buy * 100 / ($stock + $buy)), 0);
                ?>
                    <div class="crazy-deal-details-process">
                        <div class="crazy-deal-details-procressbar">
                            <div class="crazy-deal-details-procressbar-inner" style="width:<?php echo  $round . '%'; ?>"></div>
                        </div>
                        <span class="crazy-deal-details-soldtext"><?php echo sprintf(__('Đã bán %s ', 'woocommerce'), $buy); ?></span>
                    </div>
                <?php
                }
                ?>
 
 
 
 
            </div>
        </div>
<script>
    jQuery(function($) {
        function updateTimer() {
            var isures_count = $("#isures-sale-fl").attr('data-count');
            future  = Date.parse(isures_count);
            now     = new Date();
            diff    = future - now;
 
 
            days  = Math.floor( diff / (1000*60*60*24) );
            hours = Math.floor( diff / (1000*60*60) );
            mins  = Math.floor( diff / (1000*60) );
            secs  = Math.floor( diff / 1000 );
 
 
            d = days;
            h = hours - days  * 24;
            m = mins  - hours * 60;
            s = secs  - mins  * 60;
 
 
 
 
            $('#isures-sale-fl').html(d + ':' + h + ':' + m + ':' + s);
        }
        setInterval(function() {
            updateTimer();
        }, 1000);
 
 
 
 
 
 
    });
</script>
        <style>
            .crazy-deal-details.pc {
                margin: 25px auto;
                height: 15px;
                overflow: hidden;
                background-image: url(https://thietkewebgiarehcm.com/wp-content/uploads/2021/07/flashsale-pc.png);
                background-position: 0 0;
                background-repeat: no-repeat;
                background-size: 100% 100%;
 
 
            }
 
 
            .crazy-deal-details-right {
                position: relative;
                margin-left: 140px;
                height: 100%;
                display: flex;
                align-items: center;
                flex-direction: row;
                justify-content: space-between;
            }
 
 
            time.crazy-deal-details-countdown {
                text-align: left;
                font-size: 14px;
            }
 
 
            span#isures-sale-fl {
                color: #ff3d00;
                font-size: 14px;
            }
 
 
            span.crazy-deal-details-soldtext {
                color: #999;
                font-size: 14px;
                font-weight: bold;
                margin-right: 10px;
            }
 
 
            .crazy-deal-details.pc .crazy-deal-details-process {
                display: flex;
                flex-direction: row-reverse;
                align-items: center;
                color: #999;
                font-weight: 700;
            }
 
 
            .crazy-deal-details.pc .crazy-deal-details-procressbar {
                width: 90px;
                height: 8px;
                background: #ffd1c2;
                border-radius: 4px;
                display: inline-block;
                margin-right: 6px;
                margin-left: 6px;
            }
 
 
            .crazy-deal-details.pc .crazy-deal-details-procressbar-inner {
                background: linear-gradient(90deg, #ff8763, #ff330c);
                border-radius: 4px;
                width: 0;
                height: 100%;
            }
 
 
            @media screen and (max-width: 1024px) {
                .crazy-deal-details.pc {
                    height: 50px;
                    background-image: url(https://thietkewebgiarehcm.com/wp-content/uploads/2021/07/flashsale-mobile.png);
 
 
                }
 
 
                .crazy-deal-details-right {
                    position: relative;
                    display: flex;
                    color: #fff;
                    margin-right: 10px;
                    height: 100%;
                    flex-direction: column;
                    justify-content: center;
                    align-items: flex-end;
                }
 
 
                .crazy-deal-details-procressbar {
                    background: hsla(0, 0%, 100%, .5);
                }
 
 
                .crazy-deal-details.pc .crazy-deal-details-procressbar-inner {
                    background: #fff;
                }
 
 
                .isures-sale-fl,
                span.crazy-deal-details-soldtext {
                    color: #fff !important
                }
            }
        </style>
<?php
    }
}
 
 

add_action('woocommerce_single_product_summary', 'isures_flashsale_countdown_and_stock_prod');
add_filter('woocommerce_sale_flash','devvn_woocommerce_sale_flash', 10, 3);



function devvn_woocommerce_sale_flash($text, $post, $product){

    ob_start();

    $sale_price = get_post_meta( $product->get_id(), '_price', true);

    $regular_price = get_post_meta( $product->get_id(), '_regular_price', true);

    if (empty($regular_price) && $product->is_type( 'variable' )){

        $available_variations = $product->get_available_variations();

        $variation_id = $available_variations[0]['variation_id'];

        $variation = new WC_Product_Variation( $variation_id );

        $regular_price = $variation ->regular_price;

        $sale_price = $variation ->sale_price;

    }

    $sale = ceil(( ($regular_price - $sale_price) / $regular_price ) * 100);

    if ( !empty( $regular_price ) && !empty( $sale_price ) && $regular_price > $sale_price ) :

        $R = floor((255*$sale)/100);

        $G = floor((255*(100-$sale))/100);

        $bg_style = 'background:none;background-color: rgb(' . $R . ',' . $G . ',0);';

        echo apply_filters( 'devvn_woocommerce_sale_flash', '<span class="onsale" style="'. $bg_style .'">-' . $sale . '%</span>', $post, $product );

    endif;

    return ob_get_clean();

}

