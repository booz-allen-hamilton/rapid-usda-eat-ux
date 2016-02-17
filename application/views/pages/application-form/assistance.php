<div class="row centered" style="margin-top: 12%;">
	<div class="col-sm-12">
		<h2><b><?=$this->lang->line('title_assistance')?></b></h2>
		<h3 style="margin-top: 30px;"><?=$this->lang->line('label_assistance')?>
			<a href="#" data-toggle="modal" data-target="#assistanceClarification">
				<span class="glyphicon glyphicon-info-sign"></span>
			</a>
		</h3>
		<h4 style="margin-top: 20px;"><?=$this->lang->line('label_assistance_clarification')?></h4>
		<div style="margin-top: 50px;">
			<div class="col-sm-12 col-md-offset-3 col-md-3">
				<a href="#" class="white-button-large"><span style="padding-right: 20px;">&#10004;</span><?=$this->lang->line('yes')?></a>
			</div>
			<div class="col-sm-12 col-md-3">
				<a href="#" class="white-button-large"><span style="padding-right: 20px;">&#10006;</span><?=$this->lang->line('no')?></a>
			</div>
		</div>
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