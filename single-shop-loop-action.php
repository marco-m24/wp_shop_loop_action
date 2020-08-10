function mrc_woocommerce_before_shop_loop_item(  ) { 
    echo 'prima del prodotto';
}; 
         
// add the action 
add_action( 'woocommerce_before_shop_loop_item', 'mrc_woocommerce_before_shop_loop_item', 10, 0 );



function mrc_woocommerce_before_shop_loop_item_title(  ) { 
    echo 'prima del titolo del prodotto'; 
}; 
         
// add the action 
add_action( 'woocommerce_before_shop_loop_item_title', 'mrc_woocommerce_before_shop_loop_item_title', 10, 0 );




function mrc_woocommerce_shop_loop_item_title(  ) { 
    echo 'dal titolo';
}; 
         
// add the action 
add_action( 'woocommerce_shop_loop_item_title', 'mrc_woocommerce_shop_loop_item_title', 10, 2 );





function mrc_woocommerce_after_shop_loop_item_title(  ) { 
    echo 'dopo il titolo';
}; 
         
// add the action 
add_action( 'woocommerce_after_shop_loop_item_title', 'mrc_woocommerce_after_shop_loop_item_title', 10, 0 );






function mrc_woocommerce_after_shop_loop_item(  ) { 
    echo '<br>dopo il prodotto';
}; 
         
// add the action 
add_action( 'woocommerce_after_shop_loop_item', 'mrc_woocommerce_after_shop_loop_item', 10, 0 ); 
