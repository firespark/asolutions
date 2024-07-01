    <?php
    $products = get_posts([
        'posts_per_page' => $fieldsArr['catalog_products_number'],
        'meta_key'      => 'product_show_on_main',
        'meta_value'    => true,
    ]);
    ?>
    <section class="examples-section" id="catalog">
        <?php if (!empty($products)):?>
        <?php foreach ($products as $product):?>
        <?php $productArr = get_fields($product->ID);?>
        <div class="example">
            <div class="example-image-wrapper">
                <img class="example-image" alt="" src="<?php echo $productArr['product_image']['url'];?>"></img>
            </div>
            <div class="example-title"><?php echo $product->post_title;?></div>
            <?php if($productArr['product_show_download_catalog_button']):?>
            <button 
                class="catalog-link"
                data-id="<?php echo $product->ID;?>"
                
            ><?php echo $productArr['product_download_catalog_button_text'];?></button>
            <?php endif;?>
        </div>
        <?php endforeach;?>
        <?php endif;?>
    </section>