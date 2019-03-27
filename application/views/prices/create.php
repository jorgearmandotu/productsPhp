<?php

echo '<h2>'.$title.'</h2>';

echo '<div class="alert alert-danger" role="alert">
<h3>'.validation_errors().'</h3>
</div>';
?>
<div class='container'>
<?php
echo form_open('prices/create','class=""');
?>

    <div class='form-row'>
        <div class='col-auto'>
            <label for='product'>Producto: </label>
        </div>
        <div class='col-auto'>
            <select name='product' class='form-control custom-select'>
                <?php foreach($productsList as $product): ?>
                <option value='<?php echo $product['id'] ?>'><?php echo $product['product'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class='col-auto'>
            <button type='button' class='btn btn-info btn-sm'>Nuevo</button>
        </div>
    </div>
    <div class='form-row'>
    <div class='col-auto'>
        <label for='presentation'>presentacion: </label>
    </div>
    <div class='col-auto'>
        <select name = 'presentation' class='form-control custom-select'>
            <?php foreach($presentationList as $presentation): ?>
            <option value='<?php echo $presentation['id'] ?>'><?php echo $presentation['presentation'] ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class='col-auto'>
        <button type='button' class='btn btn-info btn-sm' data-toggle="modal" data-target="#presentation">nuevo</button>
    </div>
    </div>
    <div class='form-row'>
    <div class='col-auto'>
        <label for='brand'>Marca: </label>
    </div>
    <div class='col-auto'>
        <select name='brand' class='form-control custom-select'>
            <?php foreach($brandsList as $brand): ?>
            <option value='<?php echo $brand['id'] ?>'><?php echo $brand['brand'] ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class='col-auto'>
        <button type='button' class='btn btn-info btn-sm'>Nuevo</button>
    </div>
    </div>
    
    <div class='form-row'>
    <div class='col-auto'>
        <label for='price_unit'>precio unitario: </label>
    </div>
    <div class='col-auto'>
        <input type='number' name='price_unit' class='form-control' />
    </div>
    </div>
    <div class='form-row'>
    <div class='col-auto'>
        <label for='provider'>Proveedor: </label>
    </div>
    <div class='col-auto'>
        <select name='provider' class='form-control custom-select'>
            <?php foreach($providersList as $provider): ?>
            <option value='<?php echo $provider['id'] ?>'><?php echo $provider['provider'] ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class='col-auto'>
        <button type='button' class='btn btn-info btn-sm'>Nuevo</button>
    </div>
    </div>
    <div class='form-row'>
        <input type='submit' name='submit' value='Crear' class='btn btn-primary'/>
    </div>
</ul>
</form>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#presentation" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>

<div class="modal fade" id="presentation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingrese Presentacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php
        echo '<h3>'.validation_errors().'</h3>';
        echo form_open('presentation/create', 'class="form-inline"');
        ?>
                <label for='presentation'>Presentacion: </label>
                <input type='text' name='presentation' class='form-control' />
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type='submit' name='submit' value='Crear' class='btn btn-primary' />
        </form>
      </div>
    </div>
  </div>
</div>


<?php
//echo '<h3>'.validation_errors().'</h3>';
echo form_open('presentation/create', 'class="form-inline"');
?>
<ul>
    <li>
        <label for='presentation'>Presentacion: </label>
        <input type='text' name='presentation' class='form-control' />
    </li>
    <li>
        <input type='submit' name='submit' value='Crear' class='btn btn-primary' />
    </li>
</ul>
</form>

<?php
//echo '<h3>'.validation_errors().'</h3>';
echo form_open('brand/create');
?>
<ul>
    <li>
        <label for='brand'>Marca: </label>
        <input type='text' name='brand' class='form-control' />
    </li>
    <li>
        <input type='submit' name='submit' value='Crear' class='btn btn-primary' />
    </li>
</ul>
</form>
</div>