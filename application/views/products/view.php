<table class='table table-striped table-sm table-responsive'>
    <thead>
        <tr>
            <th scope='col'>Marca</th>
            <th scope='col'>Unidad</th>
            <th scope='col'>$ Precio</th>
            <th scope='col'>Proveedor</th>
            <th scope='col'>Presentacion</th>
            <th scope='col'>$ Oferta</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($product_item as $product): 
    ?>
        <tr>
            <th scope='row'><?php echo $product['brand'];?></th>
            <td><?php echo $product['unit']; ?></td>
            <td><?php echo number_format($product['price_unit'], 2, ',', '.'); ?></td>
            <td><?php echo $product['provider']; ?></td>
            <td><?php echo $product['presentation']; ?></td>
            <td><?php echo number_format($product['promocion'], 2, ',', '.') ?></td>
        </tr>
<?php endforeach
?>
    </tbody>
</table>