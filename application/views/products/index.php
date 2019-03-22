<h2><?php echo $title; ?></h2>
<?php echo validation_errors();
echo form_open('products');
?>
<input type="text" name="txtsearch" />
<input type="submit" name="submit" value="search" />
</form>
<?php foreach ($productsList as $product_item): ?>
        <ul>
            <li><a class="link" href="<?php echo site_url('products/'.$product_item['id']); ?>">
                <label class = 'main'>
                <?php echo $product_item['product'].' '; ?>
                <?php echo $product_item['unit'] ?>
                </label>
            </a></li>
        </ul>
<?php endforeach ?>