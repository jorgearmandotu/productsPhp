<h2><?php echo $title; ?></h2>
<?php echo validation_errors();
echo form_open('products');
?>
<div class='form-group row'>
    <div class='col-auto'>
    <input type="text" name="txtsearch" class='form-control' />
    </div>
    <div class='col-auto'>
    <input type="submit" name="submit" value="Buscar" class='form-control btn-info' />
    </div>
</div>
</form>
<div class='list-group'>
<?php foreach ($productsList as $product_item): ?>
    <a class="list-group-item list-group-item-action" href="<?php echo site_url('products/'.$product_item['id']); ?>">
        <?php echo $product_item['product'].' --- '; ?>
        <?php echo $product_item['unit'] ?>
    </a>
<?php endforeach ?>
</div>