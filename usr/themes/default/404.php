<?php $this->need('header.php'); ?>

    <div class="grid_10" id="content">
        <div class="post">
            <h2 class="entry_title">404 - <?php _e('页面没找到'); ?></h2>
		<img src="<?php  $this->options->themeUrl('images/404.jpg'); ?>" />
            <p>
            <form method="post">
                <div><input type="text" name="s" class="text" size="20" /> <input type="submit" class="submit" value="<?php _e('搜索'); ?>" /></div>
            </form>
            </p>
        </div>

    </div><!-- end #content-->
	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
