<?php
/* @var $this MarcasController */
/* @var $model Marcas */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'marcas-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false,
	)); ?>

	<div class="row">
		<div class="col-8">
			<?php echo $form->errorSummary($model); ?>

			<div class="row">
				<?php echo $form->labelEx($model, 'id_marca'); ?>
				<?php echo $form->textField($model, 'id_marca',array('class' => 'form-control form-control-sm')); ?>
				<?php echo $form->error($model, 'id_marca'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model, 'marca'); ?>
				<?php echo $form->textField($model, 'marca', array('size' => 50, 'maxlength' => 50,'class' => 'form-control form-control-sm')); ?>
				<?php echo $form->error($model, 'marca'); ?>
			</div>

			<div class="row buttons">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar', array('class' => 'btn btn-secondary mx-auto ')); ?>
			</div>
		</div>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->