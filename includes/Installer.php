<?php

namespace Springdevs\SocialShare;

/**
 * Class Installer
 * @package Springdevs\SocialShare
 */
class Installer {
    /**
     * Run the installer
     *
     * @return void
     */
    public function run() {
        $this->add_version();
        $this->create_tables();
    }

    /**
     * Add time and version on DB
     */
    public function add_version() {
        $installed = get_option( 'Product Sharing Buttons_installed' );

        if ( ! $installed ) {
            update_option( 'Product Sharing Buttons_installed', time() );
        }

        update_option( 'Product Sharing Buttons_version', SDEVS_SOCIAL_SHARE_VERSION );

    }

    /**
     * Create necessary database tables
     *
     * @return void
     */
    public function create_tables() {
        if ( ! function_exists( 'dbDelta' ) ) {
            require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        }

        
    }

    
}
