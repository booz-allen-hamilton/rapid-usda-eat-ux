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
					<?=help_icon("Help is Here!")?>
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
					<span style="font-size:28px; padding-left:5px; padding-right:5px; color:#ABADB0;">OR</span><a href="mailto:?subject=Apply for free and reduced lunch&body=Hello,%0D%0A  %0D%0A Did you know that you can apply for free and reduced price school meals online. Click the link to go to the application and learn more.%0D%0A  %0D%0A http://usda-eat.us-east-1.elasticbeanstalk.com/"><span class="glyphicon glyphicon-envelope" style="font-size:24px; color:#038bce; padding-left:10px; padding-right:5px;"></span><span style="font-size:28px; color: #038bce;  text-decoration: none;">Share</span></a>
				</div>
			</div>
		</div>
	</div>
</div>
