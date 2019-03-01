<?php
$arrayobj = new ArrayObject(array('primero','segundo','tercero'));
$arrayobj->append('cuarto');
$arrayobj->append(array('quinto', 'sexto'));
var_dump($arrayobj);
?>