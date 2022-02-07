<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productoses'=>array('index'),
	$model->id_producto=>array('view','id'=>$model->id_producto),
	'Update',
);

$this->menu=array(
	array('label'=>'List Productos', 'url'=>array('index')),
	array('label'=>'Create Productos', 'url'=>array('create')),
	array('label'=>'View Productos', 'url'=>array('view', 'id'=>$model->id_producto)),
	array('label'=>'Manage Productos', 'url'=>array('admin')),
);
?>

<h1>Update Productos <?php echo $model->id_producto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>