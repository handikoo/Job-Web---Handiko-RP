<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_sewa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_sewa), array('view', 'id'=>$data->kode_sewa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_anggota')); ?>:</b>
	<?php echo CHtml::encode($data->kode_anggota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_film')); ?>:</b>
	<?php echo CHtml::encode($data->kode_film); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_sewa')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_sewa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_kembali')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_kembali); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_harga')); ?>:</b>
	<?php echo CHtml::encode($data->total_harga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diskon')); ?>:</b>
	<?php echo CHtml::encode($data->diskon); ?>
	<br />


</div>