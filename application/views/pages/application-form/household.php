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
	<div class="col-sm-12 col-md-offset-5 col-md-2">
		<input type="text" class="form-control input-lg text-center" name="numberChildren" id="numberChildren" data-fv-notempty="true" />
	</div>
	<div class="col-sm-12" style="margin-top: 25px;">
		<p>
			<?=$this->lang->line('label_num_adults')?>
			<a href="#" data-toggle="modal" data-target="#adultsClarification">
				<span class="glyphicon glyphicon-info-sign"></span>
			</a>
		</p>
	</div>
	<div class="col-sm-12 col-md-offset-5 col-md-2">
		<input type="text" class="form-control input-lg text-center" name="numberAdults" id="numberAdults" />
	</div>
</div>

<div id="childrenClarification" class="modal fade" tabindex="-1" role="dialog">
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

<div id="adultsClarification" class="modal fade" tabindex="-1" role="dialog">
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
