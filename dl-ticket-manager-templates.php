<?php

/**
 * Plugin Name: Templates PDF for Ticket Manager
 * Description: Plantillas PDF para el gestor de tickets.
 * Version: 0.0.2
 * Author: Daniel Lúcia
 * Author URI: http://www.daniellucia.es
 * textdomain: dl-ticket-manager-templates
 * Requires Plugins: dl-ticket-manager
 */

defined('ABSPATH') || exit;

require_once __DIR__ . '/vendor/autoload.php';

use DL\TicketManagerTemplates\Plugin;

add_action('plugins_loaded', function () {

    load_plugin_textdomain('dl-ticket-manager-templates', false, dirname(plugin_basename(__FILE__)) . '/languages');

    $plugin = new Plugin();
    $plugin->init();
});
