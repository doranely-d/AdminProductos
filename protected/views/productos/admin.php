<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs = array(
	'Productos' => array('index'),
	'Administrador',
);

$this->menu = array(
	array('label' => 'Catálogo de  Productos', 'url' => array('index')),
	array('label' => 'Agregar Productos', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#productos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador de Productos</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'productos-grid',
	'dataProvider'=>$dataProvider,
	'columns' => array(
		'id_producto',
		'codigo',
		'sku',
		'nombre',
		'id_marca',
		'descripcion',
		'stock',
		array(
			'class' => 'CButtonColumn',
		),
		
	),
)); ?>