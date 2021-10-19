<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <h2 class="sc_section_title sc_item_title">
                    Pick What U Want
                </h2>
                <div class="sc_section_descr sc_item_descr">
                    Toko Karakter gives you positive emotions
                </div>
                <div class="vc_empty_space em_height_5">
                    <span class="vc_empty_space_inner"></span>
                </div>
                <div class="sc_services_wrap">
                    <div class="
                                sc_services
                                sc_services_style_services-3
                                sc_services_type_images
                              ">
                        <div class="
                                  sc_slider_swiper
                                  swiper-slider-container
                                  sc_slider_nopagination
                                  sc_slider_controls
                                  sc_slider_controls_side
                                " data-interval="8286" data-slides-min-width="130" data-slides-per-view="5" data-slides-space="60">
                            <div class="slides swiper-wrapper">
                                <?php foreach ($category as $row) : ?>
                                    <div class="swiper-slide" data-style="width:100%;">
                                        <div class="sc_services_item_wrap">
                                            <div class="sc_services_item">
                                                <div class="sc_services_item_featuredpost_featured">
                                                    <div class="post_thumb" data-image="images/5.png" data-title="Video Games &#038; Electronics for Kids">
                                                        <a class="hover_icon hover_icon_link" href="<?= base_url() . 'Products?category=' . $row['id_category'] ?>">
                                                            <img alt="" src="<?= $imageAdress . 'category/' . $row['icon'] ?>" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <h4 class="sc_services_item_title">
                                                    <a href="<?= base_url() . 'Products?category=' . $row['id_category'] ?>"><?= $row['name_category'] ?></a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="sc_slider_controls_wrap">
                                <a class="sc_slider_prev" href="#"></a>
                                <a class="sc_slider_next" href="#"></a>
                            </div>
                            <div class="sc_slider_pagination_wrap"></div>
                        </div>
                    </div>
                </div>
                <div class="vc_empty_space em_height_6">
                    <span class="vc_empty_space_inner"></span>
                </div>
            </div>
        </div>
    </div>
</div>