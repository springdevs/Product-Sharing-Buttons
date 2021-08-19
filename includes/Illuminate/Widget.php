<?php

namespace Springdevs\SSB\Illuminate;

/**
 * Class Widget
 * @package Springdevs\SSB\Illuminate
 */
class Widget
{

    public function __construct()
    {
        new SocialLinks();
        add_action('widgets_init', [$this, 'register_widgets']);
    }

    public function register_widgets()
    {
        register_widget('\Springdevs\SSB\Illuminate\SocialLinks');
    }
}
