<?php $this->need('header.php'); ?>
<div id="article">
		    <h2 class="artice-title"><?php $this->title() ?></h2>
			<hr />
			<?php $this->content(); ?>
			<hr />
			<span class="right">【<A href="javascript:window.print()">打印这篇文章</A>】【<A href="javascript:window.close()">关闭该窗口</A>】</span>
	 </div>   
<?php $this->need('copyright.php'); ?>
<?php $this->need('footer.php'); ?>
