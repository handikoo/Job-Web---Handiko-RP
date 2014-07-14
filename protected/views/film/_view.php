<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_film')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_film), array('view', 'id'=>$data->kode_film)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul_film')); ?>:</b>
	<?php echo CHtml::encode($data->judul_film); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga_film')); ?>:</b>
	<?php echo CHtml::encode($data->harga_film); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('durasi_sewa')); ?>:</b>
	<?php echo CHtml::encode($data->durasi_sewa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('denda_telat')); ?>:</b>
	<?php echo CHtml::encode($data->denda_telat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock_film')); ?>:</b>
	<?php echo CHtml::encode($data->stock_film); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_film')); ?>:</b>
	<?php echo CHtml::encode($data->status_film); ?>
	<br />


</div>