<!DOCTYPE HTML>
<html>
<head>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl;?>/css/style.css" media="all" />
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl;?>/js/script.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<div id="body">

<div id="header-body">
<div id="header-top" class="fix">#header-top</div>
<div id="header-bottom">#header-bottom</div>
</div>

<div id="menu-body">
<ul class="role-menu fix">
<a href="<?php echo $this->createUrl('site/index');?>" class="menu-link">Home<br/><span class="menu-child">Home Directory</span></a>
<a href="<?php echo $this->createUrl('site/about');?>" class="menu-link">About Us<br/><span class="menu-child">Home Directory</span></a>
<a href="<?php echo $this->createUrl('site/blog',array('alias'=>'test_blog_page'));?>" class="menu-link">Blog<br/><span class="menu-child">Home Directory</span></a>
<a href="<?php echo $this->createUrl('site/contact');?>" class="menu-link">Contact Us<br/><span class="menu-child">Home Directory</span></a>
</ul>
<span class="menu-contact">
<span class="menu-phone"><span class="glyphicon glyphicon-phone"></span> 08304803483043</span><br/>
<span class="menu-email"><span class="glyphicon glyphicon-envelope"></span> admin@wins-hotel.com</span>
</span>
</div>
<div id="menu-br"></div>
<div id="menu-dr"></div>
<div id="menu-er"></div>

<div id="contain-body" class="fix">
<?php if(isset($this->breadcrumbs)):?>
<?php $this->widget('zii.widgets.CBreadcrumbs', array(
'links'=>$this->breadcrumbs,
)); ?><!-- breadcrumbs -->
<?php endif?>
<?php echo $content;?>
</div>

<div id="footer-body" class="fix">
#footer
</div>

</div>
</body>
</html>