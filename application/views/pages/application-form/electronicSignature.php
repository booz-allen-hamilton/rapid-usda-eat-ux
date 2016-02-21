<div class="row text-center">
	<div class="col-sm-12 col-md-offset-2 col-md-8 electronic-signature">
		<h2 class="mb25">Electronic Signature</h2>
		<p class="text-large">
			<span class="asterisk">*</span>
			<?=$this->lang->line('electronic_sig_subtitle')?>
			<?=help_icon("")?>
		</p>
		<div class="row">
			<div class="col-sm-12 col-md-1">
				<label class="checkbox-inline">
					<input type="checkbox" name="electronicSignature" data-error="<?=$this->lang->line('error_electronic_sig_agree')?>" required>
				</label>
			</div>
			<div class="col-sm-12 col-md-11 text-left sig-statement">
				<p><?=$this->lang->line('electronic_sig_statement')?></p>
				<input type="text" class="form-control input-lg" name="electronic_signature" required data-error="<?=$this->lang->line('error_electronic_sig_name')?>" />
				<span>John Smith</span>
			</div>
		</div>
		<div class="row mt-20">
			<div class="col-sm-12 col-md-offset-1 col-md-11 text-left">
				<h4>Last 4 digits of Social Security Number <?=help_icon("")?></h4>
				<span>XXX-XX-</span>
				<input type="text" class="form-control input-lg ssn" maxlength="4" name="social_security_last_four" required data-error="<?=$this->lang->line('error_electronic_sig_social')?>" />
				<label class="checkbox-inline ssn-checkbox">
					<input type="checkbox" name="ssn_not_available">
					<span class="checkbox-label">Not available</span>
				</label>
			</div>
		</div>
	</div>
</div>