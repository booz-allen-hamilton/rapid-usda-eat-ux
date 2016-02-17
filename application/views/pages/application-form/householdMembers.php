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
<div class="row tableHeaders">
	<div class="col-sm-12 col-md-4">
		<i class="fa fa-asterisk"></i> <?=$this->lang->line('label_first')?>
	</div>
	<div class="col-sm-12 col-md-4">
		<i class="fa fa-asterisk"></i> <?=$this->lang->line('label_last')?>
	</div>
	<div class="col-sm-12 col-md-2">
		<?=$this->lang->line('label_middle')?>
	</div>
	<div class="col-sm-12 col-md-2">&nbsp;</div>
	<div class="col-sm-12"><hr class="divider" /></div>
</div>

<!-- Children rows -->
<div id="childName-list">
	<div class="row tableItems">
		<div class="col-sm-12 col-md-4">
			<input type="text" class="form-control input-lg" name="child_first[]">
		</div>
		<div class="col-sm-12 col-md-4">
			<input type="text" class="form-control input-lg" name="child_last[]">
		</div>
		<div class="col-sm-12 col-md-2">
			<input type="text" class="form-control input-lg" name="child_middle[]">
		</div>
		<div class="col-sm-12 col-md-2 text-right">
			<a href="#" class="remove-item"><i class="fa fa-times-circle"></i></a>
		</div>
		<div class="col-sm-12"><hr class="divider" /></div>
	</div>
</div>

<div class="row tableItems hide" id="childName-template">
	<div class="col-sm-12 col-md-4">
		<input type="text" class="form-control input-lg" data-name="child_first[]">
	</div>
	<div class="col-sm-12 col-md-4">
		<input type="text" class="form-control input-lg" data-name="child_last[]">
	</div>
	<div class="col-sm-12 col-md-2">
		<input type="text" class="form-control input-lg" data-name="child_middle[]">
	</div>
	<div class="col-sm-12 col-md-2 text-right">
		<a href="#" class="remove-item"><i class="fa fa-times-circle"></i></a>
	</div>
	<div class="col-sm-12"><hr class="divider" /></div>
</div>

<div class="row text-center" style="margin-bottom: 50px;">
	<div class="col-sm-12">
		<div>
			<a href="#" class="white-button" data-clone="#childName-template" data-target="#childName-list"><i class="fa fa-plus"></i> <?=$this->lang->line('label_add_child')?></a>
		</div>
	</div>
</div>

<div class="row text-center">
	<div class="col-sm-12">
		<h3><?=$this->lang->line('section_title_adults')?></h3>
	</div>
</div>
<div class="row tableHeaders">
	<div class="col-sm-12 col-md-4">
		<i class="fa fa-asterisk"></i> <?=$this->lang->line('label_first')?>
	</div>
	<div class="col-sm-12 col-md-4">
		<i class="fa fa-asterisk"></i> <?=$this->lang->line('label_last')?>
	</div>
	<div class="col-sm-12 col-md-2">
		<?=$this->lang->line('label_middle')?>
	</div>
	<div class="col-sm-12 col-md-2">&nbsp;</div>
	<div class="col-sm-12"><hr class="divider" /></div>
</div>

<!-- Adult rows -->
<div id="adultName-list">
	<div class="row tableHeaders">
		<div class="col-sm-12 col-md-4">
			<input type="text" class="form-control input-lg" name="adult_first[]">
		</div>
		<div class="col-sm-12 col-md-4">
			<input type="text" class="form-control input-lg" name="adult_last[]">
		</div>
		<div class="col-sm-12 col-md-2">
			<input type="text" class="form-control input-lg" name="adult_middle[]">
		</div>
		<div class="col-sm-12 col-md-2 text-right">(You)</div>
		<div class="col-sm-12"><hr class="divider" /></div>
	</div>
</div>

<div class="row tableItems hide" id="adultName-template">
	<div class="col-sm-12 col-md-4">
		<input type="text" class="form-control input-lg" data-name="adult_first[]">
	</div>
	<div class="col-sm-12 col-md-4">
		<input type="text" class="form-control input-lg" data-name="adult_last[]">
	</div>
	<div class="col-sm-12 col-md-2">
		<input type="text" class="form-control input-lg" data-name="adult_middle[]">
	</div>
	<div class="col-sm-12 col-md-2 text-right">
		<a href="#" class="remove-item"><i class="fa fa-times-circle"></i></a>
	</div>
	<div class="col-sm-12"><hr class="divider" /></div>
</div>

<div class="row text-center" style="margin-bottom: 50px;">
	<div class="col-sm-12">
		<div>
			<a href="#" class="white-button" data-clone="#adultName-template" data-target="#adultName-list"><i class="fa fa-plus"></i> <?=$this->lang->line('label_add_adult')?></a>
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