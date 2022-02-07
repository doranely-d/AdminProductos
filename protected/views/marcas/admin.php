<?php
/* @var $this MarcasController */
/* @var $model Marcas */

$this->breadcrumbs=array(
	'Marcas'=>array('index'),
	'Administracion',
);

$this->menu=array(
	array('label'=>'Catálogo de  Marcas', 'url'=>array('index')),
	array('label'=>'Agregar Marcas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#marcas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador de Marcas</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'marcas-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'id_marca',
		'marca',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
