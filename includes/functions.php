<?php


function ssb_widget_fields()
{
	$fields = [
	    'facebook' => [
	        'id' => 'sdevs_fb_link',
	        'label' => __( 'Facebook', 'sdevs_social_share' ),
	        'class' => 'fb',
	        'icon' => 'fa-facebook'
	    ],
	    'twitter' => [
	        'id' => 'sdevs_twt_link',
	        'label' => __( 'Twitter', 'sdevs_social_share' ),
	        'class' => 'tw',
	        'icon' => 'fa-twitter'
	    ],
	    'pinterest' => [
	        'id' => 'sdevs_pin_link',
	        'label' => __( 'Pinterest', 'sdevs_social_share' ),
	        'class' => 'pinterest',
	        'icon' => 'fa-pinterest-p',
	    ],
	    'instagram' => [
	        'id' => 'sdevs_ins_link',
	        'label' => __( 'Instagram', 'sdevs_social_share' ),
	        'class' => 'insta',
	        'icon' => 'fa-instagram'
	    ],
	    'linkedIn' => [
	        'id' => 'sdevs_in_link',
	        'label' => __( 'LinkedIn', 'sdevs_social_share' ),
	        'class' => 'in',
	        'icon' => 'fa-linkedin'
	    ],
	    'reddit' => [
	        'id' => 'sdevs_red_link',
	        'label' => __( 'Reddit', 'sdevs_social_share' ),
	        'class' => 'reddit',
	        'icon' => 'fa-reddit'
	    ],
	    'tumblr' => [
	        'id' => 'sdevs_tum_link',
	        'label' => __( 'Tumblr', 'sdevs_social_share' ),
	        'class' => 'tumblr',
	        'icon' => 'fa-tumblr'
	    ],
	    'whatsapp' => [
	        'id' => 'sdevs_whapp_link',
	        'label' => __( 'WhatsApp', 'sdevs_social_share' ),
	        'class' => 'whatsapp',
	        'icon' => 'fa-whatsapp'
	    ],
	    'skype' => [
	        'id' => 'sdevs_skype_link',
	        'label' => __( 'Skype', 'sdevs_social_share' ),
	        'class' => 'skype',
	        'icon' => 'fa-skype'
	    ],
	    'telegram' => [
	        'id' => 'sdevs_teleg_link',
	        'label' => __( 'Telegram', 'sdevs_social_share' ),
	        'class' => 'telegram',
	        'icon' => 'fa-telegram'
	    ]
	];

	return $fields;
}