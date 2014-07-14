<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_anggota')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_anggota), array('view', 'id'=>$data->kode_anggota)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_aktivasi_anggota')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_aktivasi_anggota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_exp_anggota')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_exp_anggota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perpanjangan_exp')); ?>:</b>
	<?php echo CHtml::encode($data->perpanjangan_exp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('biaya_perpanjangan')); ?>:</b>
	<?php echo CHtml::encode($data->biaya_perpanjangan); ?>
	<br />


</div>