<?
	$form_household_members   = $this->session->userdata('form_household_members');
	$primary_name = $form_household_members[0]['first_name'];
	if (trim($form_household_members[0]['middle_initial'])) {
		$primary_name .= ' '.$form_household_members[0]['middle_initial'];
	}
	$primary_name .= ' '.$form_household_members[0]['last_name'];
?>
<div class="row text-center">
	<div class="col-sm-12 col-md-offset-2 col-md-8 electronic-signature">
		<h2 class="mb25"><?=$this->lang->line('electronic_sig_title')?></h2>
		<p class="text-large">
			<span class="asterisk">*</span>
			<?=$this->lang->line('electronic_sig_subtitle')?>
			<?=help_icon($this->lang->line('electronic_sig_subtitle_help'))?>
		</p>
		<div class="row">
			<div class="col-sm-12 col-md-1">
				<label class="checkbox-inline">
					<input type="checkbox" name="electronicSignature" data-error="<?=$this->lang->line('error_electronic_sig_agree')?>" required>
				</label>
			</div>
			<div class="col-sm-12 col-md-11 text-left sig-statement">
				<p><?=$this->lang->line('electronic_sig_statement')?></p>
				<input type="text"
					class="form-control input-lg"
					name="electronic_signature"
					id="electronic_signature"
					data-match="#electronic_signature_match"
					data-error="<?=$this->lang->line('error_electronic_sig_name')?>"
					required />
				<div class="help-block with-errors"></div>
				<span><?=$primary_name?></span>
				<input type="hidden" id="electronic_signature_match" value="<?=$primary_name?>" />
			</div>
		</div>
		<div class="row mt-20">
			<div class="col-sm-12 col-md-offset-1 col-md-11 text-left">
				<h4>Last 4 digits of Social Security Number <?=help_icon($this->lang->line('electronic_sig_ssn_help'))?></h4>
			</div>
			<div class="col-sm-12 col-md-offset-1 col-md-4 text-left">
				<span>XXX-XX-</span>
				<input type="text" class="form-control input-lg ssn" data-minlength="4" name="social_security_last_four" maxlength="4" required data-error="<?=$this->lang->line('error_electronic_sig_social')?>" />
			</div>
			<div class="col-sm-12 col-md-4 text-left">
				<label class="checkbox-inline ssn-checkbox">
					<input type="checkbox" name="ssn_not_available" value="1">
					<span class="checkbox-label"><?=$this->lang->line('electronic_sig_not_available')?></span>
					<div class="help-block with-errors"></div>
				</label>
			</div>
		</div>
	</div>
</div>