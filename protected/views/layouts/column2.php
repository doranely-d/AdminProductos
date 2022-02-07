<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row">
	<div class="col-md-10">
		<div id="content">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
	<div class="col-md-2 mt-5">
		<div class="card border-dark">
		<div class="card-header">
            <span class="my-0 fw-normal">Operaciones</span>
          </div>
			<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
			));
			$this->widget('zii.widgets.CMenu', array(
				'items' => $this->menu,
				'htmlOptions' => array('class' => 'operations'),
			));
			$this->endWidget();
			?>
		</div><!-- sidebar -->
	</div>
</div>

<?php $this->endContent(); ?>