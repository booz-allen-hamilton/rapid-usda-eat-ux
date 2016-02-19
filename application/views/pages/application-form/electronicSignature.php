<div class="row text-center">
	<div class="col-sm-12 col-md-offset-2 col-md-8">
		<h2 class="mb25">Electronic Signature</h2>
		<p class="text-large">
			<span class="asterisk">*</span>
			<?=$this->lang->line('electronic_sig_subtitle')?>
			<?=help_icon("")?>
		</p>
		<div class="row">
			<div class="col-sm-12 col-md-1">
				<label class="checkbox-inline">
					<input type="checkbox" name="electronicSignature" data-error="<?=$this->lang->line('error_electronic')?>" required>
				</label>
			</div>
			<div class="col-sm-12 col-md-11 text-left sig-statement">
				<p><?=$this->lang->line('electronic_sig_statement')?></p>
				<input type="text" class="form-control input-lg" name="electronic_signature" required data-error="<?=$this->lang->line('error_getting_started_first')?>" />
			</div>
		</div>
	</div>
</div>