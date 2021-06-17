<div class="psb-effect psb-claudio">
    <div class="psb-social-buttons">
        <?php foreach ($social_buttons as $social_button) : ?>
            <a href="<?php echo esc_html($social_button['url']); ?>" class="<?php echo esc_html($social_button['class']); ?>" title="Share on <?php echo esc_html($social_button['label']); ?>"><i class="fa <?php echo esc_html($social_button['icon']); ?>" aria-hidden="true"></i></a>
        <?php endforeach; ?>
    </div>
</div>