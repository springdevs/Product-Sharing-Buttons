<div class="psb-effect psb-egeon">
    <div class="psb-social-buttons">
        <?php foreach ($social_buttons as $social_button) {
            echo esc_html('<a href="' . $social_button['url'] . '" class="' . $social_button['class'] . '" title="' . __('Share on ' . $social_button['label'], 'sdevs_social_share') . '"><i class="fa ' . $social_button['icon'] . '" aria-hidden="true"></i></a>');
        } ?>
    </div>
</div>