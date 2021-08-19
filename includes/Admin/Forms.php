<?php

namespace Springdevs\SSB\Admin;

/**
 * Form Handler
 *
 * Class Forms
 * @package SpringDevs\SMS\Admin
 */
class Forms
{
    public function __construct()
    {
        add_action("admin_init", [$this, 'handling_form']);
    }

    public function handling_form()
    {
        $this->settings_form();
    }

    public function settings_form()
    {
        if (isset($_POST['display_product_share_button']) && isset($_POST['_wpnonce']) && wp_verify_nonce($_POST['_wpnonce'], 'psb_settings_form')) {

            $display_product_share_button = sanitize_text_field($_POST['display_product_share_button']);
            $buttons_visible_position = sanitize_text_field($_POST['buttons_visible_position']);
            $button_design = sanitize_text_field($_POST['button_design']);
            $blank_tab_enable = isset($_POST['blank_tab_enable']);

            update_option('psb_display_product_share_button', $display_product_share_button);
            update_option('psb_buttons_visible_position', $buttons_visible_position);
            update_option('psb_button_design', $button_design);
            update_option('blank_tab_enable', $blank_tab_enable);

            if (is_array($_POST['social_buttons'])) {
                update_option('psb_social_buttons', $this->sanitize_array_field($_POST['social_buttons']));
            }

            add_action('admin_notices', function (): void {
                $class = 'notice notice-success';
                $message = __('Settings saved !!', 'sdevs_social_share');
                printf('<div class="%1$s"><p>%2$s</p></div>', esc_attr($class), esc_html($message));
            });
        }
    }

    /**
     * Recursive sanitation an array
     *
     * @param array $arrays
     *
     * @return array
     * @since  0.1
     */
    public function sanitize_array_field(array $arrays): array {
        $sanitized_array = [];
        foreach ($arrays as $key => $array) {
            $value = false;
            if (is_array($array)) {
                $value = $this->sanitize_array_field($array);
            } else {
                $value = sanitize_text_field($array);
            }
            $sanitized_array[$key] = $value;
        }
        return $sanitized_array;
    }
}
