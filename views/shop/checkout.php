<!DOCTYPE html>
<html lang="en-GB">

<head>
    <?php require 'public/includes/header.inc.php'; ?> 
    <link rel='stylesheet' href='/public/css/packages-style.css' media='all' />
    <link rel='stylesheet' href='/public/css/checkout.css' media='all' /> 
    <style>
        .alert{position:relative;padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem}.alert-heading{color:inherit}.alert-link{font-weight:700}.alert-dismissible{padding-right:4rem}.alert-dismissible .close{position:absolute;top:0;right:0;padding:.75rem 1.25rem;color:inherit}.alert-primary{color:#004085;background-color:#cce5ff;border-color:#b8daff}.alert-primary hr{border-top-color:#9fcdff}.alert-primary .alert-link{color:#002752}.alert-secondary{color:#383d41;background-color:#e2e3e5;border-color:#d6d8db}.alert-secondary hr{border-top-color:#c8cbcf}.alert-secondary .alert-link{color:#202326}.alert-success{color:#155724;background-color:#d4edda;border-color:#c3e6cb}.alert-success hr{border-top-color:#b1dfbb}.alert-success .alert-link{color:#0b2e13}.alert-info{color:#0c5460;background-color:#d1ecf1;border-color:#bee5eb}.alert-info hr{border-top-color:#abdde5}.alert-info .alert-link{color:#062c33}.alert-warning{color:#856404;background-color:#fff3cd;border-color:#ffeeba}.alert-warning hr{border-top-color:#ffe8a1}.alert-warning .alert-link{color:#533f03}.alert-danger{color:#721c24;background-color:#f8d7da;border-color:#f5c6cb}.alert-danger hr{border-top-color:#f1b0b7}.alert-danger .alert-link{color:#491217}.alert-light{color:#818182;background-color:#fefefe;border-color:#fdfdfe}.alert-light hr{border-top-color:#ececf6}.alert-light .alert-link{color:#686868}.alert-dark{color:#1b1e21;background-color:#d6d8d9;border-color:#c6c8ca}.alert-dark hr{border-top-color:#b9bbbe}.alert-dark .alert-link{color:#040505}@-webkit-keyframes progress-bar-stripes{from{background-position:1rem 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:1rem 0}to{background-position:0 0}}
    </style>
    <?php $totalPrice = array_sum(array_column($this->cart, 'price')); ?>
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
                                    <h1 class="thunk-page-top-title entry-title">Checkout</h1>
                                    <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                                        <h2 class="trail-browse"></h2>
                                        <ul class="thunk-breadcrumb trail-items">
                                            <li class="trail-item trail-begin"><a href="/" rel="home"><span>Home</span></a></li>
                                            <li class="trail-item trail-end"><span>Checkout</span></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="thunk-content-wrap">
                                    <article id="post-8">

                                        <div class="entry-content">

                                            <div data-block-name="woocommerce/checkout" class="wp-block-woocommerce-checkout alignwide wc-block-checkout">
                                                <div class="with-scroll-to-top__scroll-point" aria-hidden="true"></div>
                                                <div class="wc-block-components-notices"></div>
                                                <div class="wc-block-components-notices__snackbar wc-block-components-notice-snackbar-list" tabindex="-1">
                                                    <div></div>
                                                </div>
                                                <div class="wc-block-components-sidebar-layout wc-block-checkout is-mobile">
                                                    <div aria-hidden="true" style="position: absolute; inset: 0px; pointer-events: none; opacity: 0; overflow: hidden; z-index: -1;"></div>
                                                    <div class="wc-block-components-main wc-block-checkout__main wp-block-woocommerce-checkout-fields-block">
                                                        <form aria-label="Checkout" id="checkOutForm" class="wc-block-components-form wc-block-checkout__form">

                                                        <input type="hidden" name="method" value="submitCheckout" />
                                                        <input type="hidden" name="csrf_token" value="<?= CSRF::get() ?>" />


                                                            <div></div>



                                                            <fieldset class="wc-block-checkout__contact-fields wp-block-woocommerce-checkout-contact-information-block wc-block-components-checkout-step" id="contact-fields">
                                                                <legend class="screen-reader-text">Contact information</legend>
                                                                <div class="wc-block-components-checkout-step__heading-container">
                                                                    <div class="wc-block-components-checkout-step__heading">
                                                                        <h2 class="wc-block-components-title wc-block-components-checkout-step__title">Contact information</h2><span class="wc-block-components-checkout-step__heading-content"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="wc-block-components-checkout-step__content">
                                                                    <div class="wc-block-components-notices"></div>
                                                                    <div class="wc-block-components-notices__snackbar wc-block-components-notice-snackbar-list" tabindex="-1">
                                                                        <div></div>
                                                                    </div>


                                                                    <div id="contact" class="wc-block-components-address-form">
                                                                        <div class="wc-block-components-text-input wc-block-components-address-form__email">
                                                                            <input type="email" id="email" autocapitalize="none" autocomplete="section-contact contact email" aria-label="Email address" aria-describedby="wc-guest-checkout-notice" required="" aria-invalid="false" title="" name="email" value=""><label for="email">Email address</label>
                                                                        </div>
                                                                        <p id="wc-guest-checkout-notice" class="wc-block-checkout__guest-checkout-notice">You are currently checking out as a guest.</p>
                                                                    </div>
                                                                </div>
                                                            </fieldset> 
 
                                                            <fieldset class="wc-block-checkout__shipping-fields wp-block-woocommerce-checkout-shipping-address-block wc-block-components-checkout-step" id="shipping-fields">
                                                                <legend class="screen-reader-text">Shipping address</legend>
                                                                <div class="wc-block-components-checkout-step__heading-container">
                                                                    <div class="wc-block-components-checkout-step__heading">
                                                                        <h2 class="wc-block-components-title wc-block-components-checkout-step__title">Shipping address</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="wc-block-components-checkout-step__content">
                                                                    <div class="wc-block-components-notices"></div>
                                                                    <div class="wc-block-components-notices__snackbar wc-block-components-notice-snackbar-list" tabindex="-1">
                                                                        <div></div>
                                                                    </div>
                                                                    <div class="wc-block-components-address-address-wrapper is-editing">
                                                                        <div class="wc-block-components-address-card-wrapper">
                                                                            <div class="wc-block-components-address-card">
                                                                                <address><span class="wc-block-components-address-card__address-section wc-block-components-address-card__address-section--primary"></span><span class="wc-block-components-address-card__address-section wc-block-components-address-card__address-section--secondary">United Kingdom (UK)</span></address><span type="button" class="wc-block-components-address-card__edit" aria-controls="shipping" aria-expanded="true" aria-label="Edit shipping address" tabindex="0" role="button">Edit</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="wc-block-components-address-form-wrapper">
                                                                            <div id="shipping" class="wc-block-components-address-form">
                                                                                <div class="wc-block-components-address-form__country wc-block-components-country-input">
                                                                                    <div class="wc-blocks-components-select">
                                                                                        <div class="wc-blocks-components-select__container"><label for="shipping-country" class="wc-blocks-components-select__label">Country/Region</label>
                                                                                        <select size="1" 
                                                                                        name="country"
                                                                                        class="wc-blocks-components-select__select" id="shipping-country" aria-invalid="false" autocomplete="section-shipping shipping country">
                                                                                                
                                                                                        <option value="" data-alternate-values="[Select a country/region]" disabled="">Select a country/region</option>
                                                                                                <option value="AF" data-alternate-values="[Afghanistan]">Afghanistan</option>
                                                                                                <option value="AX" data-alternate-values="[Åland Islands]">Åland Islands</option>
                                                                                                <option value="AL" data-alternate-values="[Albania]">Albania</option>
                                                                                                <option value="DZ" data-alternate-values="[Algeria]">Algeria</option>
                                                                                                <option value="AS" data-alternate-values="[American Samoa]">American Samoa</option>
                                                                                                <option value="AD" data-alternate-values="[Andorra]">Andorra</option>
                                                                                                <option value="AO" data-alternate-values="[Angola]">Angola</option>
                                                                                                <option value="AI" data-alternate-values="[Anguilla]">Anguilla</option>
                                                                                                <option value="AQ" data-alternate-values="[Antarctica]">Antarctica</option>
                                                                                                <option value="AG" data-alternate-values="[Antigua and Barbuda]">Antigua and Barbuda</option>
                                                                                                <option value="AR" data-alternate-values="[Argentina]">Argentina</option>
                                                                                                <option value="AM" data-alternate-values="[Armenia]">Armenia</option>
                                                                                                <option value="AW" data-alternate-values="[Aruba]">Aruba</option>
                                                                                                <option value="AU" data-alternate-values="[Australia]">Australia</option>
                                                                                                <option value="AT" data-alternate-values="[Austria]">Austria</option>
                                                                                                <option value="AZ" data-alternate-values="[Azerbaijan]">Azerbaijan</option>
                                                                                                <option value="BS" data-alternate-values="[Bahamas]">Bahamas</option>
                                                                                                <option value="BH" data-alternate-values="[Bahrain]">Bahrain</option>
                                                                                                <option value="BD" data-alternate-values="[Bangladesh]">Bangladesh</option>
                                                                                                <option value="BB" data-alternate-values="[Barbados]">Barbados</option>
                                                                                                <option value="BY" data-alternate-values="[Belarus]">Belarus</option>
                                                                                                <option value="PW" data-alternate-values="[Belau]">Belau</option>
                                                                                                <option value="BE" data-alternate-values="[Belgium]">Belgium</option>
                                                                                                <option value="BZ" data-alternate-values="[Belize]">Belize</option>
                                                                                                <option value="BJ" data-alternate-values="[Benin]">Benin</option>
                                                                                                <option value="BM" data-alternate-values="[Bermuda]">Bermuda</option>
                                                                                                <option value="BT" data-alternate-values="[Bhutan]">Bhutan</option>
                                                                                                <option value="BO" data-alternate-values="[Bolivia]">Bolivia</option>
                                                                                                <option value="BQ" data-alternate-values="[Bonaire, Saint Eustatius and Saba]">Bonaire, Saint Eustatius and Saba</option>
                                                                                                <option value="BA" data-alternate-values="[Bosnia and Herzegovina]">Bosnia and Herzegovina</option>
                                                                                                <option value="BW" data-alternate-values="[Botswana]">Botswana</option>
                                                                                                <option value="BV" data-alternate-values="[Bouvet Island]">Bouvet Island</option>
                                                                                                <option value="BR" data-alternate-values="[Brazil]">Brazil</option>
                                                                                                <option value="IO" data-alternate-values="[British Indian Ocean Territory]">British Indian Ocean Territory</option>
                                                                                                <option value="BN" data-alternate-values="[Brunei]">Brunei</option>
                                                                                                <option value="BG" data-alternate-values="[Bulgaria]">Bulgaria</option>
                                                                                                <option value="BF" data-alternate-values="[Burkina Faso]">Burkina Faso</option>
                                                                                                <option value="BI" data-alternate-values="[Burundi]">Burundi</option>
                                                                                                <option value="KH" data-alternate-values="[Cambodia]">Cambodia</option>
                                                                                                <option value="CM" data-alternate-values="[Cameroon]">Cameroon</option>
                                                                                                <option value="CA" data-alternate-values="[Canada]">Canada</option>
                                                                                                <option value="CV" data-alternate-values="[Cape Verde]">Cape Verde</option>
                                                                                                <option value="KY" data-alternate-values="[Cayman Islands]">Cayman Islands</option>
                                                                                                <option value="CF" data-alternate-values="[Central African Republic]">Central African Republic</option>
                                                                                                <option value="TD" data-alternate-values="[Chad]">Chad</option>
                                                                                                <option value="CL" data-alternate-values="[Chile]">Chile</option>
                                                                                                <option value="CN" data-alternate-values="[China]">China</option>
                                                                                                <option value="CX" data-alternate-values="[Christmas Island]">Christmas Island</option>
                                                                                                <option value="CC" data-alternate-values="[Cocos (Keeling) Islands]">Cocos (Keeling) Islands</option>
                                                                                                <option value="CO" data-alternate-values="[Colombia]">Colombia</option>
                                                                                                <option value="KM" data-alternate-values="[Comoros]">Comoros</option>
                                                                                                <option value="CG" data-alternate-values="[Congo (Brazzaville)]">Congo (Brazzaville)</option>
                                                                                                <option value="CD" data-alternate-values="[Congo (Kinshasa)]">Congo (Kinshasa)</option>
                                                                                                <option value="CK" data-alternate-values="[Cook Islands]">Cook Islands</option>
                                                                                                <option value="CR" data-alternate-values="[Costa Rica]">Costa Rica</option>
                                                                                                <option value="HR" data-alternate-values="[Croatia]">Croatia</option>
                                                                                                <option value="CU" data-alternate-values="[Cuba]">Cuba</option>
                                                                                                <option value="CW" data-alternate-values="[Curaçao]">Curaçao</option>
                                                                                                <option value="CY" data-alternate-values="[Cyprus]">Cyprus</option>
                                                                                                <option value="CZ" data-alternate-values="[Czech Republic]">Czech Republic</option>
                                                                                                <option value="DK" data-alternate-values="[Denmark]">Denmark</option>
                                                                                                <option value="DJ" data-alternate-values="[Djibouti]">Djibouti</option>
                                                                                                <option value="DM" data-alternate-values="[Dominica]">Dominica</option>
                                                                                                <option value="DO" data-alternate-values="[Dominican Republic]">Dominican Republic</option>
                                                                                                <option value="EC" data-alternate-values="[Ecuador]">Ecuador</option>
                                                                                                <option value="EG" data-alternate-values="[Egypt]">Egypt</option>
                                                                                                <option value="SV" data-alternate-values="[El Salvador]">El Salvador</option>
                                                                                                <option value="GQ" data-alternate-values="[Equatorial Guinea]">Equatorial Guinea</option>
                                                                                                <option value="ER" data-alternate-values="[Eritrea]">Eritrea</option>
                                                                                                <option value="EE" data-alternate-values="[Estonia]">Estonia</option>
                                                                                                <option value="SZ" data-alternate-values="[Eswatini]">Eswatini</option>
                                                                                                <option value="ET" data-alternate-values="[Ethiopia]">Ethiopia</option>
                                                                                                <option value="FK" data-alternate-values="[Falkland Islands]">Falkland Islands</option>
                                                                                                <option value="FO" data-alternate-values="[Faroe Islands]">Faroe Islands</option>
                                                                                                <option value="FJ" data-alternate-values="[Fiji]">Fiji</option>
                                                                                                <option value="FI" data-alternate-values="[Finland]">Finland</option>
                                                                                                <option value="FR" data-alternate-values="[France]">France</option>
                                                                                                <option value="GF" data-alternate-values="[French Guiana]">French Guiana</option>
                                                                                                <option value="PF" data-alternate-values="[French Polynesia]">French Polynesia</option>
                                                                                                <option value="TF" data-alternate-values="[French Southern Territories]">French Southern Territories</option>
                                                                                                <option value="GA" data-alternate-values="[Gabon]">Gabon</option>
                                                                                                <option value="GM" data-alternate-values="[Gambia]">Gambia</option>
                                                                                                <option value="GE" data-alternate-values="[Georgia]">Georgia</option>
                                                                                                <option value="DE" data-alternate-values="[Germany]">Germany</option>
                                                                                                <option value="GH" data-alternate-values="[Ghana]">Ghana</option>
                                                                                                <option value="GI" data-alternate-values="[Gibraltar]">Gibraltar</option>
                                                                                                <option value="GR" data-alternate-values="[Greece]">Greece</option>
                                                                                                <option value="GL" data-alternate-values="[Greenland]">Greenland</option>
                                                                                                <option value="GD" data-alternate-values="[Grenada]">Grenada</option>
                                                                                                <option value="GP" data-alternate-values="[Guadeloupe]">Guadeloupe</option>
                                                                                                <option value="GU" data-alternate-values="[Guam]">Guam</option>
                                                                                                <option value="GT" data-alternate-values="[Guatemala]">Guatemala</option>
                                                                                                <option value="GG" data-alternate-values="[Guernsey]">Guernsey</option>
                                                                                                <option value="GN" data-alternate-values="[Guinea]">Guinea</option>
                                                                                                <option value="GW" data-alternate-values="[Guinea-Bissau]">Guinea-Bissau</option>
                                                                                                <option value="GY" data-alternate-values="[Guyana]">Guyana</option>
                                                                                                <option value="HT" data-alternate-values="[Haiti]">Haiti</option>
                                                                                                <option value="HM" data-alternate-values="[Heard Island and McDonald Islands]">Heard Island and McDonald Islands</option>
                                                                                                <option value="HN" data-alternate-values="[Honduras]">Honduras</option>
                                                                                                <option value="HK" data-alternate-values="[Hong Kong]">Hong Kong</option>
                                                                                                <option value="HU" data-alternate-values="[Hungary]">Hungary</option>
                                                                                                <option value="IS" data-alternate-values="[Iceland]">Iceland</option>
                                                                                                <option value="IN" data-alternate-values="[India]">India</option>
                                                                                                <option value="ID" data-alternate-values="[Indonesia]">Indonesia</option>
                                                                                                <option value="IR" data-alternate-values="[Iran]">Iran</option>
                                                                                                <option value="IQ" data-alternate-values="[Iraq]">Iraq</option>
                                                                                                <option value="IE" data-alternate-values="[Ireland]">Ireland</option>
                                                                                                <option value="IM" data-alternate-values="[Isle of Man]">Isle of Man</option>
                                                                                                <option value="IL" data-alternate-values="[Israel]">Israel</option>
                                                                                                <option value="IT" data-alternate-values="[Italy]">Italy</option>
                                                                                                <option value="CI" data-alternate-values="[Ivory Coast]">Ivory Coast</option>
                                                                                                <option value="JM" data-alternate-values="[Jamaica]">Jamaica</option>
                                                                                                <option value="JP" data-alternate-values="[Japan]">Japan</option>
                                                                                                <option value="JE" data-alternate-values="[Jersey]">Jersey</option>
                                                                                                <option value="JO" data-alternate-values="[Jordan]">Jordan</option>
                                                                                                <option value="KZ" data-alternate-values="[Kazakhstan]">Kazakhstan</option>
                                                                                                <option value="KE" data-alternate-values="[Kenya]">Kenya</option>
                                                                                                <option value="KI" data-alternate-values="[Kiribati]">Kiribati</option>
                                                                                                <option value="XK" data-alternate-values="[Kosovo]">Kosovo</option>
                                                                                                <option value="KW" data-alternate-values="[Kuwait]">Kuwait</option>
                                                                                                <option value="KG" data-alternate-values="[Kyrgyzstan]">Kyrgyzstan</option>
                                                                                                <option value="LA" data-alternate-values="[Laos]">Laos</option>
                                                                                                <option value="LV" data-alternate-values="[Latvia]">Latvia</option>
                                                                                                <option value="LB" data-alternate-values="[Lebanon]">Lebanon</option>
                                                                                                <option value="LS" data-alternate-values="[Lesotho]">Lesotho</option>
                                                                                                <option value="LR" data-alternate-values="[Liberia]">Liberia</option>
                                                                                                <option value="LY" data-alternate-values="[Libya]">Libya</option>
                                                                                                <option value="LI" data-alternate-values="[Liechtenstein]">Liechtenstein</option>
                                                                                                <option value="LT" data-alternate-values="[Lithuania]">Lithuania</option>
                                                                                                <option value="LU" data-alternate-values="[Luxembourg]">Luxembourg</option>
                                                                                                <option value="MO" data-alternate-values="[Macao]">Macao</option>
                                                                                                <option value="MG" data-alternate-values="[Madagascar]">Madagascar</option>
                                                                                                <option value="MW" data-alternate-values="[Malawi]">Malawi</option>
                                                                                                <option value="MY" data-alternate-values="[Malaysia]">Malaysia</option>
                                                                                                <option value="MV" data-alternate-values="[Maldives]">Maldives</option>
                                                                                                <option value="ML" data-alternate-values="[Mali]">Mali</option>
                                                                                                <option value="MT" data-alternate-values="[Malta]">Malta</option>
                                                                                                <option value="MH" data-alternate-values="[Marshall Islands]">Marshall Islands</option>
                                                                                                <option value="MQ" data-alternate-values="[Martinique]">Martinique</option>
                                                                                                <option value="MR" data-alternate-values="[Mauritania]">Mauritania</option>
                                                                                                <option value="MU" data-alternate-values="[Mauritius]">Mauritius</option>
                                                                                                <option value="YT" data-alternate-values="[Mayotte]">Mayotte</option>
                                                                                                <option value="MX" data-alternate-values="[Mexico]">Mexico</option>
                                                                                                <option value="FM" data-alternate-values="[Micronesia]">Micronesia</option>
                                                                                                <option value="MD" data-alternate-values="[Moldova]">Moldova</option>
                                                                                                <option value="MC" data-alternate-values="[Monaco]">Monaco</option>
                                                                                                <option value="MN" data-alternate-values="[Mongolia]">Mongolia</option>
                                                                                                <option value="ME" data-alternate-values="[Montenegro]">Montenegro</option>
                                                                                                <option value="MS" data-alternate-values="[Montserrat]">Montserrat</option>
                                                                                                <option value="MA" data-alternate-values="[Morocco]">Morocco</option>
                                                                                                <option value="MZ" data-alternate-values="[Mozambique]">Mozambique</option>
                                                                                                <option value="MM" data-alternate-values="[Myanmar]">Myanmar</option>
                                                                                                <option value="NA" data-alternate-values="[Namibia]">Namibia</option>
                                                                                                <option value="NR" data-alternate-values="[Nauru]">Nauru</option>
                                                                                                <option value="NP" data-alternate-values="[Nepal]">Nepal</option>
                                                                                                <option value="NL" data-alternate-values="[Netherlands]">Netherlands</option>
                                                                                                <option value="NC" data-alternate-values="[New Caledonia]">New Caledonia</option>
                                                                                                <option value="NZ" data-alternate-values="[New Zealand]">New Zealand</option>
                                                                                                <option value="NI" data-alternate-values="[Nicaragua]">Nicaragua</option>
                                                                                                <option value="NE" data-alternate-values="[Niger]">Niger</option>
                                                                                                <option value="NG" data-alternate-values="[Nigeria]">Nigeria</option>
                                                                                                <option value="NU" data-alternate-values="[Niue]">Niue</option>
                                                                                                <option value="NF" data-alternate-values="[Norfolk Island]">Norfolk Island</option>
                                                                                                <option value="KP" data-alternate-values="[North Korea]">North Korea</option>
                                                                                                <option value="MK" data-alternate-values="[North Macedonia]">North Macedonia</option>
                                                                                                <option value="MP" data-alternate-values="[Northern Mariana Islands]">Northern Mariana Islands</option>
                                                                                                <option value="NO" data-alternate-values="[Norway]">Norway</option>
                                                                                                <option value="OM" data-alternate-values="[Oman]">Oman</option>
                                                                                                <option value="PK" data-alternate-values="[Pakistan]">Pakistan</option>
                                                                                                <option value="PS" data-alternate-values="[Palestinian Territory]">Palestinian Territory</option>
                                                                                                <option value="PA" data-alternate-values="[Panama]">Panama</option>
                                                                                                <option value="PG" data-alternate-values="[Papua New Guinea]">Papua New Guinea</option>
                                                                                                <option value="PY" data-alternate-values="[Paraguay]">Paraguay</option>
                                                                                                <option value="PE" data-alternate-values="[Peru]">Peru</option>
                                                                                                <option value="PH" data-alternate-values="[Philippines]">Philippines</option>
                                                                                                <option value="PN" data-alternate-values="[Pitcairn]">Pitcairn</option>
                                                                                                <option value="PL" data-alternate-values="[Poland]">Poland</option>
                                                                                                <option value="PT" data-alternate-values="[Portugal]">Portugal</option>
                                                                                                <option value="PR" data-alternate-values="[Puerto Rico]">Puerto Rico</option>
                                                                                                <option value="QA" data-alternate-values="[Qatar]">Qatar</option>
                                                                                                <option value="RE" data-alternate-values="[Reunion]">Reunion</option>
                                                                                                <option value="RO" data-alternate-values="[Romania]">Romania</option>
                                                                                                <option value="RU" data-alternate-values="[Russia]">Russia</option>
                                                                                                <option value="RW" data-alternate-values="[Rwanda]">Rwanda</option>
                                                                                                <option value="BL" data-alternate-values="[Saint Barthélemy]">Saint Barthélemy</option>
                                                                                                <option value="SH" data-alternate-values="[Saint Helena]">Saint Helena</option>
                                                                                                <option value="KN" data-alternate-values="[Saint Kitts and Nevis]">Saint Kitts and Nevis</option>
                                                                                                <option value="LC" data-alternate-values="[Saint Lucia]">Saint Lucia</option>
                                                                                                <option value="SX" data-alternate-values="[Saint Martin (Dutch part)]">Saint Martin (Dutch part)</option>
                                                                                                <option value="MF" data-alternate-values="[Saint Martin (French part)]">Saint Martin (French part)</option>
                                                                                                <option value="PM" data-alternate-values="[Saint Pierre and Miquelon]">Saint Pierre and Miquelon</option>
                                                                                                <option value="VC" data-alternate-values="[Saint Vincent and the Grenadines]">Saint Vincent and the Grenadines</option>
                                                                                                <option value="WS" data-alternate-values="[Samoa]">Samoa</option>
                                                                                                <option value="SM" data-alternate-values="[San Marino]">San Marino</option>
                                                                                                <option value="ST" data-alternate-values="[São Tomé and Príncipe]">São Tomé and Príncipe</option>
                                                                                                <option value="SA" data-alternate-values="[Saudi Arabia]">Saudi Arabia</option>
                                                                                                <option value="SN" data-alternate-values="[Senegal]">Senegal</option>
                                                                                                <option value="RS" data-alternate-values="[Serbia]">Serbia</option>
                                                                                                <option value="SC" data-alternate-values="[Seychelles]">Seychelles</option>
                                                                                                <option value="SL" data-alternate-values="[Sierra Leone]">Sierra Leone</option>
                                                                                                <option value="SG" data-alternate-values="[Singapore]">Singapore</option>
                                                                                                <option value="SK" data-alternate-values="[Slovakia]">Slovakia</option>
                                                                                                <option value="SI" data-alternate-values="[Slovenia]">Slovenia</option>
                                                                                                <option value="SB" data-alternate-values="[Solomon Islands]">Solomon Islands</option>
                                                                                                <option value="SO" data-alternate-values="[Somalia]">Somalia</option>
                                                                                                <option value="ZA" data-alternate-values="[South Africa]">South Africa</option>
                                                                                                <option value="GS" data-alternate-values="[South Georgia/Sandwich Islands]">South Georgia/Sandwich Islands</option>
                                                                                                <option value="KR" data-alternate-values="[South Korea]">South Korea</option>
                                                                                                <option value="SS" data-alternate-values="[South Sudan]">South Sudan</option>
                                                                                                <option value="ES" data-alternate-values="[Spain]">Spain</option>
                                                                                                <option value="LK" data-alternate-values="[Sri Lanka]">Sri Lanka</option>
                                                                                                <option value="SD" data-alternate-values="[Sudan]">Sudan</option>
                                                                                                <option value="SR" data-alternate-values="[Suriname]">Suriname</option>
                                                                                                <option value="SJ" data-alternate-values="[Svalbard and Jan Mayen]">Svalbard and Jan Mayen</option>
                                                                                                <option value="SE" data-alternate-values="[Sweden]">Sweden</option>
                                                                                                <option value="CH" data-alternate-values="[Switzerland]">Switzerland</option>
                                                                                                <option value="SY" data-alternate-values="[Syria]">Syria</option>
                                                                                                <option value="TW" data-alternate-values="[Taiwan]">Taiwan</option>
                                                                                                <option value="TJ" data-alternate-values="[Tajikistan]">Tajikistan</option>
                                                                                                <option value="TZ" data-alternate-values="[Tanzania]">Tanzania</option>
                                                                                                <option value="TH" data-alternate-values="[Thailand]">Thailand</option>
                                                                                                <option value="TL" data-alternate-values="[Timor-Leste]">Timor-Leste</option>
                                                                                                <option value="TG" data-alternate-values="[Togo]">Togo</option>
                                                                                                <option value="TK" data-alternate-values="[Tokelau]">Tokelau</option>
                                                                                                <option value="TO" data-alternate-values="[Tonga]">Tonga</option>
                                                                                                <option value="TT" data-alternate-values="[Trinidad and Tobago]">Trinidad and Tobago</option>
                                                                                                <option value="TN" data-alternate-values="[Tunisia]">Tunisia</option>
                                                                                                <option value="TR" data-alternate-values="[Türkiye]">Türkiye</option>
                                                                                                <option value="TM" data-alternate-values="[Turkmenistan]">Turkmenistan</option>
                                                                                                <option value="TC" data-alternate-values="[Turks and Caicos Islands]">Turks and Caicos Islands</option>
                                                                                                <option value="TV" data-alternate-values="[Tuvalu]">Tuvalu</option>
                                                                                                <option value="UG" data-alternate-values="[Uganda]">Uganda</option>
                                                                                                <option value="UA" data-alternate-values="[Ukraine]">Ukraine</option>
                                                                                                <option value="AE" data-alternate-values="[United Arab Emirates]">United Arab Emirates</option>
                                                                                                <option value="GB" data-alternate-values="[United Kingdom (UK)]">United Kingdom (UK)</option>
                                                                                                <option value="US" data-alternate-values="[United States (US)]">United States (US)</option>
                                                                                                <option value="UM" data-alternate-values="[United States (US) Minor Outlying Islands]">United States (US) Minor Outlying Islands</option>
                                                                                                <option value="UY" data-alternate-values="[Uruguay]">Uruguay</option>
                                                                                                <option value="UZ" data-alternate-values="[Uzbekistan]">Uzbekistan</option>
                                                                                                <option value="VU" data-alternate-values="[Vanuatu]">Vanuatu</option>
                                                                                                <option value="VA" data-alternate-values="[Vatican]">Vatican</option>
                                                                                                <option value="VE" data-alternate-values="[Venezuela]">Venezuela</option>
                                                                                                <option value="VN" data-alternate-values="[Vietnam]">Vietnam</option>
                                                                                                <option value="VG" data-alternate-values="[Virgin Islands (British)]">Virgin Islands (British)</option>
                                                                                                <option value="VI" data-alternate-values="[Virgin Islands (US)]">Virgin Islands (US)</option>
                                                                                                <option value="WF" data-alternate-values="[Wallis and Futuna]">Wallis and Futuna</option>
                                                                                                <option value="EH" data-alternate-values="[Western Sahara]">Western Sahara</option>
                                                                                                <option value="YE" data-alternate-values="[Yemen]">Yemen</option>
                                                                                                <option value="ZM" data-alternate-values="[Zambia]">Zambia</option>
                                                                                                <option value="ZW" data-alternate-values="[Zimbabwe]">Zimbabwe</option>
                                                                                            </select><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="wc-blocks-components-select__expand" aria-hidden="true" focusable="false">
                                                                                                <path d="M17.5 11.6L12 16l-5.5-4.4.9-1.2L12 14l4.5-3.6 1 1.2z"></path>
                                                                                            </svg></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wc-block-components-text-input wc-block-components-address-form__first_name"><input type="text" id="shipping-first_name" autocapitalize="sentences" autocomplete="section-shipping shipping given-name" aria-label="First name" aria-describedby="" required="" aria-invalid="false" title="" name="fname" value=""><label for="shipping-first_name">First name</label></div>
                                                                                <div class="wc-block-components-text-input wc-block-components-address-form__last_name"><input type="text" id="shipping-last_name" autocapitalize="sentences" autocomplete="section-shipping shipping family-name" aria-label="Last name" aria-describedby="" required="" aria-invalid="false" title="" name="lname" value=""><label for="shipping-last_name">Last name</label></div>

                                                                                <div class="wc-block-components-text-input wc-block-components-address-form__address_1">
                                                                                    <input type="text" id="shipping-address_1" autocapitalize="sentences" autocomplete="section-shipping shipping address-line1" aria-label="Address" aria-describedby="" required="" aria-invalid="false" title="" name="address" value=""><label for="shipping-address_1">Address</label>
                                                                                </div>
                                                                                <span class="wc-block-components-address-form__address_2-toggle" tabindex="0" role="button">+ Add flat, suite, etc.</span><input type="text" tabindex="-1" class="wc-block-components-address-form__address_2-hidden-input" aria-hidden="true" aria-label="Flat, suite, etc." autocomplete="address-line2" id="shipping-address_2" value="">

                                                                                <div class="wc-block-components-text-input wc-block-components-address-form__city"><input type="text" id="shipping-city" autocapitalize="sentences" autocomplete="section-shipping shipping address-level2" aria-label="City" aria-describedby="" required="" aria-invalid="false" title="" name="city" value=""><label for="shipping-city">City</label></div>

                                                                                <div class="wc-block-components-text-input wc-block-components-address-form__state">
                                                                                    <input name="county" type="text" id="shipping-state" autocapitalize="off" autocomplete="section-shipping shipping address-level1" aria-label="County (optional)" aria-describedby="" aria-invalid="false" title="" value=""><label for="shipping-state">County (optional)</label>
                                                                                </div>

                                                                                <div class="wc-block-components-text-input wc-block-components-address-form__postcode"><input type="text" id="shipping-postcode" autocapitalize="characters" autocomplete="section-shipping shipping postal-code" aria-label="Postcode" aria-describedby="" required="" aria-invalid="false" title="" name="postcode" value=""><label for="shipping-postcode">Postcode</label></div>

                                                                                <div class="wc-block-components-text-input wc-block-components-address-form__phone">
                                                                                    <input type="tel" id="shipping-phone" autocapitalize="characters" autocomplete="section-shipping shipping tel" aria-label="Phone (optional)" aria-describedby="" aria-invalid="false" title="" name="phone" value=""><label for="shipping-phone">Phone (optional)</label>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wc-block-components-checkbox wc-block-checkout__use-address-for-billing"><label for="checkbox-control-0"><input id="checkbox-control-0" class="wc-block-components-checkbox__input" type="checkbox" aria-invalid="false" value="" checked=""><svg class="wc-block-components-checkbox__mark" aria-hidden="true" viewBox="0 0 24 20">
                                                                                <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"></path>
                                                                            </svg><span class="wc-block-components-checkbox__label">Use same address for billing</span></label></div>
                                                                </div>
                                                            </fieldset>







                                                            <fieldset class="wc-block-checkout__shipping-option wp-block-woocommerce-checkout-shipping-methods-block wc-block-components-checkout-step" id="shipping-option">
                                                                <legend class="screen-reader-text">Shipping options</legend>
                                                                <div class="wc-block-components-checkout-step__heading-container">
                                                                    <div class="wc-block-components-checkout-step__heading">
                                                                        <h2 class="wc-block-components-title wc-block-components-checkout-step__title">Shipping options</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="wc-block-components-checkout-step__content">
                                                                    <div class="wc-block-components-notices"></div>
                                                                    <div class="wc-block-components-notices__snackbar wc-block-components-notice-snackbar-list" tabindex="-1">
                                                                        <div></div>
                                                                    </div>
                                                                    <div class="">
                                                                        <div class="" aria-hidden="false">
                                                                            <div class="wc-block-components-shipping-rates-control css-0 e19lxcc00">
                                                                                <div class="wc-block-components-shipping-rates-control__package">
                                                                                    <div class="wc-block-components-radio-control wc-block-components-radio-control--highlight-checked--first-selected wc-block-components-radio-control--highlight-checked">
                                                                                <!---------------------express--------------------->
                                                                                    <label class="wc-block-components-radio-control__option wc-block-components-radio-control__option-checked wc-block-components-radio-control__option--checked-option-highlighted" for="radio-control-0-flat_rate:5"><input id="radio-control-0-flat_rate:5" class="wc-block-components-radio-control__input" type="radio" name="radio-control-0" aria-describedby="radio-control-0-flat_rate:5__secondary-label" aria-disabled="false" value="Express" checked="">
                                                                                            <div class="wc-block-components-radio-control__option-layout">
                                                                                                <div class="wc-block-components-radio-control__label-group"><span id="radio-control-0-flat_rate:5__label" class="wc-block-components-radio-control__label">24hrs Express Delivery</span><span id="radio-control-0-flat_rate:5__secondary-label" class="wc-block-components-radio-control__secondary-label"><span class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount" translate="no">£5.99</span></span></div>
                                                                                            </div>
                                                                                        </label>
                                                                                        <!--------------------intl------------------>
                                                                                        <label class="wc-block-components-radio-control__option" for="radio-control-0-flat_rate:3">
                                                                                            <input id="radio-control-0-flat_rate:3" class="wc-block-components-radio-control__input" type="radio" name="radio-control-0" aria-describedby="radio-control-0-flat_rate:3__secondary-label" aria-disabled="false" value="Intl Delivery">
                                                                                            <div class="wc-block-components-radio-control__option-layout">
                                                                                                <div class="wc-block-components-radio-control__label-group"><span id="radio-control-0-flat_rate:3__label" class="wc-block-components-radio-control__label">Intl Delivery (Europe, USA, Asia)</span><span id="radio-control-0-flat_rate:3__secondary-label" class="wc-block-components-radio-control__secondary-label"><span class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount" translate="no">£18.99</span></span></div>
                                                                                            </div>
                                                                                        </label>
                                                                                        <!-------------------Standard delivery---------------------->
                                                                                        <label class="wc-block-components-radio-control__option" for="radio-control-0-flat_rate:6"><input id="radio-control-0-flat_rate:6" class="wc-block-components-radio-control__input" type="radio" name="radio-control-0" aria-describedby="radio-control-0-flat_rate:6__secondary-label" aria-disabled="false" value="flat_rate:6">
                                                                                            <div class="wc-block-components-radio-control__option-layout">
                                                                                                <div class="wc-block-components-radio-control__label-group"><span id="radio-control-0-flat_rate:6__label" class="wc-block-components-radio-control__label">2-3 Days Standard Delivery (Free)</span><span id="radio-control-0-flat_rate:6__secondary-label" class="wc-block-components-radio-control__secondary-label"><span class="wc-block-checkout__shipping-option--free">Free</span></span></div>
                                                                                            </div>
                                                                                        </label></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>



                                                            <fieldset class="wc-block-checkout__payment-method wp-block-woocommerce-checkout-payment-block wc-block-components-checkout-step" id="payment-method">
                                                                <legend class="screen-reader-text">Payment options</legend>
                                                                <div class="wc-block-components-checkout-step__heading-container">
                                                                    <div class="wc-block-components-checkout-step__heading">
                                                                        <h2 class="wc-block-components-title wc-block-components-checkout-step__title">Payment options</h2>
                                                                    </div>
                                                                </div>
                                                                <div class="wc-block-components-checkout-step__content">
                                                                    <div class="wc-block-components-notices"></div>
                                                                    <div class="wc-block-components-notices__snackbar wc-block-components-notice-snackbar-list" tabindex="-1">
                                                                        <div></div>
                                                                    </div>
                                                                    <div class="wc-block-components-radio-control wc-block-components-radio-control--highlight-checked wc-block-components-radio-control--highlight-checked--first-selected">
                                                                      <!--
                                                                        <div class="wc-block-components-radio-control-accordion-option wc-block-components-radio-control-accordion-option--checked-option-highlighted"><label class="wc-block-components-radio-control__option wc-block-components-radio-control__option-checked" for="radio-control-wc-payment-method-options-cod">

                                                                            <input id="radio-control-wc-payment-method-options-cod" class="wc-block-components-radio-control__input" type="radio" name="radio-control-wc-payment-method-options" aria-describedby="radio-control-wc-payment-method-options-cod__content" aria-disabled="false" value="cod" checked="">
                                                                                <div class="wc-block-components-radio-control__option-layout">
                                                                                    <div class="wc-block-components-radio-control__label-group"><span id="radio-control-wc-payment-method-options-cod__label" class="wc-block-components-radio-control__label"><span class="wc-block-components-payment-method-label">Amazon Gift Card</span></span></div>
                                                                                </div>
                                                                            </label>
                                                                            <div id="radio-control-wc-payment-method-options-cod__content" class="wc-block-components-radio-control-accordion-content">
                                                                                <div>Pay with Amazon Gift Card</div>
                                                                            </div>
                                                                        </div>-->
                                                                        <div class="wc-block-components-radio-control-accordion-option">
                                                                            <label class="wc-block-components-radio-control__option" for="radio-control-wc-payment-method-options-mycryptocheckout">
                                                                            <input  checked="true" 
                                                                            id="radio-control-wc-payment-method-options-mycryptocheckout" class="wc-block-components-radio-control__input" type="radio" name="radio-control-wc-payment-method-options" aria-describedby="radio-control-wc-payment-method-options-mycryptocheckout__content" aria-disabled="false" value="Cryptocurrency Checkout">
                                                                                <div class="wc-block-components-radio-control__option-layout">
                                                                                    <div class="wc-block-components-radio-control__label-group"><span id="radio-control-wc-payment-method-options-mycryptocheckout__label" class="wc-block-components-radio-control__label"><span class="wc-block-components-payment-method-label">Cryptocurrency</span></span></div>
                                                                                </div>
                                                                            </label></div>
                                                                    </div>
                                                                </div>
                                                            </fieldset>







                                                            <div class="wc-block-checkout__order-notes wp-block-woocommerce-checkout-order-note-block wc-block-components-checkout-step" id="order-notes">
                                                                <div class="wc-block-components-checkout-step__content">
                                                                    <!--
                                                                    <div class="wc-block-checkout__add-note">
                                                                        <div class="wc-block-components-checkbox"><label for="checkbox-control-1"><input id="checkbox-control-1" class="wc-block-components-checkbox__input" type="checkbox" aria-invalid="false" value=""><svg class="wc-block-components-checkbox__mark" aria-hidden="true" viewBox="0 0 24 20">
                                                                                    <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"></path>
                                                                                </svg><span class="wc-block-components-checkbox__label">Add a note to your order</span></label></div>
                                                                    </div>-->
                                                                </div>
                                                            </div>



                                                            <div class="wc-block-checkout__terms wc-block-checkout__terms--with-separator wp-block-woocommerce-checkout-terms-block"><span class="wc-block-components-checkbox__label">By proceeding with your purchase you agree to our Terms and Conditions and Privacy Policy</span></div>



                                                            <div class="wc-block-checkout__actions wp-block-woocommerce-checkout-actions-block">
                                                                <div class="css-0 e19lxcc00">
                                                                    <div class="wp-block-woocommerce-checkout-order-summary-block checkout-order-summary-block-fill-wrapper">
                                                                        <div class="wc-block-components-checkout-step__heading">
                                                                            <h2 class="wc-block-components-title wc-block-components-checkout-step__title">Order summary</h2>
                                                                        </div>
                                                                        <div class="checkout-order-summary-block-fill">
                                                                            <div class="wp-block-woocommerce-checkout-order-summary-cart-items-block wc-block-components-totals-wrapper">
                                                                                <div class="wc-block-components-order-summary">
                                                                                    <div class="wc-block-components-order-summary__content">
                                                                                        <div class="wc-block-components-order-summary-item">
                                                                                            <div class="wc-block-components-order-summary-item__image">
                                                                                                <div class="wc-block-components-order-summary-item__quantity"><span aria-hidden="true"><?= count($this->cart) ?></span><span class="screen-reader-text"><?= count($this->cart) ?> items</span></div><img src="/<?= $this->cart[0]['image'] ?> 1024w, /<?= $this->cart[0]['image'] ?>" alt="<?= $this->cart[0]['title'] ?>" srcset="/<?= $this->cart[0]['image'] ?> 1024w, /<?= $this->cart[0]['image'] ?> 320w, /<?= $this->cart[0]['image'] ?> 300w, /<?= $this->cart[0]['image'] ?> 1024w, /<?= $this->cart[0]['image'] ?> 150w, /<?= $this->cart[0]['image'] ?> 768w, /<?= $this->cart[0]['image'] ?> 600w, /<?= $this->cart[0]['image'] ?> 100w, /<?= $this->cart[0]['image'] ?> 48w, /<?= $this->cart[0]['image'] ?> 1200w" sizes="48px" width="48" height="48">
                                                                                            </div>
                                                                                            <div class="wc-block-components-order-summary-item__description">
                                                                                                <h3 class="wc-block-components-product-name"><?= $this->cart[0]['title'] ?></h3>
                                                                                                <div class="wc-block-cart-item__prices"><span class="wc-block-components-order-summary-item__individual-prices price wc-block-components-product-price"><span class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount wc-block-components-product-price__value wc-block-components-order-summary-item__individual-price" translate="no">£28.95</span></span></div>
                                                                                                <div class="wc-block-components-product-metadata">
                                                                                                    <!-- <div class="wc-block-components-product-metadata__description">
                                                                                                        <h2 class="es1uf865 css-xudrs9 e9o5c490">5-Pack – 4.20g</h2>
                                                                                                        <h2 class="css-1zmfmw e1r49ky70">THC: 30%</h2>
                                                                                                    </div> -->
                                                                                                </div>
                                                                                            </div><span class="screen-reader-text">Total price for <?= $this->cart[0]['title'] ?> items: £<?= $totalPrice ?></span>
                                                                                            <div class="wc-block-components-order-summary-item__total-price" aria-hidden="true">
                                                                                                <div class="wc-block-cart-item__total-price-and-sale-badge-wrapper"><span class="price wc-block-components-product-price"><span class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount wc-block-components-product-price__value" translate="no">£57.90</span></span></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="wp-block-woocommerce-checkout-order-summary-coupon-form-block wc-block-components-totals-wrapper">
                                                                                <div role="heading" aria-level="2" class="wc-block-components-totals-coupon wc-block-components-panel">
                                                                                    <div aria-expanded="false" class="wc-block-components-panel__button" tabindex="0" role="button"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true" class="wc-block-components-panel__button-icon" focusable="false">
                                                                                            <path d="M17.5 11.6L12 16l-5.5-4.4.9-1.2L12 14l4.5-3.6 1 1.2z"></path>
                                                                                        </svg>Add coupons</div>
                                                                                </div>
                                                                            </div>
                                                                            <div data-block-name="woocommerce/checkout-order-summary-totals-block" class="wp-block-woocommerce-checkout-order-summary-totals-block">
                                                                                <div class="wp-block-woocommerce-checkout-order-summary-subtotal-block wc-block-components-totals-wrapper">
                                                                                    <div class="wc-block-components-totals-item"><span class="wc-block-components-totals-item__label">Subtotal</span><span class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount wc-block-components-totals-item__value" translate="no">£57.90</span>
                                                                                        <div class="wc-block-components-totals-item__description"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="wp-block-woocommerce-checkout-order-summary-discount-block wc-block-components-totals-wrapper"></div>
                                                                                <div class="wp-block-woocommerce-checkout-order-summary-fee-block wc-block-components-totals-wrapper"></div>
                                                                                <div class="wp-block-woocommerce-checkout-order-summary-shipping-block wc-block-components-totals-wrapper">
                                                                                    <div class="wc-block-components-totals-shipping">
                                                                                        <div class="wc-block-components-totals-item"><span class="wc-block-components-totals-item__label">Delivery</span><span class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount wc-block-components-totals-item__value" translate="no">£5.99</span>
                                                                                            <div class="wc-block-components-totals-item__description">
                                                                                                <div class="wc-block-components-totals-shipping__via">24hrs Express Delivery</div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="wc-block-components-totals-wrapper">
                                                                                <div class="wc-block-components-totals-item wc-block-components-totals-footer-item"><span class="wc-block-components-totals-item__label">Total</span>
                                                                                    <div class="wc-block-components-totals-item__value"><span class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount wc-block-components-totals-footer-item-tax-value" translate="no">£63.89</span></div>
                                                                                    <div class="wc-block-components-totals-item__description"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wc-block-components-notices"></div>
                                                                <div class="wc-block-components-notices__snackbar wc-block-components-notice-snackbar-list" tabindex="-1">
                                                                    <div></div>
                                                                </div>
                                                                <div class="wc-block-checkout__actions_row wc-block-checkout__actions_row--justify-flex-end">
                                                                    <button id="checkoutBtn" class="wc-block-components-button wp-element-button wc-block-components-checkout-place-order-button wc-block-components-checkout-place-order-button--full-width contained" style=""  >
                                                                        <div class="wc-block-components-button__text">
                                                                            <div class="wc-block-components-checkout-place-order-button__text">Place Order</div>
                                                                        </div>
                                                                    </button></div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="wc-block-components-sidebar wc-block-checkout__sidebar wp-block-woocommerce-checkout-totals-block is-sticky">
                                                        <div class="wc-block-components-notices"></div>
                                                        <div class="wc-block-components-notices__snackbar wc-block-components-notice-snackbar-list" tabindex="-1">
                                                            <div></div>
                                                        </div>
                                                        <div class="wp-block-woocommerce-checkout-order-summary-block">
                                                            <div class="wc-block-components-checkout-order-summary__title" role="button" aria-expanded="false" aria-controls=":r1:" tabindex="0">
                                                                <p class="wc-block-components-checkout-order-summary__title-text" role="heading" aria-level="2">Order summary</p><span class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount wc-block-components-checkout-order-summary__title-price" translate="no">£63.89</span><span class="wc-block-components-checkout-order-summary__title-icon"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true" focusable="false">
                                                                        <path d="M17.5 11.6L12 16l-5.5-4.4.9-1.2L12 14l4.5-3.6 1 1.2z"></path>
                                                                    </svg></span>
                                                            </div>
                                                            <div class="wc-block-components-checkout-order-summary__content" id=":r1:">
                                                                <div class="wp-block-woocommerce-checkout-order-summary-cart-items-block wc-block-components-totals-wrapper">
                                                                    <div class="wc-block-components-order-summary">
                                                                        <div class="wc-block-components-order-summary__content">
                                                                            <div class="wc-block-components-order-summary-item">
                                                                                <div class="wc-block-components-order-summary-item__image">
                                                                                    <div class="wc-block-components-order-summary-item__quantity"><span aria-hidden="true"><?= count($this->cart) ?></span><span class="screen-reader-text"><?= count($this->cart) ?> items</span></div><img src="/<?= $this->cart[0]['image'] ?> 1024w, /<?= $this->cart[0]['image'] ?>" alt="<?= $this->cart[0]['title'] ?>" srcset="/<?= $this->cart[0]['image'] ?> 1024w, /<?= $this->cart[0]['image'] ?> 320w, /<?= $this->cart[0]['image'] ?> 300w, /<?= $this->cart[0]['image'] ?> 1024w, /<?= $this->cart[0]['image'] ?> 150w, /<?= $this->cart[0]['image'] ?> 768w, /<?= $this->cart[0]['image'] ?> 600w,/<?= $this->cart[0]['image'] ?> 100w, /<?= $this->cart[0]['image'] ?> 48w, /<?= $this->cart[0]['image'] ?> 1200w" sizes="48px" width="48" height="48">
                                                                                </div>
                                                                                <div class="wc-block-components-order-summary-item__description">
                                                                                    
                                                                                    <h3 class="wc-block-components-product-name"><?= $this->cart[0]['title'] ?>...</h3>
                                                                                    <div class="wc-block-cart-item__prices"><span class="wc-block-components-order-summary-item__individual-prices price wc-block-components-product-price"><span class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount wc-block-components-product-price__value wc-block-components-order-summary-item__individual-price" translate="no">£<?= $totalPrice ?></span></span></div>
                                                                                    <!-- <div class="wc-block-components-product-metadata">
                                                                                        <div class="wc-block-components-product-metadata__description">
                                                                                            <h2 class="es1uf865 css-xudrs9 e9o5c490">5-Pack – 4.20g</h2>
                                                                                            <h2 class="css-1zmfmw e1r49ky70">THC: 30%</h2>
                                                                                        </div> -->
                                                                                    </div>
                                                                                </div>
                                                                                <!-- <span class="screen-reader-text">Total price for 2 <?= $this->cart[0]['title'] ?> items: £<?= $totalPrice ?></span> -->
                                                                                <div class="wc-block-components-order-summary-item__total-price" aria-hidden="true">
                                                                                    <div class="wc-block-cart-item__total-price-and-sale-badge-wrapper"><span class="price wc-block-components-product-price"><span class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount wc-block-components-product-price__value" translate="no">£<?= $totalPrice ?></span></span></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wp-block-woocommerce-checkout-order-summary-coupon-form-block wc-block-components-totals-wrapper">
                                                                    <!-- <div role="heading" aria-level="2" class="wc-block-components-totals-coupon wc-block-components-panel">
                                                                        <div aria-expanded="false" class="wc-block-components-panel__button" tabindex="0" role="button"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true" class="wc-block-components-panel__button-icon" focusable="false">
                                                                                <path d="M17.5 11.6L12 16l-5.5-4.4.9-1.2L12 14l4.5-3.6 1 1.2z"></path>
                                                                            </svg>Add coupons</div>
                                                                    </div> -->
                                                                </div>
                                                                <div data-block-name="woocommerce/checkout-order-summary-totals-block" class="wp-block-woocommerce-checkout-order-summary-totals-block">
                                                                    <div class="wp-block-woocommerce-checkout-order-summary-subtotal-block wc-block-components-totals-wrapper">
                                                                        <div class="wc-block-components-totals-item"><span class="wc-block-components-totals-item__label">Subtotal</span><span class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount wc-block-components-totals-item__value" translate="no">£<?= $totalPrice ?></span>
                                                                            <div class="wc-block-components-totals-item__description"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="wp-block-woocommerce-checkout-order-summary-discount-block wc-block-components-totals-wrapper"></div>
                                                                    <div class="wp-block-woocommerce-checkout-order-summary-fee-block wc-block-components-totals-wrapper"></div>
                                                                    <div class="wp-block-woocommerce-checkout-order-summary-shipping-block wc-block-components-totals-wrapper">
                                                                        <!--
                                                                        <div class="wc-block-components-totals-shipping">
                                                                            <div class="wc-block-components-totals-item"><span class="wc-block-components-totals-item__label">Delivery</span><span class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount wc-block-components-totals-item__value" translate="no">£5.99</span>
                                                                                <div class="wc-block-components-totals-item__description">
                                                                                    <div class="wc-block-components-totals-shipping__via">24hrs Express Delivery</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>-->
                                                                    </div>
                                                                </div>
                                                                <div class="wc-block-components-totals-wrapper">
                                                                    <div class="wc-block-components-totals-item wc-block-components-totals-footer-item"><span class="wc-block-components-totals-item__label">Total</span>
                                                                        <div class="wc-block-components-totals-item__value"><span class="wc-block-formatted-money-amount wc-block-components-formatted-money-amount wc-block-components-totals-footer-item-tax-value" translate="no">£<?= $totalPrice ?></span></div>
                                                                        <div class="wc-block-components-totals-item__description"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div style="display: none;"></div>
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
                const checkoutBtn = document.querySelector('#checkoutBtn');
                const checkOutForm = document.querySelector("#checkOutForm");
                const btnContent = checkoutBtn.innerHTML; 
                const b = document.querySelectorAll('sd');
                array.forEach(element => {
                    element.classList.add('alert', 'alert-warning');
                    element.classList.add('alert', 'alert-success');
                });

                checkOutForm.addEventListener('submit', async (e)=> {
                    e.preventDefault();
                    checkoutBtn.innerHTML = `<?= CustomFunctions::Loading() ?>`;

                    try {
                        const form = new FormData(checkOutForm);
                        form.set('cart_id', cart.getCookie() );
                        form.set('cart_count', `<?= count($this->cart) ?>` );
                        const response = await fetch('/myapp/requests', {method:"POST", body:form});
                        const result = await response.json();

                        if (!result.error) {
                            cart.deleteCookie();
                            successCheckOutForm();                            
                            return;
                        }

                        alert(result.msg);

                    } catch(e) {}
                    finally {
                         checkoutBtn.innerHTML = btnContent;
                    }
                });
 
                function successCheckOutForm() {
                    checkOutForm.classList.remove('alert','alert-danger');
                    checkOutForm.classList.add('alert','alert-success');

                    checkOutForm.innerHTML = "<span>Your order has been successfully submitted. Please wait to hear from us. <a href='/'>Go back home</a></span>";
                }

            </script>

        </footer>
    </div>

</body>

</html> 