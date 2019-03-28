<?php

echo '<h2>'.$title.'</h2>';

echo '<h3>'.validation_errors().'</h3>';
echo form_open('providers/create');
?>
<div class='form-row'>
    <div class='col-auto'>
        <label for='provider' class='col-form-label'>Proveedor: </label>
    </div>
    <div class='col-auto'>
        <input type='text' name='provider' placeholder='nombre proveedor' class='form-control form-control-sm' />
    </div>
</div>
<div class='form-row'>
    <div class='col-auto'>
        <label for='address' class='col-form-label'>Dirección: </label>
    </div>
    <div class='col-auto'>
        <input type='text' name='address' placeholder='dirección proveedor' class='form-control form-control-sm' />
    </div>
</div>
<div class='form-row'>
    <div class='col-auto'>
        <label for='phone' class='col-form-label'>Telefono: </label>
    </div>
    <div class='col-auto'>
        <input type='text' name='phone' placeholder='telefono proveedor' class='form-control form-control-sm' />
    </div>
</div>
<div class='form-row'>
    <div class= 'col-sm-3'>
        <input type='submit' name='submit' value='Crear' class='btn btn-primary btn-sm btn-block' />
    </div>
</div>
</form>

