<h2><?php echo $title; ?></h2>

<?php foreach ($productsList as $product_item): ?>
            <h3><?php echo $product_item['id']; ?> </h3>
            <div class = 'main'>
                <?php echo $product_item['product'] ?>
                <?php echo $product_item['unit'] ?>
                <?php echo $product_item['category'] ?>
            </div>
            <p><a href="<?php echo site_url('products/'.$product_item['id']); ?>">ver producto</a></p>
<?php endforeach ?>