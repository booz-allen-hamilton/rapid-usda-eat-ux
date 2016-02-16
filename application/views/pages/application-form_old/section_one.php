<h2><?=$this->lang->line('section_one_title')?></h2>
<div class="row form-group">
	<div class="col-md-4">
		<label for="childFirst"><?=$this->lang->line('label_child_first')?></label>
		<input type="text" class="form-control" id="childFirst">
	</div>
	<div class="col-md-1">
		<label for="childMiddle"><?=$this->lang->line('label_child_middle')?></label>
		<input type="text" class="form-control" id="childMiddle" maxlength="1">
	</div>
	<div class="col-md-4">
		<label for="childLast"><?=$this->lang->line('label_child_last')?></label>
		<input type="text" class="form-control" id="childLast">
	</div>
</div>
<div class="row form-group">
	<div class="col-md-3">
		<label for="student"><?=$this->lang->line('label_child_student')?></label><br />
		<label class="radio-inline">
			<input type="radio" name="student" value="1"><?=$this->lang->line('yes')?>
		</label>
		<label class="radio-inline">
			<input type="radio" name="student" value="0"><?=$this->lang->line('no')?>
		</label>
	</div>
	<div class="col-md-7">
		<label for="type"><?=$this->lang->line('label_child_type')?></label><br />
		<label class="checkbox-inline">
			<input type="checkbox" name="type" value="2"><?=$this->lang->line('label_child_type_foster')?>
		</label>
		<label class="checkbox-inline">
			<input type="checkbox" name="type" value="1"><?=$this->lang->line('label_child_type_hmr')?>
		</label>
	</div>
</div>
<div class="row form-group">
	<div class="col-md-12">
		<a href="#" class="add-button"><?=$this->lang->line('label_child_add')?></a>
	</div>
</div>
<div class="row form-group">
	<!-- Children go here -->
</div>