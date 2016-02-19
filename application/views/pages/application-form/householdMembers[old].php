<div class="row text-center">
	<div class="col-sm-12">
		<h2><?=$this->lang->line('title_household_members')?></h2>
		<p><?=$this->lang->line('subtitle_household_members')?>
			<a href="#" data-toggle="modal" data-target="#householdMembersClarification">
				<span class="glyphicon glyphicon-info-sign"></span>
			</a>
		</p>
		<h3><?=$this->lang->line('section_title_children')?></h3>
	</div>
</div>

<!-- Children rows -->
<div id="childName-list">
	<div class="row tableItems">
		<div class="col-sm-12 col-md-3 col-md-offset-2">
			<input type="text" placeholder="<?=$this->lang->line('label_first')?>" class="form-control input-lg" name="child_first[]">
		</div>
		<div class="col-sm-12 col-md-2">
			<input type="text" placeholder="<?=$this->lang->line('label_middle')?>" class="form-control input-lg" name="child_middle[]">
		</div>
		<div class="col-sm-12 col-md-3">
			<input type="text" placeholder="<?=$this->lang->line('label_last')?>" class="form-control input-lg" name="child_last[]">
		</div>
		<div class="col-sm-12 col-md-1 text-left">
			<a href="#" class="remove-item"><i class="fa fa-times-circle"></i></a>
		</div>
		<div class="col-sm-12"><hr class="divider" /></div>
	</div>
</div>

<div class="row tableItems hide" id="childName-template">
	<div class="col-sm-12 col-md-3 col-md-offset-2">
		<input type="text" placeholder="<?=$this->lang->line('label_first')?>" class="form-control input-lg" name="child_first[]">
	</div>
	<div class="col-sm-12 col-md-2">
		<input type="text" placeholder="<?=$this->lang->line('label_middle')?>" class="form-control input-lg" name="child_middle[]">
	</div>
	<div class="col-sm-12 col-md-3">
		<input type="text" placeholder="<?=$this->lang->line('label_last')?>" class="form-control input-lg" name="child_last[]">
	</div>
	<div class="col-sm-12 col-md-1 text-left">
		<a href="#" class="remove-item"><i class="fa fa-times-circle"></i></a>
	</div>
	<div class="col-sm-12"><hr class="divider" /></div>
</div>

<div class="row text-center">
	<div class="col-sm-12">
		<h3><?=$this->lang->line('section_title_adults')?></h3>
	</div>
</div>

<!-- Adult rows -->
<div id="adultName-list">
	<div class="row tableHeaders">
		<div class="col-sm-12 col-md-3 col-md-offset-2">
			<input type="text" placeholder="<?=$this->lang->line('label_first')?>" class="form-control input-lg" name="adult_first[]">
		</div>
		<div class="col-sm-12 col-md-2">
			<input type="text" placeholder="<?=$this->lang->line('label_middle')?>" class="form-control input-lg" name="adult_middle[]">
		</div>
		<div class="col-sm-12 col-md-3">
			<input type="text" placeholder="<?=$this->lang->line('label_last')?>" class="form-control input-lg" name="adult_last[]">
		</div>
		<div class="col-sm-12 col-md-1 text-left">(You)</div>
		<div class="col-sm-12"><hr class="divider" /></div>
	</div>
</div>

<div class="row tableItems hide" id="adultName-template">
	<div class="col-sm-12 col-md-3 col-md-offset-2">
		<input type="text" class="form-control input-lg" data-name="adult_first[]">
	</div>
	<div class="col-sm-12 col-md-2">
		<input type="text" class="form-control input-lg" data-name="adult_middle[]">
	</div>
	<div class="col-sm-12 col-md-3">
		<input type="text" class="form-control input-lg" data-name="adult_last[]">
	</div>
	<div class="col-sm-12 col-md-1 text-left">
		<a href="#" class="remove-item"><i class="fa fa-times-circle"></i></a>
	</div>
	<div class="col-sm-12"><hr class="divider" /></div>
</div>

<div id="householdMembersClarification" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"><?=$this->lang->line('household_member_modal_header')?></h4>
			</div>
			<div class="modal-body">
				<p><?=$this->lang->line('household_member_modal_body')?></p>
			</div>
		</div>
	</div>
</div>