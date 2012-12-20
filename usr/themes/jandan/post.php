<?php include('header.php'); ?>
<div id="content">
	<div class="title"><span class="tags"><?php $this->tags(' ', true, 'none'); ?></span><?php $this->category(''); ?></div>
	<div class="post f">
        <div class="info">
            <span class="time"><?php $this->date('Y-m-d'); ?></span>
            <h1><?php $this->title() ?></h1>
            <span class="small"><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('0', '1+', '%d+'); ?></a></span>
        </div>
    </div>
    <div class="post f">
		<?php $this->content(); ?>
        <div class="break"></div>
        <div class="postnext">
            上一篇：<?php $this->thePrev('%s', '最后一篇日志'); ?> | 下一篇：<?php $this->theNext('%s', '最新日志'); ?>
        </div>
    </div>
    <?php include('comments.php'); ?>
</div>
<?php include('sidebar.php'); ?>
<?php include('footer.php'); ?>
