<div class="row centered assistance">
	<div class="col-sm-12">
		<h1><?=$this->lang->line('label_other_assistance')?></h1>
		<p><?=$this->lang->line('label_assistance')?>
			<a href="#" data-toggle="modal" data-target="#assistanceClarification">
				<span class="glyphicon glyphicon-info-sign"></span>
			</a>
		</p>
		<p><?=$this->lang->line('label_assistance_clarification')?></p>
	</div>
	<div class="col-sm-12 col-md-offset-3 col-md-3">
		<a href="#"><?=$this->lang->line('yes')?></a>
	</div>
	<div class="col-sm-12 col-md-3">
		<a href="#"><?=$this->lang->line('no')?></a>
	</div>
</div>

<div id="assistanceClarification" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"><?=$this->lang->line('modal_assistance_title')?></h4>
			</div>
			<div class="modal-body">
				<p><strong>SNAP:</strong> <?=$this->lang->line('modal_assistance_snap')?></p>
				<p><strong>TANF:</strong> <?=$this->lang->line('modal_assistance_tanf')?></p>
				<p><strong>FDPIR</strong>: <?=$this->lang->line('modal_assistance_fdpir')?></p>
				<p><em><?=$this->lang->line('modal_assistance_clarification')?></em></p>
			</div>
		</div>
	</div>
</div>