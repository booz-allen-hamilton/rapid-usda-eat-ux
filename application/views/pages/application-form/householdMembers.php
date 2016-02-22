<div class="row text-center">
	<div class="col-sm-12">
		<h2><?=$this->lang->line('household_members_title')?></h2>
		<p class="text-large">
			<?=$this->lang->line('household_subtitle')?>
			<?=help_icon($this->lang->line('household_students_help'))?>
		</p>
	</div>
	<h2 style="margin-bottom: 0px;"><?=$this->lang->line('household_members_adults')?></h2>
	<div class="grey_text">(<?=$this->lang->line('household_members_over_18')?>)</div>
</div>
<div class="row tableHeaders" style="margin-top: 20px;">
	<div class="col-sm-12 col-md-3">
		<span class="asterisk">*</span> <?=$this->lang->line('household_members_label_first')?>
	</div>
	<div class="col-sm-12 col-md-3">
		<span class="asterisk">*</span> <?=$this->lang->line('household_members_label_last')?>
	</div>
	<div class="col-sm-12 col-md-1">
		<span class="asterisk"></span> <?=$this->lang->line('household_members_label_middle')?>
	</div>
	<div class="col-sm-12 col-md-2">
		<span class="asterisk">*</span> <?=$this->lang->line('household_members_earns_income')?>?
	</div>
	<div class="col-sm-12 col-md-1">&nbsp;</div>
	<div class="col-sm-12"><hr class="divider" /></div>
</div>

<!-- Children rows -->
<div id="childName-list">
	<div class="row tableItems">
		<div class="col-sm-12 col-md-3">
			<input type="text" placeholder="<?=$this->lang->line('household_members_label_first')?>" class="form-control input-lg" name="child_first[]" required data-error="<?=$this->lang->line('error_household_students_first')?>">
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<div class="help-block with-errors"></div>
		</div>
		<div class="col-sm-12 col-md-3">
			<input type="text" placeholder="<?=$this->lang->line('household_members_label_last')?>" class="form-control input-lg" name="child_last[]" required data-error="<?=$this->lang->line('error_household_students_last')?>">
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<div class="help-block with-errors"></div>
		</div>
		<div class="col-sm-12 col-md-1">
			<input type="text" placeholder="<?=$this->lang->line('household_members_label_middle')?>" class="form-control input-lg" name="child_middle[]">
		</div>
		<div class="col-sm-12 col-md-2">
			<input id="earns-income-on-1" class="earns-income-on-1 toggle toggle-left" name="earns-income-1" value="false" type="radio">
			<label for="earns-income-on-1" class="btn">On</label>
			<input id="earns-income-off-1" class="earns-income-off-1 toggle toggle-right" name="earns-income-1" value="true" type="radio" checked>
			<label for="earns-income-off-1" class="btn">Off</label>
		</div>
		<div class="col-sm-12 col-md-1 text-right">
			<div class="grey_text" style="margin-top: 10px;">(You)</div>
		</div>
	</div>
	<div class="row">
		<div class="earns-income-1" style="display: none;">
			<div class="col-md-offset-1 col-md-offset-10">
				<h4>John Smith's Income</h4>
			</div>
		</div>
		<div class="col-sm-12"><hr class="divider" /></div>
	</div>
</div>

<div class="row tableItems hide" id="childName-template">
	<div class="col-sm-12 col-md-3">
		<input type="text" placeholder="<?=$this->lang->line('household_members_label_first')?>" class="form-control input-lg" data-name="child_first" data-error="<?=$this->lang->line('error_household_students_first')?>">
		<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
		<div class="help-block with-errors"></div>
	</div>
	<div class="col-sm-12 col-md-3">
		<input type="text" placeholder="<?=$this->lang->line('household_members_label_last')?>" class="form-control input-lg" data-name="child_last" data-error="<?=$this->lang->line('error_household_students_last')?>">
		<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
		<div class="help-block with-errors"></div>
	</div>
	<div class="col-sm-12 col-md-1">
		<input type="text" placeholder="<?=$this->lang->line('household_members_label_middle')?>" class="form-control input-lg" data-name="child_middle">
	</div>
	<div class="col-sm-12 col-md-2">
		<input id="earns-income-on-2" class="earns-income-on-2 toggle toggle-left" name="earns-income-2" value="false" type="radio">
		<label for="earns-income-on-2" class="btn">On</label>
		<input id="earns-income-off-2" class="earns-income-off-2 toggle toggle-right" name="earns-income-2" value="true" type="radio" checked>
		<label for="earns-income-off-2" class="btn">Off</label>
	</div>
	<div class="col-sm-12 col-md-1 text-right">
		<a href="#" class="remove-item"><i class="fa fa-times-circle"></i></a>
	</div>
	<div class="col-sm-12"><hr class="divider" /></div>
</div>
<div class="earns-income-2" style="display: none;">
	<div class="row">
		<div class="col-md-offset-1 col-md-offset-10">
			<h4>Jane Smith's Income</h4>
		</div>
	</div>
</div>

<div class="row text-center" style="margin-bottom: 50px;">
	<div class="col-sm-12">
		<div>
			<a href="#" class="button button-invert-blue" data-clone="#childName-template" data-target="#childName-list"><i class="fa fa-plus"></i> <?=$this->lang->line('household_members_label_add_adult')?></a>
		</div>
	</div>
</div>

<div id="householdMembersClarification" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body">
				<p></p>
			</div>
		</div>
	</div>
</div>