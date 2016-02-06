<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?=$app['view']?></title>

	<link rel="stylesheet" href="<?=PATH_VENDOR?>twbs/bootstrap/dist/css/bootstrap.min.css" />
</head>
<body>
	<?
		$this->load->view($app['view']);
	?>
	<script src="<?=PATH_VENDOR?>components/jquery/jquery.min.js"></script>
	<script src="<?=PATH_VENDOR?>twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>