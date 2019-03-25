<?php

echo '<h2>'.$title.'</h2>';

echo '<h3>'.validation_errors().'</h3>';
echo form_open('products/create');
?>
<ul>
    <li>
        <label for='product'>Producto: </label>
        <input type='text' name='product' placeholder='nombre producto' /></li>
    <li>
        <label for='unit'>unidad: </label>
        <input type='text' name='unit' placeholder='(gr, ml, und, ...)' /></li>
    <li>
        <label for='phone'>Categoria: </label>
        <input type='text' name='category' placeholder='categoria producto' /></li>
    <li>
        <input type='submit' name='submit' value='Crear' /></li>
</ul>
</form>
