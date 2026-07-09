<?php
/**
 * Plugin Name: Nix Image Optimizer
 * Plugin URI: https://nixtool.com/nix-image-optimizer
 * Description: Optimize WordPress images by converting JPG, JPEG, PNG, and AVIF uploads to WebP with bulk compression, media log, watermarking, cleanup tools, image SEO metadata, and featured image generation.
 * Version: 2.1.11
 * Author: Nixtool
 * Author URI: https://nixtool.com/
 * Requires at least: 5.8
 * Requires PHP: 7.4
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: nix-image-optimizer
 */

if (!defined('ABSPATH')) {
    exit;
}

define('AICW_VERSION', '2.1.11');

define('AICW_PRODUCT_SLUG', 'nix-image-optimizer');
define('AICW_PATH', plugin_dir_path(__FILE__));
define('AICW_URL', plugin_dir_url(__FILE__));

// Backwards-compat alias (older builds referenced AICW_DIR).
if (!defined('AICW_DIR')) {
    define('AICW_DIR', AICW_PATH);
}

// Always-safe includes (frontend + admin).
require_once AICW_PATH . 'includes/helpers.php';
require_once AICW_PATH . 'includes/class-aicw-options.php';
require_once AICW_PATH . 'includes/class-aicw-converter.php';
require_once AICW_PATH . 'includes/class-aicw-media-fix.php';
require_once AICW_PATH . 'includes/class-aicw-image-seo.php';
require_once AICW_PATH . 'includes/class-aicw-featured-image.php';

register_activation_hook(__FILE__, function () {
    if (class_exists('AICW_Options')) {
        AICW_Options::ensure_defaults();
    }
});

add_action('plugins_loaded', function () {
    // Ensure defaults exist (safe to run repeatedly).
    AICW_Options::ensure_defaults();

    // Runtime hooks.
    AICW_Converter::bootstrap();
    AICW_Media_Fix::bootstrap();
    AICW_Image_SEO::bootstrap();
    AICW_Featured_Image::bootstrap();

    // Admin-only includes + UI.
    if (is_admin()) {
        require_once AICW_PATH . 'includes/class-aicw-log-table.php';
        require_once AICW_PATH . 'includes/class-aicw-bulk.php';
        require_once AICW_PATH . 'includes/class-aicw-admin.php';

        AICW_Admin::bootstrap();
        AICW_Bulk::bootstrap();
    }
});
