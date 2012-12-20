<?php $this->need('header.php'); ?>

    <?php $this->need('sidebar.php'); ?>

<div id="container">
     <div class="banner"><img src="http://www.4ngel.net/images/top.gif" /></div>
	 <?php if ($this->have()): ?>
	 <div class="gory-list">
	      <div class="gory-name"><a href="<?php $this->options->siteUrl(); ?>">Home</a> &raquo;</li>
	<?php if ($this->is('index')): ?>
		Latest Post
	<?php elseif ($this->is('post')): ?>
		<?php $this->category(); ?> &raquo; <?php $this->title() ?>
	<?php else: ?><!-- 页面为其他页时 -->
		<?php $this->archiveTitle(' &raquo; ','',''); ?>
	<?php endif; ?></div>
		  <div class="art-tilte">
		       <ul>
	           <?php while($this->next()): ?>
			   <li onMouseOver="this.style.backgroundColor='#EEEEEE'"   onmouseout="this.style.backgroundColor='#FFFFFF'"><span class="list-autor"><?php $this->author(); ?></span><span class="time">[<font color="#808080"><?php $this->date('Y-m-j'); ?></font>]</span><a href="<?php $this->permalink() ?>" target="_blank"><?php $this->title() ?></a></li>
			   <?php endwhile; ?>
			   </ul>
		  </div>
		<?php endif; ?>
	 </div>
	 <div class="hr"></div>
	 <?php $this->need('copyright.php'); ?>
</div>

<div style="clear:both;"></div>
  	
<?php $this->need('footer.php'); ?>

