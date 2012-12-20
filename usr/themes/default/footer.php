

	<div class="grid_14" id="footer">
		
<!-- JiaThis Button BEGIN -->
<div class="jiathis_style" style="float:left;margin-top:5px;">
	<a class="jiathis_button_qzone"></a>
	<a class="jiathis_button_tsina"></a>
	<a class="jiathis_button_tqq"></a>
	<a class="jiathis_button_renren"></a>
	<a class="jiathis_button_kaixin001"></a>
	<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
</div>
<script type="text/javascript" src="http://v3.jiathis.com/code_mini/jia.js?uid=1352258228271563" charset="utf-8"></script>
<!-- JiaThis Button END -->

	
	<!--<a href="<?php $this->options->siteurl(); ?>"><?php $this->options->title(); ?></a> <?php _e('is powered by'); ?> <a href="http://www.typecho.org">Typecho)))</a>-->
		Copyright 晴园心理  2012
		<a href="<?php $this->options->feedUrl(); ?>"><?php _e(''); ?> RSS  </a> 
		<!-- and <a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论'); ?> RSS</a> -->

                <?php if($this->user->hasLogin()): ?>
                    <a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a> || 
                    <a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a>
                <?php else: ?>
                    <a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a>
                <?php endif; ?>



	</div><!-- end #footer -->
</div>
<?php $this->footer(); ?>
</body>
</html>
