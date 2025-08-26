<?php

namespace DL\TicketManagerTemplates;


class Plugin
{

    public function init(): void
    {
        add_filter('dl_ticket_manager_templates', [$this, 'loadTemplates'], 10, 1);
    }


    public function loadTemplates($templates) {

        $templates[plugin_dir_path(__FILE__) . '/Pdf/Templates/Modern.php'] = __('Modern', 'dl-ticket-manager-templates');
        $templates[plugin_dir_path(__FILE__) . '/Pdf/Templates/Techno.php'] = __('Techno', 'dl-ticket-manager-templates');

        return $templates;

    }
}
