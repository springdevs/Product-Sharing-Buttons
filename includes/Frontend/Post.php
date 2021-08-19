<?php

namespace Springdevs\SSB\Frontend;

/**
 * Class Post
 * @package Springdevs\SSB\Frontend
 */
class Post
{

    public function __construct()
    {
        add_filter('the_content', [$this, 'display_buttons']);
    }

    public function display_buttons($content): string {
        if(is_single()) $content .= $this->get_template();
        return $content;
    }

    public function get_template() {
        $social_buttons = $this->social_buttons();
        ob_start();
        include_once SDEVS_SSB_PATH . '/templates/' . get_option('psb_button_design', 3) . '.php';
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

     public function social_buttons(): array {
        $buttons = [];
        $social_buttons = get_option('psb_social_buttons', []);
        foreach ($social_buttons as $social_button) {
            if ($social_button === 'facebook') {
                $buttons[] = [
                    'class' => 'fb',
                    'label' => 'Facebook',
                    'icon' => 'fa-facebook',
                    'url' => 'https://www.facebook.com/sharer/sharer.php?u=' . get_the_permalink()
                ];
            } elseif ($social_button === 'twitter') {
                $buttons[] = [
                    'class' => 'tw',
                    'label' => 'Twitter',
                    'icon' => 'fa-twitter',
                    'url' => 'https://twitter.com/intent/tweet?url=' . get_the_permalink() . '&text=' . get_the_title()
                ];
            } elseif ($social_button === 'pinterest') {
                $buttons[] = [
                    'class' => 'pinterest',
                    'label' => 'Pinterest',
                    'icon' => 'fa-pinterest-p',
                    'url' => 'https://pinterest.com/pin/create/button/?url=' . get_the_permalink() . '&media=' . get_the_post_thumbnail_url() . '&description=' . get_the_title()
                ];
            } elseif ($social_button === 'email') {
                $buttons[] = [
                    'class' => 'email',
                    'label' => 'Email',
                    'icon' => 'fa-envelope',
                    'url' => 'mailto:info@example.com?&subject=&cc=&bcc=&body=' . get_the_permalink() . ' ' . get_the_title()
                ];
            } elseif ($social_button === 'instagram') {
                $buttons[] = [
                    'class' => 'insta',
                    'label' => 'Instagram',
                    'icon' => 'fa-instagram',
                    'url' => ''
                ];
            } elseif ($social_button === 'linkedin') {
                $buttons[] = [
                    'class' => 'in',
                    'label' => 'Linked In',
                    'icon' => 'fa-linkedin',
                    'url' => 'https://www.linkedin.com/shareArticle?mini=true&url=' . get_the_permalink()
                ];
            } elseif ($social_button === 'reddit') {
                $buttons[] = [
                    'class' => 'reddit',
                    'label' => 'Reddit',
                    'icon' => 'fa-reddit',
                    'url' => 'https://www.reddit.com/submit?url=' . get_the_permalink() . '&title=' . get_the_title()
                ];
            } elseif ($social_button === 'tumblr') {
                $buttons[] = [
                    'class' => 'tumblr',
                    'label' => 'Tumblr',
                    'icon' => 'fa-tumblr',
                    'url' => 'http://www.tumblr.com/share/link?url=' . get_the_permalink()
                ];
            } elseif ($social_button === 'whatsapp') {
                $buttons[] = [
                    'class' => 'whatsapp',
                    'label' => 'WhatsApp',
                    'icon' => 'fa-whatsapp',
                    'url' => 'https://wa.me/?text=' . get_the_permalink()
                ];
            } elseif ($social_button === 'skype') {
                $buttons[] = [
                    'class' => 'skype',
                    'label' => 'Skype',
                    'icon' => 'fa-skype',
                    'url' => 'https://web.skype.com/share?url=' . get_the_permalink()
                ];
            } elseif ($social_button === 'telegram') {
                $buttons[] = [
                    'class' => 'telegram',
                    'label' => 'Telegram',
                    'icon' => 'fa-telegram',
                    'url' => 'https://telegram.me/share/url?url=' . get_the_permalink() . '&text=' . get_the_title()
                ];
            }
        }
        return $buttons;
    }
}
