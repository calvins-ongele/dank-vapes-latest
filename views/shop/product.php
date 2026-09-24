<!DOCTYPE html>
<html lang="en-GB">

<head>
    <?php require 'public/includes/header.inc.php'; ?>

        <?php

        $imageLink = "https://{$_SERVER['SERVER_NAME']}/{$this->data['image']}";
        $sizes = @(getimagesize( $this->data['image'] ));
        $canonical = "https://{$_SERVER['SERVER_NAME']}/products/{$this->data['slug']}";

        
    ?> 
    <meta property='author' content='<?= $this->_company['c_name'] ?>'>
    <meta name='description' content="<?= $this->data['overview'] ?>">
    <meta property='og:description' content="<?= $this->data['overview'] ?>">
    <meta property='og:image' content='<?= $imageLink ?>'>
    <meta property='og:image:width' content="<?= $sizes[0]??0 ?>">
    <meta property='og:image:height' content="<?= $sizes[1]??0 ?>">
    <meta property='og:title' content="<?= $this->title ?>">
    <meta property='og:site_name' content='<?= $this->_company['c_name'] ?>'>
    <meta property='og:price' content='KES <?= $this->data['price'] ?>'>
    <meta property='og:url' content='<?=  $canonical ?>'>
    <meta property='article:published_time' content='<?= $this->data['created_at'] ?>'> 
    <link rel='canonical'   href='<?=  $canonical ?>'/>
    <meta property="og:type" content="Product" />
   <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [
            {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://www.<?= $_SERVER['SERVER_NAME'] ?>/"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "<Products",
                "item": "https://www.<?= $_SERVER['SERVER_NAME'] ?>/shop"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "<?= $this->title ?>",
                "item": "<?= $canonical ?>/"
            }
            ]
        }
    </script>
    

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Product",
            "name": "<?= $this->title ?>",
            "image": [ 
                "<?= $imageLink ?>"
            ],
            "description": "<?= $this->data['overview'] ?>",
            "sku": "SH-8232<?= $this->data['id'] ?>",
            "mpn": "72586<?= $this->data['id'] ?>",
            "brand": {
                "@type": "Brand",
                "name": "Generic"
            },
            "review": {
                "@type": "Review",
                "reviewRating": {
                    "@type": "Rating",
                    "ratingValue": "4.<?= rand(1,9) ?>",
                    "bestRating": "5"
                },
                "author": {
                    "@type": "Person",
                    "name": "Jane B."
                }
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.6",
                "reviewCount": "389"
            },
            "offers": {
                "@type": "Offer",
                "url": "<?= $canonical ?>",
                "priceCurrency": "KES",
                "price": "<?= $this->data['price'] ?>",
                "priceValidUntil": "2030-12-31",
                "itemCondition": "https://schema.orgNewCondition",
                "availability": "https://schema.orgInStock",
                "seller": {
                    "@type": "Organization",
                    "name": "<?= $this->_company['c_name'] ?>"
                }
            }
        }
    </script>
       

</head>

<body data-rsssl=1 class="home wp-singular page-template-default page page-id-83 wp-embed-responsive wp-theme-top-store wp-child-theme-core-store theme-top-store woocommerce-no-js th-advance-product-search woocommerce top-store-light">

    <div id="page" class="top-store-site">
        <header>
            <?php require 'public/includes/navbar.inc.php' ?>
        </header>
        <div id="content" class="page-content thunk-page">
            <div class="content-wrap">
                <div class="container">
                    <div class="main-area active-sidebar">
                        <div id="sidebar-primary" class="sidebar-content-area sidebar-1 ">
                            <?php require 'public/includes/sidebar.categories.php' ?>
                        </div>
                        <div id="primary" class="primary-content-area">

                            <div class="primary-content-wrap">
                                <div class="page-head-woo">
                                    <nav class="woocommerce-breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a>&nbsp;/&nbsp;<a href="/product-category/<?= $this->data['categ_slug'] ?>"><?= $this->data['categ_title'] ?></a>&nbsp;/&nbsp;<?= $this->data['title'] ?></nav>
                                </div>
                                <div class="woocommerce-notices-wrapper"></div>
                                <div id="product-102" class="thunk-woo-product-list opn-qv-enable top-store-woo-hover- top-store-single-product-tab-horizontal top-store-shadow- top-store-shadow-hover- product type-product post-102 status-publish first instock product_cat-buy-delta-8-thc-gummies-uk product_tag-10mg-delta-8-oxford-thc-chewing-gum product_tag-buy-delta-8-thc-gummies-online-uk product_tag-delta-8-gummies-get-you-high product_tag-delta-8-thc-effects has-post-thumbnail shipping-taxable purchasable product-type-simple">

                                    <div class="thunk-single-product-summary-wrap">
                                        <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 1; transition: opacity 0.25s ease-in-out;"> 
                                            <div class="woocommerce-product-gallery__wrapper">
                                                <div data-thumb="/<?= $this->data['image'] ?>" data-thumb-alt="<?= $this->data['title'] ?>" data-thumb-srcset="/<?= $this->data['image'] ?> 100w, /<?= $this->data['image'] ?> 300w" data-thumb-sizes="(max-width: 100px) 100vw, 100px" class="woocommerce-product-gallery__image">
                                                    
                                                    <a href="/<?= $this->data['image'] ?>"><img width="300" height="300" src="/<?= $this->data['image'] ?>" class="wp-post-image" alt="<?= $this->data['title'] ?>" data-caption="<?= $this->data['title'] ?>" data-src="/<?= $this->data['image'] ?>" data-large_image="/<?= $this->data['image'] ?>" data-large_image_width="300" data-large_image_height="300" decoding="async" fetchpriority="high" srcset="/<?= $this->data['image'] ?> 300w, /<?= $this->data['image'] ?> 100w" sizes="(max-width: 300px) 100vw, 300px"></a></div>
                                            </div>
                                        </div>

                                        <div class="summary entry-summary">
                                            <h1 class="product_title entry-title"><?= $this->data['title'] ?></h1>
                                            <p class="price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol" translate="no">£</span><?= $this->data['price'] ?></bdi></span></p>
                                            <div class="woocommerce-product-details__short-description">
                                                <?= ($this->data['overview']) ?>
                                            </div>


                                            <form class="cart" action="#" method="post" enctype="multipart/form-data">
 
                                                <div class="top-store-quantity" style="border:none!important"> 
                                                                            <div class="quantity-container">
    <button type="button" class="quantity-btn minus" id="decrease">-</button>
    <input type="number" id="quantity" class="quantity-input input-text qty text" value="1" min="1" max="100" readonly>
    <button type="button" class="quantity-btn plus" id="increase">+</button>
  </div>
                                                </div>
                                                <button type="button" name="add-to-cart" rel="<?= $this->data['id'] ?>" class="single_add_to_cart_button button alt">Add to basket</button>

                                            </form>


                                        </div>

                                    </div>
                                    <div class="woocommerce-tabs wc-tabs-wrapper">
                                        <ul class="tabs wc-tabs" role="tablist">
                                            <li role="presentation" class="description_tab active" id="tab-title-description">
                                                <a href="#tab-description" role="tab" aria-controls="tab-description" aria-selected="true" tabindex="0">
                                                    Description </a>
                                            </li>
                                            <li role="presentation" class="reviews_tab" id="tab-title-reviews">
                                                <a href="#tab-reviews" role="tab" aria-controls="tab-reviews" aria-selected="false" tabindex="-1">
                                                    Reviews (0) </a>
                                            </li>
                                        </ul>
                                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description" style="">


                                            <h1><?= $this->data['title'] ?></h1>
                                            <p style="text-align: center;">
                                                <?= $this->data['content'] ?>
                                            </p>
                                        </div>
                                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews" style="display: none;">
                                            <div id="reviews" class="woocommerce-Reviews">
                                                <div id="comments">
                                                    <h2 class="woocommerce-Reviews-title">
                                                        Reviews </h2>

                                                    <p class="woocommerce-noreviews">There are no reviews yet.</p>
                                                </div>

                                                <div id="review_form_wrapper">
                                                    <div id="review_form">
                                                       
                                                    </div>
                                                </div>

                                                <div class="clear"></div>
                                            </div>
                                        </div>

                                    </div>

                                     

                                    <section class="related products">

                                        <h2>Related products</h2>
                                        <ul class="products columns-4">

                                        <?php foreach($this->similar as $row) { ?>

                                            <li class="thunk-woo-product-list opn-qv-enable top-store-woo-hover- top-store-single-product-tab-horizontal top-store-shadow- top-store-shadow-hover- product type-product post-620 status-publish first instock product_cat-moonrock-marijuana-online-uk product_tag-buy-moonrock-pre-rolls-online product_tag-moon-rock-pre-roll-delta-8-online-uk product_tag-moonrock-peaches-cream-pre-roll-uk product_tag-presidential-moon-rock-pre-roll-uk has-post-thumbnail shipping-taxable purchasable product-type-variable">
                                                                <div class="thunk-product-wrap">
                                                                    <div class="thunk-product">
                                                                        <div class="thunk-product-image">
                                                                            <a href="/product/<?= $row['slug'] ?>" 
                                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                                            <img fetchpriority="high" decoding="async" width="320" height="320" 
                                                                            src="/<?= $row['image'] ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail bv-image-preloaded" alt="Moonrock Peaches &amp; Cream Pre Roll UK" sizes="(max-width: 320px) 100vw, 320px" bv-orig-srcset="/<?= $row['image'] ?> 320w, /<?= $row['image'] ?> 100w" srcset="/<?= $row['image'] ?> 320w" /></a>
                                                                             
                                                                        </div>
                                                                        <a href="/product/<?= $row['slug'] ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                                            <h2 class="woocommerce-loop-product__title"><?= $row['title'] ?></h2>
                                                                        </a>
                <span class="price">
                        <span class="woocommerce-Price-amount amount" aria-hidden="true">
                            <bdi>
                                <span class="woocommerce-Price-currencySymbol" translate="no">&pound;</span><?= $row['price'] ?></bdi>
                            </span> 
                            
                               
                </span>
                                                                        <div class="thunk-product-hover"></a>
                                                                             
                                                                            <a href="/product/<?= $row['slug'] ?>"  class="add-to-cart" rel="<?= $row['id'] ?>"><i class="fa fa-shopping-cart "></i> Add to Cart</a>  
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                            <?php } ?>

 

                                        </ul>

                                    </section>
                                </div>


                            </div>

                        </div>
                        <div id="sidebar-secondary" class="sidebar-content-area sidebar-2 ">
                            <?php require 'public/includes/sidebar.secondary.php' ?>
                        </div><!----------->
                    </div>
                </div>
            </div>
        </div>



        <footer>
              <script>
    const quantityInput = document.getElementById('quantity');
    const decreaseBtn = document.getElementById('decrease');
    const increaseBtn = document.getElementById('increase');

    // Handle the minus button
    decreaseBtn.addEventListener('click', () => {
      let currentValue = parseInt(quantityInput.value) || 0;
      const min = parseInt(quantityInput.min) || 1;
      
      if (currentValue > min) {
        quantityInput.value = currentValue - 1;
      }
    });

    // Handle the plus button
    increaseBtn.addEventListener('click', () => {
      let currentValue = parseInt(quantityInput.value) || 0;
      const max = parseInt(quantityInput.max) || 100;
      
      if (currentValue < max) {
        quantityInput.value = currentValue + 1;
      }
    });
  </script>

            <?php require 'public/includes/footer.inc.php' ?>
        </footer>
    </div>

</body>

</html>