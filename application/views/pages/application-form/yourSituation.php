<?=form_hidden('scenario');?>
<div class="row text-center your-situation">
	<h2><?=$this->lang->line('your_situation_title')?></h2>
	<p class="text-large"><?=$this->lang->line('your_situation_subtitle')?></p>
	<div class="col-sm-12 col-md-4">
		<?=help_icon($this->lang->line('your_situation_scenario_a_help'))?>
		<a href="#" class="circular_button" data-scenario-value="assistance">
			<div style="width: 85%; margin-left: auto; margin-right: auto; position: relative; top: 20%;">
				<?=$this->lang->line('your_situation_already')?>
			</div>
		</a>
		<div class="grey_header">
			<?=$this->lang->line('your_situation_need')?>
		</div>
		<p class="mt-10">
			<?=$this->lang->line('your_situation_case_number')?>
		</p>
	</div>
	<div class="col-sm-12 col-md-4">
		<?=help_icon($this->lang->line('your_situation_scenario_b_help'))?>
		<a href="#" class="circular_button" data-scenario-value="foster">
			<div style="width: 85%; margin-left: auto; margin-right: auto; position: relative; top: 22%;">
				<?=$this->lang->line('your_situation_all_foster')?>
			</div>
		</a>
		<div class="grey_header">
			<?=$this->lang->line('your_situation_need')?>
		</div>
		<p class="mt-10">
			<?=$this->lang->line('your_situation_childrens_names')?>
		</p>
	</div>
	<div class="col-sm-12 col-md-4">
		<a href="#" class="circular_button" data-scenario-value="no">
			<div style="width: 85%; margin-left: auto; margin-right: auto; position: relative; top: 43%;">
				<?=$this->lang->line('your_situation_none')?>
			</div>
		</a>
		<div class="grey_header">
			<?=$this->lang->line('your_situation_need')?>
		</div>
		<p class="mt-10">
			<?=$this->lang->line('your_situation_household_income')?>
		</p>
	</div>
</div>
