<?php
$items = array();
$items[]=array('label'=>'HOME', 'url'=>array('/site/index'), 'visible'=>Yii::app()->user->isGuest); 
$items[]=array('label'=>'ABOUT', 'url'=>array('/site/page', 'view'=>'about'), 'visible'=>Yii::app()->user->isGuest); 
$items[]=array('label'=>'SHOP', 'url'=>array('/site/page', 'view'=>'list'), 'visible'=>Yii::app()->user->isGuest); 
$items[]=array('label'=>'CONTACT', 'url'=>array('/site/contact'), 'visible'=>Yii::app()->user->isGuest); 
$items[]=array('label'=>'OWNER', 'url'=>array('/site/page', 'view'=>'owner'), 'visible'=>Yii::app()->user->isGuest); 
$items[]=array('label'=>'LOGOUT ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest);
$items[]=array('label'=>'LOGIN (as admin)', 'url'=>array('/site/login'),'visible'=>Yii::app()->user->isGuest);  
?>
<div class="navbar">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"></a>  
          <div class="jqueryslidemenu">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>$items
                    )
                ); ?>
				<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Apa yang ingin kamu cari ?">
					<button type="button" class="btn btn-success navbar-btn">GO</button>
				</div>
				</form>
    	</div>
    </div>
	</div>
</div>
