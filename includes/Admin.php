<?php

namespace Springdevs\SSB;

use Springdevs\SSB\Admin\Forms;
use Springdevs\SSB\Admin\Settings;
use Springdevs\SSB\Illuminate\Widget;

/**
 * The admin class
 */
class Admin
{

    /**
     * Initialize the class
     */
    public function __construct()
    {
        $this->dispatch_actions();
        new Forms();
        new Settings();
        new Widget();
    }

    /**
     * Dispatch and bind actions
     *
     * @return void
     */
    public function dispatch_actions()
    {
    }
}
