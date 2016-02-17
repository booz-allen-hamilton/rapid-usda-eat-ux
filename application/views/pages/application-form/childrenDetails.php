<div class="row centered">
	<div class="col-sm-12">
		<h1><?=$this->lang->line('title_children_details')?></h1>
		<h3><?=$this->lang->line('subtitle_children_details')?>
			<a href="#" data-toggle="modal" data-target="#childrenClarification">
				<span class="glyphicon glyphicon-info-sign"></span>
			</a>
		</h3>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<h2>Johnny B. Goode</h2>
	</div>
	<div class="col-sm-12">
		<h3><?=$this->lang->line('required')?></h3>
	</div>
	<div class="col-sm-12 col-md-3">
		<label class="checkbox-inline">
			<input type="checkbox" name="student"><?=$this->lang->line('label_child_student')?>
		</label>
	</div>
	<div class="col-sm-12 col-md-3">
		<label class="checkbox-inline">
			<input type="checkbox" name="foster"><?=$this->lang->line('label_child_foster')?>
		</label>
	</div>
	<div class="col-sm-12 col-md-3">
		<label class="checkbox-inline">
			<input type="checkbox" name="hmr"><?=$this->lang->line('label_child_hmr')?>
		</label>
	</div>
	<div class="col-sm-12 col-md-3">
		<label class="checkbox-inline">
			<input type="checkbox" name="head_start"><?=$this->lang->line('label_child_head_start')?>
		</label>
	</div>
	<div class="col-sm-12">
		<h3><?=$this->lang->line('optional')?>
			<a href="#" data-toggle="modal" data-target="#childrenClarification">
				<span class="glyphicon glyphicon-info-sign"></span>
			</a>
		</h3>
	</div>
	<div class="col-sm-12 col-md-3">
		<span><strong><?=$this->lang->line('label_child_ethnicity')?></strong></span>
		<label class="checkbox-inline">
			<input type="checkbox" name="hispanic"><?=$this->lang->line('label_child_hispanic')?>
		</label>
	</div>
	<div class="col-sm-12 col-md-1">
		<span><strong><?=$this->lang->line('label_child_race')?></strong></span>
	</div>
	<div class="col-sm-12 col-md-3">
		<select class="form-control">
			<option value="-1">Select</option>
		</select class="form-control">
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

<div class="footer">
	<div class="footer-nav-bar">
		<table>
			<tr>
				<td>
					<div class="footer-nav-circle-completed">&#10003;</div>
				</td>
				<td>
					<div class="footer-bav-connector"></div>
				</td>
				<td>
					<div class="footer-nav-circle-completed">&#10003;</div>
				</td>
				<td>
					<div class="footer-bav-connector"></div>
				</td>
				<td>
					<div class="footer-nav-circle-focused">3</div>
				</td>
				<td>
					<div class="footer-bav-connector"></div>
				</td>
				<td>
					<div class="footer-nav-circle">4</div>
				</td>
				<td>
					<div class="footer-bav-connector"></div>
				</td>
				<td>
					<div class="footer-nav-circle">5</div>
				</td>
				<td>
					<div class="footer-bav-connector"></div>
				</td>
				<td>
					<div class="footer-nav-circle">6</div>
				</td>
			</tr>
		</table>
	</div>
	<a href="<?=base_url('household')?>" class="footer-button-with-border"><?=$this->lang->line('next')?> ></a>
	<a href="<?=base_url('household')?>" class="footer-button-with-border">< <?=$this->lang->line('back')?></a>
	<a href="#">Cancel</a>
</div>