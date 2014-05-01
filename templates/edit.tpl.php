<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="theme/main.css" />
<title><?php echo APP_NAME; ?> &gt; <?php echo $title; ?></title>
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
<form name="edit" id="edit" method="post" action="./index.php?act=doAdd">
<h2>新增留言</h2>
<p>
<label for="title">標題</label>
<input type="text" name="title" id="title" value="" />
</p>
<p>
<label for="title">作者</label>
<input type="text" name="author" id="author" value="" />
</p>
<p>
<label for="title">內容</label>
<textarea name="body" id="body"></textarea>
</p>
<p><input type="submit" value="送出" /></p>
<p class="editBlockFunctions"><a href="./index.php">取消</a></p>
</form>
</div>
<div id="footer"></div>
</div>
</body>
</html>