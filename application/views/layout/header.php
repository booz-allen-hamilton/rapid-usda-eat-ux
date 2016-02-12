<nav class="navbar navbar-default navbar-usda">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url()?>">LOGO</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
			  <li class="<?=($global['nav'] == 'how-it-works' ? 'active' : NULL)?>">
					<a href="<?=base_url('how-it-works')?>"><span class="text"><?=$this->lang->line('nav_how_it_works')?></span></a>
				</li>
				  <li class="<?=($global['nav'] == 'apply' ? 'active' : NULL)?>">
					<a href="<?=base_url('apply')?>"><span class="text"><?=$this->lang->line('nav_apply_now')?></span></a>
				</li>
				  <li class="<?=($global['nav'] == 'status' ? 'active' : NULL)?>">
					<a href="<?=base_url('status')?>"><span class="text"><?=$this->lang->line('nav_application_status')?></span></a>
				</li>
				  <li class="<?=($global['nav'] == 'help' ? 'active' : NULL)?>">
					<a href="<?=base_url('help')?>"><span class="text"><?=$this->lang->line('nav_help')?></span></a>
				</li>
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
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>