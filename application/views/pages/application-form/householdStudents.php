<div class="row text-center">
	<div class="col-sm-12">
		<h2><?=$this->lang->line('household_students_title')?></h2>
		<p class="text-large">
			<?=$this->lang->line('household_students_subtitle')?>
			<?=help_icon($this->lang->line('household_students_help'))?>
		</p>
	</div>
</div>
<div class="row tableHeaders" style="margin-top: 20px;">
	<div class="col-sm-12 col-md-4">
		<span class="asterisk">*</span> <?=$this->lang->line('label_first')?>
	</div>
	<div class="col-sm-12 col-md-4">
		<span class="asterisk">*</span> <?=$this->lang->line('label_last')?>
	</div>
	<div class="col-sm-12 col-md-2">
		<span class="asterisk"></span><?=$this->lang->line('label_middle')?>
	</div>
	<div class="col-sm-12 col-md-2">&nbsp;</div>
	<div class="col-sm-12"><hr class="divider" /></div>
</div>

<!-- Children rows -->
<div id="childName-list">
	<div class="row tableItems">
		<div class="col-sm-12 col-md-4">
			<input type="text" placeholder="<?=$this->lang->line('label_first')?>" class="form-control input-lg" name="child_first[]" required data-error="<?=$this->lang->line('error_household_students_first')?>">
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<div class="help-block with-errors"></div>
		</div>
		<div class="col-sm-12 col-md-4">
			<input type="text" placeholder="<?=$this->lang->line('label_last')?>" class="form-control input-lg" name="child_last[]" required data-error="<?=$this->lang->line('error_household_students_last')?>">
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<div class="help-block with-errors"></div>
		</div>
		<div class="col-sm-12 col-md-2">
			<input type="text" placeholder="<?=$this->lang->line('label_middle')?>" class="form-control input-lg" name="child_middle[]">
		</div>
		<div class="col-sm-12 col-md-2 text-right">
			<a href="#" class="remove-item"><i class="fa fa-times-circle"></i></a>
		</div>
		<div class="col-sm-12"><hr class="divider" /></div>
	</div>
</div>

<div class="row tableItems hide" id="childName-template">
	<div class="col-sm-12 col-md-4">
		<input type="text" placeholder="<?=$this->lang->line('label_first')?>" class="form-control input-lg" data-name="child_first" data-error="<?=$this->lang->line('error_household_students_first')?>">
		<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
		<div class="help-block with-errors"></div>
	</div>
	<div class="col-sm-12 col-md-4">
		<input type="text" placeholder="<?=$this->lang->line('label_last')?>" class="form-control input-lg" data-name="child_last" data-error="<?=$this->lang->line('error_household_students_last')?>">
		<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
		<div class="help-block with-errors"></div>
	</div>
	<div class="col-sm-12 col-md-2">
		<input type="text" placeholder="<?=$this->lang->line('label_middle')?>" class="form-control input-lg" data-name="child_middle">
	</div>
	<div class="col-sm-12 col-md-2 text-right">
		<a href="#" class="remove-item"><i class="fa fa-times-circle"></i></a>
	</div>
	<div class="col-sm-12"><hr class="divider" /></div>
</div>

<div class="row text-center mb-50">
	<div class="col-sm-12">
		<div>
			<a href="#" class="button button-invert-blue" data-clone="#childName-template" data-target="#childName-list"><i class="fa fa-plus"></i> <?=$this->lang->line('label_add_child')?></a>
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