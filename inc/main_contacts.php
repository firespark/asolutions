    <section class="contacts" id="contacts">
        <div>
            <div class="title"><?php echo $fieldsArr['contacts_title_phone'];?></div>
            <p><a href="tel:+<?php echo get_numbers_from_str($optionsArr['main_phone']);?>" target="_blank"><?php echo $optionsArr['main_phone'];?></a></p>
        </div>
        <div>
            <div class="title"><?php echo $fieldsArr['contacts_title_address'];?></div>
            <p class="contacts__address"><?php echo $optionsArr['main_address'];?></p>
        </div>
        <div>
            <div class="title"><?php echo $fieldsArr['contacts_title_email'];?></div>
            <p><a href="mailto:<?php echo $optionsArr['main_email'];?>" target="_blank"><?php echo $optionsArr['main_email'];?></a></p>
        </div>
    </section>