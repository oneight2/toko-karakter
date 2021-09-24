<div class="top_panel_title top_panel_style_6  title_present navi_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
        <div class="content_wrap">
            <div class="post_navi">
                <span class="post_navi_item post_navi_next">
                    <a href="single-product.html" rel="next">VTech Sit-to-Stand Learning Walker</a>
                </span>
            </div>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="index.html">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item all" href="shop.html">Shop</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item cat_post" href="#">Arts &amp; Crafts</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Bruder Toys Mini Excavator Vehicle</span>
            </div>
        </div>
    </div>
</div>
<div class="page_content_wrap page_paddings_yes">
    <div class="content_wrap">
        <div class="content" style="width: auto;">
            <article class="post_item post_item_single post_item_product">
                <nav class="woocommerce-breadcrumb">
                    <a href="index.html">Home</a>&nbsp;&#47;&nbsp;
                    <a href="#">Outdoor Games</a>&nbsp;&#47;&nbsp;Bruder Toys Mini Excavator Vehicle
                </nav>
                <div class="product has-post-thumbnail first">
                    <div class="images">
                        <div class="sc_section sc_section_block aligncenter width-870">
                            <div class="sc_section_inner">
                                <div class="sc_section_content_wrap">
                                    <div id="sc_slider_669" class="sc_slider sc_slider_swiper swiper-slider-container sc_slider_controls sc_slider_nopagination sc_slider_bg" data-interval="9857">
                                        <div class="slides swiper-wrapper">
                                            <?php foreach ($imageProduct as $row) : ?>
                                                <div class="swiper-slide">
                                                    <img width="600" height="600" src="<?= $imageAdress . 'product/' . $row['photo'] ?>" class="attachment-shop_single size-shop_single" alt="" title="TOY 3" />
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                        <div class="sc_slider_controls_wrap">
                                            <a class="sc_slider_prev" href="#"></a>
                                            <a class="sc_slider_next" href="#"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>

                    </div>
                    <div class="summary entry-summary">
                        <h1 class="product_title entry-title"><?= $product[0]['name_product'] ?></h1>
                        <div>
                            <h3 class="price" style="color:#EA624C">
                                <span class="woocommerce-Price-amount amount"><?= $product[0]['price'] ?>
                                </span>
                            </h3>
                        </div>
                        <div>
                            <?= $product[0]['description'] ?>
                        </div>
                        <form class="cart" method="post" enctype='multipart/form-data'>
                            <a class="single_add_to_cart_button button alt" style="background-color: #EA624C">Shopee</a>
                            <a class="single_add_to_cart_button button alt" style="margin-left: 10px">Siplah</a>
                        </form>
                        <div class="product_meta">
                            <span class="posted_in">Categories:
                                <a href="#" rel="tag"><?= $product[0]['name_category'] ?></a>
                            </span>
                            <span class="tagged_as">Tags:
                                <a href="#" rel="tag"><?= $product[0]['name_featured'] ?></a>
                            </span>
                        </div>
                    </div>
                    <div class="woocommerce-tabs wc-tabs-wrapper">

                    </div>
                    <div class="related products">
                        <h2>Related Products</h2>
                        <ul class="products">
                            <?php $i = 0; ?>
                            <?php foreach ($relatedProducts as $row) : ?>
                                <li class="product has-post-thumbnail column-1_3 ">
                                    <div class="post_item_wrap">
                                        <div class="post_featured">
                                            <div class="post_thumb">
                                                <a class="hover_icon hover_icon_link" href="<?= base_url() . 'Products/detailProduct/' . $row['id'] . '?category=' . $row['id_category'] . '&photos=' . $row['id_photos'] ?>">
                                                    <img src="<?php if ($imageProducts[$i++]['id_photo'] == $row['id_photos']) {
                                                                    echo $imageAdress . 'product/' . $imageProducts[$i++]['photo'];
                                                                } ?>" class="attachment-shop_catalog size-shop_catalog" alt="" title="product_4" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post_content">
                                            <h3>
                                                <a href="single-product.html"><?= $row['name_product'] ?></a>
                                            </h3>
                                            <span class="price">
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol"></span><?= $row['price'] ?>
                                                </span>
                                            </span>
                                            <a rel="nofollow" href="<?= $row['shopee'] ?>" class="button" style="background-color: #EA624C;">Shopee</a>
                                            <a rel="nofollow" href="#" class="button product_type_simple ">Siplah</a>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>