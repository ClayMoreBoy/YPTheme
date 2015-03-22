<?php
/**
 * YPTheme Mobile Theme Ported From WordPress
 * 
 * @package YPTheme Mobile Theme 
 * @author Vicnent Lau
 * @version 1.0
 * @link http://tfp.io
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 
<div class="list">
    <ul>
        <?php while($this->next()): ?>
            <li>
                <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                <div class="info">
                    <span class="i"><?php $this->date('Y.m.d H:i'); ?></span>
                    <span class="i">COMMENTS: <?php $this->commentsNum('No Comment', '1 Comment', '%d Comments'); ?></span>
                </div>
            </li>
        <?php endwhile; ?>
    </ul>
</div>
<div class="page">
 <?php $this->pageLink('[ PREV ]','prev'); ?>
 <?php $this->pageLink('[ NEXT ]','next'); ?>
</div>

<?php $this->need('footer.php'); ?>
