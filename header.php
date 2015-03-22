<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>
    	<?php if ($this->is('single')) : ?><?php $this->archiveTitle('','',' - '); ?><?php $this->options->title(); ?><?php else :?><?php $this->options->title(); ?> - <?php $this->options->description() ?><?php endif; ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <link href="<?php $this->options->themeUrl('style.css'); ?>" rel="stylesheet" type="text/css" />
<body>
<div class="wrap">
    <div class="header"><span class="name"><?php $this->options->title(); ?></span><span> - <?php $this->options->description() ?></span></div>
    <div class="content">