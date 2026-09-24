<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<link rel="icon" type="image/*" href="/public/assets/uploads/<?php echo $this->_company['c_icon'] ?>" />
<style>
    *{  --primary: <?= $this->_company['c_primary_color'] ?>;  } 
</style>
 
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
<title><?php echo $this->title ?> | <?= $this->page_id=='home' ? $this->_company['c_short_desc'] : $this->_company['c_name'] ?></title>
   
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="theme-color" content="#fff" />
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <meta name="description" content="Buy Weed Online UK. Shop high-quality CBD flower, gummies, oils, vapes and more CBD products online in the UK. Third-party lab tested, fast delivery and discreet packaging! Start your medical cannabis journey. We&#039;re the UK&#039;s leading online medical cannabis clinic, offering consultations for chronic pain, depression, &amp; anxiety. Order Marijuana online in the UK &amp; have cannabis delivered to you." />
 <?php require 'public/includes/css.php' ?>
 <style>
    * {
        --heightbtn:35px;
    }
        /* Container for the input group */
    .quantity-container {
      display: inline-flex;
      align-items: center;
      border: 2px solid #ccc;
      border-radius: 8px;
      overflow: hidden;
      background-color: #fff;
    }

    /* Styling for both buttons */
    .quantity-btn {
      background-color: #f1f1f1;
      border: none;
      color: #333;
      font-size: 1.0rem;
      width: 45px;
      height: var(--heightbtn);
      cursor: pointer;
      transition: background-color 0.2s;
      user-select: none; /* Prevents text selection on rapid clicking */
    }

    .quantity-btn:hover {
      background-color: #e0e0e0;
    }

    .quantity-btn:active {
      background-color: #d0d0d0;
    }

    /* Styling for the numeric input field */
    .quantity-input {
      width: 60px;
      height: var(--heightbtn);
      text-align: center;
      border: none;
      font-size: 1.0rem;
      font-weight: bold;
      color: #333;
      outline: none;
    }

    /* Hide default browser up/down arrows (spinners) */
    .quantity-input::-webkit-outer-spin-button,
    .quantity-input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    .quantity-input[type=number] {
      -moz-appearance: textfield; /* Firefox */
    }


    .add-to-cart {
      padding: 5px 16px;
      background:rgba(153, 0, 85);
      border-radius: 4px;
      color:whitesmoke!important;

    }

    .cart-numbers  { 
 
      width: 10px;
      height: 10px; 
      border-radius: 50%; 
      /* display: flex; */
      justify-content: center; 
      align-items: center;   
       
      /* background-color: rgba(153, 0, 85);
      padding: 4px;          */
      color: red;
      font-family: sans-serif;
      font-weight: bold;     
      box-sizing: border-box; 
      text-align: center; 
      
    }
    .suptop {
      margin-left:-20%!important
    }

    .header-iconx, .header-iconx i {
      color: rgb(22, 5, 20);
      font-size: 30px;
    }

    

 </style>

 
 <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebPage",
            "name": "<?= $this->title ?>",
            "description": "<?= $this->_company['c_short_desc'] ?>.",
            "url": "https://www.<?= $_SERVER['SERVER_NAME'] ?>/",
            "dateModified": "2026-01-26"
        }
    </script>
 