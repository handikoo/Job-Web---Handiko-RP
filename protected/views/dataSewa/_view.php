<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_utama')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_utama), array('view', 'id'=>$data->id_utama)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_sewa')); ?>:</b>
	<?php echo CHtml::encode($data->kode_sewa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_anggota')); ?>:</b>
	<?php echo CHtml::encode($data->kode_anggota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_film')); ?>:</b>
	<?php echo CHtml::encode($data->kode_film); ?>
	<br />


</div>