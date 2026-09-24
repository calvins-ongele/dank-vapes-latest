<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css" integrity="sha512-x9WwyMYBnlXMNQ6kQ/Lyzu1NqIhLQKL5Oq6xByfXuRj7s9CskyCbLv/1IjqzJmXwFXWr0ov6jBV7Qbc0hh9nHg==" crossorigin="anonymous" referrerpolicy="no-referrer">
 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style class="bv-critical-css" bv-identifier="wp-img-auto-sizes-contain-inline-css" id="wp-img-auto-sizes-contain-inline-css">
        img:is([sizes=auto i], [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }
    </style>
    <style class="bv-critical-css" bv-identifier="wp-block-library-inline-css" id="wp-block-library-inline-css">
        :root {
            --wp-block-synced-color: #7a00df;
            --wp-block-synced-color--rgb: 122, 0, 223;
            --wp-bound-block-color: var(--wp-block-synced-color);
            --wp-editor-canvas-background: #ddd;
            --wp-admin-theme-color: #007cba;
            --wp-admin-theme-color--rgb: 0, 124, 186;
            --wp-admin-theme-color-darker-10: #006ba1;
            --wp-admin-theme-color-darker-10--rgb: 0, 107, 160.5;
            --wp-admin-theme-color-darker-20: #005a87;
            --wp-admin-theme-color-darker-20--rgb: 0, 90, 135;
            --wp-admin-border-width-focus: 2px
        }

        .wp-element-button {
            cursor: pointer
        }

        :root {
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--huge: 42px
        }

        :root .has-text-align-center {
            text-align: center
        }

        .screen-reader-text {
            word-wrap: normal !important;
            border: 0;
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }

        html :where(img[class*=wp-image-]) {
            height: auto;
            max-width: 100%
        }

        :where(figure) {
            margin: 0 0 1em
        }
    </style>
    <style class="bv-critical-css" bv-identifier="wp-block-gallery-inline-css" id="wp-block-gallery-inline-css">
        figure.wp-block-gallery.has-nested-images {
            align-items: normal
        }

        .wp-block-gallery.has-nested-images figure.wp-block-image:not(#individual-image) {
            margin: 0;
            width: calc(50% - var(--wp--style--unstable-gallery-gap, 16px)/2)
        }

        .wp-block-gallery.has-nested-images figure.wp-block-image {
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            justify-content: center;
            max-width: 100%;
            position: relative
        }

        .wp-block-gallery.has-nested-images figure.wp-block-image img {
            display: block;
            height: auto;
            max-width: 100% !important;
            width: auto
        }

        .wp-block-gallery.has-nested-images figure.wp-block-image figcaption,
        .wp-block-gallery.has-nested-images figure.wp-block-image:has(figcaption):before {
            bottom: 0;
            left: 0;
            max-height: 100%;
            position: absolute;
            right: 0
        }

        .wp-block-gallery.has-nested-images figure.wp-block-image:has(figcaption):before {
            backdrop-filter: blur(3px);
            content: "";
            height: 100%;
            -webkit-mask-image: linear-gradient(0deg, #000 20%, #0000);
            mask-image: linear-gradient(0deg, #000 20%, #0000);
            max-height: 3em;
            pointer-events: none
        }

        .wp-block-gallery.has-nested-images figure.wp-block-image figcaption {
            box-sizing: border-box;
            color: #fff;
            font-size: 13px;
            margin: 0;
            overflow: auto;
            padding: 1em;
            text-align: center;
            text-shadow: 0 0 1.5px #000
        }

        .wp-block-gallery.has-nested-images figure.wp-block-image figcaption {
            scrollbar-color: #0000 #0000;
            scrollbar-gutter: stable both-edges;
            scrollbar-width: thin
        }

        .wp-block-gallery.has-nested-images figure.wp-block-image figcaption {
            will-change: transform
        }

        @media (hover:none) {
            .wp-block-gallery.has-nested-images figure.wp-block-image figcaption {
                scrollbar-color: #fffc #0000
            }
        }

        .wp-block-gallery.has-nested-images figure.wp-block-image figcaption {
            background: linear-gradient(0deg, #0006, #0000)
        }

        .wp-block-gallery.has-nested-images figcaption {
            flex-basis: 100%;
            flex-grow: 1;
            text-align: center
        }

        .wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image) {
            align-self: inherit
        }

        .wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image) a,
        .wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image) img {
            flex: 1 0 0%;
            height: 100%;
            object-fit: cover;
            width: 100%
        }

        @media (min-width:600px) {}

        @media (min-width:600px) {
            .wp-block-gallery.has-nested-images.columns-default figure.wp-block-image:not(#individual-image) {
                width: calc(33.33% - var(--wp--style--unstable-gallery-gap, 16px)*.66667)
            }
        }

        @media (min-width:600px) {
            .wp-block-gallery.has-nested-images.columns-default figure.wp-block-image:not(#individual-image):first-child:last-child {
                width: 100%
            }
        }
    </style>
    <style class="bv-critical-css" bv-identifier="wp-block-image-inline-css" id="wp-block-image-inline-css">
        .wp-block-image img {
            box-sizing: border-box;
            height: auto;
            max-width: 100%;
            vertical-align: bottom
        }

        .wp-block-image .aligncenter,
        .wp-block-image .alignleft,
        .wp-block-image .alignright,
        .wp-block-image.aligncenter,
        .wp-block-image.alignleft,
        .wp-block-image.alignright {
            display: table
        }

        .wp-block-image :where(figcaption) {
            margin-bottom: 1em;
            margin-top: .5em
        }

        :root :where(.wp-block-image.is-style-rounded img, .wp-block-image .is-style-rounded img) {
            border-radius: 9999px
        }

        @keyframes show-content-image {
            0% {
                visibility: hidden
            }

            99% {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @keyframes turn-on-visibility {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes turn-off-visibility {
            0% {
                opacity: 1;
                visibility: visible
            }

            99% {
                opacity: 0;
                visibility: visible
            }

            to {
                opacity: 0;
                visibility: hidden
            }
        }

        @keyframes lightbox-zoom-in {
            0% {
                transform: translate(calc((-100vw + var(--wp--lightbox-scrollbar-width))/2 + var(--wp--lightbox-initial-left-position)), calc(-50vh + var(--wp--lightbox-initial-top-position))) scale(var(--wp--lightbox-scale))
            }

            to {
                transform: translate(-50%, -50%) scale(1)
            }
        }

        @keyframes lightbox-zoom-out {
            0% {
                transform: translate(-50%, -50%) scale(1);
                visibility: visible
            }

            99% {
                visibility: visible
            }

            to {
                transform: translate(calc((-100vw + var(--wp--lightbox-scrollbar-width))/2 + var(--wp--lightbox-initial-left-position)), calc(-50vh + var(--wp--lightbox-initial-top-position))) scale(var(--wp--lightbox-scale));
                visibility: hidden
            }
        }
    </style>
    <style class="bv-critical-css" bv-identifier="wp-block-search-inline-css" id="wp-block-search-inline-css">
        .wp-block-search__button {
            margin-left: 10px;
            word-break: normal
        }

        :where(.wp-block-search__button) {
            border: 1px solid #ccc;
            padding: 6px 10px
        }

        .wp-block-search__inside-wrapper {
            display: flex;
            flex: auto;
            flex-wrap: nowrap;
            max-width: 100%
        }

        .wp-block-search__label {
            width: 100%
        }

        :where(.wp-block-search__input) {
            appearance: none;
            border: 1px solid #949494;
            flex-grow: 1;
            font-family: inherit;
            font-size: inherit;
            font-style: inherit;
            font-weight: inherit;
            letter-spacing: inherit;
            line-height: inherit;
            margin-left: 0;
            margin-right: 0;
            min-width: 3rem;
            padding: 8px;
            text-decoration: unset !important;
            text-transform: inherit
        }
    </style>
    <style class="bv-critical-css" id="th-icon-css-css">
        .th-icon {
            /* use !important to prevent issues with browser extensions that change fonts */
            font-family: "Font Awesome 7 Free" !important;
            speak: never;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;

            /* Better Font Rendering =========== */
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .th-icon-search:before {
            font-family: "Font Awesome 7 Free" !important;
            content: "\f002";
        }
    </style>
    <style class="bv-critical-css" bv-identifier="global-styles-inline-css" id="global-styles-inline-css">
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgb(6, 147, 227) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgb(252, 185, 0) 0%, rgb(255, 105, 0) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgb(255, 105, 0) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0);
            --wp--preset--shadow--crisp: 6px 6px 0px rgb(0, 0, 0);
        }

        :root {
            --wp--style--global--content-size: 800px;
            --wp--style--global--wide-size: 1300px;
        }

        :where(body) {
            margin: 0;
        }

        :root {
            --wp--style--block-gap: 24px;
        }

        :root :where(.is-layout-flex) {
            gap: 24px;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        a:where(:not(.wp-element-button)) {
            text-decoration: none;
        }

        :root :where(.wp-element-button, .wp-block-button__link) {
            background-color: #32373c;
            border-width: 0;
            color: #fff;
            font-family: inherit;
            font-size: inherit;
            font-style: inherit;
            font-weight: inherit;
            letter-spacing: inherit;
            line-height: inherit;
            padding-top: calc(0.667em + 2px);
            padding-right: calc(1.333em + 2px);
            padding-bottom: calc(0.667em + 2px);
            padding-left: calc(1.333em + 2px);
            text-decoration: none;
            text-transform: inherit;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }
    </style>
    <!--style class="bv-critical-css" id="secure-copy-content-protection-public-css">
        #ays_tooltip {
            width: auto;
            padding: 3px;
            box-sizing: border-box;
            word-break: keep-all;
            -webkit-hyphens: none;
            white-space: nowrap
        }
    </style-->
    <style class="bv-critical-css" id="woocommerce-layout-css">
        :root {
            --woocommerce: #720eec;
            --wc-green: #007518;
            --wc-red: #a00;
            --wc-orange: #ffba00;
            --wc-blue: #2ea2cc;
            --wc-primary: #720eec;
            --wc-primary-text: #fcfbfe;
            --wc-secondary: #e9e6ed;
            --wc-secondary-text: #515151;
            --wc-highlight: #958e09;
            --wc-highligh-text: white;
            --wc-content-bg: #fff;
            --wc-subtext: #767676;
            --wc-form-border-color: rgba(32, 7, 7, 0.8);
            --wc-form-border-radius: 4px;
            --wc-form-border-width: 1px;
            --wc-destructive: #cc1818;
            --wc-card-border-radius: 8px
        }

        .woocommerce img,
        .woocommerce-page img {
            height: auto;
            max-width: 100%
        }

        .woocommerce ul.products,
        .woocommerce-page ul.products {
            clear: both
        }

        .woocommerce ul.products::after,
        .woocommerce ul.products::before,
        .woocommerce-page ul.products::after,
        .woocommerce-page ul.products::before {
            content: " ";
            display: table
        }

        .woocommerce ul.products::after,
        .woocommerce-page ul.products::after {
            clear: both
        }

        .woocommerce ul.products li.product,
        .woocommerce-page ul.products li.product {
            float: left;
            margin: 0 3.8% 2.992em 0;
            padding: 0;
            position: relative;
            width: 22.05%;
            margin-left: 0
        }

        .woocommerce ul.products li.first,
        .woocommerce-page ul.products li.first {
            clear: both
        }

        .woocommerce ul.products li.last,
        .woocommerce-page ul.products li.last {
            margin-right: 0
        }

        .woocommerce ul.cart_list li::after,
        .woocommerce ul.cart_list li::before,
        .woocommerce ul.product_list_widget li::after,
        .woocommerce ul.product_list_widget li::before,
        .woocommerce-page ul.cart_list li::after,
        .woocommerce-page ul.cart_list li::before,
        .woocommerce-page ul.product_list_widget li::after,
        .woocommerce-page ul.product_list_widget li::before {
            content: " ";
            display: table
        }

        .woocommerce ul.cart_list li::after,
        .woocommerce ul.product_list_widget li::after,
        .woocommerce-page ul.cart_list li::after,
        .woocommerce-page ul.product_list_widget li::after {
            clear: both
        }

        .woocommerce ul.cart_list li img,
        .woocommerce ul.product_list_widget li img,
        .woocommerce-page ul.cart_list li img,
        .woocommerce-page ul.product_list_widget li img {
            float: right;
            height: auto
        }
    </style>
    <style class="bv-critical-css"  id="woocommerce-smallscreen-css">
        @media only screen and (max-width: 768px) {
            :root {
                --woocommerce: #720eec;
                --wc-green: #007518;
                --wc-red: #a00;
                --wc-orange: #ffba00;
                --wc-blue: #2ea2cc;
                --wc-primary: #720eec;
                --wc-primary-text: #fcfbfe;
                --wc-secondary: #e9e6ed;
                --wc-secondary-text: #515151;
                --wc-highlight: #958e09;
                --wc-highligh-text: white;
                --wc-content-bg: #fff;
                --wc-subtext: #767676;
                --wc-form-border-color: rgba(32, 7, 7, 0.8);
                --wc-form-border-radius: 4px;
                --wc-form-border-width: 1px;
                --wc-destructive: #cc1818;
                --wc-card-border-radius: 8px
            }

            .woocommerce ul.products[class*=columns-] li.product,
            .woocommerce-page ul.products[class*=columns-] li.product {
                width: 48%;
                float: left;
                clear: both;
                margin: 0 0 2.992em
            }

            .woocommerce ul.products[class*=columns-] li.product:nth-child(2n),
            .woocommerce-page ul.products[class*=columns-] li.product:nth-child(2n) {
                float: right;
                clear: none !important
            }
        }
    </style>
    <style class="bv-critical-css"  id="woocommerce-general-css">
        :root {
            --woocommerce: #720eec;
            --wc-green: #007518;
            --wc-red: #a00;
            --wc-orange: #ffba00;
            --wc-blue: #2ea2cc;
            --wc-primary: #720eec;
            --wc-primary-text: #fcfbfe;
            --wc-secondary: #e9e6ed;
            --wc-secondary-text: #515151;
            --wc-highlight: #958e09;
            --wc-highligh-text: white;
            --wc-content-bg: #fff;
            --wc-subtext: #767676;
            --wc-form-border-color: rgba(32, 7, 7, 0.8);
            --wc-form-border-radius: 4px;
            --wc-form-border-width: 1px;
            --wc-destructive: #cc1818;
            --wc-card-border-radius: 8px
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg)
            }
        }

        .screen-reader-text {
            clip: rect(1px, 1px, 1px, 1px);
            height: 1px;
            overflow: hidden;
            position: absolute !important;
            width: 1px;
            word-wrap: normal !important
        }

        .woocommerce .products ul,
        .woocommerce ul.products {
            margin: 0 0 1em;
            padding: 0;
            list-style: none outside;
            clear: both
        }

        .woocommerce .products ul::after,
        .woocommerce .products ul::before,
        .woocommerce ul.products::after,
        .woocommerce ul.products::before {
            content: " ";
            display: table
        }

        .woocommerce .products ul::after,
        .woocommerce ul.products::after {
            clear: both
        }

        .woocommerce .products ul li,
        .woocommerce ul.products li {
            list-style: none outside
        }

        .woocommerce ul.products li.product .woocommerce-loop-category__title,
        .woocommerce ul.products li.product .woocommerce-loop-product__title,
        .woocommerce ul.products li.product h3 {
            padding: .5em 0;
            margin: 0;
            font-size: 1em
        }

        .woocommerce ul.products li.product a {
            text-decoration: none
        }

        .woocommerce ul.products li.product a.woocommerce-loop-product__link {
            display: block
        }

        .woocommerce ul.products li.product a img {
            width: 100%;
            height: auto;
            display: block;
            margin: 0 0 1em;
            box-shadow: none
        }

        .woocommerce ul.products li.product strong {
            display: block
        }

        .woocommerce ul.products li.product .star-rating {
            font-size: .857em
        }

        .woocommerce ul.products li.product .button {
            display: inline-block;
            margin-top: 1em
        }

        .woocommerce ul.products li.product .price {
            display: block;
            font-weight: 400;
            margin-bottom: .5em;
            font-size: .857em
        }

        .woocommerce .star-rating {
            float: right;
            overflow: hidden;
            position: relative;
            height: 1em;
            line-height: 1;
            font-size: 1em;
            width: 5.4em;
            font-family: WooCommerce
        }

        .woocommerce .star-rating::before {
            content: "sssss";
            color: #cfc8d8;
            float: left;
            top: 0;
            left: 0;
            position: absolute
        }

        .woocommerce .star-rating span {
            overflow: hidden;
            float: left;
            top: 0;
            left: 0;
            position: absolute;
            padding-top: 1.5em
        }

        .woocommerce .star-rating span::before {
            content: "SSSSS";
            top: 0;
            position: absolute;
            left: 0
        }

        .woocommerce .products .star-rating {
            display: block;
            margin: 0 0 .5em;
            float: none
        }

        .woocommerce ul.cart_list,
        .woocommerce ul.product_list_widget {
            list-style: none outside;
            padding: 0;
            margin: 0
        }

        .woocommerce ul.cart_list li,
        .woocommerce ul.product_list_widget li {
            padding: 4px 0;
            margin: 0;
            list-style: none
        }

        .woocommerce ul.cart_list li::after,
        .woocommerce ul.cart_list li::before,
        .woocommerce ul.product_list_widget li::after,
        .woocommerce ul.product_list_widget li::before {
            content: " ";
            display: table
        }

        .woocommerce ul.cart_list li::after,
        .woocommerce ul.product_list_widget li::after {
            clear: both
        }

        .woocommerce ul.cart_list li a,
        .woocommerce ul.product_list_widget li a {
            display: block;
            font-weight: 700
        }

        .woocommerce ul.cart_list li img,
        .woocommerce ul.product_list_widget li img {
            float: right;
            margin-left: 4px;
            width: 32px;
            height: auto;
            box-shadow: none
        }

        .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) #respond input#submit,
        .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) a.button,
        .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) button.button,
        .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) input.button,
        :where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce #respond input#submit,
        :where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce a.button,
        :where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce button.button,
        :where(body:not(.woocommerce-block-theme-has-button-styles)):where(:not(.edit-post-visual-editor)) .woocommerce input.button {
            font-size: 100%;
            margin: 0;
            line-height: 1;
            cursor: pointer;
            position: relative;
            text-decoration: none;
            overflow: visible;
            padding: .618em 1em;
            font-weight: 700;
            border-radius: 3px;
            left: auto;
            color: #515151;
            background-color: #e9e6ed;
            border: 0;
            display: inline-block;
            background-image: none;
            box-shadow: none;
            text-shadow: none
        }

        .woocommerce:where(body:not(.woocommerce-uses-block-theme)) ul.products li.product .price {
            color: #958e09
        }
    </style>
    <style class="bv-critical-css" bv-identifier="/public/css/font-awesome.css?ver=1.7.1" id="font-awesome-css">
        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg);
            }
        }

        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg);
            }
        }
    </style>
    <style class="bv-critical-css"  id="th-icon-css">
        .th-icon {
            /* use !important to prevent issues with browser extensions that change fonts */
            font-family: "Font Awesome 7 Free"!important;
            speak: never;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;

            /* Better Font Rendering =========== */
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .th-icon-search:before {
            font-family: "Font Awesome 7 Free";
            content: "\f002";
        }
    </style>
    <style class="bv-critical-css" id="animate-css">
        @-webkit-keyframes bounce {

            from,
            20%,
            53%,
            80%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            40%,
            43% {
                -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
                animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
                -webkit-transform: translate3d(0, -30px, 0);
                transform: translate3d(0, -30px, 0);
            }

            70% {
                -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
                animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
                -webkit-transform: translate3d(0, -15px, 0);
                transform: translate3d(0, -15px, 0);
            }

            90% {
                -webkit-transform: translate3d(0, -4px, 0);
                transform: translate3d(0, -4px, 0);
            }
        }

        @keyframes bounce {

            from,
            20%,
            53%,
            80%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            40%,
            43% {
                -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
                animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
                -webkit-transform: translate3d(0, -30px, 0);
                transform: translate3d(0, -30px, 0);
            }

            70% {
                -webkit-animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
                animation-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
                -webkit-transform: translate3d(0, -15px, 0);
                transform: translate3d(0, -15px, 0);
            }

            90% {
                -webkit-transform: translate3d(0, -4px, 0);
                transform: translate3d(0, -4px, 0);
            }
        }

        @-webkit-keyframes flash {

            from,
            50%,
            to {
                opacity: 1;
            }

            25%,
            75% {
                opacity: 0;
            }
        }

        @keyframes flash {

            from,
            50%,
            to {
                opacity: 1;
            }

            25%,
            75% {
                opacity: 0;
            }
        }

        @-webkit-keyframes pulse {
            from {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }

            50% {
                -webkit-transform: scale3d(1.05, 1.05, 1.05);
                transform: scale3d(1.05, 1.05, 1.05);
            }

            to {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        @keyframes pulse {
            from {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }

            50% {
                -webkit-transform: scale3d(1.05, 1.05, 1.05);
                transform: scale3d(1.05, 1.05, 1.05);
            }

            to {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        @-webkit-keyframes rubberBand {
            from {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }

            30% {
                -webkit-transform: scale3d(1.25, 0.75, 1);
                transform: scale3d(1.25, 0.75, 1);
            }

            40% {
                -webkit-transform: scale3d(0.75, 1.25, 1);
                transform: scale3d(0.75, 1.25, 1);
            }

            50% {
                -webkit-transform: scale3d(1.15, 0.85, 1);
                transform: scale3d(1.15, 0.85, 1);
            }

            65% {
                -webkit-transform: scale3d(0.95, 1.05, 1);
                transform: scale3d(0.95, 1.05, 1);
            }

            75% {
                -webkit-transform: scale3d(1.05, 0.95, 1);
                transform: scale3d(1.05, 0.95, 1);
            }

            to {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        @keyframes rubberBand {
            from {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }

            30% {
                -webkit-transform: scale3d(1.25, 0.75, 1);
                transform: scale3d(1.25, 0.75, 1);
            }

            40% {
                -webkit-transform: scale3d(0.75, 1.25, 1);
                transform: scale3d(0.75, 1.25, 1);
            }

            50% {
                -webkit-transform: scale3d(1.15, 0.85, 1);
                transform: scale3d(1.15, 0.85, 1);
            }

            65% {
                -webkit-transform: scale3d(0.95, 1.05, 1);
                transform: scale3d(0.95, 1.05, 1);
            }

            75% {
                -webkit-transform: scale3d(1.05, 0.95, 1);
                transform: scale3d(1.05, 0.95, 1);
            }

            to {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        @-webkit-keyframes shake {

            from,
            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            10%,
            30%,
            50%,
            70%,
            90% {
                -webkit-transform: translate3d(-10px, 0, 0);
                transform: translate3d(-10px, 0, 0);
            }

            20%,
            40%,
            60%,
            80% {
                -webkit-transform: translate3d(10px, 0, 0);
                transform: translate3d(10px, 0, 0);
            }
        }

        @keyframes shake {

            from,
            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            10%,
            30%,
            50%,
            70%,
            90% {
                -webkit-transform: translate3d(-10px, 0, 0);
                transform: translate3d(-10px, 0, 0);
            }

            20%,
            40%,
            60%,
            80% {
                -webkit-transform: translate3d(10px, 0, 0);
                transform: translate3d(10px, 0, 0);
            }
        }

        @-webkit-keyframes headShake {
            0% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }

            6.5% {
                -webkit-transform: translateX(-6px) rotateY(-9deg);
                transform: translateX(-6px) rotateY(-9deg);
            }

            18.5% {
                -webkit-transform: translateX(5px) rotateY(7deg);
                transform: translateX(5px) rotateY(7deg);
            }

            31.5% {
                -webkit-transform: translateX(-3px) rotateY(-5deg);
                transform: translateX(-3px) rotateY(-5deg);
            }

            43.5% {
                -webkit-transform: translateX(2px) rotateY(3deg);
                transform: translateX(2px) rotateY(3deg);
            }

            50% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }
        }

        @keyframes headShake {
            0% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }

            6.5% {
                -webkit-transform: translateX(-6px) rotateY(-9deg);
                transform: translateX(-6px) rotateY(-9deg);
            }

            18.5% {
                -webkit-transform: translateX(5px) rotateY(7deg);
                transform: translateX(5px) rotateY(7deg);
            }

            31.5% {
                -webkit-transform: translateX(-3px) rotateY(-5deg);
                transform: translateX(-3px) rotateY(-5deg);
            }

            43.5% {
                -webkit-transform: translateX(2px) rotateY(3deg);
                transform: translateX(2px) rotateY(3deg);
            }

            50% {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }
        }

        @-webkit-keyframes swing {
            20% {
                -webkit-transform: rotate3d(0, 0, 1, 15deg);
                transform: rotate3d(0, 0, 1, 15deg);
            }

            40% {
                -webkit-transform: rotate3d(0, 0, 1, -10deg);
                transform: rotate3d(0, 0, 1, -10deg);
            }

            60% {
                -webkit-transform: rotate3d(0, 0, 1, 5deg);
                transform: rotate3d(0, 0, 1, 5deg);
            }

            80% {
                -webkit-transform: rotate3d(0, 0, 1, -5deg);
                transform: rotate3d(0, 0, 1, -5deg);
            }

            to {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg);
            }
        }

        @keyframes swing {
            20% {
                -webkit-transform: rotate3d(0, 0, 1, 15deg);
                transform: rotate3d(0, 0, 1, 15deg);
            }

            40% {
                -webkit-transform: rotate3d(0, 0, 1, -10deg);
                transform: rotate3d(0, 0, 1, -10deg);
            }

            60% {
                -webkit-transform: rotate3d(0, 0, 1, 5deg);
                transform: rotate3d(0, 0, 1, 5deg);
            }

            80% {
                -webkit-transform: rotate3d(0, 0, 1, -5deg);
                transform: rotate3d(0, 0, 1, -5deg);
            }

            to {
                -webkit-transform: rotate3d(0, 0, 1, 0deg);
                transform: rotate3d(0, 0, 1, 0deg);
            }
        }

        @-webkit-keyframes tada {
            from {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }

            10%,
            20% {
                -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
                transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
            }

            30%,
            50%,
            70%,
            90% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            }

            40%,
            60%,
            80% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            }

            to {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        @keyframes tada {
            from {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }

            10%,
            20% {
                -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
                transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
            }

            30%,
            50%,
            70%,
            90% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            }

            40%,
            60%,
            80% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
                transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            }

            to {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        @-webkit-keyframes wobble {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            15% {
                -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
                transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
            }

            30% {
                -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
                transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
            }

            45% {
                -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
                transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
            }

            60% {
                -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
                transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
            }

            75% {
                -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
                transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes wobble {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            15% {
                -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
                transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
            }

            30% {
                -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
                transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
            }

            45% {
                -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
                transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
            }

            60% {
                -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
                transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
            }

            75% {
                -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
                transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @-webkit-keyframes jello {

            from,
            11.1%,
            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            22.2% {
                -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
                transform: skewX(-12.5deg) skewY(-12.5deg);
            }

            33.3% {
                -webkit-transform: skewX(6.25deg) skewY(6.25deg);
                transform: skewX(6.25deg) skewY(6.25deg);
            }

            44.4% {
                -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
                transform: skewX(-3.125deg) skewY(-3.125deg);
            }

            55.5% {
                -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
                transform: skewX(1.5625deg) skewY(1.5625deg);
            }

            66.6% {
                -webkit-transform: skewX(-0.78125deg) skewY(-0.78125deg);
                transform: skewX(-0.78125deg) skewY(-0.78125deg);
            }

            77.7% {
                -webkit-transform: skewX(0.390625deg) skewY(0.390625deg);
                transform: skewX(0.390625deg) skewY(0.390625deg);
            }

            88.8% {
                -webkit-transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
                transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
            }
        }

        @keyframes jello {

            from,
            11.1%,
            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            22.2% {
                -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
                transform: skewX(-12.5deg) skewY(-12.5deg);
            }

            33.3% {
                -webkit-transform: skewX(6.25deg) skewY(6.25deg);
                transform: skewX(6.25deg) skewY(6.25deg);
            }

            44.4% {
                -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
                transform: skewX(-3.125deg) skewY(-3.125deg);
            }

            55.5% {
                -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
                transform: skewX(1.5625deg) skewY(1.5625deg);
            }

            66.6% {
                -webkit-transform: skewX(-0.78125deg) skewY(-0.78125deg);
                transform: skewX(-0.78125deg) skewY(-0.78125deg);
            }

            77.7% {
                -webkit-transform: skewX(0.390625deg) skewY(0.390625deg);
                transform: skewX(0.390625deg) skewY(0.390625deg);
            }

            88.8% {
                -webkit-transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
                transform: skewX(-0.1953125deg) skewY(-0.1953125deg);
            }
        }

        @-webkit-keyframes heartBeat {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            14% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3);
            }

            28% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            42% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3);
            }

            70% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes heartBeat {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            14% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3);
            }

            28% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }

            42% {
                -webkit-transform: scale(1.3);
                transform: scale(1.3);
            }

            70% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @-webkit-keyframes bounceIn {

            from,
            20%,
            40%,
            60%,
            80%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }

            0% {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3);
            }

            20% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1);
            }

            40% {
                -webkit-transform: scale3d(0.9, 0.9, 0.9);
                transform: scale3d(0.9, 0.9, 0.9);
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(1.03, 1.03, 1.03);
                transform: scale3d(1.03, 1.03, 1.03);
            }

            80% {
                -webkit-transform: scale3d(0.97, 0.97, 0.97);
                transform: scale3d(0.97, 0.97, 0.97);
            }

            to {
                opacity: 1;
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        @keyframes bounceIn {

            from,
            20%,
            40%,
            60%,
            80%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }

            0% {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3);
            }

            20% {
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1);
            }

            40% {
                -webkit-transform: scale3d(0.9, 0.9, 0.9);
                transform: scale3d(0.9, 0.9, 0.9);
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(1.03, 1.03, 1.03);
                transform: scale3d(1.03, 1.03, 1.03);
            }

            80% {
                -webkit-transform: scale3d(0.97, 0.97, 0.97);
                transform: scale3d(0.97, 0.97, 0.97);
            }

            to {
                opacity: 1;
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1);
            }
        }

        @-webkit-keyframes bounceInDown {

            from,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }

            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -3000px, 0);
                transform: translate3d(0, -3000px, 0);
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(0, 25px, 0);
                transform: translate3d(0, 25px, 0);
            }

            75% {
                -webkit-transform: translate3d(0, -10px, 0);
                transform: translate3d(0, -10px, 0);
            }

            90% {
                -webkit-transform: translate3d(0, 5px, 0);
                transform: translate3d(0, 5px, 0);
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes bounceInDown {

            from,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }

            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -3000px, 0);
                transform: translate3d(0, -3000px, 0);
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(0, 25px, 0);
                transform: translate3d(0, 25px, 0);
            }

            75% {
                -webkit-transform: translate3d(0, -10px, 0);
                transform: translate3d(0, -10px, 0);
            }

            90% {
                -webkit-transform: translate3d(0, 5px, 0);
                transform: translate3d(0, 5px, 0);
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @-webkit-keyframes bounceInLeft {

            from,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }

            0% {
                opacity: 0;
                -webkit-transform: translate3d(-3000px, 0, 0);
                transform: translate3d(-3000px, 0, 0);
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(25px, 0, 0);
                transform: translate3d(25px, 0, 0);
            }

            75% {
                -webkit-transform: translate3d(-10px, 0, 0);
                transform: translate3d(-10px, 0, 0);
            }

            90% {
                -webkit-transform: translate3d(5px, 0, 0);
                transform: translate3d(5px, 0, 0);
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes bounceInLeft {

            from,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }

            0% {
                opacity: 0;
                -webkit-transform: translate3d(-3000px, 0, 0);
                transform: translate3d(-3000px, 0, 0);
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(25px, 0, 0);
                transform: translate3d(25px, 0, 0);
            }

            75% {
                -webkit-transform: translate3d(-10px, 0, 0);
                transform: translate3d(-10px, 0, 0);
            }

            90% {
                -webkit-transform: translate3d(5px, 0, 0);
                transform: translate3d(5px, 0, 0);
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @-webkit-keyframes bounceInRight {

            from,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }

            from {
                opacity: 0;
                -webkit-transform: translate3d(3000px, 0, 0);
                transform: translate3d(3000px, 0, 0);
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(-25px, 0, 0);
                transform: translate3d(-25px, 0, 0);
            }

            75% {
                -webkit-transform: translate3d(10px, 0, 0);
                transform: translate3d(10px, 0, 0);
            }

            90% {
                -webkit-transform: translate3d(-5px, 0, 0);
                transform: translate3d(-5px, 0, 0);
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes bounceInRight {

            from,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }

            from {
                opacity: 0;
                -webkit-transform: translate3d(3000px, 0, 0);
                transform: translate3d(3000px, 0, 0);
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(-25px, 0, 0);
                transform: translate3d(-25px, 0, 0);
            }

            75% {
                -webkit-transform: translate3d(10px, 0, 0);
                transform: translate3d(10px, 0, 0);
            }

            90% {
                -webkit-transform: translate3d(-5px, 0, 0);
                transform: translate3d(-5px, 0, 0);
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @-webkit-keyframes bounceInUp {

            from,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }

            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 3000px, 0);
                transform: translate3d(0, 3000px, 0);
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(0, -20px, 0);
                transform: translate3d(0, -20px, 0);
            }

            75% {
                -webkit-transform: translate3d(0, 10px, 0);
                transform: translate3d(0, 10px, 0);
            }

            90% {
                -webkit-transform: translate3d(0, -5px, 0);
                transform: translate3d(0, -5px, 0);
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes bounceInUp {

            from,
            60%,
            75%,
            90%,
            to {
                -webkit-animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
                animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
            }

            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 3000px, 0);
                transform: translate3d(0, 3000px, 0);
            }

            60% {
                opacity: 1;
                -webkit-transform: translate3d(0, -20px, 0);
                transform: translate3d(0, -20px, 0);
            }

            75% {
                -webkit-transform: translate3d(0, 10px, 0);
                transform: translate3d(0, 10px, 0);
            }

            90% {
                -webkit-transform: translate3d(0, -5px, 0);
                transform: translate3d(0, -5px, 0);
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @-webkit-keyframes bounceOut {
            20% {
                -webkit-transform: scale3d(0.9, 0.9, 0.9);
                transform: scale3d(0.9, 0.9, 0.9);
            }

            50%,
            55% {
                opacity: 1;
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1);
            }

            to {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3);
            }
        }

        @keyframes bounceOut {
            20% {
                -webkit-transform: scale3d(0.9, 0.9, 0.9);
                transform: scale3d(0.9, 0.9, 0.9);
            }

            50%,
            55% {
                opacity: 1;
                -webkit-transform: scale3d(1.1, 1.1, 1.1);
                transform: scale3d(1.1, 1.1, 1.1);
            }

            to {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3);
            }
        }

        @-webkit-keyframes bounceOutDown {
            20% {
                -webkit-transform: translate3d(0, 10px, 0);
                transform: translate3d(0, 10px, 0);
            }

            40%,
            45% {
                opacity: 1;
                -webkit-transform: translate3d(0, -20px, 0);
                transform: translate3d(0, -20px, 0);
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(0, 2000px, 0);
                transform: translate3d(0, 2000px, 0);
            }
        }

        @keyframes bounceOutDown {
            20% {
                -webkit-transform: translate3d(0, 10px, 0);
                transform: translate3d(0, 10px, 0);
            }

            40%,
            45% {
                opacity: 1;
                -webkit-transform: translate3d(0, -20px, 0);
                transform: translate3d(0, -20px, 0);
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(0, 2000px, 0);
                transform: translate3d(0, 2000px, 0);
            }
        }

        @-webkit-keyframes bounceOutLeft {
            20% {
                opacity: 1;
                -webkit-transform: translate3d(20px, 0, 0);
                transform: translate3d(20px, 0, 0);
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(-2000px, 0, 0);
                transform: translate3d(-2000px, 0, 0);
            }
        }

        @keyframes bounceOutLeft {
            20% {
                opacity: 1;
                -webkit-transform: translate3d(20px, 0, 0);
                transform: translate3d(20px, 0, 0);
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(-2000px, 0, 0);
                transform: translate3d(-2000px, 0, 0);
            }
        }

        @-webkit-keyframes bounceOutRight {
            20% {
                opacity: 1;
                -webkit-transform: translate3d(-20px, 0, 0);
                transform: translate3d(-20px, 0, 0);
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(2000px, 0, 0);
                transform: translate3d(2000px, 0, 0);
            }
        }

        @keyframes bounceOutRight {
            20% {
                opacity: 1;
                -webkit-transform: translate3d(-20px, 0, 0);
                transform: translate3d(-20px, 0, 0);
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(2000px, 0, 0);
                transform: translate3d(2000px, 0, 0);
            }
        }

        @-webkit-keyframes bounceOutUp {
            20% {
                -webkit-transform: translate3d(0, -10px, 0);
                transform: translate3d(0, -10px, 0);
            }

            40%,
            45% {
                opacity: 1;
                -webkit-transform: translate3d(0, 20px, 0);
                transform: translate3d(0, 20px, 0);
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(0, -2000px, 0);
                transform: translate3d(0, -2000px, 0);
            }
        }

        @keyframes bounceOutUp {
            20% {
                -webkit-transform: translate3d(0, -10px, 0);
                transform: translate3d(0, -10px, 0);
            }

            40%,
            45% {
                opacity: 1;
                -webkit-transform: translate3d(0, 20px, 0);
                transform: translate3d(0, 20px, 0);
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(0, -2000px, 0);
                transform: translate3d(0, -2000px, 0);
            }
        }

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeInDown {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @-webkit-keyframes fadeInDownBig {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, -2000px, 0);
                transform: translate3d(0, -2000px, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInDownBig {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, -2000px, 0);
                transform: translate3d(0, -2000px, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @-webkit-keyframes fadeInLeft {
            from {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @-webkit-keyframes fadeInLeftBig {
            from {
                opacity: 0;
                -webkit-transform: translate3d(-2000px, 0, 0);
                transform: translate3d(-2000px, 0, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInLeftBig {
            from {
                opacity: 0;
                -webkit-transform: translate3d(-2000px, 0, 0);
                transform: translate3d(-2000px, 0, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @-webkit-keyframes fadeInRight {
            from {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @-webkit-keyframes fadeInRightBig {
            from {
                opacity: 0;
                -webkit-transform: translate3d(2000px, 0, 0);
                transform: translate3d(2000px, 0, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInRightBig {
            from {
                opacity: 0;
                -webkit-transform: translate3d(2000px, 0, 0);
                transform: translate3d(2000px, 0, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @-webkit-keyframes fadeInUp {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @-webkit-keyframes fadeInUpBig {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 2000px, 0);
                transform: translate3d(0, 2000px, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInUpBig {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 2000px, 0);
                transform: translate3d(0, 2000px, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @-webkit-keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        @-webkit-keyframes fadeOutDown {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }
        }

        @keyframes fadeOutDown {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }
        }

        @-webkit-keyframes fadeOutDownBig {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(0, 2000px, 0);
                transform: translate3d(0, 2000px, 0);
            }
        }

        @keyframes fadeOutDownBig {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(0, 2000px, 0);
                transform: translate3d(0, 2000px, 0);
            }
        }

        @-webkit-keyframes fadeOutLeft {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }
        }

        @keyframes fadeOutLeft {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }
        }

        @-webkit-keyframes fadeOutLeftBig {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(-2000px, 0, 0);
                transform: translate3d(-2000px, 0, 0);
            }
        }

        @keyframes fadeOutLeftBig {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(-2000px, 0, 0);
                transform: translate3d(-2000px, 0, 0);
            }
        }

        @-webkit-keyframes fadeOutRight {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
            }
        }

        @keyframes fadeOutRight {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
            }
        }

        @-webkit-keyframes fadeOutRightBig {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(2000px, 0, 0);
                transform: translate3d(2000px, 0, 0);
            }
        }

        @keyframes fadeOutRightBig {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(2000px, 0, 0);
                transform: translate3d(2000px, 0, 0);
            }
        }

        @-webkit-keyframes fadeOutUp {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
        }

        @keyframes fadeOutUp {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
        }

        @-webkit-keyframes fadeOutUpBig {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(0, -2000px, 0);
                transform: translate3d(0, -2000px, 0);
            }
        }

        @keyframes fadeOutUpBig {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(0, -2000px, 0);
                transform: translate3d(0, -2000px, 0);
            }
        }

        @-webkit-keyframes flip {
            from {
                -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);
                transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }

            40% {
                -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
                transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }

            50% {
                -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
                transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            80% {
                -webkit-transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
                transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            to {
                -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
                transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }
        }

        @keyframes flip {
            from {
                -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);
                transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }

            40% {
                -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
                transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
                -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
            }

            50% {
                -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
                transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            80% {
                -webkit-transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
                transform: perspective(400px) scale3d(0.95, 0.95, 0.95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            to {
                -webkit-transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
                transform: perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }
        }

        @-webkit-keyframes flipInX {
            from {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
                opacity: 0;
            }

            40% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            60% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
                transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
                opacity: 1;
            }

            80% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
                transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
            }

            to {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }
        }

        @keyframes flipInX {
            from {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
                opacity: 0;
            }

            40% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            60% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
                transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
                opacity: 1;
            }

            80% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
                transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
            }

            to {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }
        }

        @-webkit-keyframes flipInY {
            from {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
                opacity: 0;
            }

            40% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
                transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            60% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
                transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
                opacity: 1;
            }

            80% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
                transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
            }

            to {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }
        }

        @keyframes flipInY {
            from {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
                opacity: 0;
            }

            40% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
                transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
                -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
            }

            60% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
                transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
                opacity: 1;
            }

            80% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
                transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
            }

            to {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }
        }

        @-webkit-keyframes flipOutX {
            from {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }

            30% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                opacity: 1;
            }

            to {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                opacity: 0;
            }
        }

        @keyframes flipOutX {
            from {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }

            30% {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
                opacity: 1;
            }

            to {
                -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
                opacity: 0;
            }
        }

        @-webkit-keyframes flipOutY {
            from {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }

            30% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
                transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
                opacity: 1;
            }

            to {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                opacity: 0;
            }
        }

        @keyframes flipOutY {
            from {
                -webkit-transform: perspective(400px);
                transform: perspective(400px);
            }

            30% {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
                transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
                opacity: 1;
            }

            to {
                -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
                opacity: 0;
            }
        }

        @-webkit-keyframes lightSpeedIn {
            from {
                -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
                transform: translate3d(100%, 0, 0) skewX(-30deg);
                opacity: 0;
            }

            60% {
                -webkit-transform: skewX(20deg);
                transform: skewX(20deg);
                opacity: 1;
            }

            80% {
                -webkit-transform: skewX(-5deg);
                transform: skewX(-5deg);
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes lightSpeedIn {
            from {
                -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
                transform: translate3d(100%, 0, 0) skewX(-30deg);
                opacity: 0;
            }

            60% {
                -webkit-transform: skewX(20deg);
                transform: skewX(20deg);
                opacity: 1;
            }

            80% {
                -webkit-transform: skewX(-5deg);
                transform: skewX(-5deg);
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @-webkit-keyframes lightSpeedOut {
            from {
                opacity: 1;
            }

            to {
                -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
                transform: translate3d(100%, 0, 0) skewX(30deg);
                opacity: 0;
            }
        }

        @keyframes lightSpeedOut {
            from {
                opacity: 1;
            }

            to {
                -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
                transform: translate3d(100%, 0, 0) skewX(30deg);
                opacity: 0;
            }
        }

        @-webkit-keyframes rotateIn {
            from {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: rotate3d(0, 0, 1, -200deg);
                transform: rotate3d(0, 0, 1, -200deg);
                opacity: 0;
            }

            to {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                opacity: 1;
            }
        }

        @keyframes rotateIn {
            from {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: rotate3d(0, 0, 1, -200deg);
                transform: rotate3d(0, 0, 1, -200deg);
                opacity: 0;
            }

            to {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                opacity: 1;
            }
        }

        @-webkit-keyframes rotateInDownLeft {
            from {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate3d(0, 0, 1, -45deg);
                transform: rotate3d(0, 0, 1, -45deg);
                opacity: 0;
            }

            to {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                opacity: 1;
            }
        }

        @keyframes rotateInDownLeft {
            from {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate3d(0, 0, 1, -45deg);
                transform: rotate3d(0, 0, 1, -45deg);
                opacity: 0;
            }

            to {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                opacity: 1;
            }
        }

        @-webkit-keyframes rotateInDownRight {
            from {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate3d(0, 0, 1, 45deg);
                transform: rotate3d(0, 0, 1, 45deg);
                opacity: 0;
            }

            to {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                opacity: 1;
            }
        }

        @keyframes rotateInDownRight {
            from {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate3d(0, 0, 1, 45deg);
                transform: rotate3d(0, 0, 1, 45deg);
                opacity: 0;
            }

            to {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                opacity: 1;
            }
        }

        @-webkit-keyframes rotateInUpLeft {
            from {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate3d(0, 0, 1, 45deg);
                transform: rotate3d(0, 0, 1, 45deg);
                opacity: 0;
            }

            to {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                opacity: 1;
            }
        }

        @keyframes rotateInUpLeft {
            from {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate3d(0, 0, 1, 45deg);
                transform: rotate3d(0, 0, 1, 45deg);
                opacity: 0;
            }

            to {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                opacity: 1;
            }
        }

        @-webkit-keyframes rotateInUpRight {
            from {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate3d(0, 0, 1, -90deg);
                transform: rotate3d(0, 0, 1, -90deg);
                opacity: 0;
            }

            to {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                opacity: 1;
            }
        }

        @keyframes rotateInUpRight {
            from {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate3d(0, 0, 1, -90deg);
                transform: rotate3d(0, 0, 1, -90deg);
                opacity: 0;
            }

            to {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                opacity: 1;
            }
        }

        @-webkit-keyframes rotateOut {
            from {
                -webkit-transform-origin: center;
                transform-origin: center;
                opacity: 1;
            }

            to {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: rotate3d(0, 0, 1, 200deg);
                transform: rotate3d(0, 0, 1, 200deg);
                opacity: 0;
            }
        }

        @keyframes rotateOut {
            from {
                -webkit-transform-origin: center;
                transform-origin: center;
                opacity: 1;
            }

            to {
                -webkit-transform-origin: center;
                transform-origin: center;
                -webkit-transform: rotate3d(0, 0, 1, 200deg);
                transform: rotate3d(0, 0, 1, 200deg);
                opacity: 0;
            }
        }

        @-webkit-keyframes rotateOutDownLeft {
            from {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                opacity: 1;
            }

            to {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate3d(0, 0, 1, 45deg);
                transform: rotate3d(0, 0, 1, 45deg);
                opacity: 0;
            }
        }

        @keyframes rotateOutDownLeft {
            from {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                opacity: 1;
            }

            to {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate3d(0, 0, 1, 45deg);
                transform: rotate3d(0, 0, 1, 45deg);
                opacity: 0;
            }
        }

        @-webkit-keyframes rotateOutDownRight {
            from {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                opacity: 1;
            }

            to {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate3d(0, 0, 1, -45deg);
                transform: rotate3d(0, 0, 1, -45deg);
                opacity: 0;
            }
        }

        @keyframes rotateOutDownRight {
            from {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                opacity: 1;
            }

            to {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate3d(0, 0, 1, -45deg);
                transform: rotate3d(0, 0, 1, -45deg);
                opacity: 0;
            }
        }

        @-webkit-keyframes rotateOutUpLeft {
            from {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                opacity: 1;
            }

            to {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate3d(0, 0, 1, -45deg);
                transform: rotate3d(0, 0, 1, -45deg);
                opacity: 0;
            }
        }

        @keyframes rotateOutUpLeft {
            from {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                opacity: 1;
            }

            to {
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
                -webkit-transform: rotate3d(0, 0, 1, -45deg);
                transform: rotate3d(0, 0, 1, -45deg);
                opacity: 0;
            }
        }

        @-webkit-keyframes rotateOutUpRight {
            from {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                opacity: 1;
            }

            to {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg);
                opacity: 0;
            }
        }

        @keyframes rotateOutUpRight {
            from {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                opacity: 1;
            }

            to {
                -webkit-transform-origin: right bottom;
                transform-origin: right bottom;
                -webkit-transform: rotate3d(0, 0, 1, 90deg);
                transform: rotate3d(0, 0, 1, 90deg);
                opacity: 0;
            }
        }

        @-webkit-keyframes hinge {
            0% {
                -webkit-transform-origin: top left;
                transform-origin: top left;
                -webkit-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out;
            }

            20%,
            60% {
                -webkit-transform: rotate3d(0, 0, 1, 80deg);
                transform: rotate3d(0, 0, 1, 80deg);
                -webkit-transform-origin: top left;
                transform-origin: top left;
                -webkit-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out;
            }

            40%,
            80% {
                -webkit-transform: rotate3d(0, 0, 1, 60deg);
                transform: rotate3d(0, 0, 1, 60deg);
                -webkit-transform-origin: top left;
                transform-origin: top left;
                -webkit-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out;
                opacity: 1;
            }

            to {
                -webkit-transform: translate3d(0, 700px, 0);
                transform: translate3d(0, 700px, 0);
                opacity: 0;
            }
        }

        @keyframes hinge {
            0% {
                -webkit-transform-origin: top left;
                transform-origin: top left;
                -webkit-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out;
            }

            20%,
            60% {
                -webkit-transform: rotate3d(0, 0, 1, 80deg);
                transform: rotate3d(0, 0, 1, 80deg);
                -webkit-transform-origin: top left;
                transform-origin: top left;
                -webkit-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out;
            }

            40%,
            80% {
                -webkit-transform: rotate3d(0, 0, 1, 60deg);
                transform: rotate3d(0, 0, 1, 60deg);
                -webkit-transform-origin: top left;
                transform-origin: top left;
                -webkit-animation-timing-function: ease-in-out;
                animation-timing-function: ease-in-out;
                opacity: 1;
            }

            to {
                -webkit-transform: translate3d(0, 700px, 0);
                transform: translate3d(0, 700px, 0);
                opacity: 0;
            }
        }

        @-webkit-keyframes jackInTheBox {
            from {
                opacity: 0;
                -webkit-transform: scale(0.1) rotate(30deg);
                transform: scale(0.1) rotate(30deg);
                -webkit-transform-origin: center bottom;
                transform-origin: center bottom;
            }

            50% {
                -webkit-transform: rotate(-10deg);
                transform: rotate(-10deg);
            }

            70% {
                -webkit-transform: rotate(3deg);
                transform: rotate(3deg);
            }

            to {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes jackInTheBox {
            from {
                opacity: 0;
                -webkit-transform: scale(0.1) rotate(30deg);
                transform: scale(0.1) rotate(30deg);
                -webkit-transform-origin: center bottom;
                transform-origin: center bottom;
            }

            50% {
                -webkit-transform: rotate(-10deg);
                transform: rotate(-10deg);
            }

            70% {
                -webkit-transform: rotate(3deg);
                transform: rotate(3deg);
            }

            to {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @-webkit-keyframes rollIn {
            from {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
                transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes rollIn {
            from {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
                transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @-webkit-keyframes rollOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
                transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
            }
        }

        @keyframes rollOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
                -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
                transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
            }
        }

        @-webkit-keyframes zoomIn {
            from {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3);
            }

            50% {
                opacity: 1;
            }
        }

        @keyframes zoomIn {
            from {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3);
            }

            50% {
                opacity: 1;
            }
        }

        @-webkit-keyframes zoomInDown {
            from {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        @keyframes zoomInDown {
            from {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        @-webkit-keyframes zoomInLeft {
            from {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        @keyframes zoomInLeft {
            from {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        @-webkit-keyframes zoomInRight {
            from {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        @keyframes zoomInRight {
            from {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        @-webkit-keyframes zoomInUp {
            from {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        @keyframes zoomInUp {
            from {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }

            60% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        @-webkit-keyframes zoomOut {
            from {
                opacity: 1;
            }

            50% {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3);
            }

            to {
                opacity: 0;
            }
        }

        @keyframes zoomOut {
            from {
                opacity: 1;
            }

            50% {
                opacity: 0;
                -webkit-transform: scale3d(0.3, 0.3, 0.3);
                transform: scale3d(0.3, 0.3, 0.3);
            }

            to {
                opacity: 0;
            }
        }

        @-webkit-keyframes zoomOutDown {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }

            to {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
                -webkit-transform-origin: center bottom;
                transform-origin: center bottom;
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        @keyframes zoomOutDown {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }

            to {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
                -webkit-transform-origin: center bottom;
                transform-origin: center bottom;
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        @-webkit-keyframes zoomOutLeft {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
            }

            to {
                opacity: 0;
                -webkit-transform: scale(0.1) translate3d(-2000px, 0, 0);
                transform: scale(0.1) translate3d(-2000px, 0, 0);
                -webkit-transform-origin: left center;
                transform-origin: left center;
            }
        }

        @keyframes zoomOutLeft {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
            }

            to {
                opacity: 0;
                -webkit-transform: scale(0.1) translate3d(-2000px, 0, 0);
                transform: scale(0.1) translate3d(-2000px, 0, 0);
                -webkit-transform-origin: left center;
                transform-origin: left center;
            }
        }

        @-webkit-keyframes zoomOutRight {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
            }

            to {
                opacity: 0;
                -webkit-transform: scale(0.1) translate3d(2000px, 0, 0);
                transform: scale(0.1) translate3d(2000px, 0, 0);
                -webkit-transform-origin: right center;
                transform-origin: right center;
            }
        }

        @keyframes zoomOutRight {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
            }

            to {
                opacity: 0;
                -webkit-transform: scale(0.1) translate3d(2000px, 0, 0);
                transform: scale(0.1) translate3d(2000px, 0, 0);
                -webkit-transform-origin: right center;
                transform-origin: right center;
            }
        }

        @-webkit-keyframes zoomOutUp {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }

            to {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
                -webkit-transform-origin: center bottom;
                transform-origin: center bottom;
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        @keyframes zoomOutUp {
            40% {
                opacity: 1;
                -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
                transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
                -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
                animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
            }

            to {
                opacity: 0;
                -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
                transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
                -webkit-transform-origin: center bottom;
                transform-origin: center bottom;
                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
                animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
            }
        }

        @-webkit-keyframes slideInDown {
            from {
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
                visibility: visible;
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes slideInDown {
            from {
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
                visibility: visible;
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @-webkit-keyframes slideInLeft {
            from {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes slideInLeft {
            from {
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @-webkit-keyframes slideInRight {
            from {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
                visibility: visible;
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes slideInRight {
            from {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
                visibility: visible;
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @-webkit-keyframes slideInUp {
            from {
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
                visibility: visible;
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes slideInUp {
            from {
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
                visibility: visible;
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @-webkit-keyframes slideOutDown {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            to {
                visibility: hidden;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }
        }

        @keyframes slideOutDown {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            to {
                visibility: hidden;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }
        }

        @-webkit-keyframes slideOutLeft {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            to {
                visibility: hidden;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }
        }

        @keyframes slideOutLeft {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            to {
                visibility: hidden;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }
        }

        @-webkit-keyframes slideOutRight {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            to {
                visibility: hidden;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
            }
        }

        @keyframes slideOutRight {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            to {
                visibility: hidden;
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
            }
        }

        @-webkit-keyframes slideOutUp {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            to {
                visibility: hidden;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
        }

        @keyframes slideOutUp {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }

            to {
                visibility: hidden;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
        }
    </style>
    <style class="bv-critical-css" bv-identifier="/public/css/top-store-menu.css" id="top-store-menu-css">
        .top-store-menu,
        .top-store-menu li {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .top-store-menu>li {
            display: block;
            margin: 0;
            padding: 0;
            border: 0px;
            display: inline-block;
        }

        .top-store-menu li a:hover,
        .top-store-menu .current-menu-item a {
            color: #ff0052;
        }

        .top-store-menu>li>a {
            display: block;
            position: relative;
            margin: 0;
            border: 0px;
            font-size: 14px;
            font-family: "Lato-Regular", sans-serif;
            padding: 12px 20px 12px 0px;
            color: #777;
        }

        .top-store-menu>li>a>.arrow:before {
            margin-left: 5px;
            font-family: FontAwesome;
            height: auto;
            content: "\f107";
            font-weight: 300;
            text-shadow: none;
            width: 10px;
        }

        .top-store-menu li ul.sub-menu li>a>.arrow:before {
            content: "\f105";
        }

        .top-store-menu ul.sub-menu,
        .top-store-menu .page_item_has_children .children {
            position: absolute;
            box-shadow: 0 4px 10px 0 rgba(3, 3, 3, .1);
            list-style: none;
            margin-bottom: 0;
            line-height: 18px;
            text-align: left;
            min-width: 166px;
            opacity: 0;
            visibility: hidden;
            z-index: 99;
            background-color: #fff;
            margin: 0;
            -webkit-transition: -webkit-transform .3s ease, opacity .3s ease, visibility .3s ease;
            transition: transform .3s ease, opacity .3s ease, visibility .3s ease;
            -webkit-transform: translateY(14px);
            transform: translateY(14px);

        }

        .top-store-menu li ul.sub-menu>li {
            width: 185px;
        }

        .top-store-menu li ul.sub-menu li a,
        .top-store-menu .children li a {
            display: block;
            height: auto;
            min-height: 0 !important;
            line-height: 1.8;
            padding: 12px 15px;
            text-decoration: none;
            font-weight: normal;
            background: none;
        }

        .top-store-menu>li>ul.sub-menu>li,
        .top-store-menu li.page_item_has_children {
            position: relative;
            line-height: initial;
        }

        .top-store-menu>li>ul.sub-menu li>a>.arrow:before,
        .top-store-menu li.page_item_has_children:before {
            float: right;
            margin-right: 0px;
            display: inline;
            font-size: 16px;
            font-family: FontAwesome;
            height: auto;
            content: "\f105";
            text-shadow: none;
        }

        .top-store-menu>li>ul.sub-menu>li ul.sub-menu {
            position: absolute;
            left: 100%;
            top: 0px;
            list-style: none;
            margin: 0;
        }

        .menu-toggle {
            display: none;
            width: 100%;
        }

        .menu-toggle .menu-btn {
            float: right;
            background: transparent;
        }

        body {
            transition: all 0.2s ease-in-out;
            -webkit-transition: all 0.23s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            left: 0;
        }

        @media screen and (max-width: 1024px) {}

        @media screen and (max-width: 1024px) {

            ul[data-menu-style="vertical"],
            ul[data-menu-style="accordion"],
            ul[data-menu-style="vertical"] li ul.sub-menu {
                width: 100% !important;
            }
        }

        @media screen and (max-width: 1024px) {
            body {
                transition: all 0.2s ease-in-out;
                -webkit-transition: all 0.23s ease-in-out;
                -moz-transition: all 0.2s ease-in-out;
                left: 0;
            }
        }

        @media screen and (max-width: 1024px) {
            .sider.overcenter {
                -webkit-animation: bodyfadeIn .3s;
                -moz-animation: bodyfadeIn .3s;
                -ms-animation: bodyfadeIn .3s;
                -o-animation: bodyfadeIn .3s;
                animation: bodyfadeIn .3s;
            }
        }

        @media screen and (max-width: 1024px) {
            .overcenter {
                display: none;
            }
        }

        @media screen and (max-width: 1024px) {
            .menu-toggle .menu-btn {
                display: flex;
            }
        }

        @media screen and (max-width: 1024px) {
            .menu-toggle .menu-btn span {
                color: #090909;
                align-self: center;
                text-transform: uppercase;
                font-weight: bold;
                font-size: 14px;
                margin-left: 8px;
            }
        }

        @media screen and (max-width: 1024px) {
            .menu-toggle .menu-btn .icon-text {
                display: none;
            }
        }

        @media screen and (max-width: 1024px) {
            @-webkit-keyframes bodyfadeIn {
                0% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }
        }

        @media screen and (max-width: 1024px) {
            @keyframes bodyfadeIn {
                0% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }
        }
    </style>
    <style class="bv-critical-css" bv-identifier="top-store-style-inline-css" id="top-store-style-inline-css">
        .top-store-light a:hover,
        .top-store-menu li a:hover,
        .top-store-menu .current-menu-item a,
        .sticky-header-col2 .top-store-menu li a:hover,
        .woocommerce .thunk-woo-product-list .price,
        .thunk-product-hover .th-button.add_to_cart_button,
        .woocommerce ul.products .thunk-product-hover .add_to_cart_button,
        .woocommerce ul.products li.product .product_type_variable,
        .woocommerce ul.products li.product a.button.product_type_grouped,
        .thunk-compare .compare-button a:hover,
        .thunk-product-hover .th-button.add_to_cart_button:hover,
        .woocommerce ul.products .thunk-product-hover .add_to_cart_button :hover,
        .woocommerce .thunk-product-hover a.th-button:hover,
        .thunk-product .yith-wcwl-wishlistexistsbrowse.show:before,
        .thunk-product .yith-wcwl-wishlistaddedbrowse.show:before,
        .woocommerce ul.products li.product.thunk-woo-product-list .price,
        .summary .yith-wcwl-add-to-wishlist.show .add_to_wishlist::before,
        .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse.show a::before,
        .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse.show a::before,
        .woocommerce .entry-summary a.compare.button.added:before,
        .header-icon a:hover,
        .thunk-related-links .nav-links a:hover,
        .woocommerce .thunk-list-view ul.products li.product.thunk-woo-product-list .price,
        .woocommerce .woocommerce-error .button,
        .woocommerce .woocommerce-info .button,
        .woocommerce .woocommerce-message .button,
        .thunk-wishlist a:hover,
        .thunk-compare a:hover,
        .thunk-quik a:hover,
        .woocommerce ul.cart_list li .woocommerce-Price-amount,
        .woocommerce ul.product_list_widget li .woocommerce-Price-amount,
        .top-store-load-more button,
        .page-contact .leadform-show-form label,
        .thunk-contact-col .fa,
        .woocommerce .thunk-product-hover a.th-button:hover:after,
        ul.products .thunk-product-hover .add_to_cart_button:hover,
        .woocommerce .thunk-product-hover a.th-button:hover,
        .woocommerce ul.products li.product .product_type_variable:hover,
        .woocommerce ul.products li.product a.button.product_type_grouped:hover,
        .woocommerce .thunk-product-hover a.th-button:hover,
        .woocommerce ul.products li.product .add_to_cart_button:hover,
        .woocommerce .added_to_cart.wc-forward:hover,
        ul.products .thunk-product-hover .add_to_cart_button:hover:after,
        .woocommerce .thunk-product-hover a.th-button:hover:after,
        .woocommerce ul.products li.product .product_type_variable:hover:after,
        .woocommerce ul.products li.product a.button.product_type_grouped:hover:after,
        .woocommerce .thunk-product-hover a.th-button:hover:after,
        .woocommerce ul.products li.product .add_to_cart_button:hover:after,
        .woocommerce .added_to_cart.wc-forward:hover:after,
        .summary .yith-wcwl-add-to-wishlist .add_to_wishlist:hover:before,
        .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a::before,
        .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a::before,
        .th-hlight-icon,
        .ribbon-btn:hover,
        .thunk-product .yith-wcwl-wishlistexistsbrowse:before,
        .woocommerce .entry-summary a.compare.button:hover:before,
        .th-slide-button,
        .th-slide-button:after,
        .sider.overcenter .sider-inner ul.top-store-menu li a:hover,
        .reply a,
        .single-product .product_meta a,
        .woosw-btn:hover:before,
        .woosw-added:before,
        .wooscp-btn:hover:before,
        #top-store-mobile-bar .count-item,
        a.th-product-compare-btn.button.btn_type.th-added-compare:before,
        .thunk-product-list-section .thunk-list .thunk-product-content .woocommerce-LoopProduct-title:hover {
            color: #00badb
        }

        .toggle-cat-wrap,
        #search-button,
        .thunk-icon .cart-icon,
        .single_add_to_cart_button.button.alt,
        .woocommerce #respond input#submit.alt,
        .woocommerce a.button.alt,
        .woocommerce button.button.alt,
        .woocommerce input.button.alt,
        .woocommerce #respond input#submit,
        .woocommerce button.button,
        .woocommerce input.button,
        .cat-list a:after,
        .tagcloud a:hover,
        .thunk-tags-wrapper a:hover,
        .btn-main-header,
        .page-contact .leadform-show-form input[type='submit'],
        .woocommerce .widget_price_filter .top-store-widget-content .ui-slider .ui-slider-range,
        .woocommerce .widget_price_filter .top-store-widget-content .ui-slider .ui-slider-handle,
        .entry-content form.post-password-form input[type='submit'],
        #top-store-mobile-bar a,
        .header-support-icon,
        .count-item,
        .nav-links .page-numbers.current,
        .nav-links .page-numbers:hover,
        .woocommerce .thunk-woo-product-list span.onsale,
        .top-store-site section.thunk-ribbon-section .content-wrap:before,
        .woocommerce .return-to-shop a.button,
        .widget_product_search [type='submit']:hover,
        .comment-form .form-submit [type='submit'],
        .top-store-slide-post .owl-nav button.owl-prev:hover,
        .top-store-slide-post .owl-nav button.owl-next:hover,
        body.top-store-dark .top-store-slide-post .owl-nav button.owl-prev:hover,
        body.top-store-dark .top-store-slide-post .owl-nav button.owl-next:hover {
            background: #00badb
        }

        .thunk-product-hover .th-button.add_to_cart_button,
        .woocommerce ul.products .thunk-product-hover .add_to_cart_button,
        .woocommerce ul.products li.product .product_type_variable,
        .woocommerce ul.products li.product a.button.product_type_grouped,
        .open-cart p.buttons a:hover,
        .top-store-slide-post .owl-nav button.owl-prev:hover,
        .top-store-slide-post .owl-nav button.owl-next:hover,
        body .woocommerce-tabs .tabs li a::before,
        .thunk-list-grid-switcher a.selected,
        .thunk-list-grid-switcher a:hover,
        .woocommerce .woocommerce-error .button,
        .woocommerce .woocommerce-info .button,
        .woocommerce .woocommerce-message .button,
        #searchform [type='submit']:hover,
        .top-store-load-more button,
        .thunk-top2-slide.owl-carousel .owl-nav button:hover,
        .product-slide-widget .owl-carousel .owl-nav button:hover,
        .thunk-slide.thunk-brand .owl-nav button:hover,
        .page-contact .leadform-show-form input[type='submit'],
        .widget_product_search [type='submit']:hover,
        .thunk-slide .owl-nav button.owl-prev:hover,
        .thunk-slide .owl-nav button.owl-next:hover,
        body.top-store-dark .thunk-slide.owl-carousel .owl-nav button.owl-prev:hover,
        body.top-store-dark .thunk-slide.owl-carousel .owl-nav button.owl-next:hover,
        body.top-store-dark .top-store-slide-post .owl-nav button.owl-prev:hover,
        body.top-store-dark .top-store-slide-post .owl-nav button.owl-next:hover,
        .th-testimonial .owl-carousel .owl-nav button.owl-prev:hover,
        .th-testimonial .owl-carousel .owl-nav button.owl-next:hover {
            border-color: #00badb
        }

        body.top-store-light,
        .woocommerce-error,
        .woocommerce-info,
        .woocommerce-message {
            color:
        }

        .site-title span a,
        .sprt-tel b,
        .widget.woocommerce .widget-title,
        .open-widget-content .widget-title,
        .widget-title,
        .thunk-title .title,
        .thunk-hglt-box h6,
        h2.thunk-post-title a,
        h1.thunk-post-title,
        #reply-title,
        h4.author-header,
        .page-head h1,
        .woocommerce div.product .product_title,
        section.related.products h2,
        section.upsells.products h2,
        .woocommerce #reviews #comments h2,
        .woocommerce table.shop_table thead th,
        .cart-subtotal,
        .order-total,
        .cross-sells h2,
        .cart_totals h2,
        .woocommerce-billing-fields h3,
        .page-head h1 a,
        .woocommerce-billing-fields h3,
        .woocommerce-checkout h3#order_review_heading,
        .woocommerce-additional-fields h3,
        .woocommerce .wishlist-title,
        .widget_block .wp-block-heading,
        .woocommerce ul.products li.product .woocommerce-loop-product__title,
        .thunk-woo-product-list .woocommerce-loop-product__title a {
            color:
        }

        .top-store-light a,
        #top-store-above-menu.top-store-menu>li>a {
            color:
        }

        .main-header:before,
        body.top-store-dark .main-header:before {
            background: ;
        }

        .site-title span a,
        .main-header-bar .header-icon a,
        .main-header-bar .thunk-icon-market .cart-contents,
        .th-whishlist-text,
        .account-text:nth-of-type(1) {
            color: #000000;
        }

        .thunk-icon-market .cart-icon .taiowc-icon,
        .thunk-icon-market .taiowc-icon .th-icon,
        .thunk-icon-market .cart-icon .taiowcp-icon,
        .thunk-icon-market .taiowcp-icon .th-icon,
        .main-header-bar {
            color: #000000;
        }
    </style>
    <style class="bv-critical-css"  id="top-store-quick-view-css">
        #alm-quick-view-modal {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1400;
            text-align: center;
            -webkit-transition: all 0.3s;
            transition: all 0.3s;
            overflow-x: hidden;
            overflow-y: auto;
        }

        #alm-quick-view-modal .alm-content-main-wrapper {
            text-align: center;
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            padding: 0;
            display: flex;
            align-items: center;
        }

        #alm-quick-view-modal .alm-content-main-wrapper:before {
            content: '';
            display: inline-block;
            vertical-align: middle;

        }

        #alm-quick-view-modal .alm-content-main {
            position: relative;
            pointer-events: none;
            display: inline-block;
            vertical-align: middle;
            max-width: 100%;
            margin: 0 auto;
            text-align: left;
            z-index: 1045;
            -webkit-transform: translateY(-30px);
            -ms-transform: translateY(-30px);
            transform: translateY(-30px);
            opacity: 0;
            -webkit-transition: opacity .3s, -webkit-transform .5s;
            transition: opacity .3s, -webkit-transform .5s;
            transition: transform .5s, opacity .3s;
            transition: transform .5s, opacity .3s, -webkit-transform .5s;
        }

        #alm-quick-view-modal .alm-content-main:after,
        #alm-quick-view-modal .alm-content-main:before {
            content: '';
            display: table;
            clear: both;
        }

        #alm-quick-view-modal .alm-lightbox-content {
            display: table;
            pointer-events: auto;
            background-color: #fff;
            max-width: 975px;
            margin: 20px auto;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-box-shadow: 3px 3px 20px 0 rgba(0, 0, 0, 0.15);
            box-shadow: 3px 3px 20px 0 rgba(0, 0, 0, 0.15);
            position: relative;
        }

        #alm-quick-view-content {
            height: 100%;
        }

        #alm-quick-view-close {
            position: absolute;
            font-size: 20px;
            top: 10px;
            right: 10px;
            width: 28px;
            height: 28px;
            line-height: 28px;
            opacity: .7;
            text-align: center;
            z-index: 2;
            background: #000;
            color: #fff;
            border-radius: 50%;
        }

        #alm-quick-view-close:before {
            content: "\f335";
            font-family: dashicons;
            text-decoration: inherit;
            margin-left: 2px;
        }
    </style>
    <style class="bv-critical-css" bv-identifier="/public/css/thaps-front-style.css" id="th-advance-product-search-front-css">
        :root {
            --highlight-color: #000000;
            --light-text-color1: #6a7282;
            --light-text-color2: #99a1af;
            --tw-shadow: 0 20px 50px #00000026;
        }

        * {
            box-sizing: border-box;
        }

        @keyframes tapsp-voice-pulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.6;
                transform: scale(1.15);
            }
        }

        .thaps-search-box {
            max-width: 550px;
        }

        .thaps-search-box {
            position: relative;
            line-height: 100%;
            display: block;
            width: 100%;
            text-align: left;
            margin: 0 auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            align-items: center;
            display: flex;
        }

        .thaps-search-form {
            margin: 0;
            padding: 0;
            width: 100%;
        }

        .thaps-search-form,
        .thaps-autocomplete-suggestions {
            position: relative;
            animation: bounceDrop .05s linear;
            /*    animation: bounceDrop .1s cubic-bezier(.34,1.56,.64,1);*/
            */
        }

        .thaps-from-wrap {
            display: flex;
            align-items: center;
            background: #fff;
            border-radius: 2rem;
            position: relative;
            border: 1px solid;
            border-color: #e7f5ff;
        }

        #thaps-search-button {
            background: var(--highlight-color);
            width: 70px;
            height: 36px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 17px;
            padding: 0;
            border: 0;
            margin: 0.3rem;
            color: #fff;
            word-break: initial;
            border-radius: 16px;
        }

        .thaps-search-form .thaps-search-autocomplete {
            min-height: 35px;
            line-height: 35px;
            border: none !important;
            font-size: 14px;
            width: 100%;
            padding: 0.3rem 0.8rem;
            margin: 0;
            border-radius: 2rem !important;
            background: transparent;
            outline: 0 !important;
        }

        .thaps-autocomplete-suggestions {
            border: 1px solid #eee;
            background: #FFF;
            overflow: auto;
            border-radius: 1rem;
            margin-top: 9px;
            /* box-shadow: 0 0 #000, 0 0 #000, 0 0 #000, 0 0 #000, var(--tw-shadow); */
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
            border-color: color-mix(in oklab, #FFF 20%, transparent);
            background-color: #FFF !important;
            z-index: 9999999 !important;
            padding-bottom: 14px;
        }

        .thaps-preloader {
            height: 100%;
            position: absolute;
            right: 0;
            top: 0;
            width: 45px;
            z-index: 1;
            background: none;
            display: none;

        }

        @-webkit-keyframes rotate {

            /* 100% keyframe for  clockwise. 
     use 0% instead for anticlockwise */
            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes bounceDrop {
            0% {
                transform: translateY(15px);
                opacity: 0;
            }

            80% {
                transform: translateY(2px);
                /* thoda neeche */
            }

            100% {
                transform: translateY(0);
            }
        }

        @media screen and (max-width: 767px) {}

        @media screen and (max-width: 767px) {
            div.thaps-autocomplete-suggestions {
                width: 95% !important;
                left: 0 !important;
                right: 0 !important;
                margin: 0 auto !important;
                margin-top: 9px !important;
            }
        }
    </style>
    <style class="bv-critical-css" bv-identifier="th-advance-product-search-front-inline-css" id="th-advance-product-search-front-inline-css">
        .thaps-search-box {
            max-width: 550px;
        }

        #thaps-search-button {
            width: auto;
            font-size: 16px;
            padding: 0px 1rem;

        }

        .thaps-from-wrap,
        input[type='text'].thaps-search-autocomplete,
        .thaps-box-open .thaps-icon-arrow {
            background-color: ;
        }

        .thaps-from-wrap {
            background-color: ;
        }

        input[type='text'].thaps-search-autocomplete,
        input[type='text'].thaps-search-autocomplete::-webkit-input-placeholder {
            color: ;
        }

        #thaps-search-button,
        .thaps-suggestion-more:hover .thaps-content-wrapp {
            background: #000000;
            color: #FFF;
        }

        .thaps-autocomplete-suggestions,
        .thaps-suggestion-more {
            background: ;
        }

        .thaps-autocomplete-suggestions {
            border-color:
        }

        .thaps-autocomplete-suggestions {
            width: 550px !important
        }
    </style>
    <style class="bv-critical-css" bv-identifier="/public/css/themes-top-store-style.css?ver=1.0.0" id="core-store-styles-css">
        html,
        body,
        div,
        span,
        applet,
        object,
        iframe,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        pre,
        a,
        abbr,
        acronym,
        address,
        big,
        cite,
        code,
        del,
        dfn,
        em,
        font,
        ins,
        kbd,
        q,
        s,
        samp,
        small,
        strike,
        strong,
        sub,
        sup,
        tt,
        var,
        dl,
        dt,
        dd,
        ol,
        ul,
        li,
        fieldset,
        form,
        label,
        legend,
        table,
        caption,
        tbody,
        tfoot,
        thead,
        tr,
        th,
        td {
            border: 0;
            font-size: 100%;
            font-style: inherit;
            font-weight: inherit;
            margin: 0;
            outline: 0;
            padding: 0;
            vertical-align: baseline;
        }

        html {
            font-family: sans-serif;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            text-rendering: optimizeLegibility !important;
            -webkit-font-smoothing: antialiased !important;
        }

        article,
        aside,
        footer,
        header,
        nav,
        section {
            display: block;
            clear: both;
        }

        *,
        html,
        body,
        div,
        dl,
        dt,
        dd,
        ul,
        ol,
        li,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        pre,
        form,
        label,
        fieldset,
        input,
        blockquote,
        th,
        td {
            margin: 0;
            padding: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Lato-Bold", sans-serif;
            letter-spacing: 1px;

        }

        h1 {
            font-size: 24px;
            line-height: 38px;
        }

        h2 {
            font-size: 22px;
            line-height: 35px;
        }

        h4 {
            font-size: 18px;
            line-height: 29px;
        }

        a {

            text-decoration: none !important;
            cursor: pointer;
        }

        figcaption,
        main {
            display: block;
            max-width: 100%;
        }

        figure {
            margin: 1em 0;
        }

        a {
            background-color: transparent;
            -webkit-text-decoration-skip: objects;
        }

        a:active,
        a:hover,
        a:visited {
            outline: none;
        }

        a,
        a:hover,
        button {
            text-decoration: none;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        b,
        strong {
            font-weight: inherit;
        }

        code,
        kbd,
        samp {
            font-family: Lato-Regular, monospace;
            font-size: 1em;
        }

        mark {
            background-color: #eee;
            color: #111;
        }

        img {
            border-style: none;
            max-width: 100%;
            height: auto;
        }

        svg:not(:root) {
            overflow: hidden;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: sans-serif;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        button,
        input {
            overflow: visible;
        }

        button,
        select {
            text-transform: none;
        }

        button,
        html [type="button"],
        [type="reset"],
        [type="submit"] {
            -webkit-appearance: button;
        }

        button {
            border: 0;
        }

        [type="search"] {
            -webkit-appearance: textfield;
            outline-offset: -2px;
        }

        [type="search"]::-webkit-search-cancel-button,
        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        th,
        th a,
        dt,
        b,
        strong {
            font-family: 'Lato-Bold', sans-serif;
        }

        .top-store-light a {
            color: #666;
        }

        ul {
            list-style: disc;
        }

        ol,
        ul {
            margin: 0 0 1.5em 3em;
        }

        .top-store-light code,
        .top-store-light kbd,
        .top-store-light pre,
        .top-store-light samp {
            font-size: 1em;
        }

        *,
        :after,
        :before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body.top-store-light {
            color: #666;
            background: #f7f7f7;
            font-style: normal;
            font-size: 13px;
            line-height: 21px;
            letter-spacing: 0.7px;
            margin: 0;
            padding: 0;
            font-family: "Lato-Regular", sans-serif;
            font-weight: inherit;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
            -moz-font-feature-settings: "liga" on;
        }

        .widget_block .wp-block-heading,
        .top-store-widget-content .widget-title {
            margin-bottom: 0.5rem;
        }

        .screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute !important;
            width: 1px;
            word-wrap: normal !important;
            /* Many screen reader and browser combinations announce broken words as they would appear visually. */
        }

        .container {
            position: relative;
            margin-left: auto;
            margin-right: auto;
            padding-left: 20px;
            padding-right: 20px;
            max-width: 1350px;
            width: 100%;
            box-sizing: border-box;
        }

        .top-header-bar,
        .main-header-bar,
        .top-footer-bar,
        .below-footer-bar,
        .widget-footer-wrap,
        .widget-cs-container {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-align-content: center;
            -ms-flex-line-pack: center;
            align-content: center;
        }

        .top-header,
        .main-header,
        .below-header {
            position: relative;
        }

        .top-header .top-header-bar,
        .top-header .top-header-bar a,
        .content-social .social-icon a,
        .top-header-bar .widget.woocommerce .widget-title,
        .top-header-bar .open-widget-content .widget-title,
        .top-header-bar .widget-title,
        .main-header-bar,
        .site-title span a {
            color: #fff;
        }

        .top-store-menu>li>a {
            color: #666;
        }

        .below-header-bar {
            display: flex;
            align-items: center;
        }

        .below-header-col1 {
            width: 18%;
        }

        .below-header-col2 {
            width: 57%;
        }

        .main-header:before,
        .below-header:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #1e2d7d;
        }

        .below-header:before {
            background: #fff;
        }

        .thunk-icon-market {
            display: flex;
            align-items: center;
            float: right;
        }

        .below-header-bar nav {
            padding: 4px 0;
        }

        .mhdrfour .main-header-col1 {
            width: 18%;
        }

        .mhdrfour .main-header-col2 {
            width: 51%;
        }

        .mhdrfour .main-header-col3 {
            width: 31%;
        }

        .mhdrfour .below-header-col1 {
            width: 85%;
            display: flex;
        }

        .mhdrfour .below-header-col2 {
            width: 15%;
        }

        .below-header.mhdrfour .menu-category-list {
            position: relative;
            max-width: 248px;
            display: none;
        }

        .below-header.mhdrfour .menu-category-list ul[data-menu-style="vertical"] {
            position: absolute;
            width: 100%;
            display: none;
            max-width: 248px;
            z-index: 99;
        }

        .below-header.mhdrfour nav {
            width: 100%;
        }

        .header-support-icon .callto-icon svg {
            color: inherit;
            vertical-align: initial !important;
        }

        .main-header-col1 {
            justify-content: flex-start;
            width: 21%;
            padding: 20px 0;
            align-items: center;
            display: inline-flex;
        }

        .main-header-col2 {
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            text-align: center;
            width: 54%;
        }

        .main-header-col3 {
            text-align: right;
            width: 25%;
        }

        .main-area {
            display: flex;
            position: relative;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .primary-content-area {
            box-sizing: border-box;
        }

        .sidebar-main .menu-category-list {
            position: relative;
            display: inline-block;
            width: 100%;
            z-index: 9;
            margin-bottom: 15px;
        }

        .page-content .primary-content-area {
            position: relative;
            min-height: 550px;
        }

        .header-support-wrap {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-align-content: center;
            -ms-flex-line-pack: center;
            align-content: center;
            float: right;
        }

        .header-support-icon {
            color: #fff;
            height: 30px;
            width: 30px;
            line-height: 30px;
            border-radius: 50%;
            text-align: center;
            background-color: #00badb;
            font-size: 15px;
        }

        .header-support-icon .callto-icon,
        .header-support-icon .callto-icon:hover {
            color: #fff;
        }

        .header-support-content {
            text-align: left;
            background: transparent;
            padding: 5px;
            margin-left: 4px;
            color: #000;
        }

        .header-support-content .sprt-tel,
        .header-support-content .sprt-eml {
            display: block;
        }

        .sprt-tel span {
            font-size: 11px;
            font-weight: initial;
            display: block;
        }

        .header-support-content a {
            color: #212121;
            font-weight: bold;
            font-size: 14px;
        }

        .left .main-header-col2 {
            text-align: start;
        }

        .site-title span {
            font-size: 30px;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        .toggle-cat-wrap {
            width: 100%;
            box-sizing: border-box;
            padding: 0px 12px;
            color: #fff;
            border-radius: 3px;
            font-size: 14px;
            height: 49px;
            line-height: 49px;
        }

        .toggle-icon {
            float: right;
        }

        .menu-category-list .toggle-title {
            font-family: 'Lato-Bold', sans-serif;
        }

        .toggle-icon:before,
        .no-sidebar .toggle-icon.icon-circle-arrow-down:before {
            font-family: 'Font Awesome 7 Free';
            content: "\f106";
        }

        .toggle-icon:before,
        .toggle-icon.icon-circle-arrow-down:before,
        .no-sidebar .toggle-icon.icon-circle-arrow-down:before {
            height: auto;
            font-weight: 300;
            text-shadow: none;
            width: 10px;
            font-family: 'FontAwesome';

        }

        .cat-toggle {
            display: flex;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-align-content: center;
            -ms-flex-line-pack: center;
            align-content: center;
        }

        .cat-toggle .toggle-title {
            flex: 12;
            margin-left: 5px;
        }

        .toggle-cat-wrap .cat-icon {
            display: flex;
            align-items: center;
        }

        .menu-category-list ul[data-menu-style="vertical"] {
            width: 100%;
            float: left;
            border: 1px solid #f1f1f1;
            border-top: 0;
            background: #ffffff;
            border-radius: 0;
            position: relative;
        }

        .thunk-product-cat-list li:last-child a {
            border: 0;
        }

        .menu-category-list ul[data-menu-style="vertical"] li {
            float: none;
        }

        .thunk-product-cat-list {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .thunk-product-cat-list li {
            list-style: none;
        }

        .thunk-product-cat-list li {
            display: block;
            margin: 0;
            padding: 0;
            border: 0px;
            float: left;
        }

        .thunk-product-cat-list li a {
            display: block;
            position: relative;
            margin: 0;
            border: 0px;
            text-decoration: none;
            border-bottom: 1px solid #f1f1f1;
            height: auto;
            min-height: 0 !important;
            line-height: 1.8;
            padding: 8px 15px;
            text-decoration: none;
            -webkit-transition: all .4s ease;
            transition: all .4s ease;
            font-size: 13px;
        }

        .thaps-search-box .thaps-search-form {
            margin-left: 30px;
        }

        .header-icon {
            display: flex;
        }

        .cart-icon {
            padding-left: 20px;
        }

        .header-icon>* {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            text-align: left;
            position: relative;
            color: #fff;
            padding: 0px 20px 0px 20px;
            gap: 9px;
        }

        .header-icon>*:first-child {
            padding-left: 0;
        }

        .header-icon>*:last-child {
            padding-right: 0;
        }

        .header-icon:first-child {
            padding-left: 0;
        }

        .top-store-widget-content ul,
        .top-store-widget-content ul li {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .top-store-widget-content {
            padding: 15px;
            margin: 15px 0px;
            border-radius: 6px;
            border: 1px solid #f1f1f1;
            position: relative;
            background: #fff;
        }

        .widget.woocommerce .widget-title,
        .open-widget-content .widget-title,
        .widget-title {
            font-size: 14px;
            color: #111;
            line-height: 21px;
        }

        .widget-title {
            padding-bottom: 10px;
        }

        .top-store-widget-content li a {
            font-weight: 100;
        }

        .top-store-widget-content ul li {
            margin-bottom: 5px;
            padding: 0;
        }

        .woocommerce ul.cart_list li,
        .woocommerce ul.product_list_widget li {
            margin-bottom: 15px;
            padding: 0;
        }

        .woocommerce ul.cart_list li img,
        .woocommerce ul.product_list_widget li img {
            float: left;
            width: 60px;
            margin-left: 0;
            margin-right: 15px;
            border: 1px solid #eee;
        }

        .woocommerce ul.cart_list li a,
        .woocommerce ul.product_list_widget li a {
            font-size: 13px;
            font-weight: normal;
            font-family: "Lato-Bold", sans-serif;
        }

        .widget.woocommerce .product_list_widget .star-rating,
        span.product-title {
            margin-right: 10px;
        }

        .woocommerce ul.cart_list li .woocommerce-Price-amount,
        .woocommerce ul.product_list_widget li .woocommerce-Price-amount {
            font-size: 12px;
            color: #ff0052;
        }

        .woocommerce .star-rating,
        .woocommerce .products .star-rating {
            position: absolute;
            top: 10px;
            right: 10px;
            left: initial;
            font-size: 10px;
            margin: 0 0 0 0;
            text-align: center;
            color: #f4a51c;
            opacity: 0;
            margin-right: auto;
            margin-left: auto;
            margin-bottom: 10px;
            width: 5.7em;
            float: initial;
            -webkit-transition: all .4s ease 0s;
            -moz-transition: all .4s ease 0s;
            -ms-transition: all .4s ease 0s;
            transition: all .4s ease 0s;
        }

        .content-wrap,
        .thunk-banner-wrap,
        .thunk-cat-tab {
            position: relative;
        }

        .thunk-woo-product-list {
            list-style: none;
            text-align: center;
        }

        .thunk-woo-product-list .woocommerce-loop-product__title {
            line-height: 21px;
            font-weight: 400;
            font-size: 14px;
            overflow: hidden;
            margin-bottom: 10px;
            text-align: center;
        }

        .woocommerce .thunk-woo-product-list .price {
            text-decoration: none;
            font-family: "Lato-Regular", sans-serif;
        }

        .thunk-product-image {
            display: block;
            position: relative;
            overflow: hidden;
            margin-bottom: 10px;
        }

        .woocommerce ul.products li.product a img {
            margin: 0;
        }

        .thunk-woo-product-list .thunk-quickview a,
        .thunk-wishlist .yith-wcwl-add-button>a i,
        .thunk-compare .compare-button a:before {
            font-size: 13px;
        }

        .woocommerce ul.products .thunk-product-hover .add_to_cart_button,
        .woocommerce .thunk-product-hover a.th-button,
        .woocommerce ul.products li.product .product_type_variable,
        .woocommerce ul.products li.product a.button.product_type_grouped,
        .woocommerce .thunk-product-hover a.th-button,
        .woocommerce ul.products li.product .add_to_cart_button,
        .woocommerce .added_to_cart.wc-forward {
            width: auto;
            font-family: "Lato-Bold", sans-serif;
            font-weight: normal;
            background-color: transparent;
            text-align: center;
            color: #a7a7a7;
            padding: 0;
            text-indent: 9px;
            font-weight: normal !important;
            margin-top: 0;
            display: inline-block;
            font-size: 12px;
            line-height: 19px;
        }

        .thunk-product-hover .th-button.add_to_cart_button:after,
        .woocommerce ul.products .thunk-product-hover .add_to_cart_button:after,
        .woocommerce ul.products li.product .product_type_variable:after,
        .woocommerce ul.products li.product a.button.product_type_grouped:after,
        .woocommerce .thunk-product-hover a.th-button:after,
        .woocommerce ul.products li.product .add_to_cart_button:after {
            border-radius: 3px;
            font-family: "FontAwesome" !important;
            content: 'x';
            font-size: 14px;
            line-height: initial;
            display: block;
            position: absolute;
            bottom: 0;
            right: initial;
            transform: translateY(-50%);
            left: -5px;
            text-align: center;
            z-index: 9;
            color: #a7a7a7;

            -webkit-transition: all .25s ease 0s;
            -moz-transition: all .25s ease 0s;
            -ms-transition: all .25s ease 0s;
            transition: all .25s ease 0s;
        }

        .thunk-product-hover a.add_to_cart_button,
        .thunk-product-hover a.added_to_cart,
        .woocommerce .thunk-product-hover a.th-button {
            padding: 3px 9px 3px 15px !important;
            border-radius: 3px;
        }

        .thunk-wishlist,
        .thunk-compare,
        .thunk-quik {
            width: 32px;
            height: 32px;
            line-height: 32px;
            display: inline-flex;
            background: #f7f7f7;
            color: #111;
            border-radius: 50%;
            margin: 0 3px;
            text-align: center;
            position: relative;
            justify-content: center;
        }

        .thunk-wishlist a,
        .thunk-compare a,
        .thunk-quik a {
            font-size: 14px;
            color: #111;
        }

        .thunk-icons-wrap {
            width: 90%;
            position: absolute;
            top: initial;
            bottom: 10px;
            left: 50%;
            transform: translate(-50%, 0);
            display: flex;
            justify-content: space-between;
            background: transparent;
            justify-content: center;
            border: 0;
            border-radius: 3px;
            padding: 3px 0;
            opacity: 0;
            -webkit-transition: all .4s ease 0s;
            -moz-transition: all .4s ease 0s;
            -ms-transition: all .4s ease 0s;
            transition: all .4s ease 0s;
        }

        .thunk-product-hover {
            position: absolute;
            display: block;
            left: 0;
            right: 0;
            top: 108%;
            background: #fff;
            padding-bottom: 15px;
            -webkit-transform: translate(0, 20px);
            -ms-transform: translate(0, 20px);
            -o-transform: translate(0, 20px);
            transform: translate(0, 20px);
            opacity: 0;
            visibility: hidden;
            border-radius: 0 0 3px 3px;
            -webkit-transition: all .4s ease 0s;
            -moz-transition: all .4s ease 0s;
            -ms-transition: all .4s ease 0s;
            transition: all .4s ease 0s;
        }

        .thunk-product {
            /*padding: 8px;*/
            border: 1px solid transparent;
            background: #fff;
            -webkit-transition: all .7s ease 0s;
            -moz-transition: all .7s ease 0s;
            -ms-transition: all .7s ease 0s;
            transition: all .7s ease 0s;
        }

        .os-product-excerpt {
            text-align: left;
            display: none;
        }

        .woocommerce ul.products li.product.thunk-woo-product-list .price,
        .woocommerce .thunk-woo-product-list .price {
            font-size: 14px;
            color: #2e6ed5;
            order: 3;
            margin-bottom: 7px;
        }

        .woocommerce ul.products li.product .woocommerce-loop-category__title,
        .woocommerce ul.products li.product .woocommerce-loop-product__title,
        .woocommerce ul.products li.product h3 {
            line-height: 21px;
            font-size: 14px;
            font-family: "Lato-Bold", sans-serif;
            color: #111;
            padding: 0;
            text-align: center;
            margin: 0 0 10px 0;
            letter-spacing: 0.5px;
        }

        .woocommerce ul.products li.product,
        .woocommerce-page ul.products li.product {
            float: left;
            position: relative;
            margin: 0px 2% 20px 0px;
            padding: 0px;
        }

        .woocommerce ul.products li.last,
        .woocommerce-page ul.products li.last {
            margin-right: 0;
        }

        .woocommerce ul.products.columns-4 li.product,
        .woocommerce-page ul.products.columns-4 li.product {
            width: 23.5%;
        }

        .thunk-breadcrumb {
            padding-bottom: 15px;
            list-style: none;
            margin: 0;
            text-align: right;
        }

        .thunk-breadcrumb li {
            display: inline;
            font-size: 11px;
        }

        input[type="text"],
        input[type="email"],
        input[type="url"],
        textarea,
        input[type="password"],
        input[type="tel"],
        input[type="search"] {
            border: 1px solid #eaeaea;
            border-radius: 0;
            font-size: 13px;
            line-height: 30px;
            padding: 0 10px;
            -webkit-appearance: none;
            appearance: none;
            width: 100%;
        }

        .entry-content p {
            margin: 17px 0 0 0;
            line-height: 1.8;
        }

        .alignleft {
            float: left;
            margin: 5px 20px 20px 0;
        }

        .screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute !important;
            width: 1px;
            word-wrap: normal !important;
            /* Many screen reader and browser combinations announce broken words as they would appear visually. */
        }

        [hidden] {
            display: none;
        }

        .thunk-page .thunk-content-wrap {
            padding: 15px;
            background: #fff;
            margin-bottom: 20px;
        }

        .page-head {
            padding-bottom: 20px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-align-content: center;
            -ms-flex-line-pack: center;
            align-content: center;
        }

        .page-head h1 {
            color: #111;
            font-size: 21px;
            line-height: 28px;
        }

        .page-head .breadcrumb-trail.breadcrumbs {
            flex: 1;
        }

        .thunk-breadcrumb {
            padding-bottom: 0;
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .thunk-woo-product-list .woocommerce-loop-product__title {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
            line-height: 21px;
            max-height: 21px;
        }

        span.product-title {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
            line-height: 21px;
            max-height: 42px;
        }

        .primary-content-area {
            width: 65%;
            margin-right: 1.5%;
            margin-left: 1.5%;
            order: 2;
        }

        .sidebar-content-area {
            width: 16%;
        }

        #sidebar-primary {
            order: 1;
        }

        #sidebar-secondary {
            order: 3;
        }

        #sidebar-secondary .top-store-widget-content:first-child {
            margin-top: 0;
        }

        .woocommerce .thunk-list-view ul.products li.product .add_to_cart_button,
        .woocommerce ul.products li.product .product_type_variable {
            margin-left: 0;
        }

        .wp-element-button {
            padding: 5px 12px;
        }

        .wp-block-search .wp-block-search__label {
            margin-bottom: 16px;
            display: block;
        }

        .wp-element-button,
        .wp-block-button__link {
            outline-offset: 2px;
        }

        .cat-toggle svg {
            font-size: 21px;
        }

        @media screen and (max-width: 1300px) {}

        @media screen and (max-width: 1300px) {
            .header-icon span {
                font-size: 8px;
            }
        }

        @media screen and (max-width: 1200px) {}

        @media screen and (max-width: 1200px) {
            .below-header-col2 {
                width: 52%;
            }
        }

        @media screen and (max-width: 1200px) {
            .primary-content-area {
                width: 57%;
            }
        }

        @media screen and (max-width: 1200px) {

            .sidebar-content-area,
            .sidebar-2 {
                width: 20%;
            }
        }

        @media screen and (max-width: 1200px) {

            .thunk-wishlist,
            .thunk-compare,
            .thunk-quik {
                width: 25px;
                height: 25px;
                line-height: 25px;
            }
        }

        @media screen and (max-width: 1200px) {

            .thunk-woo-product-list .woocommerce-loop-product__title,
            .thunk-woo-product-list .woocommerce-loop-product__title a,
            .thunk-list .thunk-product-content .woocommerce-LoopProduct-title,
            .thunk-cat-title a {
                font-size: 12px;
                line-height: 19px;
            }
        }

        @media screen and (max-width: 1200px) {

            .thunk-wishlist,
            .thunk-compare,
            .thunk-quik {
                margin: 0 2px;
            }
        }

        @media screen and (max-width: 1024px) {}

        @media screen and (max-width: 1024px) {

            .menu-toggle svg path,
            .menu-btn svg path {
                stroke-width: 1.5px;
            }
        }

        @media screen and (max-width: 1024px) {
            .header-icon a {
                padding: 0 20px;
            }
        }

        @media screen and (max-width: 1024px) {
            .thunk-product-hover {
                position: relative;
                transform: translate(0);
                -webkit-transform:
                    translate(0);
                -ms-transform:
                    translate(0);
                -o-transform:
                    translate(0);
                opacity: 1;
                visibility: visible;
                padding-bottom: 10px;
                top: 0;
                border: 0;
            }
        }

        @media screen and (max-width: 1024px) {
            .thunk-quik {
                display: none;
            }
        }

        @media screen and (max-width: 1024px) {
            .mhdrfour .main-header-col1 {
                width: 21%;
            }
        }

        @media screen and (max-width: 1024px) {
            .mhdrfour .main-header-col2 {
                width: 54%;
            }
        }

        @media screen and (max-width: 1024px) {
            .mhdrfour .main-header-col3 {
                width: 25%;
            }
        }

        @media screen and (max-width: 1024px) {
            .below-header.mhdrfour .below-header-col1 {
                width: 30%;
            }
        }

        @media screen and (max-width: 1024px) {
            .below-header.mhdrfour .below-header-col2 {
                width: 70%;
            }
        }

        @media screen and (max-width: 1024px) {
            .below-header.mhdrfour nav {
                width: auto;
            }
        }

        @media screen and (max-width: 1024px) {
            .below-header.mhdrfour .below-header-col1 nav {
                align-self: center;
            }
        }

        @media screen and (max-width: 1024px) {
            .thunk-icons-wrap {
                opacity: 1;
            }
        }

        @media screen and (max-width: 1024px) {
            .thunk-icons-wrap {
                bottom: 5px;
            }
        }

        @media screen and (max-width: 1024px) {

            .woocommerce ul.products li.product.thunk-woo-product-list .price,
            .woocommerce .thunk-woo-product-list .price {
                margin-bottom: 5px !important;
            }
        }

        @media screen and (min-width: 768px) and (max-width: 980px) {

            .sidebar-content-area,
            .below-header-col1 {
                width: 27%;
            }

            .primary-content-area {
                width: 70.5%;

            }

            #search-button {
                width: 45px;
            }

            .search-wrapper #search-button {
                width: 65px;
            }

            .thunk-highlight-col {
                width: 50%;
            }

            .thunk-highlight-col:nth-child(3n+3) {
                border-right: 1px solid #e4e9ef;
            }

            .thunk-highlight-col:nth-child(2n+2) {
                border: none
            }

            .thunk-icon-market {
                justify-content: space-around;
            }
        }

        @media screen and (max-width: 990px) {}

        @media screen and (max-width: 990px) {
            .below-header.mhdrfour .menu-category-list {
                display: block;
            }
        }

        @media screen and (max-width: 990px) {

            .primary-content-area,
            .sidebar-content-area,
            .sidebar-2,
            .front .disable-left-sidebar .primary-content-area,
            .page-content .disable-left-sidebar .primary-content-area,
            .front .disable-left-sidebar .sidebar-content-area,
            .page-content .disable-left-sidebar .sidebar-content-area,
            .front .disable-right-sidebar .primary-content-area,
            .page-content .disable-right-sidebar .primary-content-area,
            .front .disable-right-sidebar .sidebar-content-area,
            .page-content .disable-right-sidebar .sidebar-content-area {
                width: 100%;
                margin: 0;
            }
        }

        @media screen and (max-width: 990px) {
            .primary-content-area {
                order: 1;
            }
        }

        @media screen and (max-width: 990px) {
            .below-header.mhdrfour .below-header-col1 {
                width: auto;
                justify-content: space-between;
                margin: 5px 0;
                flex-grow: 2;
            }
        }

        @media screen and (max-width: 990px) {
            .below-header.mhdrfour .below-header-col2 {
                width: auto;
                margin-left: 0;
            }
        }

        @media screen and (max-width: 990px) {
            .below-header.mhdrfour .header-support-content {
                display: none;
            }
        }

        @media screen and (max-width: 990px) {
            .below-header.mhdrfour .toggle-icon {
                display: none;
            }
        }

        @media screen and (max-width: 990px) {
            .below-header.mhdrfour .toggle-cat-wrap {
                height: 35px;
                line-height: 35px;
                border-radius: 3px;
            }
        }

        @media screen and (max-width: 795px) {}

        @media screen and (max-width: 795px) {
            .below-header-col1 {
                width: auto;
            }
        }

        @media screen and (max-width: 795px) {
            .cat-toggle {
                display: inline-flex;
            }
        }

        @media screen and (max-width: 795px) {
            .below-header-col2 {
                width: 57%;
                float: left;
                margin-left: 10px;
            }
        }

        @media screen and (max-width: 768px) {}

        @media screen and (max-width: 768px) {
            h1 {
                font-size: 22px;
                line-height: 36px;
            }
        }

        @media screen and (max-width: 768px) {
            h2 {
                font-size: 20px;
                line-height: 33px;
            }
        }

        @media screen and (max-width: 768px) {

            .woocommerce ul.products[class*=columns-] li.product,
            .woocommerce-page ul.products[class*=columns-] li.product {
                width: 49.5%;
                float: left;
                clear: both;
                margin: 0 0 0.5em;
            }
        }

        @media screen and (max-width: 768px) {
            .page-head .breadcrumb-trail.breadcrumbs {
                flex: inherit;
            }
        }

        @media screen and (max-width: 768px) {
            .page-head h1 {
                width: 100%;
            }
        }

        @media screen and (max-width: 767px) {}

        @media screen and (max-width: 767px) {

            .tapsp-search-box,
            .thaps-search-box {
                max-width: 100% !important;
            }
        }

        @media screen and (max-width: 767px) {
            .thaps-search-box .thaps-search-form {
                margin-left: 0;
            }
        }

        @media screen and (max-width: 767px) {
            .main-header-col2 {
                width: 100% !important;
                margin: 10px 0;
                order: 3;
            }
        }

        @media screen and (max-width: 767px) {
            .main-header-col1 {
                width: 50% !important;
                order: 1;
            }
        }

        @media screen and (max-width: 767px) {
            .main-header-col3 {
                width: 50% !important;
                order: 2;
            }
        }

        @media screen and (max-width: 767px) {

            .header-icon,
            .cart-icon {
                width: auto;
                padding: 0;
                margin-right: 10px;
            }
        }

        @media screen and (max-width: 767px) {
            .thunk-icon-market .header-icon {
                margin: 0;
            }
        }

        @media screen and (max-width: 767px) {
            .site-title span {
                font-size: 20px;
            }
        }

        @media screen and (max-width: 767px) {
            .logo-content .thunk-logo {
                width: 60%;
            }
        }

        @media screen and (max-width: 767px) {
            .container {
                padding-left: 10px;
                padding-right: 10px;
            }
        }

        @media screen and (max-width: 767px) {
            .container {
                padding-left: 10px;
                padding-right: 10px;
            }
        }

        @media screen and (max-width: 767px) {
            .main-header-col1 {
                padding: 10px 0px;
                width: 50%;
                order: 1
            }
        }

        @media screen and (max-width: 767px) {
            .header-support-icon {
                width: 35px;
                height: 35px;
                line-height: 35px;
                font-size: 18px;
            }
        }

        @media screen and (max-width: 767px) {
            .primary-content-area {
                width: 100%;
                margin: 0;
            }
        }

        @media screen and (max-width: 767px) {
            .below-header-col2 {
                width: 45%;
            }
        }

        @media screen and (max-width: 767px) {
            h2 {
                font-size: 15px;
                line-height: 21px;
            }
        }

        @media screen and (max-width: 767px) {
            .entry-content p {
                margin-bottom: 10px;
                line-height: 1.8;
                font-size: 12px;
            }
        }

        @media screen and (max-width: 767px) {
            h1 {
                font-size: 20px;
                line-height: 26px;
            }
        }

        @media screen and (max-width: 767px) {
            body {
                font-size: 12px;
            }
        }

        @media screen and (max-width: 767px) {

            .woocommerce ul.products[class*=columns-] li.product,
            .woocommerce-page ul.products[class*=columns-] li.product {
                width: 49%;
            }
        }

        @media screen and (max-width: 767px) {

            .thunk-page-top-title,
            .thunk-founder-title {
                font-size: 21px;
                line-height: 32px;
            }
        }

        @media screen and (max-width: 767px) {
            .cart-icon {
                margin-left: 0;
                margin-right: 0;
            }
        }
    </style>
    <style class="bv-critical-css" bv-identifier="core-store-styles-inline-css" id="core-store-styles-inline-css">
        .top-store-light a:hover,
        .top-store-menu li a:hover,
        .top-store-menu .current-menu-item a,
        .sticky-header-col2 .top-store-menu li a:hover,
        .woocommerce .thunk-woo-product-list .price,
        .thunk-product-hover .th-button.add_to_cart_button,
        .woocommerce ul.products .thunk-product-hover .add_to_cart_button,
        .woocommerce ul.products li.product .product_type_variable,
        .woocommerce ul.products li.product a.button.product_type_grouped,
        .thunk-compare .compare-button a:hover,
        .thunk-product-hover .th-button.add_to_cart_button:hover,
        .woocommerce ul.products .thunk-product-hover .add_to_cart_button :hover,
        .woocommerce .thunk-product-hover a.th-button:hover,
        .thunk-product .yith-wcwl-wishlistexistsbrowse.show:before,
        .thunk-product .yith-wcwl-wishlistaddedbrowse.show:before,
        .woocommerce ul.products li.product.thunk-woo-product-list .price,
        .summary .yith-wcwl-add-to-wishlist.show .add_to_wishlist::before,
        .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse.show a::before,
        .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse.show a::before,
        .woocommerce .entry-summary a.compare.button.added:before,
        .header-icon a:hover,
        .thunk-related-links .nav-links a:hover,
        .woocommerce .thunk-list-view ul.products li.product.thunk-woo-product-list .price,
        .woocommerce .woocommerce-error .button,
        .woocommerce .woocommerce-info .button,
        .woocommerce .woocommerce-message .button,
        .thunk-wishlist a:hover,
        .thunk-compare a:hover,
        .thunk-quik a:hover,
        .woocommerce ul.cart_list li .woocommerce-Price-amount,
        .woocommerce ul.product_list_widget li .woocommerce-Price-amount,
        .top-store-load-more button,
        .page-contact .leadform-show-form label,
        .thunk-contact-col .fa,
        .woocommerce .thunk-product-hover a.th-button:hover:after,
        ul.products .thunk-product-hover .add_to_cart_button:hover,
        .woocommerce .thunk-product-hover a.th-button:hover,
        .woocommerce ul.products li.product .product_type_variable:hover,
        .woocommerce ul.products li.product a.button.product_type_grouped:hover,
        .woocommerce .thunk-product-hover a.th-button:hover,
        .woocommerce ul.products li.product .add_to_cart_button:hover,
        .woocommerce .added_to_cart.wc-forward:hover,
        ul.products .thunk-product-hover .add_to_cart_button:hover:after,
        .woocommerce .thunk-product-hover a.th-button:hover:after,
        .woocommerce ul.products li.product .product_type_variable:hover:after,
        .woocommerce ul.products li.product a.button.product_type_grouped:hover:after,
        .woocommerce .thunk-product-hover a.th-button:hover:after,
        .woocommerce ul.products li.product .add_to_cart_button:hover:after,
        .woocommerce .added_to_cart.wc-forward:hover:after,
        .summary .yith-wcwl-add-to-wishlist .add_to_wishlist:hover:before,
        .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a::before,
        .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a::before,
        .th-hlight-icon,
        .ribbon-btn:hover,
        .thunk-product .yith-wcwl-wishlistexistsbrowse:before,
        .woocommerce .entry-summary a.compare.button:hover:before,
        .th-slide-button,
        .th-slide-button:after,
        .sider.overcenter .sider-inner ul.top-store-menu li a:hover,
        .reply a,
        .single-product .product_meta a,
        .woosw-btn:hover:before,
        .woosw-added:before,
        .wooscp-btn:hover:before,
        #top-store-mobile-bar .count-item,
        a.th-product-compare-btn.button.btn_type.th-added-compare:before,
        .thunk-product-list-section .thunk-list .thunk-product-content .woocommerce-LoopProduct-title:hover {
            color: #990055
        }

        .toggle-cat-wrap,
        #search-button,
        .thunk-icon .cart-icon,
        .single_add_to_cart_button.button.alt,
        .woocommerce #respond input#submit.alt,
        .woocommerce a.button.alt,
        .woocommerce button.button.alt,
        .woocommerce input.button.alt,
        .woocommerce #respond input#submit,
        .woocommerce button.button,
        .woocommerce input.button,
        .cat-list a:after,
        .tagcloud a:hover,
        .thunk-tags-wrapper a:hover,
        .btn-main-header,
        .page-contact .leadform-show-form input[type='submit'],
        .woocommerce .widget_price_filter .top-store-widget-content .ui-slider .ui-slider-range,
        .woocommerce .widget_price_filter .top-store-widget-content .ui-slider .ui-slider-handle,
        .entry-content form.post-password-form input[type='submit'],
        #top-store-mobile-bar a,
        .header-support-icon,
        .count-item,
        .nav-links .page-numbers.current,
        .nav-links .page-numbers:hover,
        .woocommerce .thunk-woo-product-list span.onsale,
        .top-store-site section.thunk-ribbon-section .content-wrap:before,
        .woocommerce .return-to-shop a.button,
        .widget_product_search [type='submit']:hover,
        .comment-form .form-submit [type='submit'],
        .top-store-slide-post .owl-nav button.owl-prev:hover,
        .top-store-slide-post .owl-nav button.owl-next:hover,
        body.top-store-dark .top-store-slide-post .owl-nav button.owl-prev:hover,
        body.top-store-dark .top-store-slide-post .owl-nav button.owl-next:hover {
            background: #990055
        }

        .thunk-product-hover .th-button.add_to_cart_button,
        .woocommerce ul.products .thunk-product-hover .add_to_cart_button,
        .woocommerce ul.products li.product .product_type_variable,
        .woocommerce ul.products li.product a.button.product_type_grouped,
        .open-cart p.buttons a:hover,
        .top-store-slide-post .owl-nav button.owl-prev:hover,
        .top-store-slide-post .owl-nav button.owl-next:hover,
        body .woocommerce-tabs .tabs li a::before,
        .thunk-list-grid-switcher a.selected,
        .thunk-list-grid-switcher a:hover,
        .woocommerce .woocommerce-error .button,
        .woocommerce .woocommerce-info .button,
        .woocommerce .woocommerce-message .button,
        #searchform [type='submit']:hover,
        .top-store-load-more button,
        .thunk-top2-slide.owl-carousel .owl-nav button:hover,
        .product-slide-widget .owl-carousel .owl-nav button:hover,
        .thunk-slide.thunk-brand .owl-nav button:hover,
        .page-contact .leadform-show-form input[type='submit'],
        .widget_product_search [type='submit']:hover,
        .thunk-slide .owl-nav button.owl-prev:hover,
        .thunk-slide .owl-nav button.owl-next:hover,
        body.top-store-dark .thunk-slide.owl-carousel .owl-nav button.owl-prev:hover,
        body.top-store-dark .thunk-slide.owl-carousel .owl-nav button.owl-next:hover,
        body.top-store-dark .top-store-slide-post .owl-nav button.owl-prev:hover,
        body.top-store-dark .top-store-slide-post .owl-nav button.owl-next:hover,
        .th-testimonial .owl-carousel .owl-nav button.owl-prev:hover,
        .th-testimonial .owl-carousel .owl-nav button.owl-next:hover {
            border-color: #990055
        }

        .main-header:before,
        body.top-store-dark .main-header:before {
            background: #ff84f2;
        }
    </style>
    <style class="bv-critical-css" id="wc-blocks-style-css">
        @keyframes wc-skeleton-shimmer {
            to {
                transform: translateX(100%)
            }
        }

        .screen-reader-text {
            clip: rect(1px, 1px, 1px, 1px);
            word-wrap: normal !important;
            border: 0;
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            overflow-wrap: normal !important;
            padding: 0;
            position: absolute !important;
            width: 1px
        }

        @keyframes wc-skeleton-shimmer {
            to {
                transform: translateX(100%)
            }
        }
    </style>
    <style class="bv-critical-css"  id="wc-blocks-style-featured-product-css">
        @keyframes wc-skeleton-shimmer {
            to {
                transform: translateX(100%)
            }
        }
    </style>
    <style class="bv-critical-css" bv-identifier="core-block-supports-inline-css" id="core-block-supports-inline-css">
        .wp-block-gallery.wp-block-gallery-1 {
            --wp--style--unstable-gallery-gap: var(--wp--style--gallery-gap-default, var(--gallery-block--gutter-size, var(--wp--style--block-gap, 0.5em)));
            gap: var(--wp--style--gallery-gap-default, var(--gallery-block--gutter-size, var(--wp--style--block-gap, 0.5em)));
        }
    </style>
    <style class="bv-critical-css">
        #ays_tooltip,
        .ays_tooltip_class {
            display: none;
            position: absolute;
            z-index: 999999999;
            background-color: #ffffff;

            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            opacity: ;
            border: 1px solid #b7b7b7;
            border-radius: 3px;
            box-shadow: rgba(0, 0, 0, 0) 0px 0px 15px 1px;
            color: #ff0000;
            padding: 5px 5px;
            text-transform: none;
            ;
        }

        @media screen and (max-width: 768px) {}

        @media screen and (max-width: 768px) {

            #ays_tooltip,
            .ays_tooltip_class {
                font-size: 12px;
            }
        }
    </style>
    <style class="bv-critical-css">
        *:not(input):not(textarea)::selection {
            background-color: transparent !important;
            color: inherit !important;
        }
    </style>

<link rel="stylesheet" id="wc-blocks-style-css" media="all" href="/public/css/wc-blocks.css" /> 
<link rel="stylesheet" id="wc-blocks-style-featured-product-css" media="all" href="/public/css/featured-product.css" /> 
<link rel="stylesheet" id="th-icon-css-css" media="all" href="/public/css/0eb236d896f2ae9d991c21a4ef9326c7.css" /> 
<!--style rel="stylesheet" id="secure-copy-content-protection-public-css" media="all" >
    #ays_tooltip{width:auto;padding:3px;box-sizing:border-box;word-break:keep-all;-webkit-hyphens:none;white-space:nowrap}#ays_tooltip.center_center{position:fixed;top:50%;left:50%;transform:translate(-50%,-50%)}#ays_tooltip.left_top{position:fixed;left:1rem;top:1rem;bottom:auto;right:auto}#ays_tooltip.left_bottom{position:fixed;left:1rem;top:auto;bottom:1rem;right:auto}#ays_tooltip.right_top{position:fixed;left:auto;top:1rem;bottom:auto;right:1rem}#ays_tooltip.right_bottom{position:fixed;left:auto;top:auto;bottom:1rem;right:1rem}#ays_tooltip p{margin:0;padding:0}#ays_noscript{position:fixed;width:100%;height:100%;background:#fff;top:0;left:0;z-index:99998;overflow:auto;padding:90px;justify-content:center}.wrong_shortcode_text::first-letter{color:red!important;background-color:transparent!important;font-size:inherit!important;font-weight:inherit!important;float:none!important;line-height:inherit!important;margin:0!important;padding:0!important}
    </style-->
<link rel="stylesheet" id="woocommerce-layout-css" media="all" href="/public/css/woocommerce-layout.css" /> 
<link rel="stylesheet" id="woocommerce-smallscreen-css" media="only screen and (max-width: 768px)" href="/public/css/woocommerce-smallscreen.css" /> 
<link rel="stylesheet" id="woocommerce-general-css" media="all" href="/public/css/woocommerce.css" /> 
<link rel="stylesheet" id="font-awesome-css" media="all" href="/public/css/c950727ce9c9e057352b5b2ebb66cd1a.css" /> 
<link rel="stylesheet" id="th-icon-css" media="all" href="/public/css/3240008b0553280006067a3fe8066824.css" /> 
<link rel="stylesheet" id="animate-css" media="all" href="/public/css/3e426b6a0d09d7cc44d456a7f973f47d.css" /> 
<link rel="stylesheet" id="top-store-menu-css" media="all" href="/public/css/40059a7a5f7a7fcb4b335071c71aad74.css" /> 
<style rel="stylesheet" id="top-store-style-css" media="all"  >
article.thunk-post-article.post{
    float:left;
    width:49%;
    clear:none;
    margin-right:2%;
    }
    article.thunk-post-article.post:nth-child(2n+2){
    margin-right:0;
    }</style>
<link rel="stylesheet" id="dashicons-css" media="all" href="/public/css/37637319d8c07f1bca23d91da9fcbb6a.css" /> 
<link rel="stylesheet" id="top-store-quick-view-css" media="all" href="/public/css/3f41f72db71c81262c042e06c8b74521.css" /> 
<link rel="stylesheet" id="th-advance-product-search-front-css" media="all" href="/public/css/thaps-front-style.css" /> 
<link rel="stylesheet" id="core-store-styles-css" media="all" href="/public/css/4efa3c9c2d38b7afd52041fc05fdc358.css" /> 

 
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- <script data-wp-strategy="" id="jquery-migrate-js" src="/public/js/jquery.migrate.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
<script data-wp-strategy="" id="th-advance-product-search-front-js" src="/public/js/11365fd503a63b24db9c22a2edc107ce.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
<script data-wp-strategy="" id="jquery-effects-core-js" src="/public/js/effect.min.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
<script data-wp-strategy="" id="jquery-ui-core-js" src="/public/js/core.min.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
<script data-wp-strategy="" id="jquery-ui-menu-js" src="/public/js/menu.min.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
<script data-wp-strategy="" id="wp-dom-ready-js" src="/public/js/dom-ready.min.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
<script data-wp-strategy="" id="wp-hooks-js" src="/public/js/hooks.min.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
<script data-wp-strategy="" id="wp-i18n-js" src="/public/js/i18n.min.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
<script data-wp-strategy="" id="wp-a11y-js" src="/public/js/a11y.min.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
<script data-wp-strategy="" id="jquery-ui-autocomplete-js" src="/public/js/autocomplete.min.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
<script data-wp-strategy="" id="imagesloaded-js" src="/public/js/6823120876c9afc8929418c9a6f8e343.js?ver=5.0.0" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
<script data-wp-strategy="" id="top-store-menu-js-js" src="/public/js/99a5ceaffbdf358820a4155d0cae5d21.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
<script data-wp-strategy="" id="sticky-sidebar-js-js" src="/public/js/c32dee66efebcc8e84e78529dd2bf190.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
<script data-wp-strategy="" id="top-store-accordian-menu-js-js" src="/public/js/9884c41b6276febf9698200fca611bac.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
<script data-wp-strategy="" id="top-store-custom-js-js" src="/public/js/5764f33c4732d403911b8813be8e7d76.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
<script data-wp-strategy="" id="top-store-woocommerce-js-js" src="/public/js/21bcd3575649b1ec2577d20468442d9f.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
<script data-wp-strategy="" id="top-store-quick-view-js" src="/public/js/66375dc8e83ec81ab3f09906748d3ff4.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
<script data-wp-strategy="" id="sourcebuster-js-js" src="/public/js/sourcebuster.min.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
<script data-wp-strategy="" id="wc-order-attribution-js" src="/public/js/order-attribution.min.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
<script data-wp-strategy="" id="underscore-js" src="/public/js/3ec876f71dece6821b9fd2a03d87c211.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
<script data-wp-strategy="" id="wp-util-js" src="/public/js/01e9588ab46b7a3947aab8945549c7ea.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
<script data-wp-strategy="defer" id="wc-jquery-blockui-js" src="/public/js/jquery.blockUI.min.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
  
<script data-wp-strategy="defer" id="woocommerce-js" src="/public/js/woocommerce.min.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
 
<script data-wp-strategy="defer" id="wc-flexslider-js" src="/public/js/jquery.flexslider.min.js" defer="true" data-cfasync="false" async="false" bv_inline_delayed="false" ></script>
<script data-wp-strategy="" id="bv-trigger-listener" src="data:text/javascript;base64, ZnVuY3Rpb24gYnZfdHJpZ2dlcl9haXJsaWZ0X2V2ZW50KHRhcmdldCwgZXZlbnRfdHlwZSkgewoKICBpZiAoZXZlbnRfdHlwZSA9PT0gInJlYWR5c3RhdGVjaGFuZ2UiKSB7CiAgICBpZiAoYnZfc3RhdGVfY291bnRlciA9PT0gMCkgewogICAgICBidl9zdGF0ZV9jb3VudGVyICs9IDEKICAgICAgYnZfY3VzdG9tX3JlYWR5X3N0YXRlX3ZhbHVlID0gImludGVyYWN0aXZlIgogICAgfSBlbHNlIGlmKGJ2X3N0YXRlX2NvdW50ZXIgPT09IDEpIHsKICAgICAgYnZfc3RhdGVfY291bnRlciArPSAxCiAgICAgIGJ2X2N1c3RvbV9yZWFkeV9zdGF0ZV92YWx1ZSA9ICJjb21wbGV0ZSIKICAgIH0KICB9CgogIGxldCBldmVudF9uYW1lID0gIkFpcmxpZnQiICsgZXZlbnRfdHlwZTsKICBsZXQgc3ludGhldGljRXZlbnQgPSBuZXcgRXZlbnQoZXZlbnRfbmFtZSwgeyBidWJibGVzOiB0cnVlIH0pOwoKICBPYmplY3QuZGVmaW5lUHJvcGVydHkoc3ludGhldGljRXZlbnQsICJ0eXBlIiwgeyBnZXQ6IGZ1bmN0aW9uICgpIHsgcmV0dXJuIGV2ZW50X3R5cGU7IH0sIHNldDogZnVuY3Rpb24gKCkgeyB9IH0pOwogIE9iamVjdC5kZWZpbmVQcm9wZXJ0eShzeW50aGV0aWNFdmVudCwgInRhcmdldCIsIHsgZ2V0OiBmdW5jdGlvbiAoKSB7IHJldHVybiB0YXJnZXQ7IH0sIHNldDogZnVuY3Rpb24gKCkgeyB9IH0pOwoKICB0YXJnZXQuZGlzcGF0Y2hFdmVudChzeW50aGV0aWNFdmVudCk7Cn0KCmZ1bmN0aW9uIGJ2X2Rpc3BhdGNoRGVsYXllZEV2ZW50cygpIHsKICAgIGJ2X3RyaWdnZXJfYWlybGlmdF9ldmVudChkb2N1bWVudCwgInJlYWR5c3RhdGVjaGFuZ2UiKTsKICAgIGJ2X3RyaWdnZXJfYWlybGlmdF9ldmVudChkb2N1bWVudCwgIkRPTUNvbnRlbnRMb2FkZWQiKTsKCiAgICBzZXRUaW1lb3V0KCgpID0+IHsKICAgICAgICBidl90cmlnZ2VyX2FpcmxpZnRfZXZlbnQoZG9jdW1lbnQsICJyZWFkeXN0YXRlY2hhbmdlIik7CgogICAgICAgIHNldFRpbWVvdXQoKCkgPT4gewogICAgICAgICAgICBidl90cmlnZ2VyX2FpcmxpZnRfZXZlbnQod2luZG93LCAibG9hZCIpOwogICAgICAgICAgICBidl90cmlnZ2VyX2FpcmxpZnRfZXZlbnQod2luZG93LCAicGFnZXNob3ciKTsKICAgICAgICB9LCAwKTsKICAgIH0sIDApOwp9Cgp2YXIgYnZfc3RhdGVfY291bnRlciA9IDAKCmJ2X2Rpc3BhdGNoRGVsYXllZEV2ZW50cygpOwoK" defer="true" data-cfasync="" async="false" bv_inline_delayed="" ></script>
 
         -->




 
   

    <style id="wp-img-auto-sizes-contain-inline-css" type="bv_inline_delayed_css">
        img:is([sizes=auto i],[sizes^="auto," i]){contain-intrinsic-size:3000px 1500px}
/*# sourceURL=wp-img-auto-sizes-contain-inline-css */
</style>
    <style id="wp-emoji-styles-inline-css" type="bv_inline_delayed_css">

        img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
/*# sourceURL=wp-emoji-styles-inline-css */
</style>
    <style id="wp-block-library-inline-css" type="bv_inline_delayed_css">
        :root{--wp-block-synced-color:#7a00df;--wp-block-synced-color--rgb:122,0,223;--wp-bound-block-color:var(--wp-block-synced-color);--wp-editor-canvas-background:#ddd;--wp-admin-theme-color:#007cba;--wp-admin-theme-color--rgb:0,124,186;--wp-admin-theme-color-darker-10:#006ba1;--wp-admin-theme-color-darker-10--rgb:0,107,160.5;--wp-admin-theme-color-darker-20:#005a87;--wp-admin-theme-color-darker-20--rgb:0,90,135;--wp-admin-border-width-focus:2px}@media (min-resolution:192dpi){:root{--wp-admin-border-width-focus:1.5px}}.wp-element-button{cursor:pointer}:root .has-very-light-gray-background-color{background-color:#eee}:root .has-very-dark-gray-background-color{background-color:#313131}:root .has-very-light-gray-color{color:#eee}:root .has-very-dark-gray-color{color:#313131}:root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background{background:linear-gradient(135deg,#00d084,#0693e3)}:root .has-purple-crush-gradient-background{background:linear-gradient(135deg,#34e2e4,#4721fb 50%,#ab1dfe)}:root .has-hazy-dawn-gradient-background{background:linear-gradient(135deg,#faaca8,#dad0ec)}:root .has-subdued-olive-gradient-background{background:linear-gradient(135deg,#fafae1,#67a671)}:root .has-atomic-cream-gradient-background{background:linear-gradient(135deg,#fdd79a,#004a59)}:root .has-nightshade-gradient-background{background:linear-gradient(135deg,#330968,#31cdcf)}:root .has-midnight-gradient-background{background:linear-gradient(135deg,#020381,#2874fc)}:root{--wp--preset--font-size--normal:16px;--wp--preset--font-size--huge:42px}.has-regular-font-size{font-size:1em}.has-larger-font-size{font-size:2.625em}.has-normal-font-size{font-size:var(--wp--preset--font-size--normal)}.has-huge-font-size{font-size:var(--wp--preset--font-size--huge)}:root .has-text-align-center{text-align:center}:root .has-text-align-left{text-align:left}:root .has-text-align-right{text-align:right}.has-fit-text{white-space:nowrap!important}#end-resizable-editor-section{display:none}.aligncenter{clear:both}.items-justified-left{justify-content:flex-start}.items-justified-center{justify-content:center}.items-justified-right{justify-content:flex-end}.items-justified-space-between{justify-content:space-between}.screen-reader-text{word-wrap:normal!important;border:0;clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;word-break:normal!important}.screen-reader-text:focus{background-color:#ddd;clip-path:none;color:#444;display:block;font-size:1em;height:auto;left:5px;line-height:normal;padding:15px 23px 14px;text-decoration:none;top:5px;width:auto;z-index:100000}html :where(.has-border-color){border-style:solid}html :where([style^=border-color],[style*=";border-color"],[style*="; border-color"]){border-style:solid}html :where([style^=border-top-color],[style*=";border-top-color"],[style*="; border-top-color"]){border-top-style:solid}html :where([style^=border-right-color],[style*=";border-right-color"],[style*="; border-right-color"]){border-right-style:solid}html :where([style^=border-bottom-color],[style*=";border-bottom-color"],[style*="; border-bottom-color"]){border-bottom-style:solid}html :where([style^=border-left-color],[style*=";border-left-color"],[style*="; border-left-color"]){border-left-style:solid}html :where([style^=border-width],[style*=";border-width"],[style*="; border-width"]){border-style:solid}html :where([style^=border-top-width],[style*=";border-top-width"],[style*="; border-top-width"]){border-top-style:solid}html :where([style^=border-right-width],[style*=";border-right-width"],[style*="; border-right-width"]){border-right-style:solid}html :where([style^=border-bottom-width],[style*=";border-bottom-width"],[style*="; border-bottom-width"]){border-bottom-style:solid}html :where([style^=border-left-width],[style*=";border-left-width"],[style*="; border-left-width"]){border-left-style:solid}html :where(img[class*=wp-image-]){height:auto;max-width:100%}:where(figure){margin:0 0 1em}html :where(.is-position-sticky){--wp-admin--admin-bar--position-offset:var(--wp-admin--admin-bar--height,0px)}@media screen and (max-width:600px){html :where(.is-position-sticky){--wp-admin--admin-bar--position-offset:0px}}

/*# sourceURL=/wp-includes/css/dist/block-library/common.min.css */
</style>
    <style id="wp-block-button-inline-css" type="bv_inline_delayed_css">
        .wp-block-button__link{align-content:center;box-sizing:border-box;cursor:pointer;display:inline-block;height:100%;text-align:center;word-break:break-word}.wp-block-button__link.aligncenter{text-align:center}.wp-block-button__link.alignright{text-align:right}:where(.wp-block-button__link){border-radius:9999px;box-shadow:none;padding:calc(.667em + 2px) calc(1.333em + 2px);text-decoration:none}.wp-block-button[style*=text-decoration] .wp-block-button__link{text-decoration:inherit}.wp-block-buttons>.wp-block-button.has-custom-width{max-width:none}.wp-block-buttons>.wp-block-button.has-custom-width .wp-block-button__link{width:100%}.wp-block-buttons>.wp-block-button.has-custom-font-size .wp-block-button__link{font-size:inherit}.wp-block-buttons>.wp-block-button[class*=wp-block-button__width]{width:calc(var(--wp--block-button--width)*1% - var(--wp--style--block-gap, .5em)*(1 - var(--wp--block-button--width)/100))}.wp-block-buttons>.wp-block-button.wp-block-button__width-25{width:calc(25% - var(--wp--style--block-gap, .5em)*.75)}.wp-block-buttons>.wp-block-button.wp-block-button__width-50{width:calc(50% - var(--wp--style--block-gap, .5em)*.5)}.wp-block-buttons>.wp-block-button.wp-block-button__width-75{width:calc(75% - var(--wp--style--block-gap, .5em)*.25)}.wp-block-buttons>.wp-block-button.wp-block-button__width-100{flex-basis:100%;width:100%}.wp-block-buttons.is-vertical>.wp-block-button[class*=wp-block-button__width]{width:calc(var(--wp--block-button--width)*1%)}.wp-block-buttons.is-vertical>.wp-block-button.wp-block-button__width-25{width:25%}.wp-block-buttons.is-vertical>.wp-block-button.wp-block-button__width-50{width:50%}.wp-block-buttons.is-vertical>.wp-block-button.wp-block-button__width-75{width:75%}.wp-block-button.is-style-squared,.wp-block-button__link.wp-block-button.is-style-squared{border-radius:0}.wp-block-button.no-border-radius,.wp-block-button__link.no-border-radius{border-radius:0!important}:root :where(.wp-block-button .wp-block-button__link.is-style-outline),:root :where(.wp-block-button.is-style-outline>.wp-block-button__link){border:2px solid;padding:.667em 1.333em}:root :where(.wp-block-button .wp-block-button__link.is-style-outline:not(.has-text-color)),:root :where(.wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color)){color:currentColor}:root :where(.wp-block-button .wp-block-button__link.is-style-outline:not(.has-background)),:root :where(.wp-block-button.is-style-outline>.wp-block-button__link:not(.has-background)){background-color:transparent;background-image:none} 
</style>
    <style id="wp-block-gallery-inline-css" type="bv_inline_delayed_css">
        .blocks-gallery-grid:not(.has-nested-images),.wp-block-gallery:not(.has-nested-images){display:flex;flex-wrap:wrap;list-style-type:none;margin:0;padding:0}.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item{display:flex;flex-direction:column;flex-grow:1;justify-content:center;margin:0 1em 1em 0;position:relative;width:calc(50% - 1em)}.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image:nth-of-type(2n),.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item:nth-of-type(2n),.wp-block-gallery:not(.has-nested-images) .blocks-gallery-image:nth-of-type(2n),.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item:nth-of-type(2n){margin-right:0}.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image figure,.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item figure,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-image figure,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item figure{align-items:flex-end;display:flex;height:100%;justify-content:flex-start;margin:0}.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image img,.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item img,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-image img,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item img{display:block;height:auto;max-width:100%;width:auto}.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image figcaption,.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item figcaption,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-image figcaption,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item figcaption{background:linear-gradient(0deg,rgba(0,0,0,.7),rgba(0,0,0,.3) 70%,transparent);bottom:0;box-sizing:border-box;color:#fff;font-size:.8em;margin:0;max-height:100%;overflow:auto;padding:3em .77em .7em;position:absolute;text-align:center;width:100%;z-index:2}.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image figcaption img,.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item figcaption img,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-image figcaption img,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item figcaption img{display:inline}.blocks-gallery-grid:not(.has-nested-images) figcaption,.wp-block-gallery:not(.has-nested-images) figcaption{flex-grow:1}.blocks-gallery-grid:not(.has-nested-images).is-cropped .blocks-gallery-image a,.blocks-gallery-grid:not(.has-nested-images).is-cropped .blocks-gallery-image img,.blocks-gallery-grid:not(.has-nested-images).is-cropped .blocks-gallery-item a,.blocks-gallery-grid:not(.has-nested-images).is-cropped .blocks-gallery-item img,.wp-block-gallery:not(.has-nested-images).is-cropped .blocks-gallery-image a,.wp-block-gallery:not(.has-nested-images).is-cropped .blocks-gallery-image img,.wp-block-gallery:not(.has-nested-images).is-cropped .blocks-gallery-item a,.wp-block-gallery:not(.has-nested-images).is-cropped .blocks-gallery-item img{flex:1;height:100%;-o-object-fit:cover;object-fit:cover;width:100%}.blocks-gallery-grid:not(.has-nested-images).columns-1 .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images).columns-1 .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images).columns-1 .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images).columns-1 .blocks-gallery-item{margin-right:0;width:100%}@media (min-width:600px){.blocks-gallery-grid:not(.has-nested-images).columns-3 .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images).columns-3 .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images).columns-3 .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images).columns-3 .blocks-gallery-item{margin-right:1em;width:calc(33.33333% - .66667em)}.blocks-gallery-grid:not(.has-nested-images).columns-4 .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images).columns-4 .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images).columns-4 .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images).columns-4 .blocks-gallery-item{margin-right:1em;width:calc(25% - .75em)}.blocks-gallery-grid:not(.has-nested-images).columns-5 .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images).columns-5 .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images).columns-5 .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images).columns-5 .blocks-gallery-item{margin-right:1em;width:calc(20% - .8em)}.blocks-gallery-grid:not(.has-nested-images).columns-6 .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images).columns-6 .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images).columns-6 .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images).columns-6 .blocks-gallery-item{margin-right:1em;width:calc(16.66667% - .83333em)}.blocks-gallery-grid:not(.has-nested-images).columns-7 .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images).columns-7 .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images).columns-7 .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images).columns-7 .blocks-gallery-item{margin-right:1em;width:calc(14.28571% - .85714em)}.blocks-gallery-grid:not(.has-nested-images).columns-8 .blocks-gallery-image,.blocks-gallery-grid:not(.has-nested-images).columns-8 .blocks-gallery-item,.wp-block-gallery:not(.has-nested-images).columns-8 .blocks-gallery-image,.wp-block-gallery:not(.has-nested-images).columns-8 .blocks-gallery-item{margin-right:1em;width:calc(12.5% - .875em)}.blocks-gallery-grid:not(.has-nested-images).columns-1 .blocks-gallery-image:nth-of-type(1n),.blocks-gallery-grid:not(.has-nested-images).columns-1 .blocks-gallery-item:nth-of-type(1n),.blocks-gallery-grid:not(.has-nested-images).columns-2 .blocks-gallery-image:nth-of-type(2n),.blocks-gallery-grid:not(.has-nested-images).columns-2 .blocks-gallery-item:nth-of-type(2n),.blocks-gallery-grid:not(.has-nested-images).columns-3 .blocks-gallery-image:nth-of-type(3n),.blocks-gallery-grid:not(.has-nested-images).columns-3 .blocks-gallery-item:nth-of-type(3n),.blocks-gallery-grid:not(.has-nested-images).columns-4 .blocks-gallery-image:nth-of-type(4n),.blocks-gallery-grid:not(.has-nested-images).columns-4 .blocks-gallery-item:nth-of-type(4n),.blocks-gallery-grid:not(.has-nested-images).columns-5 .blocks-gallery-image:nth-of-type(5n),.blocks-gallery-grid:not(.has-nested-images).columns-5 .blocks-gallery-item:nth-of-type(5n),.blocks-gallery-grid:not(.has-nested-images).columns-6 .blocks-gallery-image:nth-of-type(6n),.blocks-gallery-grid:not(.has-nested-images).columns-6 .blocks-gallery-item:nth-of-type(6n),.blocks-gallery-grid:not(.has-nested-images).columns-7 .blocks-gallery-image:nth-of-type(7n),.blocks-gallery-grid:not(.has-nested-images).columns-7 .blocks-gallery-item:nth-of-type(7n),.blocks-gallery-grid:not(.has-nested-images).columns-8 .blocks-gallery-image:nth-of-type(8n),.blocks-gallery-grid:not(.has-nested-images).columns-8 .blocks-gallery-item:nth-of-type(8n),.wp-block-gallery:not(.has-nested-images).columns-1 .blocks-gallery-image:nth-of-type(1n),.wp-block-gallery:not(.has-nested-images).columns-1 .blocks-gallery-item:nth-of-type(1n),.wp-block-gallery:not(.has-nested-images).columns-2 .blocks-gallery-image:nth-of-type(2n),.wp-block-gallery:not(.has-nested-images).columns-2 .blocks-gallery-item:nth-of-type(2n),.wp-block-gallery:not(.has-nested-images).columns-3 .blocks-gallery-image:nth-of-type(3n),.wp-block-gallery:not(.has-nested-images).columns-3 .blocks-gallery-item:nth-of-type(3n),.wp-block-gallery:not(.has-nested-images).columns-4 .blocks-gallery-image:nth-of-type(4n),.wp-block-gallery:not(.has-nested-images).columns-4 .blocks-gallery-item:nth-of-type(4n),.wp-block-gallery:not(.has-nested-images).columns-5 .blocks-gallery-image:nth-of-type(5n),.wp-block-gallery:not(.has-nested-images).columns-5 .blocks-gallery-item:nth-of-type(5n),.wp-block-gallery:not(.has-nested-images).columns-6 .blocks-gallery-image:nth-of-type(6n),.wp-block-gallery:not(.has-nested-images).columns-6 .blocks-gallery-item:nth-of-type(6n),.wp-block-gallery:not(.has-nested-images).columns-7 .blocks-gallery-image:nth-of-type(7n),.wp-block-gallery:not(.has-nested-images).columns-7 .blocks-gallery-item:nth-of-type(7n),.wp-block-gallery:not(.has-nested-images).columns-8 .blocks-gallery-image:nth-of-type(8n),.wp-block-gallery:not(.has-nested-images).columns-8 .blocks-gallery-item:nth-of-type(8n){margin-right:0}}.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-image:last-child,.blocks-gallery-grid:not(.has-nested-images) .blocks-gallery-item:last-child,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-image:last-child,.wp-block-gallery:not(.has-nested-images) .blocks-gallery-item:last-child{margin-right:0}.blocks-gallery-grid:not(.has-nested-images).alignleft,.blocks-gallery-grid:not(.has-nested-images).alignright,.wp-block-gallery:not(.has-nested-images).alignleft,.wp-block-gallery:not(.has-nested-images).alignright{max-width:420px;width:100%}.blocks-gallery-grid:not(.has-nested-images).aligncenter .blocks-gallery-item figure,.wp-block-gallery:not(.has-nested-images).aligncenter .blocks-gallery-item figure{justify-content:center}.wp-block-gallery:not(.is-cropped) .blocks-gallery-item{align-self:flex-start}figure.wp-block-gallery.has-nested-images{align-items:normal}.wp-block-gallery.has-nested-images figure.wp-block-image:not(#individual-image){margin:0;width:calc(50% - var(--wp--style--unstable-gallery-gap, 16px)/2)}.wp-block-gallery.has-nested-images figure.wp-block-image{box-sizing:border-box;display:flex;flex-direction:column;flex-grow:1;justify-content:center;max-width:100%;position:relative}.wp-block-gallery.has-nested-images figure.wp-block-image>a,.wp-block-gallery.has-nested-images figure.wp-block-image>div{flex-direction:column;flex-grow:1;margin:0}.wp-block-gallery.has-nested-images figure.wp-block-image img{display:block;height:auto;max-width:100%!important;width:auto}.wp-block-gallery.has-nested-images figure.wp-block-image figcaption,.wp-block-gallery.has-nested-images figure.wp-block-image:has(figcaption):before{bottom:0;left:0;max-height:100%;position:absolute;right:0}.wp-block-gallery.has-nested-images figure.wp-block-image:has(figcaption):before{backdrop-filter:blur(3px);content:"";height:100%;-webkit-mask-image:linear-gradient(0deg,#000 20%,transparent);mask-image:linear-gradient(0deg,#000 20%,transparent);max-height:3em;pointer-events:none}.wp-block-gallery.has-nested-images figure.wp-block-image figcaption{box-sizing:border-box;color:#fff;font-size:13px;margin:0;overflow:auto;padding:1em;text-align:center;text-shadow:0 0 1.5px #000}.wp-block-gallery.has-nested-images figure.wp-block-image figcaption::-webkit-scrollbar{height:12px;width:12px}.wp-block-gallery.has-nested-images figure.wp-block-image figcaption::-webkit-scrollbar-track{background-color:transparent}.wp-block-gallery.has-nested-images figure.wp-block-image figcaption::-webkit-scrollbar-thumb{background-clip:padding-box;background-color:transparent;border:3px solid transparent;border-radius:8px}.wp-block-gallery.has-nested-images figure.wp-block-image figcaption:focus-within::-webkit-scrollbar-thumb,.wp-block-gallery.has-nested-images figure.wp-block-image figcaption:focus::-webkit-scrollbar-thumb,.wp-block-gallery.has-nested-images figure.wp-block-image figcaption:hover::-webkit-scrollbar-thumb{background-color:hsla(0,0%,100%,.8)}.wp-block-gallery.has-nested-images figure.wp-block-image figcaption{scrollbar-color:transparent transparent;scrollbar-gutter:stable both-edges;scrollbar-width:thin}.wp-block-gallery.has-nested-images figure.wp-block-image figcaption:focus,.wp-block-gallery.has-nested-images figure.wp-block-image figcaption:focus-within,.wp-block-gallery.has-nested-images figure.wp-block-image figcaption:hover{scrollbar-color:hsla(0,0%,100%,.8) transparent}.wp-block-gallery.has-nested-images figure.wp-block-image figcaption{will-change:transform}@media (hover:none){.wp-block-gallery.has-nested-images figure.wp-block-image figcaption{scrollbar-color:hsla(0,0%,100%,.8) transparent}}.wp-block-gallery.has-nested-images figure.wp-block-image figcaption{background:linear-gradient(0deg,rgba(0,0,0,.4),transparent)}.wp-block-gallery.has-nested-images figure.wp-block-image figcaption img{display:inline}.wp-block-gallery.has-nested-images figure.wp-block-image figcaption a{color:inherit}.wp-block-gallery.has-nested-images figure.wp-block-image.has-custom-border img{box-sizing:border-box}.wp-block-gallery.has-nested-images figure.wp-block-image.has-custom-border>a,.wp-block-gallery.has-nested-images figure.wp-block-image.has-custom-border>div,.wp-block-gallery.has-nested-images figure.wp-block-image.is-style-rounded>a,.wp-block-gallery.has-nested-images figure.wp-block-image.is-style-rounded>div{flex:1 1 auto}.wp-block-gallery.has-nested-images figure.wp-block-image.has-custom-border figcaption,.wp-block-gallery.has-nested-images figure.wp-block-image.is-style-rounded figcaption{background:none;color:inherit;flex:initial;margin:0;padding:10px 10px 9px;position:relative;text-shadow:none}.wp-block-gallery.has-nested-images figure.wp-block-image.has-custom-border:before,.wp-block-gallery.has-nested-images figure.wp-block-image.is-style-rounded:before{content:none}.wp-block-gallery.has-nested-images figcaption{flex-basis:100%;flex-grow:1;text-align:center}.wp-block-gallery.has-nested-images:not(.is-cropped) figure.wp-block-image:not(#individual-image){margin-bottom:auto;margin-top:0}.wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image){align-self:inherit}.wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image)>a,.wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image)>div:not(.components-drop-zone){display:flex}.wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image) a,.wp-block-gallery.has-nested-images.is-cropped figure.wp-block-image:not(#individual-image) img{flex:1 0 0%;height:100%;-o-object-fit:cover;object-fit:cover;width:100%}.wp-block-gallery.has-nested-images.columns-1 figure.wp-block-image:not(#individual-image){width:100%}@media (min-width:600px){.wp-block-gallery.has-nested-images.columns-3 figure.wp-block-image:not(#individual-image){width:calc(33.33333% - var(--wp--style--unstable-gallery-gap, 16px)*.66667)}.wp-block-gallery.has-nested-images.columns-4 figure.wp-block-image:not(#individual-image){width:calc(25% - var(--wp--style--unstable-gallery-gap, 16px)*.75)}.wp-block-gallery.has-nested-images.columns-5 figure.wp-block-image:not(#individual-image){width:calc(20% - var(--wp--style--unstable-gallery-gap, 16px)*.8)}.wp-block-gallery.has-nested-images.columns-6 figure.wp-block-image:not(#individual-image){width:calc(16.66667% - var(--wp--style--unstable-gallery-gap, 16px)*.83333)}.wp-block-gallery.has-nested-images.columns-7 figure.wp-block-image:not(#individual-image){width:calc(14.28571% - var(--wp--style--unstable-gallery-gap, 16px)*.85714)}.wp-block-gallery.has-nested-images.columns-8 figure.wp-block-image:not(#individual-image){width:calc(12.5% - var(--wp--style--unstable-gallery-gap, 16px)*.875)}.wp-block-gallery.has-nested-images.columns-default figure.wp-block-image:not(#individual-image){width:calc(33.33% - var(--wp--style--unstable-gallery-gap, 16px)*.66667)}.wp-block-gallery.has-nested-images.columns-default figure.wp-block-image:not(#individual-image):first-child:nth-last-child(2),.wp-block-gallery.has-nested-images.columns-default figure.wp-block-image:not(#individual-image):first-child:nth-last-child(2)~figure.wp-block-image:not(#individual-image){width:calc(50% - var(--wp--style--unstable-gallery-gap, 16px)*.5)}.wp-block-gallery.has-nested-images.columns-default figure.wp-block-image:not(#individual-image):first-child:last-child{width:100%}}.wp-block-gallery.has-nested-images.alignleft,.wp-block-gallery.has-nested-images.alignright{max-width:420px;width:100%}.wp-block-gallery.has-nested-images.aligncenter{justify-content:center}
 
</style>
    <style id="wp-block-gallery-theme-inline-css" type="bv_inline_delayed_css">
        .blocks-gallery-caption{color:#555;font-size:13px;text-align:center}.is-dark-theme .blocks-gallery-caption{color:hsla(0,0%,100%,.65)} 
</style>
    <style id="wp-block-heading-inline-css" type="bv_inline_delayed_css">
        h1:where(.wp-block-heading).has-background,h2:where(.wp-block-heading).has-background,h3:where(.wp-block-heading).has-background,h4:where(.wp-block-heading).has-background,h5:where(.wp-block-heading).has-background,h6:where(.wp-block-heading).has-background{padding:1.25em 2.375em}h1.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h1.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h2.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h2.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h3.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h3.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h4.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h4.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h5.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h5.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]),h6.has-text-align-left[style*=writing-mode]:where([style*=vertical-lr]),h6.has-text-align-right[style*=writing-mode]:where([style*=vertical-rl]){rotate:180deg}
 
</style>
    <style id="wp-block-image-inline-css" type="bv_inline_delayed_css">
        .wp-block-image>a,.wp-block-image>figure>a{display:inline-block}.wp-block-image img{box-sizing:border-box;height:auto;max-width:100%;vertical-align:bottom}@media not (prefers-reduced-motion){.wp-block-image img.hide{visibility:hidden}.wp-block-image img.show{animation:show-content-image .4s}}.wp-block-image[style*=border-radius] img,.wp-block-image[style*=border-radius]>a{border-radius:inherit}.wp-block-image.has-custom-border img{box-sizing:border-box}.wp-block-image.aligncenter{text-align:center}.wp-block-image.alignfull>a,.wp-block-image.alignwide>a{width:100%}.wp-block-image.alignfull img,.wp-block-image.alignwide img{height:auto;width:100%}.wp-block-image .aligncenter,.wp-block-image .alignleft,.wp-block-image .alignright,.wp-block-image.aligncenter,.wp-block-image.alignleft,.wp-block-image.alignright{display:table}.wp-block-image .aligncenter>figcaption,.wp-block-image .alignleft>figcaption,.wp-block-image .alignright>figcaption,.wp-block-image.aligncenter>figcaption,.wp-block-image.alignleft>figcaption,.wp-block-image.alignright>figcaption{caption-side:bottom;display:table-caption}.wp-block-image .alignleft{float:left;margin:.5em 1em .5em 0}.wp-block-image .alignright{float:right;margin:.5em 0 .5em 1em}.wp-block-image .aligncenter{margin-left:auto;margin-right:auto}.wp-block-image :where(figcaption){margin-bottom:1em;margin-top:.5em}.wp-block-image.is-style-circle-mask img{border-radius:9999px}@supports ((-webkit-mask-image:none) or (mask-image:none)) or (-webkit-mask-image:none){.wp-block-image.is-style-circle-mask img{border-radius:0;-webkit-mask-image:url('data:image/svg+xml;utf8,<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"/></svg>');mask-image:url('data:image/svg+xml;utf8,<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"/></svg>');mask-mode:alpha;-webkit-mask-position:center;mask-position:center;-webkit-mask-repeat:no-repeat;mask-repeat:no-repeat;-webkit-mask-size:contain;mask-size:contain}}:root :where(.wp-block-image.is-style-rounded img,.wp-block-image .is-style-rounded img){border-radius:9999px}.wp-block-image figure{margin:0}.wp-lightbox-container{display:flex;flex-direction:column;position:relative}.wp-lightbox-container img{cursor:zoom-in}.wp-lightbox-container img:hover+button{opacity:1}.wp-lightbox-container button{align-items:center;backdrop-filter:blur(16px) saturate(180%);background-color:rgba(90,90,90,.25);border:none;border-radius:4px;cursor:zoom-in;display:flex;height:20px;justify-content:center;opacity:0;padding:0;position:absolute;right:16px;text-align:center;top:16px;width:20px;z-index:100}@media not (prefers-reduced-motion){.wp-lightbox-container button{transition:opacity .2s ease}}.wp-lightbox-container button:focus-visible{outline:3px auto rgba(90,90,90,.25);outline:3px auto -webkit-focus-ring-color;outline-offset:3px}.wp-lightbox-container button:hover{cursor:pointer;opacity:1}.wp-lightbox-container button:focus{opacity:1}.wp-lightbox-container button:focus,.wp-lightbox-container button:hover,.wp-lightbox-container button:not(:hover):not(:active):not(.has-background){background-color:rgba(90,90,90,.25);border:none}.wp-lightbox-overlay{box-sizing:border-box;cursor:zoom-out;height:100vh;left:0;overflow:hidden;position:fixed;top:0;visibility:hidden;width:100%;z-index:100000}.wp-lightbox-overlay .wp-lightbox-close-button{align-items:center;cursor:pointer;display:flex;font-family:inherit;gap:8px;justify-content:center;line-height:1;min-height:40px;min-width:40px;padding:0 4px;position:absolute;right:calc(env(safe-area-inset-right) + 16px);top:calc(env(safe-area-inset-top) + 16px);z-index:5000000}.wp-lightbox-overlay .wp-lightbox-close-button:focus,.wp-lightbox-overlay .wp-lightbox-close-button:hover,.wp-lightbox-overlay .wp-lightbox-close-button:not(:hover):not(:active):not(.has-background){background:none;border:none}.wp-lightbox-overlay .wp-lightbox-close-button:has(.wp-lightbox-close-text:not([hidden])) .wp-lightbox-close-icon svg{height:1em;width:1em}.wp-lightbox-overlay .wp-lightbox-close-icon svg{display:block}.wp-lightbox-overlay .wp-lightbox-navigation-button-next,.wp-lightbox-overlay .wp-lightbox-navigation-button-prev{align-items:center;bottom:16px;cursor:pointer;display:flex;font-family:inherit;gap:4px;justify-content:center;line-height:1;min-height:40px;min-width:40px;padding:0 8px;position:absolute;z-index:2000002}.wp-lightbox-overlay .wp-lightbox-navigation-button-next[hidden],.wp-lightbox-overlay .wp-lightbox-navigation-button-prev[hidden]{display:none}@media (min-width:960px){.wp-lightbox-overlay .wp-lightbox-navigation-button-next,.wp-lightbox-overlay .wp-lightbox-navigation-button-prev{bottom:50%;transform:translateY(-50%)}}.wp-lightbox-overlay .wp-lightbox-navigation-button-next:focus,.wp-lightbox-overlay .wp-lightbox-navigation-button-next:hover,.wp-lightbox-overlay .wp-lightbox-navigation-button-next:not(:hover):not(:active):not(.has-background),.wp-lightbox-overlay .wp-lightbox-navigation-button-prev:focus,.wp-lightbox-overlay .wp-lightbox-navigation-button-prev:hover,.wp-lightbox-overlay .wp-lightbox-navigation-button-prev:not(:hover):not(:active):not(.has-background){background:none;border:none;padding:0 8px}.wp-lightbox-overlay .wp-lightbox-navigation-button-next:has(.wp-lightbox-navigation-text:not([hidden])) .wp-lightbox-navigation-icon svg,.wp-lightbox-overlay .wp-lightbox-navigation-button-prev:has(.wp-lightbox-navigation-text:not([hidden])) .wp-lightbox-navigation-icon svg{display:block;height:1.5em;width:1.5em}.wp-lightbox-overlay .wp-lightbox-navigation-button-prev{left:calc(env(safe-area-inset-left) + 16px)}.wp-lightbox-overlay .wp-lightbox-navigation-button-next{right:calc(env(safe-area-inset-right) + 16px)}.wp-lightbox-overlay .wp-lightbox-navigation-icon svg{vertical-align:middle}.wp-lightbox-overlay .lightbox-image-container{height:var(--wp--lightbox-container-height);left:50%;overflow:hidden;position:absolute;top:50%;transform:translate(-50%,-50%);transform-origin:top left;width:var(--wp--lightbox-container-width);z-index:2000001}.wp-lightbox-overlay .wp-block-image{align-items:center;box-sizing:border-box;display:flex;height:100%;justify-content:center;margin:0;position:relative;transform-origin:0 0;width:100%;z-index:3000000}.wp-lightbox-overlay .wp-block-image img{height:var(--wp--lightbox-image-height);min-height:var(--wp--lightbox-image-height);min-width:var(--wp--lightbox-image-width);width:var(--wp--lightbox-image-width)}.wp-lightbox-overlay .wp-block-image figcaption{display:none}.wp-lightbox-overlay button{background:none;border:none}.wp-lightbox-overlay .scrim{background-color:#fff;height:100%;opacity:.9;position:absolute;width:100%;z-index:2000000}.wp-lightbox-overlay.active{visibility:visible}@media not (prefers-reduced-motion){.wp-lightbox-overlay.active{animation:turn-on-visibility .25s both}.wp-lightbox-overlay.active img{animation:turn-on-visibility .35s both}.wp-lightbox-overlay.show-closing-animation:not(.active){animation:turn-off-visibility .35s both}.wp-lightbox-overlay.show-closing-animation:not(.active) img{animation:turn-off-visibility .25s both}.wp-lightbox-overlay.zoom.active{animation:none;opacity:1;visibility:visible}.wp-lightbox-overlay.zoom.active .lightbox-image-container{animation:lightbox-zoom-in .4s}.wp-lightbox-overlay.zoom.active .lightbox-image-container img{animation:none}.wp-lightbox-overlay.zoom.active .scrim{animation:turn-on-visibility .4s forwards}.wp-lightbox-overlay.zoom.show-closing-animation:not(.active){animation:none}.wp-lightbox-overlay.zoom.show-closing-animation:not(.active) .lightbox-image-container{animation:lightbox-zoom-out .4s}.wp-lightbox-overlay.zoom.show-closing-animation:not(.active) .lightbox-image-container img{animation:none}.wp-lightbox-overlay.zoom.show-closing-animation:not(.active) .scrim{animation:turn-off-visibility .4s forwards}}@keyframes show-content-image{0%{visibility:hidden}99%{visibility:hidden}to{visibility:visible}}@keyframes turn-on-visibility{0%{opacity:0}to{opacity:1}}@keyframes turn-off-visibility{0%{opacity:1;visibility:visible}99%{opacity:0;visibility:visible}to{opacity:0;visibility:hidden}}@keyframes lightbox-zoom-in{0%{transform:translate(calc((-100vw + var(--wp--lightbox-scrollbar-width))/2 + var(--wp--lightbox-initial-left-position)),calc(-50vh + var(--wp--lightbox-initial-top-position))) scale(var(--wp--lightbox-scale))}to{transform:translate(-50%,-50%) scale(1)}}@keyframes lightbox-zoom-out{0%{transform:translate(-50%,-50%) scale(1);visibility:visible}99%{visibility:visible}to{transform:translate(calc((-100vw + var(--wp--lightbox-scrollbar-width))/2 + var(--wp--lightbox-initial-left-position)),calc(-50vh + var(--wp--lightbox-initial-top-position))) scale(var(--wp--lightbox-scale));visibility:hidden}} 
</style>
    <style id="wp-block-image-theme-inline-css" type="bv_inline_delayed_css">
        :root :where(.wp-block-image figcaption){color:#555;font-size:13px;text-align:center}.is-dark-theme :root :where(.wp-block-image figcaption){color:hsla(0,0%,100%,.65)}.wp-block-image{margin:0 0 1em} 
</style>
    <style id="wp-block-page-list-inline-css" type="bv_inline_delayed_css">
        .wp-block-navigation .wp-block-page-list{align-items:var(--navigation-layout-align,initial);background-color:inherit;display:flex;flex-direction:var(--navigation-layout-direction,initial);flex-wrap:var(--navigation-layout-wrap,wrap);justify-content:var(--navigation-layout-justify,initial)}.wp-block-navigation .wp-block-navigation-item{background-color:inherit}.wp-block-page-list{box-sizing:border-box} 
</style>
    <style id="wp-block-paragraph-inline-css" type="bv_inline_delayed_css">
        .is-small-text{font-size:.875em}.is-regular-text{font-size:1em}.is-large-text{font-size:2.25em}.is-larger-text{font-size:3em}.has-drop-cap:not(:focus):first-letter{float:left;font-size:8.4em;font-style:normal;font-weight:100;line-height:.68;margin:.05em .1em 0 0;text-transform:uppercase}body.rtl .has-drop-cap:not(:focus):first-letter{float:none;margin-left:.1em}p.has-drop-cap.has-background{overflow:hidden}:root :where(p.has-background){padding:1.25em 2.375em}:where(p.has-text-color:not(.has-link-color)) a{color:inherit}p.has-text-align-left[style*="writing-mode:vertical-lr"],p.has-text-align-right[style*="writing-mode:vertical-rl"]{rotate:180deg} 
</style>
    <style id="wp-block-buttons-inline-css" type="bv_inline_delayed_css">
        .wp-block-buttons{box-sizing:border-box}.wp-block-buttons.is-vertical{flex-direction:column}.wp-block-buttons.is-vertical>.wp-block-button:last-child{margin-bottom:0}.wp-block-buttons>.wp-block-button{display:inline-block;margin:0}.wp-block-buttons.is-content-justification-left{justify-content:flex-start}.wp-block-buttons.is-content-justification-left.is-vertical{align-items:flex-start}.wp-block-buttons.is-content-justification-center{justify-content:center}.wp-block-buttons.is-content-justification-center.is-vertical{align-items:center}.wp-block-buttons.is-content-justification-right{justify-content:flex-end}.wp-block-buttons.is-content-justification-right.is-vertical{align-items:flex-end}.wp-block-buttons.is-content-justification-space-between{justify-content:space-between}.wp-block-buttons.aligncenter{text-align:center}.wp-block-buttons:not(.is-content-justification-space-between,.is-content-justification-right,.is-content-justification-left,.is-content-justification-center) .wp-block-button.aligncenter{margin-left:auto;margin-right:auto;width:100%}.wp-block-buttons[style*=text-decoration] .wp-block-button,.wp-block-buttons[style*=text-decoration] .wp-block-button__link{text-decoration:inherit}.wp-block-buttons.has-custom-font-size .wp-block-button__link{font-size:inherit}.wp-block-buttons .wp-block-button__link{width:100%}.wp-block-button.aligncenter{text-align:center} 
</style>
    <style id="wp-block-search-inline-css" type="bv_inline_delayed_css">
        .wp-block-search__button{margin-left:10px;word-break:normal}.wp-block-search__button.has-icon{line-height:0}.wp-block-search__button svg{fill:currentColor;height:1.25em;min-height:24px;min-width:24px;vertical-align:text-bottom;width:1.25em}:where(.wp-block-search__button){border:1px solid #ccc;padding:6px 10px}.wp-block-search__inside-wrapper{display:flex;flex:auto;flex-wrap:nowrap;max-width:100%}.wp-block-search__label{width:100%}.wp-block-search.wp-block-search__button-only .wp-block-search__button{box-sizing:border-box;display:flex;flex-shrink:0;justify-content:center;margin-left:0;max-width:100%}.wp-block-search.wp-block-search__button-only .wp-block-search__inside-wrapper{min-width:0!important;transition-property:width}.wp-block-search.wp-block-search__button-only .wp-block-search__input{flex-basis:100%;transition-duration:.3s}.wp-block-search.wp-block-search__button-only.wp-block-search__searchfield-hidden,.wp-block-search.wp-block-search__button-only.wp-block-search__searchfield-hidden .wp-block-search__inside-wrapper{overflow:hidden}.wp-block-search.wp-block-search__button-only.wp-block-search__searchfield-hidden .wp-block-search__input{border-left-width:0!important;border-right-width:0!important;flex-basis:0;flex-grow:0;margin:0;min-width:0!important;padding-left:0!important;padding-right:0!important;width:0!important}:where(.wp-block-search__input){-webkit-appearance:initial;-moz-appearance:initial;appearance:none;border:1px solid #949494;flex-grow:1;font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;letter-spacing:inherit;line-height:inherit;margin-left:0;margin-right:0;min-width:3rem;padding:8px;text-decoration:unset!important;text-transform:inherit}:where(.wp-block-search__button-inside .wp-block-search__inside-wrapper){background-color:#fff;border:1px solid #949494;box-sizing:border-box;padding:4px}:where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) .wp-block-search__input{border:none;border-radius:0;padding:0 4px}:where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) .wp-block-search__input:focus{outline:none}:where(.wp-block-search__button-inside .wp-block-search__inside-wrapper) :where(.wp-block-search__button){padding:4px 8px}.wp-block-search.aligncenter .wp-block-search__inside-wrapper{margin:auto}.wp-block[data-align=right] .wp-block-search.wp-block-search__button-only .wp-block-search__inside-wrapper{float:right} 
</style>
    <style id="wp-block-search-theme-inline-css" type="bv_inline_delayed_css">
        .wp-block-search .wp-block-search__label{font-weight:700}.wp-block-search__button{border:1px solid #ccc;padding:.375em .625em} 
</style>
    <style id="wp-block-group-inline-css" type="bv_inline_delayed_css">
        .wp-block-group{box-sizing:border-box}:where(.wp-block-group.wp-block-group-is-layout-constrained){position:relative}
 
</style>
    <style id="wp-block-group-theme-inline-css" type="bv_inline_delayed_css">
        :where(.wp-block-group.has-background){padding:1.25em 2.375em} 
</style>


    <template id="qwikmH7yItm9ipgZE73n"></template>
    <template id="GgmGPsb7lWj9GcijDIu0"></template>

    <template id="9VidMEwkHSYcDqihZAkP"></template>
    <style id="global-styles-inline-css" type="bv_inline_delayed_css">
        :root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgb(6,147,227) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgb(252,185,0) 0%,rgb(255,105,0) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgb(255,105,0) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0);--wp--preset--shadow--crisp: 6px 6px 0px rgb(0, 0, 0);}.wp-block-button{--wp--preset--dimension--25: 25%;--wp--preset--dimension--50: 50%;--wp--preset--dimension--75: 75%;--wp--preset--dimension--100: 100%;}:root { --wp--style--global--content-size: 800px;--wp--style--global--wide-size: 1300px; }:where(body) { margin: 0; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.wp-site-blocks) > * { margin-block-start: 24px; margin-block-end: 0; }:where(.wp-site-blocks) > :first-child { margin-block-start: 0; }:where(.wp-site-blocks) > :last-child { margin-block-end: 0; }:root { --wp--style--block-gap: 24px; }:root :where(.is-layout-flow) > :first-child{margin-block-start: 0;}:root :where(.is-layout-flow) > :last-child{margin-block-end: 0;}:root :where(.is-layout-flow) > *{margin-block-start: 24px;margin-block-end: 0;}:root :where(.is-layout-constrained) > :first-child{margin-block-start: 0;}:root :where(.is-layout-constrained) > :last-child{margin-block-end: 0;}:root :where(.is-layout-constrained) > *{margin-block-start: 24px;margin-block-end: 0;}:root :where(.is-layout-flex){gap: 24px;}:root :where(.is-layout-grid){gap: 24px;}.is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}.is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}.is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}.is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}body{padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;}a:where(:not(.wp-element-button)){text-decoration: none;}:root :where(.wp-element-button, .wp-block-button__link){background-color: #32373c;border-width: 0;color: #fff;font-family: inherit;font-size: inherit;font-style: inherit;font-weight: inherit;letter-spacing: inherit;line-height: inherit;padding-top: calc(0.667em + 2px);padding-right: calc(1.333em + 2px);padding-bottom: calc(0.667em + 2px);padding-left: calc(1.333em + 2px);text-decoration: none;text-transform: inherit;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
/*# sourceURL=global-styles-inline-css */
</style>

    <template id="7gN60Kx64fS6fDqTmHsB"></template>
    <template id="En1s6brY8GXyDhKacR8G"></template>
    <template id="WVBAQf8is8girWnVhYh1"></template>
    <template id="deV4Ct54OVnVVDGKBxfx"></template>
    <style id="woocommerce-inline-inline-css" type="bv_inline_delayed_css">
        .woocommerce form .form-row .required { visibility: visible; }
/*# sourceURL=woocommerce-inline-inline-css */
</style>
    <template id="XXV1b214c6RYI6rSQX88"></template>
    <template id="SpX3Y1C1FMMgOjyrer6K"></template>
    <template id="UwlpBjPxlvXWjKCGrwe4"></template>
    <template id="smj6viQ6NSNNkU6Z2Ad1"></template>
    <template id="LX1tQspohNMAARSf7vpr"></template>
    <style id="top-store-style-inline-css" type="bv_inline_delayed_css">
        .top-header,body.top-store-dark .top-header{border-bottom-color:#fff}.top-footer,body.top-store-dark .top-footer{border-bottom-color:#81d742}@media (min-width: 769px){.top-footer .top-footer-bar{
    line-height: 123px;
  }}@media (max-width: 768px){.top-footer .top-footer-bar{
    line-height: 30px;
  }}@media (max-width: 550px){.top-footer .top-footer-bar{
    line-height: 30px;
  }}@media (min-width: 769px){.top-footer{
    border-bottom-width: 24px;
  }}@media (max-width: 768px){.top-footer{
    border-bottom-width: 1px;
  }}@media (max-width: 550px){.top-footer{
    border-bottom-width: 1px;
  }}.below-footer,body.top-store-dark .below-footer{border-top-color:#fff}.top-store-light a:hover, .top-store-menu li a:hover, .top-store-menu .current-menu-item a,.sticky-header-col2 .top-store-menu li a:hover,.woocommerce .thunk-woo-product-list .price,.thunk-product-hover .th-button.add_to_cart_button, .woocommerce ul.products .thunk-product-hover .add_to_cart_button,.woocommerce ul.products li.product .product_type_variable, .woocommerce ul.products li.product a.button.product_type_grouped,.thunk-compare .compare-button a:hover, .thunk-product-hover .th-button.add_to_cart_button:hover, .woocommerce ul.products .thunk-product-hover .add_to_cart_button :hover, .woocommerce .thunk-product-hover a.th-button:hover,.thunk-product .yith-wcwl-wishlistexistsbrowse.show:before, .thunk-product .yith-wcwl-wishlistaddedbrowse.show:before,.woocommerce ul.products li.product.thunk-woo-product-list .price,.summary .yith-wcwl-add-to-wishlist.show .add_to_wishlist::before, .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse.show a::before, .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse.show a::before,.woocommerce .entry-summary a.compare.button.added:before,.header-icon a:hover,.thunk-related-links .nav-links a:hover,.woocommerce .thunk-list-view ul.products li.product.thunk-woo-product-list .price,.woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button,.thunk-wishlist a:hover, .thunk-compare a:hover,.thunk-quik a:hover,.woocommerce ul.cart_list li .woocommerce-Price-amount, .woocommerce ul.product_list_widget li .woocommerce-Price-amount,.top-store-load-more button,.page-contact .leadform-show-form label,.thunk-contact-col .fa,
  .woocommerce .thunk-product-hover a.th-button:hover:after,ul.products .thunk-product-hover .add_to_cart_button:hover, 
.woocommerce .thunk-product-hover a.th-button:hover, 
.woocommerce ul.products li.product .product_type_variable:hover, 
.woocommerce ul.products li.product a.button.product_type_grouped:hover, 
.woocommerce .thunk-product-hover a.th-button:hover, 
.woocommerce ul.products li.product .add_to_cart_button:hover, 
.woocommerce .added_to_cart.wc-forward:hover,
ul.products .thunk-product-hover .add_to_cart_button:hover:after, 
.woocommerce .thunk-product-hover a.th-button:hover:after, 
.woocommerce ul.products li.product .product_type_variable:hover:after, 
.woocommerce ul.products li.product a.button.product_type_grouped:hover:after, 
.woocommerce .thunk-product-hover a.th-button:hover:after, 
.woocommerce ul.products li.product .add_to_cart_button:hover:after, 
.woocommerce .added_to_cart.wc-forward:hover:after,.summary .yith-wcwl-add-to-wishlist .add_to_wishlist:hover:before, .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a::before, .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a::before,.th-hlight-icon,.ribbon-btn:hover,.thunk-product .yith-wcwl-wishlistexistsbrowse:before,.woocommerce .entry-summary a.compare.button:hover:before,.th-slide-button,.th-slide-button:after,.sider.overcenter .sider-inner ul.top-store-menu li a:hover,.reply a,.single-product .product_meta a,.woosw-btn:hover:before,.woosw-added:before,.wooscp-btn:hover:before,#top-store-mobile-bar .count-item, a.th-product-compare-btn.button.btn_type.th-added-compare:before,.thunk-product-list-section .thunk-list .thunk-product-content .woocommerce-LoopProduct-title:hover{color:#00badb} 
    
    .thunk-icon-market .cart-icon .taiowc-icon:hover,.woocommerce .entry-summary .th-product-compare-btn.btn_type.th-added-compare, .woocommerce .entry-summary a.th-product-compare-btn:before,.thunk-icon-market .cart-icon .taiowcp-icon:hover{color:#00badb;}
   .thunk-icon-market .cart-icon .taiowc-cart-item:hover,.thunk-icon-market .cart-icon .taiowcp-cart-item:hover{color:#00badb;}
 .toggle-cat-wrap,#search-button,.thunk-icon .cart-icon,.single_add_to_cart_button.button.alt, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit, .woocommerce button.button, .woocommerce input.button,.cat-list a:after,.tagcloud a:hover, .thunk-tags-wrapper a:hover,.btn-main-header,.page-contact .leadform-show-form input[type='submit'],.woocommerce .widget_price_filter .top-store-widget-content .ui-slider .ui-slider-range,
.woocommerce .widget_price_filter .top-store-widget-content .ui-slider .ui-slider-handle,.entry-content form.post-password-form input[type='submit'],#top-store-mobile-bar a,
.header-support-icon,
.count-item,.nav-links .page-numbers.current, .nav-links .page-numbers:hover,.woocommerce .thunk-woo-product-list span.onsale,.top-store-site section.thunk-ribbon-section .content-wrap:before,.woocommerce .return-to-shop a.button,.widget_product_search [type='submit']:hover,.comment-form .form-submit [type='submit'],.top-store-slide-post .owl-nav button.owl-prev:hover, .top-store-slide-post .owl-nav button.owl-next:hover,body.top-store-dark .top-store-slide-post .owl-nav button.owl-prev:hover, body.top-store-dark .top-store-slide-post .owl-nav button.owl-next:hover{background:#00badb}
  .open-cart p.buttons a:hover,
  .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.thunk-slide .owl-nav button.owl-prev:hover, .thunk-slide .owl-nav button.owl-next:hover,.thunk-list-grid-switcher a.selected, .thunk-list-grid-switcher a:hover,.woocommerce .woocommerce-error .button:hover, .woocommerce .woocommerce-info .button:hover, .woocommerce .woocommerce-message .button:hover,#searchform [type='submit']:hover,article.thunk-post-article .thunk-readmore.button,.top-store-load-more button:hover,.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current,.thunk-top2-slide.owl-carousel .owl-nav button:hover,.product-slide-widget .owl-carousel .owl-nav button:hover, .thunk-slide.thunk-brand .owl-nav button:hover,.th-testimonial .owl-carousel .owl-nav button.owl-prev:hover,.th-testimonial .owl-carousel .owl-nav button.owl-next:hover,body.top-store-dark .thunk-slide .owl-nav button.owl-prev:hover,body.top-store-dark .thunk-slide .owl-nav button.owl-next:hover{background-color:#00badb;} 
  .thunk-product-hover .th-button.add_to_cart_button, .woocommerce ul.products .thunk-product-hover .add_to_cart_button,.woocommerce ul.products li.product .product_type_variable, .woocommerce ul.products li.product a.button.product_type_grouped,.open-cart p.buttons a:hover,.top-store-slide-post .owl-nav button.owl-prev:hover, .top-store-slide-post .owl-nav button.owl-next:hover,body .woocommerce-tabs .tabs li a::before,.thunk-list-grid-switcher a.selected, .thunk-list-grid-switcher a:hover,.woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button,#searchform [type='submit']:hover,.top-store-load-more button,.thunk-top2-slide.owl-carousel .owl-nav button:hover,.product-slide-widget .owl-carousel .owl-nav button:hover, .thunk-slide.thunk-brand .owl-nav button:hover,.page-contact .leadform-show-form input[type='submit'],.widget_product_search [type='submit']:hover,.thunk-slide .owl-nav button.owl-prev:hover, .thunk-slide .owl-nav button.owl-next:hover,body.top-store-dark .thunk-slide.owl-carousel .owl-nav button.owl-prev:hover, body.top-store-dark .thunk-slide.owl-carousel .owl-nav button.owl-next:hover,body.top-store-dark .top-store-slide-post .owl-nav button.owl-prev:hover, body.top-store-dark .top-store-slide-post .owl-nav button.owl-next:hover,.th-testimonial .owl-carousel .owl-nav button.owl-prev:hover,.th-testimonial .owl-carousel .owl-nav button.owl-next:hover{border-color:#00badb} .loader {
    border-right: 4px solid #00badb;
    border-bottom: 4px solid #00badb;
    border-left: 4px solid #00badb;}
    .site-title span a:hover,.main-header-bar .header-icon a:hover,.woocommerce div.product p.price, .woocommerce div.product span.price,body.top-store-dark .top-store-menu .current-menu-item a,body.top-store-dark .sider.overcenter .sider-inner ul.top-store-menu li a:hover{color:#00badb}body.top-store-light,.woocommerce-error, .woocommerce-info, .woocommerce-message {color: }.site-title span a,.sprt-tel b,.widget.woocommerce .widget-title, .open-widget-content .widget-title, .widget-title,.thunk-title .title,.thunk-hglt-box h6,h2.thunk-post-title a, h1.thunk-post-title ,#reply-title,h4.author-header,.page-head h1,.woocommerce div.product .product_title, section.related.products h2, section.upsells.products h2, .woocommerce #reviews #comments h2,.woocommerce table.shop_table thead th, .cart-subtotal, .order-total,.cross-sells h2, .cart_totals h2,.woocommerce-billing-fields h3,.page-head h1 a,.woocommerce-billing-fields h3,.woocommerce-checkout h3#order_review_heading, .woocommerce-additional-fields h3,.woocommerce .wishlist-title,.widget_block .wp-block-heading,.woocommerce ul.products li.product .woocommerce-loop-product__title,.thunk-woo-product-list .woocommerce-loop-product__title a{color: }.top-store-light a,#top-store-above-menu.top-store-menu > li > a{color:} .top-store-light a:hover,#top-store-above-menu.top-store-menu > li > a:hover,#top-store-above-menu.top-store-menu li a:hover,.thunk-woo-product-list .woocommerce-loop-product__title a:hover{color:}.top_store_overlayloader{background-color:#9c9c9}.top-header{background-image:url();
   } .top-header:before,body.top-store-dark .top-header:before
   {background:}.main-header:before,body.top-store-dark .main-header:before{
   background:;}.site-title span a,.main-header-bar .header-icon a,.main-header-bar .thunk-icon-market .cart-contents,.th-whishlist-text, .account-text:nth-of-type(1){color:#000000;}
   .thunk-icon-market .cart-icon .taiowc-icon,.thunk-icon-market .taiowc-icon .th-icon,.thunk-icon-market .cart-icon .taiowcp-icon,.thunk-icon-market .taiowcp-icon .th-icon,.main-header-bar{color:#000000;}
   .thunk-icon-market .cart-icon .taiowc-cart-item,.thunk-icon-market .taiowc-content .taiowc-total,.thunk-icon-market .cart-icon .taiowcp-cart-item,.thunk-icon-market .taiowcp-content .taiowcp-total{color:#000000;}
    body.top-store-dark .site-title span a,body.top-store-dark .main-header-bar,body.top-store-dark .main-header-bar .header-icon a,body.top-store-dark .main-header-bar .thunk-icon-market .cart-contents,body.top-store-dark .th-whishlist-text,body.top-store-dark .account-text:nth-of-type(1){color:#000000;}
   section.thunk-ribbon-section .content-wrap{
    background-image:url();
    background-repeat:no-repeat;
    background-size:auto;
    background-position:center center;
    background-attachment:scroll;}#move-to-top{
        background:#141415;
        color:#fff;
      }
                          
</style> 
    <style id="th-advance-product-search-front-inline-css" type="bv_inline_delayed_css">
        .thaps-search-box{max-width:550px;}

	#thaps-search-button {
       width: auto;
    font-size: 16px;
    padding: 0px 1rem;

}.thaps-from-wrap,input[type='text'].thaps-search-autocomplete,.thaps-box-open .thaps-icon-arrow{background-color:;} .thaps-from-wrap{background-color:;} input[type='text'].thaps-search-autocomplete, input[type='text'].thaps-search-autocomplete::-webkit-input-placeholder{color:;}

.thaps-from-wrap:focus-within {
    border: 1px solid #000000;
}

 .thaps-box-open .thaps-icon-arrow{border-left-color:;border-top-color:;} 

 #thaps-search-button,.thaps-suggestion-more:hover .thaps-content-wrapp{background:#000000; color:#FFF;} 

 #thaps-search-button:hover{background:#000000; color:#FFF;}

  .thaps-loading{
                border: 3px solid #FFF33;
                border-top-color: #FFF;
}
.thaps-loading + .tapsp-voice-btn + #thaps-search-button,
.thaps-loading + #thaps-search-button{color:#000000;}

 .submit-active #thaps-search-button .th-icon path{color:;} .thaps-suggestion-heading .thaps-title, .thaps-suggestion-heading .thaps-title h4{color:;} .thaps-title,.thaps-suggestion-taxonomy-product-cat .thaps-title, .thaps-suggestion-more .thaps-title h4{color:;} .thaps-sku, .thaps-desc, .thaps-price,.thaps-price del{color:;} .thaps-suggestion-heading{border-color:;} .thaps-autocomplete-selected{background:;} .thaps-autocomplete-suggestions,.thaps-suggestion-more{background:;} .thaps-title h4{color:;} .thaps-autocomplete-suggestions{border-color:}
    .thaps-autocomplete-suggestion.thaps-suggestion-heading .thaps-title{color:}
  .thaps-autocomplete-suggestions{width:550px!important}
/*# sourceURL=th-advance-product-search-front-inline-css */
</style>
    <template id="US8xmq4sNrHB1ZanfNnd"></template>
    <style id="core-store-styles-inline-css" type="bv_inline_delayed_css">
        .top-store-light a:hover, .top-store-menu li a:hover, .top-store-menu .current-menu-item a,.sticky-header-col2 .top-store-menu li a:hover,.woocommerce .thunk-woo-product-list .price,.thunk-product-hover .th-button.add_to_cart_button, .woocommerce ul.products .thunk-product-hover .add_to_cart_button,.woocommerce ul.products li.product .product_type_variable, .woocommerce ul.products li.product a.button.product_type_grouped,.thunk-compare .compare-button a:hover, .thunk-product-hover .th-button.add_to_cart_button:hover, .woocommerce ul.products .thunk-product-hover .add_to_cart_button :hover, .woocommerce .thunk-product-hover a.th-button:hover,.thunk-product .yith-wcwl-wishlistexistsbrowse.show:before, .thunk-product .yith-wcwl-wishlistaddedbrowse.show:before,.woocommerce ul.products li.product.thunk-woo-product-list .price,.summary .yith-wcwl-add-to-wishlist.show .add_to_wishlist::before, .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse.show a::before, .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse.show a::before,.woocommerce .entry-summary a.compare.button.added:before,.header-icon a:hover,.thunk-related-links .nav-links a:hover,.woocommerce .thunk-list-view ul.products li.product.thunk-woo-product-list .price,.woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button,.thunk-wishlist a:hover, .thunk-compare a:hover,.thunk-quik a:hover,.woocommerce ul.cart_list li .woocommerce-Price-amount, .woocommerce ul.product_list_widget li .woocommerce-Price-amount,.top-store-load-more button,.page-contact .leadform-show-form label,.thunk-contact-col .fa,
        .woocommerce .thunk-product-hover a.th-button:hover:after,ul.products .thunk-product-hover .add_to_cart_button:hover, 
      .woocommerce .thunk-product-hover a.th-button:hover, 
      .woocommerce ul.products li.product .product_type_variable:hover, 
      .woocommerce ul.products li.product a.button.product_type_grouped:hover, 
      .woocommerce .thunk-product-hover a.th-button:hover, 
      .woocommerce ul.products li.product .add_to_cart_button:hover, 
      .woocommerce .added_to_cart.wc-forward:hover,
      ul.products .thunk-product-hover .add_to_cart_button:hover:after, 
      .woocommerce .thunk-product-hover a.th-button:hover:after, 
      .woocommerce ul.products li.product .product_type_variable:hover:after, 
      .woocommerce ul.products li.product a.button.product_type_grouped:hover:after, 
      .woocommerce .thunk-product-hover a.th-button:hover:after, 
      .woocommerce ul.products li.product .add_to_cart_button:hover:after, 
      .woocommerce .added_to_cart.wc-forward:hover:after,.summary .yith-wcwl-add-to-wishlist .add_to_wishlist:hover:before, .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a::before, .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a::before,.th-hlight-icon,.ribbon-btn:hover,.thunk-product .yith-wcwl-wishlistexistsbrowse:before,.woocommerce .entry-summary a.compare.button:hover:before,.th-slide-button,.th-slide-button:after,.sider.overcenter .sider-inner ul.top-store-menu li a:hover,.reply a,.single-product .product_meta a,.woosw-btn:hover:before,.woosw-added:before,.wooscp-btn:hover:before,#top-store-mobile-bar .count-item, a.th-product-compare-btn.button.btn_type.th-added-compare:before,.thunk-product-list-section .thunk-list .thunk-product-content .woocommerce-LoopProduct-title:hover{color:#990055} 
          
          .thunk-icon-market .cart-icon .taiowc-icon:hover,.woocommerce .entry-summary .th-product-compare-btn.btn_type.th-added-compare, .woocommerce .entry-summary a.th-product-compare-btn:before,.thunk-icon-market .cart-icon .taiowcp-icon:hover{color:#990055;}
         .thunk-icon-market .cart-icon .taiowc-cart-item:hover,.thunk-icon-market .cart-icon .taiowcp-cart-item:hover{color:#990055;}
       .toggle-cat-wrap,#search-button,.thunk-icon .cart-icon,.single_add_to_cart_button.button.alt, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit, .woocommerce button.button, .woocommerce input.button,.cat-list a:after,.tagcloud a:hover, .thunk-tags-wrapper a:hover,.btn-main-header,.page-contact .leadform-show-form input[type='submit'],.woocommerce .widget_price_filter .top-store-widget-content .ui-slider .ui-slider-range,
        .woocommerce .widget_price_filter .top-store-widget-content .ui-slider .ui-slider-handle,.entry-content form.post-password-form input[type='submit'],#top-store-mobile-bar a,
        .header-support-icon,
        .count-item,.nav-links .page-numbers.current, .nav-links .page-numbers:hover,.woocommerce .thunk-woo-product-list span.onsale,.top-store-site section.thunk-ribbon-section .content-wrap:before,.woocommerce .return-to-shop a.button,.widget_product_search [type='submit']:hover,.comment-form .form-submit [type='submit'],.top-store-slide-post .owl-nav button.owl-prev:hover, .top-store-slide-post .owl-nav button.owl-next:hover,body.top-store-dark .top-store-slide-post .owl-nav button.owl-prev:hover, body.top-store-dark .top-store-slide-post .owl-nav button.owl-next:hover{background:#990055}
          .open-cart p.buttons a:hover,
          .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.thunk-slide .owl-nav button.owl-prev:hover, .thunk-slide .owl-nav button.owl-next:hover,.thunk-list-grid-switcher a.selected, .thunk-list-grid-switcher a:hover,.woocommerce .woocommerce-error .button:hover, .woocommerce .woocommerce-info .button:hover, .woocommerce .woocommerce-message .button:hover,#searchform [type='submit']:hover,article.thunk-post-article .thunk-readmore.button,.top-store-load-more button:hover,.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current,.thunk-top2-slide.owl-carousel .owl-nav button:hover,.product-slide-widget .owl-carousel .owl-nav button:hover, .thunk-slide.thunk-brand .owl-nav button:hover,.th-testimonial .owl-carousel .owl-nav button.owl-prev:hover,.th-testimonial .owl-carousel .owl-nav button.owl-next:hover,body.top-store-dark .thunk-slide .owl-nav button.owl-prev:hover,body.top-store-dark .thunk-slide .owl-nav button.owl-next:hover{background-color:#990055;} 
          .thunk-product-hover .th-button.add_to_cart_button, .woocommerce ul.products .thunk-product-hover .add_to_cart_button,.woocommerce ul.products li.product .product_type_variable, .woocommerce ul.products li.product a.button.product_type_grouped,.open-cart p.buttons a:hover,.top-store-slide-post .owl-nav button.owl-prev:hover, .top-store-slide-post .owl-nav button.owl-next:hover,body .woocommerce-tabs .tabs li a::before,.thunk-list-grid-switcher a.selected, .thunk-list-grid-switcher a:hover,.woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button,#searchform [type='submit']:hover,.top-store-load-more button,.thunk-top2-slide.owl-carousel .owl-nav button:hover,.product-slide-widget .owl-carousel .owl-nav button:hover, .thunk-slide.thunk-brand .owl-nav button:hover,.page-contact .leadform-show-form input[type='submit'],.widget_product_search [type='submit']:hover,.thunk-slide .owl-nav button.owl-prev:hover, .thunk-slide .owl-nav button.owl-next:hover,body.top-store-dark .thunk-slide.owl-carousel .owl-nav button.owl-prev:hover, body.top-store-dark .thunk-slide.owl-carousel .owl-nav button.owl-next:hover,body.top-store-dark .top-store-slide-post .owl-nav button.owl-prev:hover, body.top-store-dark .top-store-slide-post .owl-nav button.owl-next:hover,.th-testimonial .owl-carousel .owl-nav button.owl-prev:hover,.th-testimonial .owl-carousel .owl-nav button.owl-next:hover{border-color:#990055} .loader {
            border-right: 4px solid #990055;
            border-bottom: 4px solid #990055;
            border-left: 4px solid #990055;}
            .site-title span a:hover,.main-header-bar .header-icon a:hover,.woocommerce div.product p.price, .woocommerce div.product span.price,body.top-store-dark .top-store-menu .current-menu-item a,body.top-store-dark .sider.overcenter .sider-inner ul.top-store-menu li a:hover{color:#990055} .top-store-site section.thunk-ribbon-section .content-wrap:before{
        background:#990055;}.main-header:before,body.top-store-dark .main-header:before{
   background:#ff84f2;}
    
</style>
  
 

    <style id="core-block-supports-inline-css" type="bv_inline_delayed_css">
        .wp-block-gallery.wp-block-gallery-1{--wp--style--unstable-gallery-gap:var( --wp--style--gallery-gap-default, var( --gallery-block--gutter-size, var( --wp--style--block-gap, 0.5em ) ) );}.wp-elements-1 a:where(:not(.wp-element-button)){color:var(--wp--preset--color--black);}.wp-container-core-buttons-is-layout-3e41869c{justify-content:center;}
 
</style>
