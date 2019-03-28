<?php

echo '<h2>'.$title.'</h2>';

echo '<h3>'.validation_errors().'</h3>';
echo form_open('categories/create');
?>
<div class='form-row'>
    <div class='col-auto'>
        <label for='categories' class='col-form-label'>Categoria: </label>
    </div>
    <div class='col-auto'>
        <input type='text' name='category' placeholder='nombre categoria' class='form-control form-control-sm' />
    </div>
</div>
<div class='form-row'>
    <div class='col-sm-3'>
        <input type='submit' name='submit' value='Crear' class='btn btn-primary btn-sm btn-block' /></li>
    </div>
</div>
</form>
