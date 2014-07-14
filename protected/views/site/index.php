<?php $this->pageTitle=Yii::app()->name; ?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <tt><?php echo __FILE__; ?></tt></li>
	<li>Layout file: <tt><?php echo $this->getLayoutFile('main'); ?></tt></li>
</ul>

 <div class="carousel-inner">
		<div class="item active">
			<div class="row-fluid">
				<div class="span3">
				<div class="colored_banner ">
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/client/rani.png" width="128" height="128" alt="Me" class="img-thumbnail"/>
						<hr/>
						<p style="color:#3a3a3a;">Nike Air Max</p>
						<p style="color:#3a3a3a;">$ 200</p>
				</div>
				</div>
				<div class="span3">
				<div class="colored_banner">
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/client/anis.png" width="128" height="128" alt="Me" class="img-thumbnail"/>
						<hr/>
						<p style="color:#3a3a3a;">Nike Air Min</p>
						<p style="color:#3a3a3a;">$ 178</p>
				</div>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="row-fluid">
				<div class="span3">
				<div class="colored_banner ">
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/client/wp.png" width="128" height="128" alt="Me" class="img-circle"/>
						<hr/>
						<p style="color:#3a3a3a;">Nike Air Max</p>
						<p style="color:#3a3a3a;">$ 200</p>
				</div>
				</div>
				<div class="span3">
				<div class="colored_banner">
						<img src="<?php echo Yii::app()->theme->baseUrl;?>/img/client/ucup.png" width="128" height="128" alt="Me" class="img-circle"/>
						<hr/>
						<p style="color:#3a3a3a;">Nike Air Min</p>
						<p style="color:#3a3a3a;">$ 178</p>
				</div>
				</div>
			</div>
		</div>
	</div>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>