<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?=$app['title']?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=PATH_VENDOR?>twbs/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?=PATH_ASSETS?>lib/formValidation/dist/css/formValidation.css" />
	<link rel="stylesheet" href="<?=PATH_ASSETS?>css/app.css" />
</head>
<body>
	<?
		$this->load->view('layout/header');
		$this->load->view($app['view']);
	?>
	<script src="<?=PATH_VENDOR?>components/jquery/jquery.min.js"></script>
	<script src="<?=PATH_VENDOR?>twbs/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?=PATH_ASSETS.'lib/formValidation/dist/js/formValidation.js'?>" type="text/javascript"></script>
  <script src="<?=PATH_ASSETS.'lib/formValidation/dist/js/framework/bootstrap.min.js'?>" type="text/javascript"></script>
	<script src="<?=PATH_ASSETS?>js/app.js"></script>
	<?
		if (!empty($app['scripts'])) {
			if (is_array($app['scripts'])) {
				foreach($app['scripts'] as $script) {
	?>
					<script src="<?=PATH_ASSETS?>js/<?=$script?>"></script>
	<?
				}
			}
		}
	?>
</body>
</html>