<div id="page-application-form">
	<div class="container">
<?
	$form_attributes = array(	
		'id'           => 'form-application',
		'class'        => 'form-horizontal container',
		'role'         => "form",
		'data-toggle'	=> "validator",
	);
	echo form_open($form['process'], $form_attributes);
	
	//	error message
	if ($this->session->flashdata('error_alert')) {
?>
	<div class="alert alert-warning">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?=$this->lang->line('form_server_error');?>
	</div>
<?
	}
	
	//	load form section
	$this->load->view('pages/application-form/'.$form['section']);
?>
	</div>
<?
	echo form_close();
?>
</div>
