<div id="page-application-form">
<?
	$form_attributes = array(
		'id'           => 'form-application',
		'class'        => '',
		'role'         => "form",
		'data-toggle'	=> "validator",
	);
	echo form_open($form['process'], $form_attributes);
	echo '<div class="container">';
	//	error message
	if ($this->session->flashdata('error_alert')) {
?>
	<div class="alert alert-warning">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?=$this->lang->line($this->session->flashdata('error_alert'));?>
	</div>
<?
	}
	//	load form section
	$this->load->view('pages/application-form/'.$form['section']);
	echo '</div>';
	
	if (!$this->session->flashdata('application_id')) {
?>
	<div class="footer">
		<div class="container">
			<div class="row">
			<?
				if ($form['form_sections'] == NULL) {
			?>
				<div class="col-sm-12 text-center">
					<a href="<?=base_url('apply/cancel')?>" class="button button-md button-transparent"><?=$this->lang->line('cancel')?></a>
				</div>
			<?
				} else {
			?>
				<div class="col-sm-12 col-md-6">
					<table>
						<tr>
						<?
							for($i = 1; $i <= count($form['form_sections']); $i++) {
								$step = ($i == $form['step'] ? 'step-active' : 'step-disabled');
								
								if ($form['step'] > $i) {
									$step = 'step-complete';
								}
								if ($form['step'] == 'electronicSignature') {
									$step = 'step-complete';
								}
						?>
							<td>
								<div class="footer-progress-step <?=$step?>" id="step-<?=$i?>">
									<span class="fa-stack fa-2x">
										<i class="fa fa-circle-thin fa-stack-2x icon-outline"></i>
										<i class="fa fa-circle fa-stack-2x icon-background"></i>
										<i class="fa fa-check fa-stack-1x icon-image"></i>
										<i class="fa fa-stack-1x icon-number"><?=$i?></i>
									</span>
								</div>
							</td>
							<?
								if ($i != count($form['form_sections'])) {
							?>
								<td>
									<div class="footer-bav-connector"></div>
								</td>
						<?
								}
							}
						?>
						</tr>
					</table>
				</div>
				<div class="col-sm-12 col-md-6">
					<button class="button button-blue pull-right" type="submit">
						<?=$this->lang->line('next')?><i class="icon-right fa fa-angle-right"></i>
					</button>
					<a href="#" id="history-back" class="button button-blue mr-10 pull-right" data-action="prev">
						<i class="icon-left fa fa-angle-left"></i><?=$this->lang->line('back')?>
					</a>
					<a href="<?=base_url('apply/cancel')?>" class="button button-transparent mr-10 pull-right"><?=$this->lang->line('cancel')?></a>
					<div class="clearfix"></div>
				</div>
			<?
				}
			?>
			</div>
		</div>
	</div>
<?
	}
	echo form_close();
	 
	//	form submission for back
	$form_attributes = array(
		'id' => 'form-application-back'
	);
	echo form_open($form['process'], $form_attributes);
	echo form_hidden('back', 1);
	echo form_close();
?>
</div>
