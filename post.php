<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="title"><?php $this->title() ?></div>
<div class="info">
    <span class="i"><?php $this->date('Y.m.d H:i'); ?></span>
    <span class="i">COMMENTS: <?php $this->commentsNum('No Comment', '1 Comment', '%d Comments'); ?></span>
    <a class="i" href="javascript:history.go(-1)">BACK</a>
</div>
<div class="article"><?php $this->content(); ?></div>

<?php $this->need('footer.php'); ?>