<div class="social-menu">

<?php

    $instagram = get_theme_mod('instagram');
    if (!empty($instagram)) {
        ?><a href="<?= $instagram ?>" target="_blank"></a>
        <?
    }

    $vk = get_theme_mod('lift_vkontakte');
    if (!empty($vk)) {
        ?><a href="<?= $vk ?>" target="_blank"></a>
        <?
    }

    $facebook = get_theme_mod('facebook');
    if (!empty($facebook)) {
        ?><a href="<?= $facebook ?>" target="_blank"></a>
        <?
    }

    $linkedin = get_theme_mod('linkedin');
    if (!empty($linkedin)) {
        ?><a href="<?= $linkedin ?>" target="_blank"></a>
        <?
    }

    $youtube = get_theme_mod('youtube');
    if (!empty($youtube)) {
        ?><a href="<?= $youtube ?>" target="_blank"></a>
        <?
    }

?>

</div>
