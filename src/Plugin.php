<?php

defined('ABSPATH') || exit;

class DLTMTemplatesPlugin
{

    public function init(): void
    {
        add_filter('dl_ticket_manager_templates', [$this, 'loadTemplates'], 10, 1);
        add_filter('dl_ticket_manager_dompdf_options', [$this, 'modifyDompdfOptions'], 10, 1);
        add_filter('dl_ticket_manager_pdf_template_vars', [$this, 'addTemplateVars'], 10, 1);
    }


    public function loadTemplates($templates)
    {

        $templates[plugin_dir_path(__FILE__) . '/Pdf/Modern.php'] = __('Modern', 'dl-ticket-manager-templates');
        $templates[plugin_dir_path(__FILE__) . '/Pdf/Techno.php'] = __('Techno', 'dl-ticket-manager-templates');

        return $templates;
    }

    public function modifyDompdfOptions($options)
    {

        $options->set('fontDir', plugin_dir_path(__FILE__)  . 'Fonts');
        $options->set('fontCache', plugin_dir_path(__FILE__)  . 'Fonts');

        return $options;
    }

    public function addTemplateVars($vars)
    {

        $vars['BEBAS_NEUE'] = plugin_dir_url(__FILE__)  . 'Fonts/BebasNeue-Regular.ttf';

        return $vars;
    }
}
