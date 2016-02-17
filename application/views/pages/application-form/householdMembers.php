<div class="row centered">
	<div class="col-sm-12">
		<h2><b><?=$this->lang->line('title_household_members')?></b></h2>
		<h4><?=$this->lang->line('subtitle_household_members')?>
			<a href="#" data-toggle="modal" data-target="#childrenClarification">
				<span class="glyphicon glyphicon-info-sign"></span>
			</a>
		</h4>

		<h3><b><?=$this->lang->line('section_title_children')?></b></h3>
	</div>
</div>
<table class="table form-table col-md-12">
	<tr>
		<th style="border-top: none;" width="33%">
			* <?=$this->lang->line('label_first')?>
		</th>
		<th style="border-top: none;" width="33%">
			* <?=$this->lang->line('label_last')?>
		</th>
		<th style="border-top: none;" width="33%">
			<?=$this->lang->line('label_middle')?>
		</th>
		<th style="border-top: none;" width="10%"></th>
	</tr>
	<tr>
		<td>
			<input type="text" class="form-control" id="child_first_1">
		</td>
		<td>
			<input type="text" class="form-control" id="child_last_1">
		</td>
		<td>
			<input type="text" class="form-control" id="child_middle_1" style="width: 18%;">
		</td>
		<td>
			<span class="glyphicon glyphicon-remove"></span>
		</td>
	</tr>
	<tr>
		<td colspan="4">
			<div class="row centered" style="margin-top: 20px; margin-bottom: 30px;">
				<div class="col-sm-12">
					<a href="#" class="white-button-large"><span class="glyphicon glyphicon-plus"></span>&nbsp;<?=$this->lang->line('label_add_child')?></a>
				</div>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="4" style="border-top: none;">
			<div class="row centered">
				<div class="col-sm-12">
					<h3><b><?=$this->lang->line('section_title_adults')?></b></h3>
				</div>
			</div>
		</td>
	<tr>
		<th style="border-top: none;" width="33%">
			* <?=$this->lang->line('label_first')?>
		</th>
		<th style="border-top: none;" width="33%">
			* <?=$this->lang->line('label_last')?>
		</th>
		<th style="border-top: none;" width="33%">
			<?=$this->lang->line('label_middle')?>
		</th>
		<th style="border-top: none;" width="10%"></th>
	</tr>
	<tr>
		<td>
			<input type="text" class="form-control" id="child_first_1">
		</td>
		<td>
			<input type="text" class="form-control" id="child_last_1">
		</td>
		<td>
			<input type="text" class="form-control" id="child_middle_1" style="width: 18%;">
		</td>
		<td>
			<span class="glyphicon glyphicon-remove"></span>
		</td>
	</tr>
	<tr>
		<td colspan="4">
			<div class="row centered" style="margin-top: 20px; margin-bottom: 30px;">
				<div class="col-sm-12">
					<a href="#" class="white-button-large"><span class="glyphicon glyphicon-plus"></span>&nbsp;<?=$this->lang->line('label_add_adult')?></a>
				</div>
			</div>
		</td>
	</tr>
</table>

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