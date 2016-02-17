<div class="row centered">
	<div class="col-sm-12">
		<h1><?=$this->lang->line('title_household_members')?></h1>
		<h3><?=$this->lang->line('subtitle_household_members')?>
			<a href="#" data-toggle="modal" data-target="#childrenClarification">
				<span class="glyphicon glyphicon-info-sign"></span>
			</a>
		</h3>

		<h2><?=$this->lang->line('section_title_children')?></h2>
	</div>
</div>
<div class="row tableHeaders">
	<div class="col-sm-12 col-md-4">
		* <?=$this->lang->line('label_first')?>
	</div>
	<div class="col-sm-12 col-md-4">
		* <?=$this->lang->line('label_last')?>
	</div>
	<div class="col-sm-12 col-md-2">
		<?=$this->lang->line('label_middle')?>
	</div>
	<div class="col-sm-12 col-md-2">
		&nbsp;
	</div>
</div>

<!-- Children rows -->
<div class="row tableHeaders">
	<div class="col-sm-12 col-md-4">
		<input type="text" class="form-control" id="child_first_1">
	</div>
	<div class="col-sm-12 col-md-4">
		<input type="text" class="form-control" id="child_last_1">
	</div>
	<div class="col-sm-12 col-md-2">
		<input type="text" class="form-control" id="child_middle_1">
	</div>
	<div class="col-sm-12 col-md-2 centered">
		<span class="glyphicon glyphicon-remove"></span>
	</div>
</div>

<div class="row centered">
	<div class="col-sm-12">
		<a href="#"><span class="glyphicon glyphicon-plus"></span>&nbsp;<?=$this->lang->line('label_add_child')?></a>
	</div>
</div>

<div class="row centered">
	<div class="col-sm-12">
		<h2><?=$this->lang->line('section_title_adults')?></h2>
	</div>
</div>
<div class="row tableHeaders">
	<div class="col-sm-12 col-md-4">
		* <?=$this->lang->line('label_first')?>
	</div>
	<div class="col-sm-12 col-md-4">
		* <?=$this->lang->line('label_last')?>
	</div>
	<div class="col-sm-12 col-md-2">
		<?=$this->lang->line('label_middle')?>
	</div>
	<div class="col-sm-12 col-md-2">
		&nbsp;
	</div>
</div>

<!-- Adult rows -->
<div class="row tableHeaders">
	<div class="col-sm-12 col-md-4">
		<input type="text" class="form-control" id="adult_first_1">
	</div>
	<div class="col-sm-12 col-md-4">
		<input type="text" class="form-control" id="adult_last_1">
	</div>
	<div class="col-sm-12 col-md-2">
		<input type="text" class="form-control" id="adult_middle_1">
	</div>
	<div class="col-sm-12 col-md-2 centered">
		(You)
	</div>
</div>

<div class="row centered">
	<div class="col-sm-12">
		<a href="#"><span class="glyphicon glyphicon-plus"></span>&nbsp;<?=$this->lang->line('label_add_adult')?></a>
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
					<div class="footer-nav-circle-focused">2</div>
				</td>
				<td>
					<div class="footer-bav-connector"></div>
				</td>
				<td>
					<div class="footer-nav-circle">3</div>
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