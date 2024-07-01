<div class="modal-wrapper modal-wrapper__catalog">
    <div class="catalog-dialog" autofocus="false">
        <div class="dialog-wrapper">
                <h2><?php echo $optionsArr['text_modal_title'];?></h2>
                <p><?php echo $optionsArr['text_modal_content'];?></p>
                <div  class="form">
                    <form class="form-wrapper" id="suscribeForm" autofocus="false">
                        <div>
                            <input type="hidden" name="id" value="" id="catalogId">
                            <input type="hidden" name="type" value="catalog">
                            <input class="form__input" type="email" name="email" placeholder="<?php _e('Email', 'asolutions');?>" required/>
                            <button class="form__button" type="submit"><?php _e('Ok', 'asolutions');?></button>
                        </div>
                    </form>
                    
                </div>
                <div class="suscribeForm errorMessage"></div>
                <svg class="close-icon close-dialog" width="24" height="24" viewBox="0 0 54 54" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M29.3864 26.9998L43.7053 12.6809L41.3188 10.2944L26.9999 24.6133L12.681 10.2944L10.2945 12.6809L24.6134 26.9998L10.2945 41.3187L12.681 43.7052L26.9999 29.3863L41.3188 43.7052L43.7053 41.3188L29.3864 26.9998Z"
                    fill="white" />
                </svg>
        </div>
    </div>
</div>