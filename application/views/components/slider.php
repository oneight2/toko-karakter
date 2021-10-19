<section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_home-1">
    <div class="rev_slider_wrapper fullwidthbanner-container" data-alias="home-1" id="rev_slider_1_1_wrapper">
        <div class="rev_slider fullwidthabanner" data-version="5.2.6" id="rev_slider_1_1">
            <ul>
                <li data-delay="28600" data-description="" data-easein="default" data-easeout="default" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1" data-masterspeed="300" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-title="Slide" data-transition="fade">
                    <div class="swiper-container mySwiper">
                        <div class="swiper-wrapper ">
                            <?php foreach ($carousel as $row) : ?>
                                <div class="swiper-slide carousel">
                                    <img src="<?= $imageAdress . 'carousel/' . $row['image'] ?>" alt="" id="img-carousel" />
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<style>
    .carousel #img-carousel {
        width: 100vw;
    }
</style>