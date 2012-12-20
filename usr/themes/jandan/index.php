<?php
/**
 * 移植于煎蛋
 * 
 * @package jandan_Fufu(0.8 (10.8.15))
 * @author Fufu
 * @version 0.0.2
 * @link http://www.fufuok.com/
 */
 
include('header.php');
?>
<div id="content">
	<div class="title"><?php if($this->is('index')): ?><?php _e('新鲜发布'); ?><?php else: ?><?php $this->archiveTitle(' - ', '', ''); ?><?php endif; ?>：</div>
	<?php while($this->next()): ?>	
    <div class="post f">
        <div class="info">
            <span class="time"><?php $this->date('Y-m-d'); ?></span>
            <h2><a href="<?php $this->permalink() ?>" rel="bookmark"><?php $this->title() ?></a></h2>
            <span class="small"><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('0', '1+', '%d+'); ?></a></span>
        </div>
        <?php $this->content('继续阅读 &raquo;'); ?>
        <div class="break"></div>
    </div>
	<?php endwhile; ?>	
	<?php $this->pageNav(); ?>
    <div class="break"></div>
</div>
<?php include('sidebar.php'); ?>
<?php include('footer.php'); ?>
