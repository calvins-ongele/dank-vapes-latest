<!DOCTYPE html>
<html lang="en-GB">

<head>
    <?php require 'public/includes/header.inc.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    
    
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
                "item": "https://www.<?= $_SERVER['SERVER_NAME'] ?>/about-us"
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
                                <div class="page-head">
                                    <h1 class="thunk-page-top-title entry-title">About Us</h1>
                                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                        <h2 class="trail-browse"></h2>
                                        <ul class="thunk-breadcrumb trail-items">
                                            <li class="trail-item trail-end"><span>Home</span></li>
                                            <li class="trail-item trail-end"><span>About Us</span></li>
                                        </ul>
                                    </nav>
                                </div>


                                <div class="thunk-content-wrap">
                                    <article id="post-1218">

                                        <div class="entry-content">

                                            <p class="has-text-align-center wp-block-paragraph">About Us</p>



                                            <p class="wp-block-paragraph">The primary focus for <?= $this->_company['c_name'] ?> dispensary is to provide our beloved members with the confidence to shop <a href="/">cannabis </a>products online. Every single day. We assure you that our team continuously works hard around the clock so that our customers leave with a smile on their faces. All of our carefully inspected goods pass through quality control, ensuring they meet above industry quality standards. Above all, we offer products at a reasonable price that we firmly have a concern about. We also match all of our superb services by providing the fastest shipping times.</p>



                                            <h2 class="wp-block-heading has-text-align-center">Why Choose <?= $this->_company['c_name'] ?>?</h2>



                                            <p class="wp-block-paragraph"><?= $this->_company['c_name'] ?> is a mail-order cannabis service that offers exceptional quality products at a low price. Our brand carries a wide variety of products such as cannabis flowers, edibles, concentrates, vapes, CBD topicals and tinctures, and our own branded accessories. What separates our company from the competition? Wholesale products and bulk weed are our specialties. Ultimately, you can save more money on pot, with the more substantial variations you choose<a href="https://en.wikipedia.org/wiki/About_us">.</a></p>



                                            <h3 class="wp-block-heading has-text-align-center">Dedicated Customer Satisfaction</h3>



                                            <p class="wp-block-paragraph">Immediately upon your arrival at our website, we want you to feel confident and ensure that all our high-quality products are accurate to what you desired to order. Above all, our team strives to update all of our stock on cannabis products daily to serve you consistently. We have also ensured that every product we have in our inventory goes through a strict screening process and passes industry standards to avoid adverse health effects. Most importantly, you are guaranteed that what you order is what you get</p>



                                            <h3 class="wp-block-heading has-text-align-center">High-Quality Products</h3>



                                            <p class="wp-block-paragraph">Purchasing from <?= $this->_company['c_name'] ?> Dispensary means that you’ll receive very high-quality products that are on sale for a low price. Every product in our store has been passed through various testing phases to ensure that each item meets the company standards. Subsequently, after a product is approved, it’s ready for you to purchase.&nbsp; We have positive and established relationships with our cultivators and are in constant communication. Also, we understand that quality control is crucial to guarantee that the standard is always consistent and potent.</p>



                                            <h3 class="wp-block-heading has-text-align-center">Dependable Customer Service</h3>



                                            <p class="wp-block-paragraph">We are here because of your loyal support. Therefore, we owe it to you to provide first-class customer service to fulfill the best end-to-end customer experience from general questions related to your account to seeking assistance with finding products that are most suitable for you. Our commitment is to help you feel at ease, and we assure you that we will be here every step of the way.</p>



                                            <p class="wp-block-paragraph">You can count on us to answer all the questions you may have or fix issues that may arise quickly and efficiently. We have also ensured that every product we have in our inventory goes through a strict screening process and passes industry standards to avoid adverse health effects. Most importantly, you are guaranteed that what you order is what you get.</p>



                                            <h3 class="wp-block-heading"></h3> 
                                            <h3 class="wp-block-heading has-text-align-center">Quick and Discreet Shipping</h3> 

                                            <p class="wp-block-paragraph"><?= $this->_company['c_name'] ?> is an online dispensary that you can depend on and trust. We prepare your package within one business day, and we also have the highest regard for your privacy. Our discreet packaging enables you to shop with <?= $this->_company['c_name'] ?> in complete confidence. When we prepare your order at our facility, your product(s) are packaged in an air-tight vacuum-sealed bag to eliminate any odors.</p>



                                            <p class="wp-block-paragraph"></p>
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