<div class="row text-center">
	<div class="col-sm-12 col-md-offset-2 col-md-8">
		<h2 class="mb25"><?=$this->lang->line('terms_and_cond_title')?></h2>
		<p class="text-large">
			<span class="asterisk">*</span>
			<?=$this->lang->line('terms_and_cond_subtitle')?>
			<?=help_icon($this->lang->line('terms_and_cond_help'))?>
		</p>
	</div>
	<div class="col-sm-12">
		<div class="scroller text-left">
			<?=$this->lang->line('terms_and_cond_content')?>
		</div>
	</div>
	<div class="col-sm-12 col-md-offset-2 col-md-8">
		<div class="text-center mt-20">
			<label class="checkbox-inline">
				<input type="checkbox" name="terms_and_cond_agree">
				<span class="checkbox-label"><?=$this->lang->line('terms_and_cond_agree')?></span>
			</label>
		</div>
	</div>
</div>