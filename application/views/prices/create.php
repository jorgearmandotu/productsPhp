<?php

echo '<h2>'.$title.'</h2>';

echo '<h3>'.validation_errors().'</h3>';
echo form_open('prices/create');
?>
<ul>
    <li>
        <label for='product'>Producto: </label>
        <select name='product'>
            <?php foreach($productsList as $product): ?>
            <option value='<?php echo $product['id'] ?>'><?php echo $product['product'] ?></option>
            <?php endforeach ?>
        </select>
        <label>Nuevo</label>
    </li>
    <li>
        <label for='presentation'>presentacion: </label>
        <select>
            <?php foreach($presentationList as $presentation): ?>
            <option value='<?php echo $presentation['id'] ?>'><?php echo $presentation['presentation'] ?></option>
            <?php endforeach ?>
        </select>
        <label>nueva</label>
    </li>
    <li>
        <label for='brand'>Marca: </label>
        <select>
            <?php foreach($brandsList as $brand): ?>
            <option value=''><?php echo $brand['brand'] ?></option>
            <?php endforeach ?>
        </select>
        <label>nueva</label>
    </li>
    <li>
        <label for='price_unit'>precio unitario: </label>
        <input type='number' name='price_unit' />
    </li>
    <li>
        <label for='provider'>Proveedor: </label>
        <select name='provider'>
            <?php foreach($providersList as $provider): ?>
            <option value='<?php echo $provider['id'] ?>'><?php echo $provider['provider'] ?></option>
            <?php endforeach ?>
        </select>
        <label>nuevo</label>
    </li>
    <li>
        <input type='submit' name='submit' value='Crear' />
    </li>
</ul>
</form>