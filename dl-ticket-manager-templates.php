<?php

/**
 * Plugin Name: Templates PDF for Ticket Manager
 * Description: PDF templates for the ticket manager.
 * Version: 0.0.2
 * Author: Daniel Lúcia
 * Author URI: http://www.daniellucia.es
 * textdomain: dl-ticket-manager-templates
 * Requires Plugins: dl-ticket-manager
 * License:     GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

use DL\TicketsTemplates\Plugin;

defined('ABSPATH') || exit;

require_once __DIR__ . '/vendor/autoload.php';

add_action('plugins_loaded', function () {

    load_plugin_textdomain('dl-ticket-manager-templates', false, dirname(plugin_basename(__FILE__)) . '/languages');

    $plugin = new Plugin();
    $plugin->init();
});
