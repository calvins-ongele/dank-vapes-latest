<!DOCTYPE html>
<html lang="en-GB">

<head>
    <?php require 'public/includes/header.inc.php'; ?>
    <meta name="robots" content="noindex">

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
                                    <h1 class="thunk-page-top-title entry-title">Cart</h1>
                                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                        <h2 class="trail-browse"></h2>
                                        <ul class="thunk-breadcrumb trail-items">
                                            <li class="trail-item trail-begin"><a href="/" rel="home"><span>Home</span></a></li>
                                            <li class="trail-item trail-end"><span>Cart</span></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="thunk-content-wrap">
                                    <article id="post-1422">

                                        <div class="entry-content">

                                            <p class="has-text-align-center wp-block-paragraph">Cart</p>


                                            <div class="woocommerce">
                                                <div class="woocommerce-notices-wrapper"></div>
                                                <form id="cart_form" action="/cart/" method="post">

                                                    <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0" id="cartTable">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" class="product-remove"><span class="screen-reader-text">Remove item</span></th>
                                                                <th scope="col" class="product-thumbnail"><span class="screen-reader-text">Thumbnail image</span></th>
                                                                <th scope="col" class="product-name">Product</th>
                                                                <th scope="col" class="product-price">Price</th>
                                                                <th scope="col" class="product-quantity">Quantity</th>
                                                                <th scope="col" class="product-subtotal">Subtotal</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        <?php foreach($this->cart as $row) { ?> 

                                                            <tr class="woocommerce-cart-form__cart-item cart_item">

                                                                <td class="product-remove">
                                                                    <a role="button" href="#" rel="<?= $row['item_id'] ?>" class="remove" aria-label="<?= $row['title'] ?>" >X</a>
                                                                </td>

                                                                <td class="product-thumbnail">
                                                                    <a href="/product/<?= $row['slug'] ?>"><img fetchpriority="high" decoding="async" width="320" height="320" src="/<?= $row['image'] ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail bv-image-lazyload" alt="Ultra Sativa Prerolls Joint UK" sizes="(max-width: 320px) 100vw, 320px" bv-orig-srcset="/<?= $row['image'] ?> 320w, /<?= $row['image'] ?> 1024w, /<?= $row['image'] ?> 150w, /<?= $row['image'] ?> 768w, /<?= $row['image'] ?> 600w, /<?= $row['image'] ?> 100w, /<?= $row['image'] ?> 48w, /<?= $row['image'] ?> 1200w" srcset="/<?= $row['image'] ?> 320w, /<?= $row['image'] ?> 300w, /<?= $row['image'] ?> 1024w, /<?= $row['image'] ?> 150w, /<?= $row['image'] ?> 768w, /<?= $row['image'] ?> 600w, /<?= $row['image'] ?> 100w, /<?= $row['image'] ?> 48w, /<?= $row['image'] ?> 1200w"></a>
                                                                </td>

                                                                <td role="rowheader" class="product-name" data-title="Product">
                                                                    <a href="/product/<?= $row['slug'] ?>"><?= $row['title'] ?></a>
                                                                </td>

                                                                <td class="product-price" data-title="Price">
                                                                    <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol" translate="no">£</span><?= $row['price'] ?></bdi></span>
                                                                </td>

                                                                <td class="product-quantity" data-title="Quantity">
                                                                    <div class="quantity"> 
                                                                        <input type="number"  price="<?= $row['price'] ?>" 
                                                                        rel="<?= $row['item_id'] ?>"
                                                                        class="input-text cart-qty qty text" value="<?= $row['item_count'] ?>" aria-label="Product quantity" min="1" step="1"  >
                                                                    </div>
                                                                </td>

                                                                <td class="product-subtotal" data-title="Subtotal">
                                                                    <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol" translate="no">£</span>
                                                                <span id="subtotal<?= $row['item_id'] ?>" class="subtotal"><?= $row['item_count']*$row['price'] ?></span></bdi></span>
                                                                </td>
                                                            </tr>

                                                            <?php } ?>


                                                            <tr>
                                                                <td colspan="6" class="actions">

                                                                    <!-- <div class="coupon">
                                                                        <label for="coupon_code" class="screen-reader-text">Coupon:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"> <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                                                                    </div> -->

                                                                    <div style="display:flex;justify-content:end">
                                                                        <a href="/checkout" class="checkout-button button alt wc-forward" name="update_cart" value="Update basket" >Proceed to checkout</a>
                                                                    </div>


                                                                    <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="435932a012"><input type="hidden" name="_wp_http_referer" value="/cart/">
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </form>

 

                                            </div>
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
            <script>
                console.log("RRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR")
                console.log(cart)
                console.log("WWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWW")
            </script>
        </footer>
    </div>

</body>

</html>