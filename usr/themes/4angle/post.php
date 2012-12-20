<?php $this->need('header.php'); ?>
<div id="article">
		    <h2 class="artice-title"><?php $this->title() ?></h2>
			<span><?php _e('本文作者：'); ?><?php $this->author(); ?></span>
			<span><?php _e('所属分类：'); ?><?php $this->category(','); ?></span>
			<span><?php _e('发布时间：'); ?><?php $this->date('Y-m-j'); ?></span>
			<hr />
			<?php $this->content(); ?>
			<hr />
			<span class="right">【<A href="javascript:window.print()">打印这篇文章</A>】【<A href="javascript:window.close()">关闭该窗口</A>】</span>
	 </div>   
<?php $this->need('copyright.php'); ?>
<?php $this->need('footer.php'); ?>
