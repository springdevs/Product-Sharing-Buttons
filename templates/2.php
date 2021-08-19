<div class="psb-effect psb-jaques">
    <div class="psb-social-buttons">
        <?php foreach ($social_buttons as $social_button) : ?>
            <a href="<?php echo esc_html($social_button['url']); ?>" class="<?php echo esc_html($social_button['class']); ?>" title="Share on <?php echo esc_html($social_button['label']); ?>" <?php if (get_option('blank_tab_enable', true)) echo 'target="_blank"'; ?>><i class="fa <?php echo esc_html($social_button['icon']); ?>" aria-hidden="true"></i></a>
        <?php endforeach; ?>
    </div>
</div>
