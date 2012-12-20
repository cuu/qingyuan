<div id="sidebar">
<form method="get" action="./" target="_top">
  <label for="s" style="display:none;">输入您的搜索字词</label>
  <input type="text" name="s" id="s" value="" />
  <button type="submit">Search</button>
</form>
<h3>About</h3>
<ul>
	<li>
	  <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
      <?php while($pages->next()): ?>
      <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a> | 
      <?php endwhile; ?>
      <a href="<?php $this->options->feedUrl(); ?>" title="RSS订阅">RSS</a>
    </li>
</ul>
<?php if($this->is('post')): ?>
<h3>Related Posts</h3>
<ul>
  <?php $this->related()->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
</ul>
<?php endif; ?>
<h3>Recent Posts</h3>
<ul>
  <?php $this->widget('Widget_Contents_Post_Recent')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
</ul>
<h3>Recent Comments</h3>
<ul>
	<?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
    <?php while($comments->next()): ?>
    <li><a href="<?php $comments->permalink(); ?>">
      <?php $comments->author(false); ?>
      </a>:
      <?php $comments->excerpt(50, '...'); ?>
    </li>
    <?php endwhile; ?>
</ul>
<h3>Tags</h3>
<ul class="taglist">
<?php $this->widget('Widget_Metas_Tag_Cloud', 'limit=26')->to($tags); ?>
<?php while($tags->next()): ?>
    <a href="<?php $tags->permalink(); ?>" title="标签:<?php $tags->name(); ?>"><?php $tags->name(); ?></a>
<?php endwhile; ?>
    <div class="break"></div>
</ul>
<h3>Archive</h3>
<ul class="li2">
    <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
</ul>
<?php if($this->is('index')): ?>
<h3>Links</h3>
<ul class="li2">
    <li><a href="<?php $this->options->siteurl(); ?>" title="<?php $this->options->title(); ?>"><?php $this->options->title(); ?></a></li>
    <li><a target="_blank" href="http://www.fufuok.com/" title="<?php _e('品味经典 Fufu'); ?>">品味经典</a></li>
</ul>
<?php endif; ?>
</div>
