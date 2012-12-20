<div id="comments">
  <?php $this->comments()->to($comments); ?>
  <?php if ($comments->have()): ?>
  <h3><?php $this->commentsNum(_t('本文暂无评论'), _t('本文仅有一篇评论'), _t('本文有 %d 篇评论')); ?><a href="#response" title="<?php _e('发表你的见解'); ?>"> <?php _e('↓↓'); ?></a></h3>
  <?php $comments->pageNav(); ?>
  <?php $comments->listComments(); ?>
  <?php endif; ?>
  <?php if($this->allow('comment')): ?>
  <div id="<?php $this->respondId(); ?>" class="respond">
    <div class="cancel-comment-reply">
      <?php $comments->cancelReply(); ?>
    </div>
    <h3 id="response" name="response"><?php _e('添加新评论'); ?><a href="#header" title="<?php _e('回到页头'); ?>"> <?php _e(' ↑↑'); ?></a></h3>
    <form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">
      <?php if($this->user->hasLogin()): ?>
      <p>Logged in as <a href="<?php $this->options->profileUrl(); ?>">
        <?php $this->user->screenName(); ?>
        </a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout">
        <?php _e('退出'); ?>
        &raquo;</a></p>
      <?php else: ?>
      <p>
        <input type="text" name="author" id="author" class="text" size="15" value="<?php $this->remember('author'); ?>" />
        <label for="author">
          <?php _e('称呼'); ?>
          <span class="required">*</span></label>
      </p>
      <p>
        <input type="text" name="mail" id="mail" class="text" size="15" value="<?php $this->remember('mail'); ?>" />
        <label for="mail">
          <?php _e('邮箱'); ?>
          <?php if ($this->options->commentsRequireMail): ?>
          <span class="required">*</span>
          <?php endif; ?>
        </label>
      </p>
      <p>
        <input type="text" name="url" id="url" class="text" size="15" value="<?php $this->remember('url'); ?>" />
        <label for="url">
          <?php _e('网站'); ?>
          <?php if ($this->options->commentsRequireURL): ?>
          <span class="required">*</span>
          <?php endif; ?>
        </label>
      </p>
      <?php endif; ?>
      <p>
        <textarea rows="5" cols="50" name="text" class="textarea"><?php $this->remember('text'); ?></textarea>
      </p>
      <p>
        <input type="submit" value="<?php _e('提交评论'); ?>" class="submit" />
      </p>
    </form>
  </div>
  <?php else: ?>
  <?php endif; ?>
</div>
