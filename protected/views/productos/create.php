<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	'Agregar',
);

$this->menu=array(
	array('label'=>'Catálogo de Productos', 'url'=>array('index')),
	array('label'=>'Administrador de Productos', 'url'=>array('admin')),
);
?>

<h1>Agregar Productos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>