<div class="container" style="margin-top: 15px;">
	<div class="row">
		<div class="col-sm-12 text-right">
			<div class="btn-group" role="group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    <?=$global['language_list'][$this->session->userdata('language')]?>
			    <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
					<?
						foreach($global['language_list'] as $language_key => $language_value) {
					?>
			    <li><a href="<?=base_url('client/language/'.$language_key)?>"><?=$language_value?></a></li>
					<?
						}
					?>
			  </ul>
			</div>
		</div>
	</div>
</div>
