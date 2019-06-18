<?php


function my_customizer_init( $wp_customize ) {

    $my_transport = 'postMessage'; // описание этой переменной чуть ниже

    // Добавляем собственную секцию настроек
    $wp_customize->add_section(
        'my_socials', // id секции, должен прописываться во всех настройках, которые в неё попадают
        array(
            'title'       => 'Социальные сети',
            'priority'    => 200, // приоритет расположения относительно других секций
            'description' => 'Ссылки на социальные сети' // описание не обязательное
        )
    );

    // добавление ссылки на Instagram
    $wp_customize->add_setting(
        'instagram', // id
        array(
            'type'      => 'theme_mod',
            'transport' => $my_transport
        )
    );
    $wp_customize->add_control(
        'instagram', // id
        array(
            'section'  => 'my_socials', // id секции
            'label'    => 'Instagram',
            'type'     => 'text' // текстовое поле
        )
    );

    // добавление ссылки на Вконтакте
    $wp_customize->add_setting(
        'vkontakte', // id
        array(
            'type'      => 'theme_mod',
            'transport' => $my_transport
        )
    );
    $wp_customize->add_control(
        'vkontakte', // id
        array(
            'section'  => 'my_socials', // id секции
            'label'    => 'Вконтакте',
            'type'     => 'text' // текстовое поле
        )
    );

    // добавление ссылки на facebook
    $wp_customize->add_setting(
        'facebook', // id
        array(
            //'sanitize_callback'  => 'lift_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
            'type'      => 'theme_mod',
            'transport' => $my_transport
        )
    );
    $wp_customize->add_control(
        'facebook', // id
        array(
            'section'  => 'my_socials', // id секции
            'label'    => 'Facebook',
            'type'     => 'text' // текстовое поле
        )
    );

    // добавление ссылки на linkedin
    $wp_customize->add_setting(
        'linkedin', // id
        array(
            //'sanitize_callback'  => 'lift_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
            'type'      => 'theme_mod',
            'transport' => $my_transport
        )
    );
    $wp_customize->add_control(
        'linkedin', // id
        array(
            'section'  => 'my_socials', // id секции
            'label'    => 'Linkedin',
            'type'     => 'text' // текстовое поле
        )
    );

    // добавление ссылки на youtube
    $wp_customize->add_setting(
        'youtube', // id
        array(
            //'sanitize_callback'  => 'lift_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
            'type'      => 'theme_mod',
            'transport' => $my_transport
        )
    );
    $wp_customize->add_control(
        'youtube', // id
        array(
            'section'  => 'my_socials', // id секции
            'label'    => 'Youtube',
            'type'     => 'text' // текстовое поле
        )
    );
    
    
        // Добавляем секцию настроек для акций и скидок
    $wp_customize->add_section(
        'my_discount', // id секции, должен прописываться во всех настройках, которые в неё попадают
        array(
            'title'       => 'Акции и скидки',
            'priority'    => 200, // приоритет расположения относительно других секций
            'description' => 'Акции и скидки' // описание не обязательное
        )
    );
    
    // добавление поля окончания срока скидки
    $wp_customize->add_setting(
        'date', // id
        array(
            'type'      => 'theme_mod',
            'transport' => $my_transport
        )
    );
    $wp_customize->add_control(
        'date', // id
        array(
            'section'  => 'my_discount', // id секции
            'label'    => 'Дата окончания действия акции',
            'type'     => 'date'
        )
    );

}

add_action( 'customize_register', 'my_customizer_init' );

/*
 * Функция обработки текстовых значений, перед их сохранением в базу
 */
function my_sanitize_copyright( $value ) {
    return strip_tags( stripslashes( $value ) ); // обрезаем слеши и HTML-теги
}
