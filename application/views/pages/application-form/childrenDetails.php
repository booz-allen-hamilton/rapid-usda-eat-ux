<div class="row text-center">
	<div class="col-sm-12">
		<h2><?=$this->lang->line('title_children_details')?></h2>
		<p><?=$this->lang->line('subtitle_children_details')?>
			<a href="#" data-toggle="modal" data-target="#childrenClarification">
				<span class="glyphicon glyphicon-info-sign"></span>
			</a>
		</p>
		<hr class="divider" />
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<h4>Johnny B. Goode</h4>
		<p><?=$this->lang->line('required')?></p>
	</div>
	<div class="col-sm-12 col-md-3">
		<label class="checkbox-inline">
			<input type="checkbox" name="student">
			<span class="checkbox-label"><?=$this->lang->line('label_child_student')?></span>
		</label>
	</div>
	<div class="col-sm-12 col-md-3">
		<label class="checkbox-inline">
			<input type="checkbox" name="foster">
			<span class="checkbox-label"><?=$this->lang->line('label_child_foster')?></span>
		</label>
	</div>
	<div class="col-sm-12 col-md-3">
		<label class="checkbox-inline">
			<input type="checkbox" name="hmr">
			<span class="checkbox-label"><?=$this->lang->line('label_child_hmr')?></span>
		</label>
	</div>
	<div class="col-sm-12 col-md-3">
		<label class="checkbox-inline">
			<input type="checkbox" name="head_start">
			<span class="checkbox-label"><?=$this->lang->line('label_child_head_start')?></span>
		</label>
	</div>
	<div class="col-sm-12">
		<h4 class="optional"><?=$this->lang->line('optional')?>
			<a href="#" data-toggle="modal" data-target="#childrenClarification">
				<span class="glyphicon glyphicon-info-sign"></span>
			</a>
		</h4>
	</div>
	<div class="col-sm-12 col-md-4">
		<h5><?=$this->lang->line('label_child_ethnicity')?></h5>
		<label class="checkbox-inline">
			<input type="checkbox" name="hispanic">
			<span class="checkbox-label"><?=$this->lang->line('label_child_hispanic')?></span>
		</label>
	</div>
	<div class="col-sm-12 col-md-1">
		<span><strong><?=$this->lang->line('label_child_race')?></strong></span>
	</div>
	<div class="col-sm-12 col-md-3">
		<select class="form-control">
			<option value="-1">Select</option>
		</select>
	</div>
</div>

<div id="" class="modal fade" tabindex="-1" role="dialog">
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