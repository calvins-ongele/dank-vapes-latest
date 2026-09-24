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
                "name": "<?= $this->title ?>",
                "item": "https://www.<?= $_SERVER['SERVER_NAME'] ?>/"
            }]
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
                                <div class="page-head">
                                    <h1 class="thunk-page-top-title entry-title">Buy Weed Online UK</h1>
                                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                        <h2 class="trail-browse"></h2>
                                        <ul class="thunk-breadcrumb trail-items">
                                            <li class="trail-item trail-end"><span>Home</span></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="thunk-content-wrap">
                                    <article id="post-83">

                                        <div class="entry-content">

                                            <?php require 'public/includes/sidebar.upper.content.php' ?>

                                            <p class="wp-block-paragraph"><code>
                                                    <div class="woocommerce columns-4 ">
                                                        <ul class="products columns-4">
                                                            <?php foreach($this->products as $row) { ?>
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
                                                                             
                                                                            <a href="/product/<?= $row['slug'] ?>"  class="add-to-cart" rel=""><i class="fa fa-shopping-cart "></i> Add to Cart</a>  
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <?php } ?>
                                                            
                                                            
                                                        </ul>
                                                    </div>
                                                </code></p>
                                                
                                                <?php require 'public/includes/sidebar.lower.content.php' ?>
                                        </div>
                                    </article>
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

           <?php require 'public/includes/footer.inc.php' ?>
        </footer>
    </div>
 
</body>

</html> 