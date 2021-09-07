<div class="vc_row-full-width"></div>
<div class="
                      vc_row
                      wpb_row
                      vc_row-fluid vc_custom_1465460471441
                      inverse_colors
                    " data-vc-full-width="true" data-vc-full-width-init="false">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="vc_empty_space em_height_6-7">
                    <span class="vc_empty_space_inner"></span>
                </div>
                <div class="sc_section sc_section_block aligncenter">
                    <div class="sc_section_inner">
                        <div class="sc_section_content_wrap">
                            <figure class="sc_image sc_image_shape_square">
                                <img alt="" src="images/Vector-Smart-Object-a.png" />
                            </figure>
                            <div class="
                                    sc_testimonials
                                    sc_testimonials_style_testimonials-1
                                    aligncenter
                                  " id="sc_testimonials_186">
                                <h2 class="sc_testimonials_title sc_item_title">
                                    What our Happy Clients Say
                                </h2>
                                <div class="
                                      sc_slider_swiper
                                      swiper-slider-container
                                      sc_slider_pagination
                                      sc_slider_pagination_bottom
                                      sc_slider_nocontrols
                                    " data-interval="9245" data-old-width="900px" data-slides-min-width="250">
                                    <div class="slides swiper-wrapper">
                                        <?php foreach ($reviews as $row) : ?>
                                            <div class="swiper-slide" data-style="width:900px;">
                                                <div class="sc_testimonial_item" id="sc_testimonials_186_1">
                                                    <div class="sc_testimonial_content">
                                                        <?= $row['review'] ?>
                                                    </div>
                                                    <!-- <div class="sc_testimonial_avatar">
                                                        <img alt="" class="wp-post-image" height="85" src="images/1000.png" width="85" />
                                                    </div> -->
                                                    <div class="sc_testimonial_author">
                                                        <span class="sc_testimonial_author_name"><?= $row['name_customer'] ?></span>
                                                        <span class="
                                                    sc_testimonial_author_position
                                                  "><?= $row['type_customer'] ?></span>
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
                    </div>
                </div>
                <div class="vc_empty_space em_height_5-9">
                    <span class="vc_empty_space_inner"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="vc_row-full-width"></div>