<?php
$array = array('Arroz','Leche','Cereal','Huevos');
_p($array,'Lista de Compras');

//Arreglar elementos a la Compras 
array_push($array, 'Uvas');
_p($array,'Elemento Agregado');


//Eliminar un elementos a las compras
$diff = array_diff($array, array('Leche'));
_p($diff,'Elemento Eliminado');


//Vista de impresion de Array
function _p($output,$tittle){
    ?>
    <h3><?php echo $tittle; ?></h3>
    <pre><?php print_r($output); ?></pre><br>
<?php
}

echo '<img src="carbon.svg">'; 