<?php
$name = 'campo'; 
?>

<!-- addslashes retira caracteres especiais do input -->
<input type="text" name="<?= addslashes($name) ?>" />