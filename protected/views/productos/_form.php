<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>

<div class="form">
	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'productos-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false,
	)); ?>
	<?php echo $form->errorSummary($model); ?>
	<br>
	<div class="row">
		<div class="col-8">
			<div class=row">
				<?php echo $form->labelEx($model, 'codigo'); ?>
				<?php echo $form->textField($model, 'codigo', array('size' => 10, 'maxlength' => 10, 'class' => 'form-control form-control-sm',)); ?>
				<?php echo $form->error($model, 'codigo'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model, 'sku'); ?>
				<?php echo $form->textField($model, 'sku', array('size' => 10, 'maxlength' => 10, 'class' => 'form-control form-control-sm')); ?>
				<?php echo $form->error($model, 'sku'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model, 'nombre'); ?>
				<?php echo $form->textField($model, 'nombre', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control form-control-sm')); ?>
				<?php echo $form->error($model, 'nombre'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model, 'id_marca'); ?>
				<?php echo $form->dropDownList($model, 'id_marca', CHtml::listData(Marcas::model()->findAll(), 'id_marca', 'marca' ),array('class' => 'form-control form-control-sm')); ?>
				<?php echo $form->error($model, 'id_marca'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model, 'descripcion'); ?>
				<?php echo $form->textField($model, 'descripcion', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control form-control-sm')); ?>
				<?php echo $form->error($model, 'descripcion'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model, 'stock'); ?>
				<?php echo $form->textField($model, 'stock', array('class' => 'form-control form-control-sm')); ?>
				<?php echo $form->error($model, 'stock'); ?>
			</div>

			<div class="row buttons">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar', array('class' => 'btn btn-secondary mx-auto ')); ?>
			</div>

		</div>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->