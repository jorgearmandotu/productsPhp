<?php

echo '<h2>'.$title.'</h2>';

echo '<h3>'.validation_errors().'</h3>';
echo form_open('products/create');
?>
<div class='form-row'>
    <div class='col-auto'>
        <label for='product' class='col-form-label'>Producto: </label>
    </div>
    <div class='col-auto'>
        <input type='text' name='product' placeholder='nombre producto' class='form-control form-control-sm' />
    </div>
</div>
<div class='form-row'>
    <div class='col-auto'>
        <label for='unit' class='col-form-label'>unidad: </label>
    </div>
    <div class='col-auto'>
        <input type='text' name='unit' placeholder='(gr, ml, und, ...)' class='form-control form-control-sm' />
    </div>
</div>
<div class='form-row'>
    <div class='col-auto'>
        <label for='phone' class='col-form-label'>Categoria: </label>
    </div>
    <div class='col-auto'>
		<select name="category" class='form-control form-control-sm custom-select '>
		<?php foreach($categories as $category): ?>
			<option value='<?php echo $category['id'] ?>'><?php echo $category['category']; ?></option>
		<?php endforeach ?>
		</select>
    </div>
</div>
<hr>
<div class='form-row'>
    <div class='col-auto col-sm-3'>
        <input type='submit' name='submit' value='Crear' class='btn btn-primary btn-sm btn-block' />
    </div>
</div>
</form>
