<div class="row text-center">
	<div class="col-sm-12">
		<h2 class="mb25"><?=$this->lang->line('title_household')?></h2>
		<p>
			<?=$this->lang->line('label_num_children')?>
			<a href="#" data-toggle="modal" data-target="#childrenClarification">
				<span class="glyphicon glyphicon-info-sign"></span>
			</a>
		</p>
	</div>
	<div class="form-group">
		<div class="col-sm-12 col-md-offset-5 col-md-2">
			<input type="number" min="0" class="form-control input-lg" name="numberChildren" required data-error="<?=$this->lang->line('error_children_number_field')?>" placeholder="<?=$this->lang->line('label_add_child_number')?>" />
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<div class="help-block with-errors"></div>
		</div>
	</div>
	<div class="col-sm-12" style="margin-top: 25px;">
		<p>
			<?=$this->lang->line('label_num_adults')?>
			<a href="#" data-toggle="modal" data-target="#adultsClarification">
				<span class="glyphicon glyphicon-info-sign"></span>
			</a>
		</p>
	</div>
	<div class="form-group">
		<div class="col-sm-12 col-md-offset-5 col-md-2">
			<input type="number" min="0" class="form-control input-lg" name="numberAdults" required data-error="<?=$this->lang->line('error_adult_number_field')?>" placeholder="<?=$this->lang->line('label_add_adult_number')?>" />
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<div class="help-block with-errors"></div>
		</div>
	</div>
</div>

<div id="childrenClarification" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"><?=$this->lang->line('number_children_modal_header')?></h4>
			</div>
			<div class="modal-body">
				<p><?=$this->lang->line('number_children_modal_body')?></p>
			</div>
		</div>
	</div>
</div>

<div id="adultsClarification" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"><?=$this->lang->line('number_adults_modal_header')?></h4>
			</div>
			<div class="modal-body">
				<p><?=$this->lang->line('number_adults_modal_body')?></p>
			</div>
		</div>
	</div>
</div>
