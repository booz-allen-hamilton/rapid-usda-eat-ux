<h2><?=$this->lang->line('section_three_title')?></h2>
<div class="row form-group">
	<div class="col-md-3">
		<h2 class="line-after"><?=$this->lang->line('subsection_child_income')?></h2>
	</div>
	<div class="col-md-9">
		<hr>
	</div>
	<div class="col-md-12">
		<label for="childIncome"><?=$this->lang->line('label_child_income')?></label><br />
		<label class="radio-inline">
			<input type="radio" name="childIncome" value="1"><?=$this->lang->line('yes')?>
		</label>
		<label class="radio-inline">
			<input type="radio" name="childIncome" value="0"><?=$this->lang->line('no')?>
		</label>
	</div>

	<div class="col-md-12">
		<label for="childIncomeTotal"><?=$this->lang->line('label_child_income_total')?></label><br />
	</div>
	<div class="childIncomeRow col-md-12">
		<div class="input-group col-md-3">
			<span class="input-group-addon">$</span>
			<input type="text" class="form-control" id="childIncomeTotal">
		</div>
		<div class="input-group col-md-3">
			<select class="form-control">
				<option value="-1">Select Frequency</option>
				<option value="0">Hourly</option>
				<option value="1">Weekly</option>
				<option value="2">Every Two Weeks</option>
				<option value="3">Monthly</option>
				<option value="4">Yearly</option>
			</select>
		</div>
	</div>

	<div class="col-md-3">
		<h2 class="line-after"><?=$this->lang->line('subsection_adult_income')?></h2>
	</div>
	<div class="col-md-9">
		<hr>
	</div>
	<div class="col-md-12">
		<p><?=$this->lang->line('label_adult_income')?></p>
	</div>
	<div class="col-md-4">
		<label for="adultFirst"><?=$this->lang->line('label_adult_first')?></label>
		<input type="text" class="form-control" id="adultFirst">
	</div>
	<div class="col-md-4">
		<label for="adultLast"><?=$this->lang->line('label_adult_last')?></label>
		<input type="text" class="form-control" id="adultLast">
	</div>
</div>