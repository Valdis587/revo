<?php
/**
 * Redux Framework switch config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Цветовая схема', 'your-textdomain-here' ),
        'id'         => 'colortheme',
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'color-head',
				'type'     => 'color',
				'title'    => esc_html__( 'Основной цвет', 'your-textdomain-here' ),
				'default'  => '#ff5e00',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--HeadColor' => ':root',
                    '--yith-wcan-labels_style_background_hover' => ':root',
                    '--yith-wcan-filters_colors_accent' => ':root',
                    '--yith-wcan-anchors_style_text_hover' => ':root',
                    '--yith-wcan-anchors_style_text_active' => ':root',
				),
			), 
			array(
				'id'       => 'color-duble',
				'type'     => 'color',
				'title'    => esc_html__( 'Второй цвет', 'your-textdomain-here' ),
				'default'  => '#f2f2f2',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--DubleColor' => ':root',
				),
			),
			array(
				'id'       => 'color-duble-text',
				'type'     => 'color',
				'title'    => esc_html__( 'Второй цвет текста', 'your-textdomain-here' ),
				'default'  => '#2d2d2d',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--DubleTextColor' => ':root',
				),
			),
            array(
				'id'       => 'color-head-text',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет текста на основном', 'your-textdomain-here' ),
				'default'  => '#ffffff',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--ColorTextHead' => ':root',
				),
			),
			array(
				'id'       => 'button-site',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет кнопок', 'your-textdomain-here' ),
				'default'  => '#ff5e00',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--ColorButton' => ':root',
				),
			),
			array(
				'id'       => 'button-site-hover',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет кнопок при наведении', 'your-textdomain-here' ),
				'default'  => '#FF5F0F',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--ColorButtonHover' => ':root',
				),
			),
			array(
				'id'       => 'button-site-text',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет текста кнопок', 'your-textdomain-here' ),
				'default'  => '#ffffff',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--ColorButtonText' => ':root',
				),
			),
			array(
				'id'       => 'link-site',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет ссылок', 'your-textdomain-here' ),
				'default'  => '#7d7d7d',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--ColorLink' => ':root',
				),
			),
			array(
				'id'       => 'link-site-hover',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет ссылок при наведении', 'your-textdomain-here' ),
				'default'  => '#ff5e00',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--ColorLinkHover' => ':root',
				),
			),
			array(
				'id'       => 'count-color',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет счетчика акций', 'your-textdomain-here' ),
				'default'  => '#E67E22',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--ColorCountBack' => ':root',
				),
			),
			array(
				'id'       => 'count-color-text',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет текста счетчика акций', 'your-textdomain-here' ),
				'default'  => '#ffffff',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--ColorCountText' => ':root',
				),
			),
			array(
				'id'       => 'footer-color',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет футера', 'your-textdomain-here' ),
				'default'  => '#181818',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--ColorFooter' => ':root',
				),
			),
			array(
				'id'       => 'footer-color-text',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет текста футера', 'your-textdomain-here' ),
				'default'  => '#bbbbbb',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--ColorTextFooter' => ':root',
				),
			),
			array(
				'id'       => 'head-color-but',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет кнопок шапки', 'your-textdomain-here' ),
				'default'  => '#2d2d2d',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--HeadButtonColor' => ':root',
				),
			),
			array(
				'id'       => 'head-color-but-text',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет текста кнопок шапки', 'your-textdomain-here' ),
				'default'  => '#ffffff',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--HeadTextButtonColor' => ':root',
				),
			),
			array(
				'id'       => 'color-title',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет заголовка', 'your-textdomain-here' ),
				'default'  => '#ff5e00',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--TitleColor' => ':root',
				),
			),
			array(
				'id'       => 'color-title-text',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет текста заголовка', 'your-textdomain-here' ),
				'default'  => '#ffffff',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--TitleTextColor' => ':root',
				),
			),
        ),
        )
    );