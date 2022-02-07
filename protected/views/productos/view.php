<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->id_producto,
);

$this->menu=array(
	array('label'=>'Catálogo de Productos', 'url'=>array('index')),
	array('label'=>'Agregar Productos', 'url'=>array('create')),
	array('label'=>'Editar Productos', 'url'=>array('update', 'id'=>$model->id_producto)),
	array('label'=>'Eliminar Productos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_producto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Productos', 'url'=>array('admin')),
);
?>

<h1> Producto #<?php echo $model->id_producto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_producto',
		'codigo',
		'sku',
		'nombre',
		'id_marca',
		'descripcion',
		'stock',
	),
)); ?>
