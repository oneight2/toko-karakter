<div class="top_panel_title top_panel_style_6 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_6 title_present_inner breadcrumbs_present_inner">
        <div class="content_wrap">
            <h1 class="page_title ">Shop</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="index.html">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Shop</span>
            </div>
        </div>
    </div>
</div>
<div class="page_content_wrap page_paddings_yes">
    <div class="content_wrap">
        <div class="content">
            <div class="list_products shop_mode_thumbs">
                <nav class="woocommerce-breadcrumb">
                    <a href="index.html">Home</a>&nbsp;&#47;&nbsp;Shop
                </nav>
                <ul class="products">
                    <?php $i = 0; ?>
                    <?php foreach ($products as $row) : ?>
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
        <div class="sidebar widget_area scheme_original" role="complementary">
            <div class="sidebar_inner widget_area_inner">
                <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
                    <h5 class="widget_title">Categories</h5>
                    <ul class="product-categories">
                        <?php foreach ($category as $row) : ?>
                            <li class="cat-item"><a href="#"><?= $row['name_category'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </aside>
                <aside class="widget woocommerce widget_product_tag_cloud">
                    <h5 class="widget_title">Tags</h5>
                    <div class="tagcloud">
                        <?php foreach ($featured as $row) : ?>
                            <a href='' title='product'><?= $row['name_featured'] ?></a>
                        <?php endforeach; ?>
                    </div>
                </aside>
                <aside class="widget widget_text">
                    <div class="textwidget">
                        <div class="sc_promo style_5 small_padding">
                            <div class="sc_promo_inner  sc_promo_style_5">
                                <a href="">
                                    <div class="sc_promo_content">
                                        <h2 class="sc_promo_title">WHATSAPP</h2>
                                        <div class="sc_promo_descr"><?= $about[0]['whatsapp'] ?></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<footer class="footer_wrap widget_area scheme_original">
    <div class="footer_wrap_inner widget_area_inner">
        <div class="content_wrap">
            <div class="columns_wrap">
                <aside class="column-1_4 widget woocommerce widget_products">
                    <h5 class="widget_title">Recent Products</h5>
                    <ul class="product_list_widget">
                        <li>
                            <a href="single-product.html" title="Stackable Monster Block">
                                <img src="<?php base_url() ?>assets/images/1000.png" alt="" />
                                <span class="product-title">Stackable Monster Block</span>
                            </a>
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">&#36;</span>7.99
                            </span>
                        </li>
                        <li>
                            <a href="single-product.html" title="Build On Brick Blue Mug">
                                <img src="<?php base_url() ?>assets/images/1000.png" alt="" />
                                <span class="product-title">Build On Brick Blue Mug</span>
                            </a>
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">&#36;</span>14.95
                            </span>
                        </li>
                        <li>
                            <a href="single-product.html" title="Swing-N-Slide Jamboree Fort Playset">
                                <img src="<?php base_url() ?>assets/images/1000.png" alt="" />
                                <span class="product-title">Swing-N-Slide Jamboree Fort Playset</span>
                            </a>
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">&#36;</span>766.99
                            </span>
                        </li>
                    </ul>
                </aside>
                <aside class="column-1_4 widget woocommerce widget_top_rated_products">
                    <h5 class="widget_title">Top Rated Products</h5>
                    <ul class="product_list_widget">
                        <li>
                            <a href="single-product.html" title="Stackable Monster Block">
                                <img src="<?php base_url() ?>assets/images/1000.png" alt="" />
                                <span class="product-title">Stackable Monster Block</span>
                            </a>
                            <div class="star-rating" title="Rated 5 out of 5">
                                <span class="widthfull">
                                    <strong class="rating">5</strong> out of 5
                                </span>
                            </div>
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">&#36;</span>7.99
                            </span>
                        </li>
                        <li>
                            <a href="single-product.html" title="Build On Brick Blue Mug">
                                <img src="<?php base_url() ?>assets/images/1000.png" alt="" />
                                <span class="product-title">Build On Brick Blue Mug</span>
                            </a>
                            <div class="star-rating" title="Rated 4 out of 5">
                                <span class="widthhalf">
                                    <strong class="rating">4</strong> out of 5
                                </span>
                            </div>
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">&#36;</span>14.95
                            </span>
                        </li>
                        <li>
                            <a href="single-product.html" title="Swing-N-Slide Jamboree Fort Playset">
                                <img src="<?php base_url() ?>assets/images/1000.png" alt="" />
                                <span class="product-title">Swing-N-Slide Jamboree Fort Playset</span>
                            </a>
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">&#36;</span>766.99
                            </span>
                        </li>
                    </ul>
                </aside>

                <aside class="column-1_4 widget woocommerce widget_recent_reviews">
                    <h5 class="widget_title">Recent Reviews</h5>
                    <ul class="product_list_widget">
                        <li>
                            <a href="single-product.html#comment-7">
                                <img src="<?php base_url() ?>assets/images/1000.png" alt="" />Build On Brick Blue Mug
                            </a>
                            <div class="star-rating" title="Rated 4 out of 5">
                                <span class="widthhalf">
                                    <strong class="rating">4</strong> out of 5
                                </span>
                            </div>
                            <span class="reviewer">by Alice Green</span>
                        </li>
                        <li>
                            <a href="single-product.html#comment-6">
                                <img src="<?php base_url() ?>assets/images/1000.png" alt="" />Build On Brick Blue Mug
                            </a>
                            <div class="star-rating" title="Rated 4 out of 5">
                                <span class="widthhalf">
                                    <strong class="rating">4</strong> out of 5
                                </span>
                            </div>
                            <span class="reviewer">by Alice Green</span>
                        </li>
                        <li>
                            <a href="single-product.html#comment-5">
                                <img src="<?php base_url() ?>assets/images/1000.png" alt="" />Stackable Monster Block
                            </a>
                            <div class="star-rating" title="Rated 5 out of 5">
                                <span class="widthfull">
                                    <strong class="rating">5</strong> out of 5
                                </span>
                            </div>
                            <span class="reviewer">by Alice Green</span>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
</footer>