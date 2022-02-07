<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
	'Login',
);
?>
<div class="form text-center">
	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'login-form',
		'enableClientValidation' => true,
		'clientOptions' => array(
			'validateOnSubmit' => true,
		),
	)); ?>
	<img class="mb-4" src="https://www.truper.com/skin/frontend/glam/default/images/logo_header.png" alt="">
	<h1 class="h3 mb-3 font-weight-normal">Ingresa tus datos de acceso</h1>
	<p class="note">Los campos<span class="required">*</span> son requeridos.</p>
	<div class="col-md-6 offset-md-3">

		<div class="row">
			<?php echo $form->labelEx($model, 'username'); ?>
			<?php echo $form->textField($model, 'username', array('class' => 'form-control form-control-sm')); ?>
			<?php echo $form->error($model, 'username'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model, 'password'); ?>
			<?php echo $form->passwordField($model, 'password', array('class' => 'form-control form-control-sm')); ?>
			<?php echo $form->error($model, 'password'); ?>
		</div>

		<div class="row rememberMe">
			<?php echo $form->checkBox($model, 'rememberMe'); ?>
			<?php echo $form->label($model, 'rememberMe'); ?>
			<?php echo $form->error($model, 'rememberMe'); ?>
		</div>

		<div class="row buttons">
			<?php echo CHtml::submitButton('Iniciar Sesión', array('class' => 'btn btn-secondary mx-auto ')); ?>
		</div>
	</div>


	<?php $this->endWidget(); ?>
</div><!-- form -->