<!DOCTYPE html>
<html class="scheme_original" lang="en-US">

<head>
    <title>Toko Karakter</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="icon" type="image/png" href="https://sertifikat.ihf.or.id/img/ihficon.png">

    <link property="stylesheet" rel="stylesheet" href="<?= base_url() ?>assets/js/vendor/essgrid/settings.css" type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700|Fredoka+One|Open+Sans:300,400,600,700,800|Raleway:100,200,300,400,500,600,700,800,900|Ubuntu:300,300i,400,400i,500,500i,700,700i&#038;ver=4.6.3" type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" href="<?= base_url() ?>assets/js/vendor/revslider/settings.css" type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" href="<?= base_url() ?>assets/js/vendor/woo/woocommerce-layout.css" type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" href="<?= base_url() ?>assets/js/vendor/woo/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)" />
    <link property="stylesheet" rel="stylesheet" href="<?= base_url() ?>assets/js/vendor/woo/woocommerce.css" type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" href="<?= base_url() ?>assets/css/socials.css" type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" href="<?= base_url() ?>assets/css/fontello/css/fontello.css" type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" href="<?= base_url() ?>assets/css/core.animation.css" type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" href="<?= base_url() ?>assets/css/theme.shortcodes.css" type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" href="<?= base_url() ?>assets/css/theme.css" type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" href="<?= base_url() ?>assets/js/vendor/woo/plugin.woocommerce.css" type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css" type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" href="<?= base_url() ?>assets/js/vendor/mediaelement/mediaelementplayer.min.css" type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" href="<?= base_url() ?>assets/js/vendor/grid.layout/grid.layout.min.css" type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" href="<?= base_url() ?>assets/css/custom/custom.css" type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" href="<?= base_url() ?>assets/css/custom/plugins.css" type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" href="<?= base_url() ?>assets/css/core.messages.css" type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" href="<?= base_url() ?>assets/js/vendor/magnific/magnific-popup.css" type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" href="<?= base_url() ?>assets/js/vendor/essgrid/lightbox.css" type="text/css" media="all" />
    <link property="stylesheet" rel="stylesheet" href="<?= base_url() ?>assets/js/vendor/swiper/swiper.min.css" type="text/css" media="all" />

    <link rel="icon" href="images/cropped-big_favicon-32x32.png" />
    <link rel="icon" href="images/cropped-big_favicon-192x192.png" />
    <link rel="apple-touch-icon-precomposed" href="images/cropped-big_favicon-180x180.png" />
    <meta name="msapplication-TileImage" content="images/cropped-big_favicon-270x270.png" />
</head>

<body class="home page body_filled scheme_original top_panel_above sidebar_hide">
    <div class="body_wrap">
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>
            <header class="top_panel_wrap top_panel_style_4 scheme_original">
                <div class="
              top_panel_wrap_inner
              top_panel_inner_style_4
              top_panel_position_above
            ">
                    <div class="top_panel_middle">
                        <div class="content_wrap">
                            <div class="columns_wrap">
                                <div class="contact_logo column-1_4">
                                    <div class="logo">
                                        <a href="index.html">
                                            <img alt="" class="logo_main" height="74" src="<?= base_url(); ?>assets/images/logo/logo.png" width="121" />
                                            <img alt="" class="logo_fixed" height="74" src="<?= base_url(); ?>assets/images/logo/logo.png" width="121" />
                                        </a>
                                    </div>
                                </div>
                                <div class="menu_main_wrap column-3_4">
                                    <div class="
                        search_wrap search_style_fullscreen search_state_closed
                        top_panel_icon
                      ">
                                        <div class="search_form_wrap">
                                            <form action="index.html" class="search_form" method="get" role="search">
                                                <button class="search_submit icon-search" title="Open search" type="submit"></button>
                                                <input class="search_field" name="s" placeholder="Search" type="text" value="" />
                                                <a class="search_close icon-cancel"></a>
                                            </form>
                                        </div>
                                    </div>
                                    <nav class="menu_main_nav_area menu_hover_fade">
                                        <ul id="menu_main" class="menu_main_nav">
                                            <li class="menu-item <?php if ($this->uri->segment(1) == "") {
                                                                        echo 'current-menu-ancestor';
                                                                    } ?> ">
                                                <a href="<?= base_url() ?>"><span>Home</span></a>
                                            </li>
                                            <li class="menu-item  <?php if ($this->uri->segment(1) == "about") {
                                                                        echo 'current-menu-ancestor';
                                                                    } ?>">
                                                <a href="<?= base_url() ?>about"><span>About Us</span></a>
                                            </li>
                                            <li class="menu-item <?php if ($this->uri->segment(1) == "products") {
                                                                        echo 'current-menu-ancestor';
                                                                    } ?>">
                                                <a href="<?= base_url() ?>products"><span>Our Product</span></a>
                                            </li>
                                            <li class="menu-item menu-item-has-children">
                                                <a><span>MARKET PLACE</span></a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item">
                                                        <a href="services.html"><span>Our Services</span></a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="team.html"><span>Our Team</span></a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="single-team.html"><span>Expert&#8217;s Profile</span></a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="contacts.html"><span>Contact Us</span></a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="faq.html"><span>FAQ’s</span></a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a href="404.html"><span>Page 404</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="header_mobile">
                <div class="content_wrap">
                    <div class="menu_button icon-menu"></div>
                    <div class="logo">
                        <a href="<?= base_url() ?>">
                            <img alt="" class="logo_main" height="74" src="<?= base_url(); ?>assets/images/logo/logo.png" width="121" />
                        </a>
                    </div>
                </div>
                <div class="side_wrap">
                    <div class="close">Close</div>
                    <div class="panel_top">
                        <nav class="menu_main_nav_area">
                            <ul id="menu_mobile" class="menu_main_nav">
                                <li class="menu-item">
                                    <a href="about.html"><span>About Us</span></a>
                                </li>
                                <li class="menu-item">
                                    <a href="shop.html"><span>Shop</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="panel_bottom"></div>
                </div>
                <div class="mask"></div>
            </div>