<?php

echo '<h2>'.$title.'</h2>';

echo '<h3>'.validation_errors().'</h3>';
echo form_open('categories/create');
?>
<ul>
    <li>
        <label for='categories'>Categoria: </label>
        <input type='text' name='category' placeholder='nombre categoria' /></li>
    <li>
        <input type='submit' name='submit' value='Crear' /></li>
</ul>
</form>
