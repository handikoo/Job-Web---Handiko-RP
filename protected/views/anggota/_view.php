<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_anggota')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kode_anggota), array('view', 'id'=>$data->kode_anggota)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_anggota')); ?>:</b>
	<?php echo CHtml::encode($data->nama_anggota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat_anggota')); ?>:</b>
	<?php echo CHtml::encode($data->alamat_anggota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ttl_anggota')); ?>:</b>
	<?php echo CHtml::encode($data->ttl_anggota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_telp')); ?>:</b>
	<?php echo CHtml::encode($data->no_telp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identitas_anggota')); ?>:</b>
	<?php echo CHtml::encode($data->identitas_anggota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_anggota')); ?>:</b>
	<?php echo CHtml::encode($data->status_anggota); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('email_anggota')); ?>:</b>
	<?php echo CHtml::encode($data->email_anggota); ?>
	<br />

	*/ ?>

</div>