<style>
    @media screen and (max-width: 1026px) {
        .menu-toggle {
            display: block !important;
        }
    }
    @media screen and (min-width: 1026px) {
        #list-container {
            display: none !important;
        }
    }
</style>


<a class="skip-link screen-reader-text" href="#content">Skip to content</a>




<div class="main-header mhdrfour callto left  cnv-none">
    <div class="container">
        <div class="main-header-bar parent-theme thnk-col-3">
            <div class="main-header-col1">
                <span class="logo-content">
                    <div class="thunk-logo">
                    </div>
                    <div class="site-title"><span>
                            <a href="/" rel="home"><?= $this->_company['c_name'] ?></a>
                        </span>
                    </div>
                </span>

            </div>
            <div class="main-header-col2">

                <div id='thaps-search-box' class="thaps-search-box  submit-active  default_style">

                    <form class="thaps-search-form" action='/shop' id='thaps-search-form' method='get'>

                        <div class="thaps-from-wrap">

                            <input id='thaps-search-autocomplete-1' name='q' placeholder='Search for products...' class="thaps-search-autocomplete thaps-form-control" value='' type='text' title='Search' />



                            <div class="thaps-preloader"></div>




                            <button id='thaps-search-button' value="Submit" type='submit'>

                                Search</button> <input type="hidden" name="post_type" value="product" />

                            <span class="label label-default" id="selected_option"></span>

                        </div>

                    </form>

                </div>



            </div>
            <div class="main-header-col3">
                <div class="thunk-icon-market">
                    <div class="header-icon">
                        <span><a href="/login/" title="Show Account"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user w-6 h-6 stroke-[1.5px]" aria-hidden="true">
                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg></a></span>

                        <div class="cart-icon">
                        </div>

                    </div>
 <div class="header-iconx">
                    
                            <a href="/cart/">
                            <i class="fa fa-cart-shopping"> </i>
                            <span class="cart-numbers"><sup class="suptop">0</sup></span></a>   
</div>
                </div>
                
            </div>
        </div>
    </div>
</div>


<div class="below-header  mhdrfour left callto">
    <div class="container">
        <div class="below-header-bar thnk-col-3">
            <div class="below-header-col1">
                <div class="menu-category-list">
                    <div class="toggle-cat-wrap">
                        <p class="cat-toggle" tabindex="0">
                            <span class="cat-icon">
                                <svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" xmlns="http://www.w3.org/2000/svg" style="display: inline-block; vertical-align: middle;">
                                    <path d="M5 7h14"></path>
                                    <path d="M5 12h9"></path>
                                    <path d="M5 17h11"></path>
                                </svg>
                            </span>
                            <span class="toggle-title">Category</span>
                            <span class="toggle-icon"></span>
                        </p>
                    </div>
                    <ul class="product-cat-list thunk-product-cat-list" data-menu-style="vertical">
                       <?php foreach($this->_categories as $category) {
                                            if ($category['category_type'] != 'products') continue;
                                        ?>
                        <li class="cat-item cat-item-21">
                            <a href="/product-category/<?= $category['slug'] ?>"><?= $category['title'] ?></a>
                        </li>
                        <?php } ?>
                        
                    </ul>
                </div>
                <nav>

                    <div class="menu-toggle"  >
                        <button type="button" class="menu-btn" id="menu-btn">
                            <div class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-text-align-justify w-5 h-5 text-gray-500 group-hover:text-gray-700" aria-hidden="true">
                                    <path d="M3 5h18"></path>
                                    <path d="M3 12h18"></path>
                                    <path d="M3 19h18"></path>
                                </svg> 
                            </div>
                            <span class="icon-text">Menu</span>
                        </button>
                    </div>
                    <div class="sider main  top-store-menu-hide overcenter">
                        <div class="sider-inner">
                            <ul id="top-store-menu" class="top-store-menu" data-menu-style="horizontal">
                                <li id="menu-item-41" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-41"><a href="/" aria-current="page"><span class="top-store-menu-link">Home</span></a></li>
                                <li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-42"><a href="/shop/"><span class="top-store-menu-link">Shop</span></a>
                                    <ul class="sub-menu">
                                         
                                    <?php foreach($this->_categories as $category) {
                                            if ($category['category_type'] != 'products') continue;
                                        ?>
                                        <li id="menu-item-?= $category['id'] ?>" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-?= $category['id'] ?>"><a href="/product-category/<?= $category['slug'] ?>"><span class="top-store-menu-link"><?= $category['title'] ?></span></a></li>
                                         <?php } ?>
                                         
                                    </ul>
                                </li>
                                <li id="menu-item-1219" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1219"><a href="/about-us/"><span class="top-store-menu-link">About Us</span></a></li>
                                <li id="menu-item-789" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-789"><a href="/pay-with-bitcoin/"><span class="top-store-menu-link">Pay With Bitcoin</span></a></li>
                                <li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791"><a href="/refund_returns/"><span class="top-store-menu-link">Refund Policy</span></a></li>
                                <li id="menu-item-1216" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1216"><a href="/contact-us/"><span class="top-store-menu-link">Contact Us</span></a></li>
                                <li id="menu-item-796" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-796">
                                    <a href="/faq/"><span class="top-store-menu-link">FAQ</span></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                
            </div>
            <div class="below-header-col2">
                <div class="header-support-wrap">
                    <div class="header-support-icon">
                        <a class="callto-icon" href="tel:<?= $this->_company['c_tel'] ?>">
                            <svg width="0.833em" height="1em" viewBox="0 0 12.5 15" fill="currentColor" stroke="currentColor" stroke-width="0" xmlns="http://www.w3.org/2000/svg" style="display: inline-block; vertical-align: middle;">
                                <path
                                    d="M10.5 13.5c-0.8 0.8 -2.1 1.1 -3.2 0.7 -1.8 -0.7 -3.5 -1.8 -4.8 -3.1 -1.3 -1.3 -2.4 -3 -3.1 -4.8 -0.4 -1.1 -0.1 -2.4 0.7 -3.2L1.5 1.7c0.4 -0.4 1 -0.4 1.4 0L4.5 3.3c0.4 0.4 0.4 1 0 1.4L3.8 5.4c-0.2 0.2 -0.2 0.5 -0.1 0.7 0.5 1.1 1.2 2.1 2.1 3 0.9 0.9 1.9 1.6 3 2.1 0.2 0.1 0.5 0.1 0.7 -0.1l0.7 -0.7c0.4 -0.4 1 -0.4 1.4 0l1.6 1.6c0.4 0.4 0.4 1 0 1.4L10.5 13.5z" />
                            </svg>
                        </a>
                    </div>
                    <div class="header-support-content">
                        <span class="sprt-tel"><span>Phone</span> <a href="tel:<?= $this->_company['c_tel'] ?>"><?= $this->_company['c_tel'] ?></a></span>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .hide {
                display: none;
            }
            .show {
                display:flex;
                justify-content: end;
                padding:6px;
                margin:4px;
            }
            .sublist li {
                /* display: inline-block; */
                list-style-type: none;
                margin-right:4px; 
            }
        </style>
        <div class="hide" id="list-container" >
            <ul class="sublist">
                <li><a href="/">Home</a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a href="/about-us">About</a></li>
                <li><a href="/pay-with-bitcoin">Pay with Bitcoin</a></li>
                <li><a href="/refund_returns">Refund Policy</a></li>
                <li><a href="/contact-us">Contact</a></li> 
                <li><a href="/faq">FAQ</a></li>
            </ul>

        </div>
    </div>

    <script>
        const menu = document.querySelector('.menu-toggle');
        const list = document.querySelector('#list-container');

        menu.addEventListener('click', ()=> {
            if (list.classList.contains('hide')) {
                toggle('show', 'hide');
            } else toggle('hide', 'show');
        });

        function toggle(add, remove) {
            list.classList.remove(remove);
            list.classList.add(add);
        }
    </script>