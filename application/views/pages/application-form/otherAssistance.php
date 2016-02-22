<div class="row text-center other-assistance">
	<div class="col-sm-12 col-md-12">
		<h2><?=$this->lang->line('other_assistance')?></h2>
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
			<h4><span class="asterisk">* </span><?=$this->lang->line('assistance_program')?></h4>
			<select name="assistance_program" class="form-control input-lg">
				<option selected="selected" disabled="disabled">Select Program</option>
				<option value="snap">SNAP</option>
				<option value="tanf">TANF</option>
				<option value="fdpir">FDPIR</option>
			</select>
		</div>
		<div class="col-sm-12 col-md-3">
			<h4><span class="asterisk">* </span><?=$this->lang->line('case_number')?></h4>
			<input type="text" name="case_number" placeholder="<?=$this->lang->line('example_case_number')?>" class="form-control input-lg" />
		</div>
	</div>
</div>