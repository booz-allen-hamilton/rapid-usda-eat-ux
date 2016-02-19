<?=form_hidden('scenario');?>
<div class="row text-center">
	<h3>*<?=$this->lang->line('situation_heading')?></h3>
	<div class="col-sm-12 col-md-4">
		<p>
			<a href="#" data-toggle="modal" data-target="#atLeastOneClarification">
				<span class="button-orange glyphicon glyphicon-question-sign" style="float: right; right: 25%; top: 30px;"></span>
			</a>
		</p>
		<a href="#" class="circular_button" data-value="assistance">
			<div style="width: 85%; margin-left: auto; margin-right: auto; position: relative; top: 25%;">
				<?=$this->lang->line('at_least_one_household_member')?>
			</div>
		</a>
		<div class="grey_header">
			<?=$this->lang->line('what_youll_need')?>
		</div>
		<div style="margin-top: 10px; font-size: 16px;">
			<?=$this->lang->line('assistance_program_case_number')?>
		</div>
		<div style="margin-top: 10px; font-size: 16px;">
			<?=$this->lang->line('ssn')?>
		</div>
	</div>
	<div class="col-sm-12 col-md-4">
		<p>
			<a href="#" data-toggle="modal" data-target="#allHouseholdChildrenOneClarification">
				<span class="button-orange glyphicon glyphicon-question-sign" style="float: right; right: 25%; top: 30px;"></span>
			</a>
		</p>
		<a href="#" class="circular_button" data-value="foster">
			<div style="width: 85%; margin-left: auto; margin-right: auto; position: relative; top: 32%;">
				<?=$this->lang->line('all_household_children')?>
			</div>
		</a>
		<div class="grey_header">
			<?=$this->lang->line('what_youll_need')?>
		</div>
		<div style="margin-top: 10px; font-size: 16px;">
			<?=$this->lang->line('ssn')?>
		</div>
	</div>
	<div class="col-sm-12 col-md-4">
		<a href="#" class="circular_button" data-value="no">
			<div style="width: 85%; margin-left: auto; margin-right: auto; position: relative; top: 43%;">
				<?=$this->lang->line('no')?>
			</div>
		</a>
		<div class="grey_header">
			<?=$this->lang->line('what_youll_need')?>
		</div>
		<div style="margin-top: 10px; font-size: 16px;">
			<?=$this->lang->line('household_income')?>
		</div>
		<div style="margin-top: 10px; font-size: 16px;">
			<?=$this->lang->line('ssn')?>
		</div>
	</div>
</div>