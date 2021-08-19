<?php

namespace Springdevs\SSB\Illuminate;

use WP_Widget;

/**
 * Class SocialLinks
 * @package Springdevs\SSB\Illuminate
 */
class SocialLinks extends WP_Widget
{
     /**
     * Sets up the widgets name etc
     */
    public function __construct()
    {
        $widget_ops = array(
            'classname' => '\Springdevs\SSB\Illuminate\SocialLinks',
            'description' => __( 'A widget for display social icons !!', 'sdevs_social_share' ),
        );
        parent::__construct('\Springdevs\SSB\Illuminate\SocialLinks', 'Social Links', $widget_ops);
    }

    /**
     * Outputs the content of the widget
     *
     * @param array $args
     * @param array $instance
     */
    public function widget($args, $instance)
    {
        // outputs the content of the widget
        echo '<div class="social-icon-container">';

        if ($instance['sdevs_social_title']) {
          ?>
          <h5 class="social-share-title"><?php esc_html_e($instance['sdevs_social_title'], 'sdevs_social_share'); ?></h5>
          <?php
        }

        $fields = ssb_widget_fields();

        $design = get_option('psb_button_design', 3);
        $design_class = 'egeon';

        if($design == 1) {
            $design_class = 'aeneas';
        } elseif($design == 2) {
            $design_class = 'jaques';
        } elseif($design == 4) {
            $design_class = 'claudio';
        }

        echo '<div class="psb-effect psb-'.$design_class.'" style="padding: 0;"><div class="psb-social-buttons">';

        foreach ($fields as $key => $field) {
            if ($instance[$field['id']]):
                ?>
            <a href="<?php echo esc_html($instance[$field['id']]); ?>" class="<?php echo esc_html($field['class']); ?>"><i class="fa <?php echo esc_html($field['icon']); ?>" aria-hidden="true"></i></a>
                <?php
            endif;
        }

        echo '</div></div>';
        echo '</div>';
    }

    /**
     * Outputs the options form on admin
     *
     * @param array $instance The widget options
     */
    public function form($instance)
    {
        // outputs the options form on admin
        $title = !empty($instance['sdevs_social_title']) ? $instance['sdevs_social_title'] : esc_html__('Follow Us', 'sdevs_social_share');
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('sdevs_social_title')); ?>"><?php esc_attr_e('Title : ', 'sdevs_social_share'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('sdevs_social_title')); ?>" name="<?php echo esc_attr($this->get_field_name('sdevs_social_title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <?php

    $fields = ssb_widget_fields();

foreach ($fields as $key => $field) {

        $value = !empty($instance[$field['id']]) ? $instance[$field['id']] : '';

        ?>
<p>
    <label for="<?php echo esc_attr($this->get_field_id($field['id'])); ?>"><?php echo esc_html($field['label']); ?></label>
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id($field['id'])); ?>" name="<?php echo esc_attr($this->get_field_name($field['id'])); ?>" type="text" value="<?php echo esc_attr($value); ?>">
</p>
<?php
}

    }

    /**
     * Processing widget options on save
     *
     * @param array $new_instance The new options
     * @param array $old_instance The previous options
     *
     * @return array
     */
    public function update($new_instance, $old_instance): array {
        $fields = ssb_widget_fields();
        // processes widget options to be saved
        $instance = [];
        $instance['sdevs_social_title'] = strip_tags($new_instance['sdevs_social_title']);
        foreach ($fields as $key => $field) {
            $instance[$field['id']] = strip_tags($new_instance[$field['id']]);
        }
        return $instance;
    }
}
