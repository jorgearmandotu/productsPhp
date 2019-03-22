<?php

foreach($product_item as $product): 
    echo '<p>marca: '.$product['brand'].' Unidad: '.$product['unit'].' Precio: '.$product['price_unit'].' proveedor: '.$product['provider'].' presentacion: '.$product['presentation'].'</p>';
endforeach
?>