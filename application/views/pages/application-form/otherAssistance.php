<div class="row text-center other-assistance">
	<div class="col-sm-12 col-md-12">
		<h2><?=$this->lang->line('other_assistance_title')?></h2>
	</div>
	<div class="col-sm-12 col-md-9 col-md-offset-1">
		<p class="text-large">
			<span class="asterisk">* </span>
			<?=$this->lang->line('other_assistance_subtitle')?>
			<?=help_icon($this->lang->line('other_assistance_help'))?>
		</p>
	</div>
	<div class="form-group">
		<div class="col-sm-12 col-md-3 col-md-offset-3">
			<h4 class="text-left"><span class="asterisk">* </span><?=$this->lang->line('other_assistance_program')?></h4>
			<select name="assistance_program" class="form-control input-lg" required>
				<option selected="selected" disabled="disabled"><?=$this->lang->line('other_assistance_select_program')?></option>
				<?
					foreach($this->config->item('form_assistance_programs') as $assistance_program_key => $assistance_program_value) {
				?>
				<option value="<?=$assistance_program_key?>"><?=$assistance_program_value?></option>
				<?
					}
				?>
			</select>
		</div>
		<div class="col-sm-12 col-md-3">
			<h4 class="text-left"><span class="asterisk">* </span><?=$this->lang->line('other_assistance_case_number')?></h4>
			<input type="text" 
				name="case_number" 
				placeholder="<?=$this->lang->line('other_assistance_example')?>" 
				class="form-control input-lg" 
				required
				maxlength="10" />
		</div>
	</div>
</div>