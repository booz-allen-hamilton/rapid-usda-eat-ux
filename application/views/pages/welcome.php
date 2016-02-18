<div id="page-welcome">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h1><?=$this->lang->line('welcome_title')?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-sm-offset-1">
				<p><?=$this->lang->line('welcome_description')?></p>
				<h2><?=$this->lang->line('welcome_required')?>:</h2>
				<ol>
					<?
						foreach($this->lang->line('welcome_required_items') as $required_item) {
					?>
					<li><?=$required_item['text']?>
						<?=help_icon($required_item['help'])?>
					</li>
					<?
						}
					?>
				</ol>

				<a href="<?=base_url('apply')?>" class="button button-lg button-orange"><?=$this->lang->line('welcome_btn')?> <i class="icon-right fa fa-angle-right"></i></a>
			</div>
			<div class="col-sm-4">
				<img src="<?=PATH_ASSETS?>img/apple.png" class="img-responsive" />
			</div>
		</div>
	</div>
</div>