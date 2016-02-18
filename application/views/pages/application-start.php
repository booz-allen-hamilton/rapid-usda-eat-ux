<div id="page-application-form">
	<div class="container">
		<div class="row text-center" style="margin-top: 12%;">
			<div class="col-sm-12 col-md-12">
				<?
					$form_attributes = array(
						'id'    => 'form-application'
					);
					echo form_open($form['process'], $form_attributes);
				?>
				<h2><b><?=$this->lang->line('title_assistance')?></b></h2>
				<p class="text-large mb15" style="margin-top: 30px;"><?=$this->lang->line('label_assistance')?>
					<a href="#" data-toggle="modal" data-target="#assistanceClarification">
						<span class="glyphicon glyphicon-info-sign"></span>
					</a>
				</p>
				<p><?=$this->lang->line('label_assistance_clarification')?></p>
				<div style="margin-top: 50px;">
					<div class="col-sm-12 text-center">
						<button type="submit" class="button button-invert-green" style="margin-right: 20px;">
							<i class="icon-left fa fa-check"></i><?=$this->lang->line('yes')?>
						</button>
						<button type="submit" class="button button-invert-red">
							<i class="icon-left fa fa-times"></i><?=$this->lang->line('no')?>
						</button>
					</div>
				</div>
				<?
					echo form_close();
				?>
			</div>
		</div>
	</div>
	<div class="footer text-center">
		<a href="<?=base_url('apply/cancel')?>" class="link">Cancel</a>
	</div>
</div>
</div>

<div id="assistanceClarification" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
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