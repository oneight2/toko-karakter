 <style>
     .image-product:not(:first-child) {
         display: none !important;
     }
 </style>
 <div class="vc_row wpb_row vc_row-fluid">
     <div class="wpb_column vc_column_container vc_col-sm-12">
         <div class="vc_column-inner">
             <div class="wpb_wrapper">
                 <div class="sc_section sc_section_block">
                     <div class="sc_section_inner">
                         <h2 class="sc_section_title sc_item_title">
                             Popular In Store
                         </h2>
                         <div class="sc_section_descr sc_item_descr">
                             Toko Karakter goodies for your
                             kids.
                         </div>
                         <div class="sc_section_content_wrap">
                             <article class="myportfolio-container minimal-light" id="esg-grid-49-1-wrap">
                                 <div class="esg-grid" id="esg-grid-49-1">
                                     <article class="esg-filters esg-singlefilters odd">
                                         <div class="esg-filter-wrapper esg-fgc-49">
                                             <div class="
                                            esg-filterbutton
                                            selected
                                            esg-allfilter
                                          " data-fid="-1" data-filter="filterall">
                                                 <span>Filter - All</span>
                                             </div>
                                             <?php foreach ($featured as $row) : ?>
                                                 <div class="esg-filterbutton" data-fid="19" data-filter="<?= $row['name_featured'] ?>">
                                                     <span><?= $row['name_featured'] ?></span>
                                                     <span class="esg-filter-checked">
                                                         <i class="eg-icon-ok-1"></i>
                                                     </span>
                                                 </div>
                                             <?php endforeach; ?>

                                             <div class="eg-clearfix"></div>
                                         </div>
                                     </article>
                                     <div class="esg-clear-no-height"></div>
                                     <ul>
                                         <?php $i = 0; ?>
                                         <?php foreach ($products as $row) : ?>
                                             <li class="
                                          filterall
                                          filter-simple
                                          filter-building-sets
                                          filter-painting-toys
                                          filter-best-sellers
                                          filter-top-rated
                                          eg-juno-skin-1-wrapper eg-post-id-257
                                          <?= $row['name_featured'] ?>
                                        " data-date="1464266513">
                                                 <div class="esg-media-cover-wrapper">
                                                     <a class="" href="<?= base_url() . 'Products/detailProduct/' . $row['id'] . '?category=' . $row['id_category'] . '&photos=' . $row['id_photos'] ?>">
                                                         <div class="esg-entry-media">
                                                             <?php foreach ($imageProducts as $img) : ?>
                                                                 <?php if ($img['id_photo'] === $row['id_photos']) { ?>
                                                                     <img alt="" class="image-product" src="
                                                                <?php
                                                                        echo $imageAdress . 'product/' . $img['photo'];
                                                                ?>" />
                                                                 <?php } ?>


                                                             <?php endforeach ?>
                                                         </div>
                                                         <div class="esg-entry-cover esg-fade" data-delay="0">
                                                             <div class="esg-overlay esg-fade eg-juno-skin-1-container" data-delay="0"></div>
                                                             <div class="esg-center eg-post-257 eg-juno-skin-1-element-32-a esg-slide" data-delay="0.1">
                                                                 <a class="eg-juno-skin-1-element-32 eg-post-257 esgbox" href="<?= base_url() . 'Products/detailProduct/' . $row['id'] . '?category=' . $row['id_category'] . '&photos=' . $row['id_photos'] ?>">
                                                                     <i class="eg-icon-search"></i>
                                                                 </a>
                                                             </div>
                                                         </div>
                                                         <div class="esg-entry-content eg-juno-skin-1-content">
                                                             <div class="esg-content eg-post-257 eg-juno-skin-1-element-0">
                                                                 <h5><?= $row['name_product'] ?></h5>
                                                             </div>
                                                             <div class="esg-content eg-post-257 eg-juno-skin-1-element-33-a">
                                                                 <a class="eg-juno-skin-1-element-33 eg-post-257" href="#" rel="tag"><?= $row['name_category'] ?></a>
                                                             </div>
                                                             <div class="esg-content eg-post-257 eg-juno-skin-1-element-25">
                                                                 <span class="woocommerce-Price-amount amount">
                                                                     <span class="woocommerce-Price-currency Symbol"></span>
                                                                     <h5 style="color:#EA624C"><?= $row['price'] ?></h5>
                                                                 </span>
                                                             </div>
                                                         </div>
                                                     </a>
                                                 </div>
                                             </li>
                                         <?php endforeach; ?>
                                     </ul>
                                     <article class="esg-filters esg-singlefilters even">
                                         <div class="esg-pagination esg-fgc-49"></div>
                                     </article>
                                     <div class="esg-clear-no-height"></div>
                                 </div>
                             </article>
                             <div class="clear"></div>
                             <script type="text/javascript"></script>
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