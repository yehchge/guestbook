<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="theme/main.css" />
<title><?php echo APP_NAME; ?></title>
</head>

<body>
<div id="container">
<div id="header">
<h1><?php echo APP_NAME; ?></h1>
</div>
<div id="functions">
<ul>
<li><a href="./">首頁</a></li>
<li><a href="./index.php?act=add">新增留言</a></li>
<li><a href="./index.php?act=rss">RSS</a></li>
</ul>
</div>
<div id="content">
<?php if (count($this->messages)): ?>
<?php foreach ($this->messages as $id => $message): ?>
<div class="messageBlock">
<h2><?php echo $message['title']; ?></h2>
<p><?php echo nl2br($message['body']); ?></p>
<p class="messageBlockFunctions">By <?php echo $message['author']; ?></p>
</div>
<?php endforeach; ?>
<?php else: ?>
<p>沒有任何文章</p>
<?php endif; ?>
</div>
<div id="footer">
<p>WebMVC 留言版 0.1 alpha By Jace Ju</p>
</div>
</div>
</body>
</html>
