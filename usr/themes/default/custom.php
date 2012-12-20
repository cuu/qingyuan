<?php
    /**
    * 自定义模板1
    *
    * @package custom
    */

?>
<?php $this->need('header.php'); ?>

    <div class="grid_10" id="content">
        <div class="post" style="border-bottom:none;">
		<!--	<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2> -->
			<p class="entry_data">
			<!--	<span><?php _e('作者：'); ?><?php $this->author(); ?></span>
				<?php _e('发布时间：'); ?><?php $this->date('F j, Y'); ?>
			-->
			</p>
			<?php $this->content(); ?>
	</div>

 <?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
     <?php while ($categories->next()): ?>
	<?php if( strstr($categories->name,"公司")): ?>
		
	 <div class="gory-list">
	      <?php $this->widget('Widget_Archive@category-' . $categories->mid, 'pageSize=20&type=category', 'mid=' . $categories->mid)->to($posts); ?>
	      <div class="gory-name">
		<!-- <a href="<?php $categories->permalink(); ?>"><?php $categories->name(); ?></a> --></div>
		  <div class="art-tilte">
		       <ul style="list-style:none;">
			   <?php while ($posts->next()): ?>
			   <li style="margin-left:0px;" onMouseOver="this.style.backgroundColor='#EEEEEE'"   onmouseout="this.style.backgroundColor='#FFFFFF'"><span class="time">[<font color="#808080"><?php $this->date('Y-m-j'); ?></font>]</span><a href="<?php $posts->permalink(); ?>" ><?php $posts->title(); ?></a>
				<?php // echo substr($posts->text, 0,30); 
				?>
			   </li>
			   <?php endwhile; ?>
			   </ul>
		  </div>
	 </div>
	<?php endif; ?>
     <?php endwhile; ?>

		<?php $this->need('comments.php'); ?>
    </div><!-- end #content-->
	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>

