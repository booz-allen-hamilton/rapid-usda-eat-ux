<?=form_hidden('householdmembers', 1);?>
<!-- Adult Heading -->
<div class="row text-center">
	<div class="col-sm-12">
		<h2><?=$this->lang->line('household_members_title')?></h2>
		<p><?=$this->lang->line('household_members_subtitle')?>
			<a href="#" data-toggle="modal" data-target="#householdMembersClarification">
				<span class="glyphicon glyphicon-info-sign"></span>
			</a>
		</p>
	</div>
	<h2 style="margin-bottom: 0px;"><?=$this->lang->line('household_members_adults')?></h2>
	<div class="grey_text"><?=$this->lang->line('household_members_over_eighteen')?></div>
</div>
<div class="row tableHeaders" style="margin-top: 20px;">
	<div class="col-sm-12 col-md-3">
		<span class="asterisk">*</span> <?=$this->lang->line('household_members_first')?>
	</div>
	<div class="col-sm-12 col-md-3">
		<span class="asterisk">*</span> <?=$this->lang->line('household_members_last')?>
	</div>
	<div class="col-sm-12 col-md-2">
		<span class="asterisk"></span> <?=$this->lang->line('household_members_middle')?>
	</div>
	<div class="col-sm-12 col-md-2">
		<span class="asterisk">*</span> <?=$this->lang->line('household_members_earns_income')?>
	</div>
	<div class="col-sm-12 col-md-1">&nbsp;</div>
	<div class="col-sm-12"><hr class="divider" /></div>
</div>

<!-- Adult Row -->
<div id="adultName-list">
<?
	$parent_index = 0;
	$partial_data['parent_index'] = $parent_index;
	$this->load->view('pages/application-form/householdMembers-adult', $partial_data);
?>
</div>
<div class="row text-center mb-50">
	<div class="col-sm-12">
		<div>
			<button class="button button-invert-blue" data-clone-row="adult_row">
				<i class="fa fa-plus"></i> <?=$this->lang->line('household_members_add_adult')?>
			</button>
		</div>
	</div>
</div>

<!-- Child Heading -->
<div class="row text-center">
	<h2 style="margin-bottom: 0px;"><?=$this->lang->line('household_members_children')?></h2>
	<div class="grey_text"><?=$this->lang->line('household_members_under_eighteen')?></div>
</div>
<div class="row tableHeaders" style="margin-top: 20px;">
	<div class="col-sm-12 col-md-2">
		<span class="asterisk">*</span> <?=$this->lang->line('household_members_first')?>
	</div>
	<div class="col-sm-12 col-md-2">
		<span class="asterisk">*</span> <?=$this->lang->line('household_members_last')?>
	</div>
	<div class="col-sm-12 col-md-1">
		<span class="asterisk"></span> <?=$this->lang->line('household_members_middle')?>
	</div>
	<div class="col-sm-12 col-md-2">
		<span class="asterisk">*</span> <?=$this->lang->line('household_members_earns_income')?>
	</div>
	<div class="col-sm-12 col-md-2">
		<span class="asterisk">*</span> <?=$this->lang->line('household_members_student')?>
	</div>
	<div class="col-sm-12 col-md-2">
		<span class="asterisk">*</span> <?=$this->lang->line('household_members_status')?> <?=help_icon($this->lang->line('household_members_child_status_help'))?>
		<div style="font-size: 14px; margin-left: 20px; margin-top: -7px;">
			<?=$this->lang->line('household_members_check_one')?>
		</div>
	</div>
	<div class="col-sm-12 col-md-1">&nbsp;</div>
	<div class="col-sm-12"><hr class="divider" /></div>
</div>

<!-- child rows -->
<div id="childName-list">
<?
	$parent_index = 0;
	$partial_data['parent_index'] = $parent_index;
	$this->load->view('pages/application-form/householdMembers-child', $partial_data);
?>
</div>

<div class="row text-center mb-50">
	<div class="col-sm-12">
		<div>
			<button class="button button-invert-blue" data-clone-row="child_row">
				<i class="fa fa-plus"></i> <?=$this->lang->line('household_members_add_child')?>
			</button>
		</div>
	</div>
</div>