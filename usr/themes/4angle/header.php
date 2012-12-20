<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
<title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?></title>

<!-- 使用url函数转换相关路径 -->
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />

<!-- 通过自有函数输出HTML头部信息 -->
<?php $this->header(); ?>
<script language="javascript">
window.onload = function() {
var m1 = document.getElementById("sidebar");
var m2 = document.getElementById("container");
maxh = (m1.offsetHeight > m2.offsetHeight) ? m1.offsetHeight :
m2.offsetHeight;
m1.style.Height = maxh + "px";
m2.style.Height = maxh + "px";
m1.style.height = maxh + "px";
m2.style.height = maxh + "px";
}
</script>
</head>

<body>
<div id="full">


