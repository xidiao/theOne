<?php
$this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" href="<?=base_url('public/css')?>/bootstrap.min.css">

	<!-- 可选的Bootstrap主题文件（一般不用引入） -->
	<link rel="stylesheet" href="<?=base_url('public/css')?>/bootstrap-theme.min.css">

	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="<?=base_url('public/js')?>/jquery.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="<?=base_url('public/js')?>/bootstrap.min.js"></script>

</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>

	<?=$page_links;?>

</div>

</body>
</html>