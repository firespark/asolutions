        <?php if(isset($fieldsArr['slider']) && !empty($fieldsArr['slider'])):?>
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ($fieldsArr['slider'] as $slide):?>
                <div class="swiper-slide" style="background-image: url(<?php echo $slide['image']['url'];?>);">
                    <div class="h1"><?php echo $slide['title'];?></div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        <?php endif;?>