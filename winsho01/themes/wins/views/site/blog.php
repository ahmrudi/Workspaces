<?php
$this->breadcrumbs=array(
	$content,
);
?>
<h1>This is blog content</h1>
<?php
$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
echo $content;
$this->endWidget();
?>