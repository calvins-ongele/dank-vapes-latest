  <div class="top-footer">
                <div class="container">


                </div>
            </div>

            <div class="widget-footer">
                <div class="container">
                    <div class="widget-footer-wrap thnk-col-4">
                        <div class="widget-footer-col1">

                            <div id="block-43" class="widget widget_block">
                                <ul class="wp-block-page-list">
                                    <li class="wp-block-pages-list__item"><a class="wp-block-pages-list__item__link" href="/about-us/">About Us</a></li>
                                    <li class="wp-block-pages-list__item"><a class="wp-block-pages-list__item__link" href="/" >Home</a></li>
                                    <li class="wp-block-pages-list__item">
<a class="wp-block-pages-list__item__link" href="/cart/">Cart</a><span class="cart-numbers"><sup>0</sup></span></li>
                                    <li class="wp-block-pages-list__item"><a class="wp-block-pages-list__item__link" href="/checkout/">Checkout</a></li>
                                    <li class="wp-block-pages-list__item"><a class="wp-block-pages-list__item__link" href="/contact-us/">Contact Us</a></li>
                                    <li class="wp-block-pages-list__item"><a class="wp-block-pages-list__item__link" href="/faq/">FAQ</a></li>
                                    <li class="wp-block-pages-list__item"><a class="wp-block-pages-list__item__link" href="/login/">My account</a></li>
                                    <li class="wp-block-pages-list__item"><a class="wp-block-pages-list__item__link" href="/pay-with-bitcoin/">Pay With Bitcoin</a></li>
                                    <li class="wp-block-pages-list__item"><a class="wp-block-pages-list__item__link" href="/refund_returns/">Refund Policy</a></li>
                                    <li class="wp-block-pages-list__item"><a class="wp-block-pages-list__item__link" href="/shop/">Shop</a></li>
                                    <li class="wp-block-pages-list__item"><a class="wp-block-pages-list__item__link" href="/content/">Blog</a></li>
                                </ul>
                            </div>
                            <div id="block-50" class="widget widget_block widget_media_image">
                                <figure class="wp-block-image size-full"><img loading="lazy" decoding="async" width="209" height="131" src="/public/assets/uploads/5tr67.jpg.bv.webp" alt="" class="wp-image-2453 bv-image-lazyload" /></figure>
                            </div>
                        </div>
                        <div class="widget-footer-col2">
                            <div id="block-44" class="widget widget_block widget_search">
                                <form role="search" method="get" action="/shop" class="wp-block-search__button-outside wp-block-search__text-button wp-block-search"><label class="wp-block-search__label" for="wp-block-search__input-3">Search</label>
                                    <div class="wp-block-search__inside-wrapper"><input class="wp-block-search__input" id="wp-block-search__input-3" placeholder="Search products..." value="" type="search" name="q" required /><input type="hidden" name="post_type" value="product" /><button aria-label="Search" class="wp-block-search__button wp-element-button" type="submit">Search</button></div>
                                </form>
                            </div>
                            <div id="block-45" class="widget widget_block widget_media_image">
                                <figure class="wp-block-image size-full is-resized is-style-rounded"><img loading="lazy" decoding="async" width="596" height="800" src="/public/assets/uploads/7yu7-480.jpg.bv.webp" alt="" class="wp-image-805 bv-image-lazyload" style="width:117px;height:auto" /></figure>
                            </div>
                            <div id="block-49" class="widget widget_block widget_media_image">
                                <figure class="wp-block-image aligncenter size-full is-resized"><img loading="lazy" decoding="async" width="1000" height="1000" src="/public/assets/uploads/Rick-Simpson-Oil-UK-480.png.bv.webp" alt="Rick Simpson Oil UK" class="wp-image-255 bv-image-preloaded" style="width:145px;height:auto" sizes="auto, (max-width: 1000px) 100vw, 1000px" bv-orig-srcset="/public/assets/uploads/Rick-Simpson-Oil-UK-480.png.bv.webp 1000w, /public/assets/uploads/Rick-Simpson-Oil-UK-480.png.bv.webp 100w, /public/assets/uploads/Rick-Simpson-Oil-UK-480.png.bv.webp 600w" srcset="/public/assets/uploads/Rick-Simpson-Oil-UK-480.png.bv.webp 480w, /public/assets/uploads/Rick-Simpson-Oil-UK-480.png.bv.webp 820w, /public/assets/uploads/Rick-Simpson-Oil-UK-480.png.bv.webp 1000w" />
                                    <figcaption class="wp-element-caption">Rick Simpson Oil UK</figcaption>
                                </figure>
                            </div>
                        </div>
                        <div class="widget-footer-col3">
                            <div id="block-53" class="widget widget_block">
                                <div class="wp-block-group has-black-color has-vivid-green-cyan-background-color has-text-color has-background has-link-color wp-elements-1 is-layout-constrained wp-block-group-is-layout-constrained" style="border-style:none;border-width:0px;padding-top:0;padding-bottom:0">
                                    <div data-block-name="woocommerce/featured-product" data-edit-mode="false" data-min-height="338" data-product-id="285" class="wc-block-featured-product alignnone has-background-dim wp-block-woocommerce-featured-product" style="min-height:338px;">
                                       
                                    <?php 
                    $count = 0;
                    foreach($this->_categories as $category ) { 
                        if ($count >= 1) break;
                        if ($category['category_type'] !== 'products') continue;
                           foreach($category['inner_content'] as $row) {
                ?>
                                        <div class="wc-block-featured-product__wrapper">
                                            <div class="background-dim__overlay" style="background-color: #000000"></div><img decoding="async" alt="<?= $row['title'] ?>" class="wc-block-featured-product__background-image bv-image-lazyload" src="/<?= $row['image'] ?>" style="object-fit: none;object-position: 50% 50%;" />
                                            <h2 class="wc-block-featured-product__title"><?= $row['title'] ?></h2>
                                            <div class="wc-block-featured-product__description">
                                                <?= substr(strip_tags($row['content']),0, 60) ?>
                                            </div>
                                            <div class="wc-block-featured-product__price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&pound;</span><?= $row['price'] ?></bdi></span></div>
                                            <div class="wc-block-featured-product__inner-blocks">

                                                <div class="wp-block-buttons is-content-justification-center is-layout-flex wp-container-core-buttons-is-layout-3e41869c wp-block-buttons-is-layout-flex">
                                                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/product/<?= $row['slug'] ?>">Shop now</a></div>
                                                </div>

                                            </div>
                                        </div>
                                       <?php $count++; }} ?> 
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="widget-footer-col4">
                            <div id="woocommerce_top_rated_products-4" class="widget woocommerce widget_top_rated_products">
                                <h4 class="widget-title">Top rated products</h4>
                                <ul class="product_list_widget">
                                   

                                    <?php 
                                        $count = 0;
                                        foreach($this->_categories as $category ) { 
                                            if ($count >= 5) break;
                                            if ($category['category_type'] !== 'products') continue;

                                            foreach($category['inner_content'] as $row) {
                                    ?>
                                     <li>

                                        <a href="/product/<?= $row['slug'] ?>">
                                            <img width="320" height="320" 
                                            src="/<?= $row['image'] ?>" 
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail bv-image-lazyload" 
                                            alt="<?= $row['title'] ?>" decoding="async" loading="lazy" 
                                            sizes="auto, (max-width: 320px) 100vw, 320px" 
                                            bv-orig-srcset="/<?= $row['image'] ?> 320w, 
                                            /<?= $row['image'] ?> 300w, /<?= $row['image'] ?> 150w, /<?= $row['image'] ?> 600w, 
                                            /<?= $row['image'] ?> 100w, /<?= $row['image'] ?> 48w, /<?= $row['image'] ?> 768w" /> 
                                            <span class="product-title"><?= $row['title'] ?></span>
                                        </a>

                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span>
                                        </div>
                                        <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol" 
                                        translate="no">&pound;</span><?= $row['price'] ?></bdi></span>
                                    </li>

                                    <?php $count++; }} ?> 
                                </ul>
                            </div>

                        </div>
                    </div>


                </div>
            </div>

            <div class="below-footer">
                <div class="container">
                    <div class="below-footer-bar thnk-col-1">
                        <div class="below-footer-col1">
                            <p class="footer-copyright">&copy;
                                <script>document.write(new Date().getFullYear())</script> <a href=""><?= $this->_company['c_name'] ?></a>
                                <span class="powered-by-wordpress">
                                    <span>Designed by</span>
                                    <a href="/" target="_blank" rel="nofollow noopener">
                                        Hunk</a>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

    <script src="/public/js/main.js"></script>
    <?php require 'public/includes/toast.inc.php' ?>
    <script src="/public/js/toast.js"></script>
    <script src="/public/js/cart.js?v=<?= rand() ?>"></script>
    <script>
        const cart = new Cart(`<?= CART_ID ?>`); 
        const cartTable = document.querySelector("#cartTable");

        cart.get().then(data => { 
            const totalInCart = data.total; 
            updateNumbers(totalInCart);

            const pathname = location.pathname;
            if (pathname === "/cart/" || pathname === "/cart") {
                //sample
                //{"total":1,"cart":[{"item_id":3,"cookie_id":"1l6p2u0a1c3p0b1j","item_count":4,"created_at":"2026-09-14 20:45:08","updated_at":"2026-09-14 20:54:02"}]}
 
            }

        });
   
        // add to cart btn pressed | product details page
        const addToCart = document.querySelector('button[name="add-to-cart"]');
        addToCart?.addEventListener('click', async (e)=> {
            e.preventDefault();
            const item_id = addToCart.getAttribute('rel'); 
            const qty = document.querySelector('#quantity').value; 
            const send = await cart.send(item_id, qty); 

            showErrorToast("Item added to cart successfully", true);
            updateNumbers(send.total);
        });

        function updateNumbers(numbersIncart) {
            document.querySelectorAll('.cart-numbers sup').forEach((element)=>{
                element.textContent = numbersIncart;
            });
        }

        cartTable?.addEventListener('click', (event)=> { 
            //remove products
            if (event.target && event.target.classList.contains('remove')) { 
                const item_id = event.target.getAttribute('rel');

                if (confirm("Are you sure?")) {
                    cart.send(item_id, 0);
                    showErrorToast("Item added to cart successfully", true);
                    setTimeout(() => { location.reload(); }, 3000); //or remove the table.row
                }
                return;
            } 
        });

        const cartqty = document.querySelectorAll('.cart-qty');
        cartqty?.forEach(input => {
            input.addEventListener('change', (event)=> {
                const qty = event.target.value;
                const item_id = event.target.getAttribute('rel');
                const price = event.target.getAttribute('price');

                const total = parseFloat(price) * parseFloat(qty);
                 
                const itemIdElement = document.querySelector(`#subtotal${item_id}`);
                itemIdElement.textContent = `${total}`;

                if (parseInt(qty) > 0) {
                    cart.send(item_id, qty, 1);
                    setTimeout(() => { location.reload(); }, 3000); //or remove the table.row
                }

                 
            });
        });
  


    </script>
    