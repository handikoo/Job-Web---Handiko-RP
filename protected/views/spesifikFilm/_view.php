<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_film')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_film), array('view', 'id'=>$data->kode_film)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genre_film')); ?>:</b>
	<?php echo CHtml::encode($data->genre_film); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aktor_film')); ?>:</b>
	<?php echo CHtml::encode($data->aktor_film); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rating_film')); ?>:</b>
	<?php echo CHtml::encode($data->rating_film); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun_rilis_film')); ?>:</b>
	<?php echo CHtml::encode($data->tahun_rilis_film); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('production_house')); ?>:</b>
	<?php echo CHtml::encode($data->production_house); ?>
	<br />


</div>