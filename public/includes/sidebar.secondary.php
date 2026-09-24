<div class="sidebar-main">
    <div id="block-41" class="widget widget_block widget_search">
        <div class="top-store-widget-content">
            <form role="search" method="get" action="/shop" class="wp-block-search__button-outside wp-block-search__text-button wp-block-search"><label class="wp-block-search__label" for="wp-block-search__input-2">Search</label>
                <div class="wp-block-search__inside-wrapper"><input class="wp-block-search__input" id="wp-block-search__input-2" placeholder="" value="" type="search" name="q" required /><button aria-label="Search" class="wp-block-search__button wp-element-button" type="submit">Search</button></div>
            </form>
        </div>
    </div>
    <div id="block-42" class="widget widget_block widget_media_image">
        <div class="top-store-widget-content">
            <figure class="wp-block-image size-full is-style-rounded">
                <img loading="lazy" decoding="async" width="240" height="236" 
                src="/public/assets/uploads/3ew4.jpg.bv.webp" alt="" 
                class="wp-image-819 bv-image-preloaded" srcset="/public/assets/uploads/3ew4.jpg.bv.webp 240w" sizes="240px" /></figure>
        </div>
    </div>
    <div id="woocommerce_products-7" class="widget woocommerce widget_products">
        <div class="top-store-widget-content">
            <h4 class="widget-title">Products</h4>
            <ul class="product_list_widget">
                
                <?php 
                    $count = 0;
                    foreach($this->_categories as $category ) { 
                        if ($count >= 12) break;
                        if ($category['category_type'] !== 'products') continue;
                           foreach($category['inner_content'] as $row) {
                ?>
                    <li>
                    <a href="/product/<?= $row['slug'] ?>">
                        <img width="298" height="278" src="/<?= $row['image'] ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail bv-image-preloaded" alt="<?= $row['title'] ?>" decoding="async" loading="lazy" srcset="/<?= $row['image'] ?> 298w" sizes="298px" /> <span class="product-title"><?= $row['title'] ?></span>
                    </a> 
                    <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol" translate="no">&pound;</span><?= $row['price'] ?></bdi></span>
                </li>
                <?php $count++; }} ?> 
               
            </ul>
        </div>
    </div>
</div>