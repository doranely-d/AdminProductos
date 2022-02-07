<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Catálogo de Usuarios', 'url'=>array('index')),
	array('label'=>'Agregar Usuarios', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuarios-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador de  Usuarios</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuarios-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'id',
		'username',
		'nombre_real',
		'email',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
