<?php
/**
 * 这是 Typecho 系统的一套默认皮肤
 * 
 * @package Typecho Default Theme 
 * @author fen
 * @version 1.0.7
 * @link http://typecho.org
 */
	error_reporting(E_ALL); 
 $this->need('header.php');
 ?>

    <div class="grid_10" id="content">


	 <?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
     <?php while ($categories->next()): ?>
	 <div class="gory-list">
	      <?php $this->widget('Widget_Archive@category-' . $categories->mid, 'pageSize=20&type=category', 'mid=' . $categories->mid)->to($posts); ?>
	      <div class="gory-name"><a href="<?php $categories->permalink(); ?>"><?php $categories->name(); ?></a></div>
		  <div class="art-tilte">
		       <ul>
			   <?php while ($posts->next()): ?>
			   <li onMouseOver="this.style.backgroundColor='#EEEEEE'"   onmouseout="this.style.backgroundColor='#FFFFFF'"><span class="time">[<font color="#808080"><?php $this->date('Y-m-j'); ?></font>]</span><a href="<?php $posts->permalink(); ?>" ><?php $posts->title(); ?></a></li>
			   <?php endwhile; ?>
			   </ul>
		  </div>
	 </div>
     <?php endwhile; ?>


    <?php // $this->pageNav(); 
?>
    </div><!-- end #content-->
	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
