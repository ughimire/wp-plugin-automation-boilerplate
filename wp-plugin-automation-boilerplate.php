<?php
/**
 * Plugin Name:       WordPress Plugin Workflow Automation Boilerplate
 * Plugin URI:        https://github.com/ughimire/wp-plugin-automation-boilerplate
 * Description:       WordPress Plugin Workflow Automation Boilerplate
 * Version:           1.0.0
 * Author:            ughimire1
 * Author URI:        https://github.com/ughimire/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-plugin-automation-boilerplate
 * Domain Path:       /languages
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
// Define WP_PLUGIN_AUBO_PLUGIN_FILE.
if (!defined('WP_PLUGIN_AUBO_FILE')) {
    define('WP_PLUGIN_AUBO_FILE', __FILE__);
}

// Define WP_PLUGIN_AUBO_VERSION.
if (!defined('WP_PLUGIN_AUBO_VERSION')) {
    define('WP_PLUGIN_AUBO_VERSION', '1.0.0');
}

// Define WP_PLUGIN_AUBO_PLUGIN_URI.
if (!defined('WP_PLUGIN_AUBO_PLUGIN_URI')) {
    define('WP_PLUGIN_AUBO_PLUGIN_URI', plugins_url('', WP_PLUGIN_AUBO_FILE));
}

// Define WP_PLUGIN_AUBO_PLUGIN_DIR.
if (!defined('WP_PLUGIN_AUBO_PLUGIN_DIR')) {
    define('WP_PLUGIN_AUBO_PLUGIN_DIR', plugin_dir_path(WP_PLUGIN_AUBO_FILE));
}


function wp_plugin_aubo()
{
    return new stdClass();
}

$GLOBALS['wp-plugin-aubo'] = wp_plugin_aubo();
