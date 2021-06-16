<?php

namespace Springdevs\SSB;

use Springdevs\SSB\Frontend\Product;

/**
 * Frontend handler class
 */
class Frontend
{
    /**
     * Frontend constructor.
     */
    public function __construct()
    {
        if (get_option('psb_display_product_share_button', 'show') === 'show') {
            new Product();
        }
    }
}
