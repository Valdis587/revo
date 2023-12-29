<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sborka
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<div class="site-wrapper" >
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="site-wrapper">
   <header class="header ">
    <div class="header__top-line">
        <div class="header__top-content container">
        <?php if ( class_exists( 'WooCommerce' ) ) { ?>
            <ul class="header__menu-list">
                <li><a href="<?php echo home_url(); ?>/my-account"><i class="icon-user-alt"></i>Мой аккаунт</a></li>
                <?php if( class_exists( 'YITH_WCWL' ) ) { ?>
                <li><a href="<?php echo home_url(); ?>/wishlist"><i class="icon-heart"></i>Избраное</a></li>
                <?php } ?>
            </ul>
            <?php } ?>
            <button aria-label="menu" class="header__button-primary"><i class="icon-bars"></i></button>
        </div>
    </div>
    <div class="header__center-line container">
        <div class="header__logo">
        <?php get_template_part( 'template-parts/content', 'logo' ); ?>
        </div>
        <div class="header__menu-center">
        <?php if( has_nav_menu('primary-menu') ) { ?>
            <nav class="header__menu-nav">
               <button aria-label="menu" class="header__button-primary-close"><i class="icon-plus"></i></button>
               <?php theme_menu_primary(); ?>
            </nav>
            <?php } ?>
        </div>
        <div class="header__contact">
            <ul class="header__contact-list">
            <?php if($themesetting['phones']) { ?>
                <li><a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $themesetting['phones']) ?>"><i class="icon-phone-alt"></i><?php echo $themesetting['phones'] ?></a></li>
                <?php } ?>
                <?php if($themesetting['mail']) { ?>
                <li><a href="mailto:<?php echo $themesetting['mail'] ?>"><i class="icon-envelope"></i><?php echo $themesetting['mail'] ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="header__bottom-line">
        <div class="header__bottom-content container">
            <div class="header__bottom-menu-box">
            <?php if( has_nav_menu('category-menu') ) { ?>
                <div class="header__button-wrapper">
                <a href="javascript:void(0);" class="header__link-category"><i class="icon-bars"></i> Все категории</a>
            </div>
            <button aria-label="menu" class="header__button-category"><i class="icon-bars"></i></button>
            
            <nav class="header__cat-nav">
                <button aria-label="menu" class="header__button-category-close"><i class="icon-plus"></i></button>
                <?php theme_menu_category(); ?>
            </nav>
            <?php } ?>
            </div>
            <div class="header__bottom-search">
            <?php if ( class_exists( 'WooCommerce' ) ) { get_product_search_form(); }  ?>
            </div>
            <div class="header__bottom-icon-box">
            <?php if ( class_exists( 'WooCommerce' ) ) { ?>
                <ul class="header__bottom-icon-list">
                <?php if( class_exists( 'YITH_WCWL' ) ) { ?>
                    <li><a href="<?php echo home_url(); ?>/wishlist"><i class="icon-heart"></i></a></li>
                    <?php } ?>
                    <li><a href="javascript:void(0);" class="header__minicart-link"><i class="icon-shopping-cart"></i></a></li>
                </ul>
                <?php if( class_exists( 'YITH_WCWL' ) ) { ?>
                <span class="header__num-withelist"><?php echo YITH_WCWL()->count_products(); ?></span>
                <?php } ?>
                <span class="header__num-cart"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                <?php } ?>
                <?php if ( class_exists( 'WooCommerce' ) ) { woocommerce_mini_cart(); }  ?>
            </div>
        </div>
    </div>
</header>
      <div class="page-wrapper">