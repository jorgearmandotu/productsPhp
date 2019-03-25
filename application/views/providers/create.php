<?php

echo '<h2>'.$title.'</h2>';

echo '<h3>'.validation_errors().'</h3>';
echo form_open('providers/create');
?>
<ul>
    <li>
        <label for='provider'>Proveedor: </label>
        <input type='text' name='provider' placeholder='nombre proveedor' /></li>
    <li>
        <label for='address'>Dirección: </label>
        <input type='text' name='address' placeholder='dirección proveedor' /></li>
    <li>
        <label for='phone'>Telefono: </label>
        <input type='text' name='phone' placeholder='telefono proveedor' /></li>
    <li>
        <input type='submit' name='submit' value='Crear' /></li>
</ul>
</form>

