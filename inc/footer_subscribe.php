        <div class="form-wrapper">
            <p><?php echo $optionsArr['text_subscription_title'];?></p>
            <form id="suscribeFormFooter">
                <div>
                    <input type="hidden" name="type" value="subscribe">
                    <input class="form__input" type="email" placeholder="Email" name="email" required />
                    <button class="form__button" type="submit"><?php _e('Ok', 'asolutions');?></button>
                </div>
            </form>
        </div>
        <div class="suscribeFormFooter errorMessage"></div>