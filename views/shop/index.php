<!DOCTYPE html>
<html lang="en-GB">

<head>
    <?php require 'public/includes/header.inc.php'; ?>

    
    
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://www.<?= $_SERVER['SERVER_NAME'] ?>/"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "<?= $this->title ?>",
                "item": "https://www.<?= $_SERVER['SERVER_NAME'] ?>/shop"
            }
            ]
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
                                    <h1 class="thunk-page-top-title entry-title">Archives: <span>Shop</span></h1>
                                    <nav class="woocommerce-breadcrumb" aria-label="Breadcrumb"><a href="/">Home</a>&nbsp;/&nbsp;Shop</nav>
                                </div>


                                <div class="page-description">
                                    <h1 style="text-align: center">Shop</h1>
                                    <p style="text-align: center">At <?= $this->_settings['c_name'] ?> Dispensary, we offer a wide range of medical <a href="/">marijuana</a> strains( hybrid, Sativa, and Indica). Concentrates, <a href="https://eushishalounge.com">vape cartridges</a>,
                                        <a href="https://bluntpharm-au.com/">pre-rolled joints</a>, and <a href="/">CBD </a>oil. They have been tested and proven by our team of professionals. Furthermore, our products offer treatments for a wide range of illnesses such as anxiety, stress, <a href="https://europasteroid.com">chronic pains</a>, muscle spasms, cancer, and a sleepless night. Lastly, browse our <a href="https://just4bliss.net">products</a> and give them a try and you will give us a thumb up<a href="https://en.wikipedia.org/wiki/Shop">.</a>
                                    </p>
                                    <p class="wp-block-paragraph">
                                    </p>
                                </div>

                                <div id="shop-product-wrap">
                                    <div class="woocommerce-notices-wrapper"></div>
                                    <p class="woocommerce-result-count" role="status" aria-relevant="all">
                                        Showing 1–16 of 811 results</p>
                                    <form class="woocommerce-ordering" method="get">
                                        <select name="orderby" class="orderby" aria-label="Shop order">
                                            <option value="menu_order" selected="selected">Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by latest</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                        <input type="hidden" name="paged" value="1">
                                    </form>
                                    <div class="thunk-list-grid-switcher"><a title="Grid View" href="#" data-type="grid" class="thunk-grid-view selected"><i class="fa fa-th"></i></a><a title="List View" href="#" data-type="list" class="thunk-list-view"><i class="fa fa-bars"></i></a></div>
                                    <ul class="products columns-4">

                                        <?php foreach ($this->data['shop'] as $row) { ?>

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

                                                            <a href="/product/<?= $row['slug'] ?>" class="add-to-cart" rel=""><i class="fa fa-shopping-cart "></i> Add to Cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>

                                </div>
                                <?php require 'public/includes/pagination.inc.php' ?>



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

            <?php require 'public/includes/footer.inc.php' ?>
        </footer>
    </div>

</body>

</html>