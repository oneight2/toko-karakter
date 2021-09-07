<div class="top_panel_title top_panel_style_6 title_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_6 title_present_inner">
        <div class="content_wrap">
            <h1 class="page_title no_breadcrumbs">About Us</h1>
        </div>
    </div>
</div>
<div class="page_content_wrap page_paddings_yes">
    <div class="content_wrap">
        <div class="content">
            <article class="post_item post_item_single page hentry">
                <section class="post_content">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="sc_section sc_section_block">
                                        <div class="sc_section_inner">
                                            <h2 class="sc_section_title sc_item_title">Toko Karakter</h2>
                                            <div class="sc_section_descr sc_item_descr">Kami Siap Memberikan yang Terbaik untuk Kalian</div>
                                        </div>
                                    </div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <?= $about[0]['description'] ?>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space em_height_4">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                    <div class="sc_line sc_line_position_center_center sc_line_style_solid"></div>
                                    <div class="sc_section sc_section_block">
                                        <div class="sc_section_inner">
                                            <h2 class="sc_section_title sc_item_title">Follow On</h2>
                                            <div class="wpb_wrapper">
                                                <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_4">
                                                    <div class="column-1_4 sc_column_item">
                                                        <div class="sc_section sc_section_block aligncenter">
                                                            <div class="sc_section_inner">
                                                                <div class="sc_section_content_wrap">
                                                                    <figure class="sc_image sc_image_shape_square">
                                                                        <a href="<?= $about[0]['instagram'] ?>">
                                                                            <img src="<?php base_url() ?>assets/images/1-1.png" alt="" />
                                                                        </a>
                                                                    </figure>
                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                        <div class="wpb_wrapper">
                                                                            <h4 class="sc_item_title sc_title_regular sc_align_center">Instagram</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="column-1_4 sc_column_item">
                                                        <div class="sc_section sc_section_block aligncenter">
                                                            <div class="sc_section_inner">
                                                                <div class="sc_section_content_wrap">
                                                                    <figure class="sc_image sc_image_shape_square">
                                                                        <a href="<?= $about[0]['whatsapp'] ?>">
                                                                            <img src="<?php base_url() ?>assets/images/2-1.png" alt="" />
                                                                        </a>
                                                                    </figure>
                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                        <div class="wpb_wrapper">
                                                                            <h4 class="sc_item_title sc_title_regular sc_align_center">Whatsapp</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="column-1_4 sc_column_item">
                                                        <div class="sc_section sc_section_block aligncenter">
                                                            <div class="sc_section_inner">
                                                                <div class="sc_section_content_wrap">
                                                                    <figure class="sc_image sc_image_shape_square">
                                                                        <a href="<?= $about[0]['shopee'] ?>">
                                                                            <img src="<?php base_url() ?>assets/images/3-1.png" alt="" />
                                                                        </a>
                                                                    </figure>
                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                        <div class="wpb_wrapper">
                                                                            <h4 class="sc_item_title sc_title_regular sc_align_center">Shopee</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="column-1_4 sc_column_item">
                                                        <div class="sc_section sc_section_block aligncenter">
                                                            <div class="sc_section_inner">
                                                                <div class="sc_section_content_wrap">
                                                                    <figure class="sc_image sc_image_shape_square">
                                                                        <a href="<?= $about[0]['siplah'] ?>">
                                                                            <img src="<?php base_url() ?>assets/images/4-1a.png" alt="" />
                                                                        </a>
                                                                    </figure>
                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                        <div class="wpb_wrapper">
                                                                            <h4 class="sc_item_title sc_title_regular sc_align_center">Siplah</h4>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_empty_space em_height_4-2">
                                                    <span class="vc_empty_space_inner"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
        </div>
    </div>
</div>
<!-- reviews -->
<?php $this->load->view('components/sectionReviews');  ?>