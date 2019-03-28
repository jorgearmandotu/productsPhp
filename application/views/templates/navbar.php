<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
    <a class='navbar-brand' href="<?php echo site_url('products/'); ?>" class="link">home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>

  </button>
    <div class='collapse navbar-collapse' id='navbar'>
        <ul class='navbar-nav mr-auto'>
            <li class='nav-item'><a class='nav-link' href="<?php echo site_url('products/create')?>" class="link">agregar produto</a></li>
            <li class='nav-item'><a class='nav-link' href="<?php echo site_url('categories/create')?> " class="link">agregar categoria</a></li>
            <li class='nav-item'><a class='nav-link' href="<?php echo site_url('prices/create')?>" class="link">agregar precios</a></li>
            <li class='nav-item'><a class='nav-link' href="<?php echo site_url('providers/create') ?>" class="link">agregar proveedor</a></li>
        </ul>
    </div>
</nav>