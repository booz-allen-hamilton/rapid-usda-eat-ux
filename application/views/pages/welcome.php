<div id="page-welcome">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 welcome-information">
				<div class="col-sm-12 col-md-2">
					<img src="<?=PATH_ASSETS?>img/apple.jpg" class="img-responsive" />
				</div>
				<div class="col-sm-12 col-md-10">
					<h1><?=$this->lang->line('welcome_title')?></h1>
				</div>
			</div>
			<div class="col-sm-12 col-md-6">
				<p class="text-large">
					<?=$this->lang->line('welcome_description_part_one')?>
					<?=help_icon("")?>
					<?=$this->lang->line('welcome_description_part_two')?>
				</p>
			</div>
			<div class="col-sm-12 col-md-6">
				<h2><?=$this->lang->line('welcome_required')?></h2>

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
				<div class="col-sm-12 button-holder">
					<a href="<?=base_url('apply')?>" class="button button-lg button-orange">
						<?=$this->lang->line('welcome_btn')?><i class="icon-right fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>