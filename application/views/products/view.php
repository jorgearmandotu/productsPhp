<h3><?php echo $title ?></h3>
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
        <?php echo form_open('products/view/'.$product['idProduct']) ?>
        <input name='brand' type='hidden' value='<?php echo $product['idBrand'] ?>'>
        <input name='presentation' type='hidden' value='<?php echo $product['idPresentation'] ?>'>
        <input name='provider' type='hidden' value='<?php echo $product['idProvider'] ?>'>
        <input name='product' type='hidden' value='<?php echo $product['product'] ?>'>
        <tr>
        <td><label for='price_unit' class='form-label'>Precio:</label></td>
        <td><input type='number' name='price_unit' class='form-control form-control-sm'></td>
        <td><label for='promocion' class='form-label'>Promocion:</label></td>
        <td><input type='number' name='promocion' class='form-control form-control-sm'></td>
        <td><input type='submit' class='btn btn-primary btn-sm btn-block' value='modificar'></td>
        <td><?php echo validation_errors(); ?></td>
        </tr>
        </form>
<?php endforeach
?>
    </tbody>
</table>