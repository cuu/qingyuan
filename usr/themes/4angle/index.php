<?php
/**
 * 这是 Typecho 系统的一套仿制4ngel.net皮肤
 * 
 * @package copy4ngel Theme 
 * @author AC Yang
 * @version beta1.0
 * @link http://acyang.onshow.net
 */
 
 $this->need('header.php');
 ?>
<?php $this->need('sidebar.php'); ?>

<div id="container">
     <div class="banner"><img src="http://www.4ngel.net/images/top.gif" /></div>
	 <?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
     <?php while ($categories->next()): ?>
	 <div class="gory-list">
	      <?php $this->widget('Widget_Archive@category-' . $categories->mid, 'pageSize=20&type=category', 'mid=' . $categories->mid)->to($posts); ?>
	      <div class="gory-name"><a href="<?php $categories->permalink(); ?>"><?php $categories->name(); ?></a></div>
		  <div class="art-tilte">
		       <ul>
			   <?php while ($posts->next()): ?>
			   <li onMouseOver="this.style.backgroundColor='#EEEEEE'"   onmouseout="this.style.backgroundColor='#FFFFFF'"><span class="list-autor"><?php $this->author(); ?></span><span class="time">[<font color="#808080"><?php $this->date('Y-m-j'); ?></font>]</span><a href="<?php $posts->permalink(); ?>" target="_blank"><?php $posts->title(); ?></a></li>
			   <?php endwhile; ?>
			   </ul>
		  </div>
	 </div>
     <?php endwhile; ?>
	 <div class="hr"></div>
	 <?php $this->need('copyright.php'); ?>
</div>

<div style="clear:both;"></div>
  	
<?php $this->need('footer.php'); ?>
