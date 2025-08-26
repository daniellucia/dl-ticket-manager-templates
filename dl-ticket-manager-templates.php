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

require_once __DIR__ . '/src/Plugin.php';

add_action('plugins_loaded', function () {

    load_plugin_textdomain('dl-ticket-manager-templates', false, dirname(plugin_basename(__FILE__)) . '/languages');

    $plugin = new DLTMTemplatesPlugin();
    $plugin->init();
});
