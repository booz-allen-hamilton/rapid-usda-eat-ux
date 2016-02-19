<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?=$app['title']?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=PATH_VENDOR?>twbs/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?=PATH_ASSETS?>css/app.css" />
</head>
<body>
	<?
		$this->load->view('layout/header');
	?>
	<div class="container">
		<?
			$this->load->view($app['view']);
		?>
	</div>
	<div id="modal-help" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"><i class="fa fa-times"></i></span>
					</button>
					<h4 class="modal-title"></h4>
				</div>
				<div class="modal-body"></div>
			</div>
		</div>
	</div>


	<script src="<?=PATH_VENDOR?>components/jquery/jquery.min.js"></script>
	<script src="<?=PATH_VENDOR?>twbs/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?=PATH_ASSETS?>js/app.js"></script>
	<?
		if (!empty($app['scripts'])) {
			if (is_array($app['scripts'])) {
				foreach($app['scripts'] as $script) {
	?>
					<script src="<?=PATH_ASSETS.$script?>"></script>
	<?
				}
			}
		}
	?>
</body>
</html>