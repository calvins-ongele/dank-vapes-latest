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
                "item": "https://www.<?= $_SERVER['SERVER_NAME'] ?>/contact-us"
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
                                    <h1 class="thunk-page-top-title entry-title">Contact Us</h1>
                                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                        <h2 class="trail-browse"></h2>
                                        <ul class="thunk-breadcrumb trail-items">
                                            <li class="trail-item trail-end"><span>Home</span></li>
                                            <li class="trail-item trail-end"><span>Contact Us</span></li>
                                        </ul>
                                    </nav>
                                </div>

                                <div class="thunk-content-wrap">
                                    <article id="post-1215">

                                        <div class="entry-content">

                                            <p class="has-text-align-center wp-block-paragraph">Contact Us</p>



                                            <p class="wp-block-paragraph">In case you need any help, feel free to contact us. Below you can choose from many options to get in touch with us.</p>



                                            <p class="wp-block-paragraph">Phone: <?= $this->_company['c_tel'] ?></p>



                                            <p class="wp-block-paragraph"><strong>Email:</strong> <?= $this->_company['c_email'] ?></p>


 

                                            <p class="wp-block-paragraph"><strong>Address</strong>: <?= $this->_company['c_address'] ?></p>



                                            <figure class="wp-block-table">
                                                <table>
                                                    <tbody>
                                                        <tr> 
                                                            <td> 
                                                                <div class="wpforms-container wpforms-container-full wpforms-render-modern" id="wpforms-1224">
                                                                    <form id="contact-form" idx="contactus" action="/myapp/contactus"  method="post" class="wpforms-validate wpforms-form wpforms-ajax-form" data-formid="1224" method="post" enctype="multipart/form-data" action="/contact-us/" data-token="edb3220c104983b969445ac65b9e5180" data-token-time="1789304392" novalidate="novalidate"> 

                                                                    
                                <input name="csrf_token" value="<?= CSRF::get() ?>" type="hidden" />
                                <input name='action' class="   form-control" value='<?= $_GET['del'] ?? '' ?>'
                                <?= ($_GET['del']??"") ? 'readonly' : 'type="hidden"' ?> >
                                <input type='hidden' name='ref' value='<?php echo $_SERVER['HTTP_REFERER'] ?? 'null'; ?>'>

                    <div id="wpforms-error-noscript" style="display: none;">Please enable JavaScript in your browser to complete this form.</div>
                    <div class="wpforms-field-container">
                        <div id="wpforms-1224-field_0-container" class="wpforms-field wpforms-field-name" data-field-id="0">
                             
                                <label class="wpforms-field-label"  >Name <span class="wpforms-required-label" aria-hidden="true">*</span></label>
                                <div class="wpforms-field-row wpforms-field-medium">
                                    <div class="wpforms-field-row-block wpforms-first wpforms-one-half"><input type="text" id="wpforms-1224-field_0" class="wpforms-field-name-first wpforms-field-required" name="name" aria-errormessage="wpforms-1224-field_0-error" required=""> </div>
                                    
                                </div>
                             
                        </div>
                        <div id="wpforms-1224-field_1-container" class="wpforms-field wpforms-field-email" data-field-id="1"><label class="wpforms-field-label" for="wpforms-1224-field_1">Email <span class="wpforms-required-label" aria-hidden="true">*</span></label><input type="email" id="wpforms-1224-field_1" class="wpforms-field-medium wpforms-field-required" name="email" spellcheck="false" aria-errormessage="wpforms-1224-field_1-error" required=""></div>

                        <div id="wpforms-1224-field_3-container" class="wpforms-field wpforms-field-text" data-field-id="3"><label class="wpforms-field-label" for="wpforms-1224-field_3">Subject <span class="wpforms-required-label" aria-hidden="true">*</span></label>
                        <input type="text" id="wpforms-1224-field_3" class="wpforms-field-medium wpforms-field-required" name="subject" aria-errormessage="wpforms-1224-field_3-error" required=""></div>

                         
                        <div id="wpforms-1224-field_2-container" class="wpforms-field wpforms-field-textarea" data-field-id="2"><label class="wpforms-field-label" for="wpforms-1224-field_2">Comment or Message <span class="wpforms-required-label" aria-hidden="true">*</span></label><textarea id="wpforms-1224-field_2" class="wpforms-field-medium wpforms-field-required" name="message" aria-errormessage="wpforms-1224-field_2-error" required=""></textarea></div>
                    </div>
                    <div class="wpforms-submit-container"> 
                        
                        <button type="submit" style="background:rgb(39, 60, 135);color:white;padding:8px 20px;outline:none; border:none; border-radius:20px" id="wpforms-submit-1224" class="wpforms-submit" data-alt-text="Sending..." data-submit-text="Submit" aria-live="assertive" value="wpforms-submit">Submit</button>
                       
                    </div>
                </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </figure>
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