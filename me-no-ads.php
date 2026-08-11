<?php
/**
 * Plugin Name: MeNoAds
 * Plugin URI:  https://wpstack.online/wpstack-plugin/me-no-ads/
 * Description: Clean up cluttered WordPress admin notices, upsell banners, and promotional popups while protecting security alerts.
 * Version:     1.0.0
 * Author:      WPStack Studio
 * Author URI:  https://wpstack.online/
 * License:     GPLv3 or later
 * Text Domain: me-no-ads
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('admin_head', function() {
    if (!current_user_can('manage_options')) {
        echo '<style>.update-nag, .notice:not(.notice-error) { display: none !important; }</style>';
    }
});
