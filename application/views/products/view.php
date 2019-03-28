<div class='list-group'>
<?php
$i=0;
foreach($product_item as $product): 
    $i++;
    if($i%2 === 0){
        echo '<span class="list-group-item list-group-item-action list-group-item-primary">marca: '.$product['brand'].' Unidad: '.$product['unit'].' Precio: '.$product['price_unit'].' proveedor: '.$product['provider'].' presentacion: '.$product['presentation'].' precio en oferta: '.$product['promocion'].'</span>';
    }else{
        echo '<span class="list-group-item list-group-item-action list-group-item-secondary">marca: '.$product['brand'].' Unidad: '.$product['unit'].' Precio: '.$product['price_unit'].' proveedor: '.$product['provider'].' presentacion: '.$product['presentation'].' precio en oferta: '.$product['promocion'].'</span>';
    }
    
endforeach
?>
</div>