<?php
/*

    Plugin Name: buy for social media woocommers
    Plugin URI: 
    Description: create a buy button for WhatsApp and telegram
    Author: Daniel Manosalva
    Version: 1.0
    Author URI: https://github.com/Dannkol

*/
function  my_custom_action() {
    echo "
    
    <a id='sell_whatsapp' style='font-family:cursive;'>
    <div class='icon-circle-with-plus'>BUY whatsapp</div>
    </a>
    <a id='sell_telegram' style='font-family:cursive;'>
    <div class='icon-circle-with-plus'>BUY telegram</div>
    </a><br>


    <script>
   

    /*WHATESAPP*/

    const whatsapp = document.getElementById('sell_whatsapp');
    whatsapp.setAttribute('href', 'https://wa.me/323xxxxxx?text=I%20am%20interested%20in%20your%20product%20for%20sale%20' +window.location.href);


    /*TELEGRAM*/

    const telegram = document.getElementById('sell_telegram');
    telegram.setAttribute('href', 'https://t.me/323xxxxxx?text=hello');


    </script>
    
    ";
 }
 add_action( 'woocommerce_single_product_summary', 'my_custom_action', 15 ); 