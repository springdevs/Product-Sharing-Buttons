<div class="wrap">
    <h3 style="text-align: center;"><?php _e('Product Social Share Buttons', 'sdevs_social_share'); ?></h3>
    <?php settings_errors(); ?>
    <form method="POST">
        <?php wp_nonce_field('psb_settings_form'); ?>
        <?php
        $button_positions = [
            'default' => __('Default', 'sdevs_social_share'),
            'after_product_image' => __('After Product Image', 'sdevs_social_share'),
            'after_product_title' => __('After Product Title', 'sdevs_social_share'),
            'before_product_title' => __('Before Product Title', 'sdevs_social_share'),
            'after_short_desc' => __('After Short Description', 'sdevs_social_share'),
            'after_add_to_cart_button' => __('After Add To Cart Button', 'sdevs_social_share'),
            'inside_description' => __('Inside Description', 'sdevs_social_share'),
        ];
        $social_buttons = [
            'facebook' => __('Facebook', 'sdevs_social_share'),
            'twitter' => __('Twitter', 'sdevs_social_share'),
            'pinterest' => __('Pinterest', 'sdevs_social_share'),
            'email' => __('Email', 'sdevs_social_share'),
            'instagram' => __('Instagram', 'sdevs_social_share'),
            'linkedin' => __('LinkedIn', 'sdevs_social_share'),
            'reddit' => __('Reddit', 'sdevs_social_share'),
            'tumblr' => __('Tumblr', 'sdevs_social_share'),
            'whatsapp' => __('WhatsApp', 'sdevs_social_share'),
            'skype' => __('Skype', 'sdevs_social_share'),
            'telegram' => __('Telegram', 'sdevs_social_share'),
        ];
        ?>
        <div class="card" style="max-width: 100%;">
            <table class="form-table" role="presentation">
                <tbody>
                    <tr>
                        <th scope="row">
                            <label for="display_product_share_button">
                                <?php _e('Show \ Hide Sharing Buttons', 'sdevs_social_share'); ?>
                            </label>
                        </th>
                        <td>
                            <select name="display_product_share_button" id="display_product_share_button" style="width: 100%;">
                                <option value="show">Show</option>
                                <option value="hide" <?php if (get_option('psb_display_product_share_button', 'show') === 'hide') echo 'selected'; ?>>Hide</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <label for="buttons_visible_position">
                                <?php _e('Buttons Visible Position', 'sdevs_social_share'); ?>
                            </label>
                        </th>
                        <td>
                            <select name="buttons_visible_position" id="buttons_visible_position" style="width: 100%;">
                                <?php foreach ($button_positions as $button_position_key => $button_position_value) : ?>
                                    <option value="<?php echo $button_position_key; ?>" <?php if (get_option('psb_buttons_visible_position', 'default') === $button_position_key) echo 'selected'; ?>><?php echo $button_position_value; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <label for="blank_tab_enable">
                                <?php _e('Open Share Link as new tab', 'sdevs_social_share'); ?>
                            </label>
                        </th>
                        <td>
                            <input name="blank_tab_enable" type="checkbox" id="blank_tab_enable" value="1" <?php if(get_option('blank_tab_enable', true)) echo 'checked'; ?> />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle;">
                            <label>Select Buttons</label>
                        </th>
                        <td>
                            <?php for ($i = 1; $i < 5; $i++) : ?>
                                <label class="button_effects_radio">
                                    <input type="radio" name="button_design" value="<?php echo $i; ?>" <?php if (get_option('psb_button_design', '3') == $i) echo esc_html('checked'); ?> />
                                    <img style="width: 80%;" src="<?php echo esc_html(SDEVS_SSB_ASSETS . '/images/effects/' . $i . '.gif'); ?>" />
                                </label>
                            <?php endfor; ?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle;">
                            <label><?php _e('Social Buttons', 'sdevs_social_share'); ?></label>
                        </th>
                        <td>
                            <?php foreach ($social_buttons as $social_button_key => $social_button_value) : ?>
                                <p>
                                    <label>
                                        <input type="checkbox" name="social_buttons[]" value="<?php echo esc_html($social_button_key); ?>" <?php if (in_array($social_button_key, get_option('psb_social_buttons', []))) echo esc_html('checked'); ?> />
                                        <?php echo esc_html($social_button_value); ?>
                                    </label>
                                </p>
                            <?php endforeach; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php submit_button(); ?>
    </form>
</div>
