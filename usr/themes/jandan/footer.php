    <div class="break"></div>
</div>
<div id="footer">&copy; 2010 <?php $this->options->title(); ?>, Powered by <a href="http://typecho.org/" target="_blank">Typecho)))</a>, Theme by <a href="http://www.fufuok.com/" target="_blank">Fufu</a>, <a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a> and <a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a></div>
<?php $this->footer(); ?>
<?php
if ($this->is('single')) {
    Helper::threadedCommentsScript();
}
?>
<div id="sitestat">统计代码放这</div>
</div>
</body>
</html>
