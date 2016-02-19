<div id="page-welcome">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 col-md-offset-1 col-md-7 welcome-information">
				<h1><?=$this->lang->line('welcome_title')?></h1>

				<p><?=$this->lang->line('welcome_description')?></p>
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
					<button type="submit" class="button button-lg button-orange"><?=$this->lang->line('welcome_btn')?> <i class="icon-right fa fa-angle-right"></i></button>
				</div>
			</div>
			<div class="col-sm-12 col-md-4 welcome-image">
				<img src="<?=PATH_ASSETS?>img/apple.png" class="img-responsive" />
			</div>
		</div>
	</div>
</div>