<nav class="navbar navbar-default navbar-usda">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-usda-collapse" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="<?=base_url()?>">
				<img src="<?=PATH_IMG?>header/logo.png" class="img-responsive" />
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="navbar-usda-collapse">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<?=$global['language_list'][$this->session->userdata('language')]?>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<?
							foreach($global['language_list'] as $language_key => $language_value) {
						?>
						<li><a href="<?=base_url('client/language/'.$language_key)?>?redirect=<?=urlencode(uri_string())?>"><?=$language_value?></a></li>
						<?
							}
						?>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			<?
				if ($this->uri->segment(1) == 'apply' && $this->session->userdata('form_confirmation') != 1) {
			?>
				<li>
					<a href="#"><span class="asterisk" style="font-size: 16px;">*</span><span class="text"><?=$this->lang->line('nav_required')?></span></a>
				</li>
			<?
				} else {
			?>
				<li class="<?=($global['nav'] == 'faq' ? 'active' : NULL)?>">
					<a href="<?=base_url('faq')?>"><span class="text"><?=$this->lang->line('nav_faq')?></span></a>
				</li>
			<?
				}
			?>
			<?
				/*
			?>
			<li class="<?=($global['nav'] == 'how-it-works' ? 'active' : NULL)?>">
				<a href="<?=base_url('how-it-works')?>"><span class="text"><?=$this->lang->line('nav_how_it_works')?></span></a>
			</li>
			<li class="<?=($global['nav'] == 'status' ? 'active' : NULL)?>">
				<a href="<?=base_url('status')?>"><span class="text"><?=$this->lang->line('nav_application_status')?></span></a>
			</li>
			<li class="<?=($global['nav'] == 'help' ? 'active' : NULL)?>">
				<a href="<?=base_url('help')?>"><span class="text"><?=$this->lang->line('nav_help')?></span></a>
			</li>
			<li class="<?=($global['nav'] == 'apply' ? 'active' : NULL)?>">
				<a href="<?=base_url('apply')?>">
					<span class="button button-orange-inverse"><?=$this->lang->line('nav_apply_now')?></span>
				</a>
			</li>
			*/
			?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>