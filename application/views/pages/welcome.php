<?
$form_attributes = array(
	'id'           => 'form-application',
	'class'        => 'form-horizontal container',
	'role'         => "form",
	 'data-toggle'	 => "validator",
);
echo form_open($form['process'], $form_attributes);

//	error message
if ($this->session->flashdata('error_alert')) { ?>
<div class="alert alert-warning">
  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?=$this->lang->line('form_server_error');?>
</div>
<? } ?>
<div id="page-welcome">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<h1><?=$this->lang->line('welcome_title')?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-offset-1 col-md-7 welcome-information">
				<p><?=$this->lang->line('welcome_description')?></p>
				<h2><?=$this->lang->line('welcome_required')?></h2>
				<h3><?=$this->lang->line('welcome_enter_name')?></h3>

				<div class="form-group col-sm-6 mr10">
					<input type="text" class="form-control input-lg" name="submitter_first" placeholder="First Name" required data-error="<?=$this->lang->line('error_welcome_first_name')?>" />
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group col-sm-6">
					<input type="text" class="form-control input-lg" name="submitter_last" placeholder="Last Name" required data-error="<?=$this->lang->line('error_welcome_last_name')?>" />
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					<div class="help-block with-errors"></div>
				</div>
				<div class="form-group col-sm-12">
					<label class="checkbox-inline">
						<input type="checkbox" name="overEighteen" data-error="<?=$this->lang->line('error_over_eighteen')?>" required>
						<span class="checkbox-label"><?=$this->lang->line('welcome_over_eighteen')?></span>
					</label>
					<div class="help-block with-errors"></div>
				</div>


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
<?
echo form_close();
?>