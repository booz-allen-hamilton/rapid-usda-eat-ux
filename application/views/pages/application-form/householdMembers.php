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

<?
	$default_index = 0;
?>
<!-- adultren rows -->
<div id="adultName-list">
	<div class="main-adultRow-container">
		<div class="row tableItems">
			<div class="col-sm-12 col-md-3">
				<input type="text" placeholder="<?=$this->lang->line('household_members_first')?>" class="form-control input-lg" name="adult_first[]" required data-error="<?=$this->lang->line('error_household_students_first')?>">
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
				<div class="help-block with-errors"></div>
			</div>
			<div class="col-sm-12 col-md-3">
				<input type="text" placeholder="<?=$this->lang->line('household_members_last')?>" class="form-control input-lg" name="adult_last[]" required data-error="<?=$this->lang->line('error_household_students_last')?>">
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
				<div class="help-block with-errors"></div>
			</div>
			<div class="col-sm-12 col-md-2">
				<input type="text" placeholder="<?=$this->lang->line('household_members_middle')?>" class="form-control input-lg" name="adult_middle[]">
			</div>
			<div class="col-sm-12 col-md-2">
				<div class="btn-group btn-group-custom" data-toggle-target="earns-income" role="group">
					<button type="button" class="btn btn-lg btn-default" data-toggle-value="1"><?=$this->lang->line('yes')?></button>
					<button type="button" class="btn btn-lg btn-default" data-toggle-value="0"><?=$this->lang->line('no')?></button>
				</div>
				<?=form_hidden('earns-income[]', 0)?>
			</div>
			<div class="col-sm-12 col-md-1 text-right">
				<div class="grey_text" style="margin-top: 10px;">(You)</div>
			</div>
		</div>
		<div class="row earns-income-container hide">
			<div class="earns-income">
				<div class="col-md-offset-1 col-md-10 well" style="margin-top: 20px;">
					<h3>John Smith<?=$this->lang->line('household_income_adult_name_suffix')?></h3>
					<h4 style="font-weight: normal;"><?=$this->lang->line('household_income_gross')?></h4>
					<div class="row tableHeaders" style="margin-top: 20px;">
						<div class="col-sm-12 col-md-3">
							<span class="asterisk">*</span> <?=$this->lang->line('household_income_category')?>
						</div>
						<div class="col-sm-12 col-md-3">
							<span class="asterisk">*</span> <?=$this->lang->line('household_income_type')?>
						</div>
						<div class="col-sm-12 col-md-4">
							<span class="asterisk">*</span> <?=$this->lang->line('household_income_amount_freq')?>
						</div>
						<div class="col-sm-12 col-md-1">&nbsp;</div>
					</div>
					<?
						foreach($this->config->item('form_income_adult') as $form_income_adult_item) {
					?>
					<div class="rowItem">
						<div class="col-sm-12"><hr class="divider" /></div>
						<div class="row tableItems">
							<div class="col-sm-12 col-md-12">
								<h4 class="mt-0 mb-15">
									<?=$this->lang->line('household_income_'.$form_income_adult_item)['title']?>
									<?=help_icon($this->lang->line('household_income_'.$form_income_adult_item)['help'])?>
								</h4>
							</div>
							<div class="col-sm-12 col-md-3">
								<div class="btn-group btn-group-custom" data-toggle-target="<?=$form_income_adult_item?>" role="group">
									<button type="button" class="btn btn-lg btn-default" data-toggle-value="1"><?=$this->lang->line('yes')?></button>
									<button type="button" class="btn btn-lg btn-default" data-toggle-value="0"><?=$this->lang->line('no')?></button>
								</div>
								<?=form_hidden($form_income_adult_item.'[]', 0)?>
							</div>
							<div class="<?=$form_income_adult_item?>-container hide">
								<div class="form-group col-sm-12 col-md-3">
									<select name="<?=$form_income_adult_item?>['type'][<?=$default_index?>]" class="form-control input-lg" required>
										<option selected="selected"><?=$this->lang->line('household_income_salary')?></option>
									</select>
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group col-sm-12 col-md-2">
									<div class="input-group">
									  <span class="input-group-addon">$</span>
									  <input type="text" name="<?=$form_income_adult_item?>['amount'][<?=$default_index?>]" class="form-control input-lg">
									</div>
								</div>
								<div class="form-group col-sm-12 col-md-2" style="margin-left: -30px;">
								  <select name="<?=$form_income_adult_item?>['frequency'][<?=$default_index?>]" class="form-control input-lg">
									  <option>Monthly</option>
								  </select>
								</div>
							</div>
						</div>
						<div class="<?=$form_income_adult_item?>-add hide">
							<div class="col-sm-12 col-md-3 col-md-offset-3">
								<button class="form-control input-lg" data-clone="<?=$form_income_adult_item?>"><?=$this->lang->line('household_income_add_another')?></button>
							</div>
						</div>
					</div>
					<?
						}
					?>
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<hr class="divider" />
			</div>
		</div>
	</div>
</div>


<div class="adultRowItem-template hide">
<?
	foreach($this->config->item('form_income_adult') as $form_income_adult_item) {
?>
	<div class="rowItem">
		<div class="col-sm-12"><hr class="divider" /></div>
		<div class="row tableItems">
			<div class="col-sm-12 col-md-12">
				<h4 class="mt-0 mb-15">
					<?=$this->lang->line('household_income_'.$form_income_adult_item)['title']?>
					<?=help_icon($this->lang->line('household_income_'.$form_income_adult_item)['help'])?>
				</h4>
			</div>
			<div class="col-sm-12 col-md-3">
				<div class="btn-group btn-group-custom" data-toggle-target="<?=$form_income_adult_item?>" role="group">
					<button type="button" class="btn btn-lg btn-default" data-toggle-value="1"><?=$this->lang->line('yes')?></button>
					<button type="button" class="btn btn-lg btn-default" data-toggle-value="0"><?=$this->lang->line('no')?></button>
				</div>
				<?=form_hidden('data-'.$form_income_adult_item.'[]', 0)?>
			</div>
			<div class="<?=$form_income_adult_item?>-container hide">
				<div class="col-sm-12 col-md-3">
					<select data-name="<?=$form_income_adult_item?>['type'][<?=$default_index?>]" class="form-control input-lg" required>
						<option selected="selected"><?=$this->lang->line('household_income_salary')?></option>
					</select>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-sm-12 col-md-2">
					<div class="input-group">
						<span class="input-group-addon">$</span>
						<input type="text" data-name="<?=$form_income_adult_item?>['amount'][<?=$default_index?>]" class="form-control input-lg">
					</div>
				</div>
				<div class="col-sm-12 col-md-2" style="margin-left: -30px;">
					<select data-name="<?=$form_income_adult_item?>['frequency'][<?=$default_index?>]" class="form-control input-lg">
						<option>Monthly</option>
					</select>
				</div>
			</div>
		</div>
	</div>
<?
	}
?>
</div>

<div class="row text-center" style="margin-bottom: 50px;">
	<div class="col-sm-12">
		<div>
			<a href="#" class="button button-invert-blue" data-clone="#adultName-template" data-target="#adultName-list"><i class="fa fa-plus"></i> <?=$this->lang->line('household_members_add_adult')?></a>
		</div>
	</div>
</div>


<!-- BEGIN NEW CODE -->

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

<?
$default_index = 0;
?>
<!-- adultren rows -->
<div id="adultName-list">
	<div class="main-something-container" data-index="<?=$default_index?>">
		<div class="row tableItems">
			<div class="col-sm-12 col-md-2">
				<input type="text" placeholder="<?=$this->lang->line('household_members_first')?>" class="form-control input-lg" name="adult_first[]" required data-error="<?=$this->lang->line('error_household_students_first')?>">
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
				<div class="help-block with-errors"></div>
			</div>
			<div class="col-sm-12 col-md-2">
				<input type="text" placeholder="<?=$this->lang->line('household_members_last')?>" class="form-control input-lg" name="adult_last[]" required data-error="<?=$this->lang->line('error_household_students_last')?>">
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
				<div class="help-block with-errors"></div>
			</div>
			<div class="col-sm-12 col-md-1">
				<input type="text" placeholder="<?=$this->lang->line('household_members_middle')?>" class="form-control input-lg" name="adult_middle[]">
			</div>
			<div class="col-sm-12 col-md-2">
				<input id="child-earns-income-on-1" class="child-earns-income-on-1 toggle toggle-left" name="child-earns-income[<?=$default_index?>]" value="true" type="radio">
				<label for="child-earns-income-on-1" class="btn"><?=$this->lang->line('yes')?></label>
				<input id="child-earns-income-off-1" class="child-earns-income-off-1 toggle toggle-right" name="child-earns-income[<?=$default_index?>]" value="false" type="radio" checked>
				<label for="child-earns-income-off-1" class="btn"><?=$this->lang->line('no')?></label>
			</div>
			<div class="col-sm-12 col-md-2">
				<input id="child-student-on-[<?=$default_index?>]" class="child-student-on-[<?=$default_index?>] toggle toggle-left" name="child-student-[<?=$default_index?>]" value="true" type="radio">
				<label for="child-student-on-[<?=$default_index?>]" class="btn"><?=$this->lang->line('yes')?></label>
				<input id="child-student-off-[<?=$default_index?>]" class="child-student-off-[<?=$default_index?>] toggle toggle-right" name="child-student-[<?=$default_index?>]" value="false" type="radio" checked>
				<label for="child-student-off-[<?=$default_index?>]" class="btn"><?=$this->lang->line('no')?></label>
			</div>
			<div class="col-md-2">
				<select name="earnings-from-work-type-[<?=$default_index?>]" class="form-control input-lg" required>
					<option selected="selected" disabled><?=$this->lang->line('ethnicity_select_all_that_apply')?></option>
				</select>
			</div>
			<div class="col-sm-12 col-md-1 text-right">
				<div class="col-sm-12 col-md-2 text-right">
					<a href="#" class="remove-item"><i class="fa fa-times-circle"></i></a>
				</div>
			</div>
		</div>
		<div class="row adult-income-container">
			<div class="earns-income">
				<div class="col-md-offset-1 col-md-10 well" style="margin-top: 20px;">
					<h3>Jack Smith<?=$this->lang->line('household_income_child_name_suffix')?></h3>
					<h4 style="font-weight: normal;"><?=$this->lang->line('household_income_gross')?></h4>
					<div class="row tableHeaders" style="margin-top: 20px;">
						<div class="col-sm-12 col-md-3">
							<span class="asterisk">*</span> <?=$this->lang->line('household_income_category')?>
						</div>
						<div class="col-sm-12 col-md-3">
							<span class="asterisk">*</span> <?=$this->lang->line('household_income_type')?>
						</div>
						<div class="col-sm-12 col-md-4">
							<span class="asterisk">*</span> <?=$this->lang->line('household_income_amount_freq')?>
						</div>
						<div class="col-sm-12 col-md-1">&nbsp;</div>
						<div class="col-sm-12"><hr class="divider" /></div>
					</div>
					<div class="row tableItems">
						<div class="col-sm-12 col-md-12">
							<h4 style="margin-top: 0px; padding-bottom: 15px;"><?=$this->lang->line('household_income_work')?> <?=help_icon($this->lang->line('household_members_earnings_from_work_help'))?></h4>
						</div>
						<div class="col-sm-12 col-md-3">
							<input id="child-earnings-from-work-on-[<?=$default_index?>]" class="child-earnings-from-work-on-[<?=$default_index?>] toggle toggle-left" name="child-earnings-from-work-[<?=$default_index?>]" value="true" type="radio">
							<label for="child-earnings-from-work-on-[<?=$default_index?>]" class="btn"><?=$this->lang->line('yes')?></label>
							<input id="child-earnings-from-work-off-[<?=$default_index?>]" class="child-earnings-from-work-off-[<?=$default_index?>] toggle toggle-right" name="child-earnings-from-work-[<?=$default_index?>]" value="false" type="radio" checked>
							<label for="child-earnings-from-work-off-[<?=$default_index?>]" class="btn"><?=$this->lang->line('no')?></label>
						</div>
						<div class="col-sm-12 col-md-3">
							<select name="earnings-from-work-type-[<?=$default_index?>]" class="form-control input-lg" required>
								<option selected="selected"><?=$this->lang->line('household_income_salary')?></option>
							</select>
							<div class="help-block with-errors"></div>
							<select name="earnings-from-work-type-[<?=$default_index?>]" class="form-control input-lg">
								<option selected="selected"><?=$this->lang->line('household_income_add_another')?></option>
							</select>
						</div>
						<div class="col-sm-12 col-md-2">
							<div class="input-group">
							  <span class="input-group-addon">$</span>
							  <input type="text" class="form-control input-lg">
							</div>
						</div>
						<div class="col-sm-12 col-md-2" style="margin-left: -30px;">
						  <select class="form-control input-lg">
							  <option>Monthly</option>
						  </select>
						</div>
					</div>
					<div class="col-sm-12"><hr class="divider" /></div>
					<div class="row tableItems">
						<div class="col-sm-12 col-md-12">
							<h4 style="margin-top: 0px; padding-bottom: 15px;"><?=$this->lang->line('household_income_ssn_benefits')?> <?=help_icon($this->lang->line('household_income_ssn_benefits_help'))?></h4>
						</div>
						<div class="col-sm-12 col-md-3">
							<input id="child-public_asst-on-[<?=$default_index?>]" class="child-public_asst-on-[<?=$default_index?>] toggle toggle-left" name="child-public_asst-[<?=$default_index?>]" value="true" type="radio">
							<label for="child-public_asst-on-[<?=$default_index?>]" class="btn"><?=$this->lang->line('yes')?></label>
							<input id="child-public_asst-off-[<?=$default_index?>]" class="child-public_asst-off-[<?=$default_index?>] toggle toggle-right" name="child-public_asst-[<?=$default_index?>]" value="false" type="radio" checked>
							<label for="child-public_asst-off-[<?=$default_index?>]" class="btn"><?=$this->lang->line('no')?></label>
						</div>
						<div class="col-sm-12 col-md-3">
							<select name="earnings-from-work-type-[<?=$default_index?>]" class="form-control input-lg" required>
								<option selected="selected"><?=$this->lang->line('household_income_salary')?></option>
							</select>
							<div class="help-block with-errors"></div>
							<select name="public_asst-type-[<?=$default_index?>]" class="form-control input-lg">
								<option selected="selected"><?=$this->lang->line('household_income_add_another')?></option>
							</select>
						</div>
						<div class="col-sm-12 col-md-2">
							<div class="input-group">
							  <span class="input-group-addon">$</span>
							  <input type="text" class="form-control input-lg">
							</div>
						</div>
						<div class="col-sm-12 col-md-2" style="margin-left: -30px;">
						  <select class="form-control input-lg">
							  <option>Monthly</option>
						  </select>
						</div>
					</div>
					<div class="col-sm-12"><hr class="divider" /></div>
					<div class="row tableItems">
						<div class="col-sm-12 col-md-12">
							<h4 style="margin-top: 0px; padding-bottom: 15px;"><?=$this->lang->line('household_income_spending')?> <?=help_icon($this->lang->line('household_income_spending_help'))?></h4>
						</div>
						<div class="col-sm-12 col-md-3">
							<input id="child-spending-other-income-on-[<?=$default_index?>]" class="child-spending-other-income-on-[<?=$default_index?>] toggle toggle-left" name="child-spending-other-income-[<?=$default_index?>]" value="true" type="radio">
							<label for="child-spending-other-income-on-[<?=$default_index?>]" class="btn"><?=$this->lang->line('yes')?></label>
							<input id="child-spending-other-income-off-[<?=$default_index?>]" class="child-spending-other-income-off-[<?=$default_index?>] toggle toggle-right" name="child-spending-other-income-[<?=$default_index?>]" value="false" type="radio" checked>
							<label for="child-spending-other-income-off-[<?=$default_index?>]" class="btn"><?=$this->lang->line('no')?></label>
						</div>
						<div class="col-sm-12 col-md-3">
							<select name="earnings-from-work-type-[<?=$default_index?>]" class="form-control input-lg" required>
								<option selected="selected"><?=$this->lang->line('household_income_salary')?></option>
							</select>
							<div class="help-block with-errors"></div>
							<select name="other-income-type-[<?=$default_index?>]" class="form-control input-lg">
								<option selected="selected"><?=$this->lang->line('household_income_add_another')?></option>
							</select>
						</div>
						<div class="col-sm-12 col-md-2">
							<div class="input-group">
							  <span class="input-group-addon">$</span>
							  <input type="text" class="form-control input-lg">
							</div>
						</div>
						<div class="col-sm-12 col-md-2" style="margin-left: -30px;">
						  <select class="form-control input-lg">
							  <option>Monthly</option>
						  </select>
						</div>
					</div>
					<div class="col-sm-12"><hr class="divider" /></div>
					<div class="row tableItems">
						<div class="col-sm-12 col-md-12">
							<h4 style="margin-top: 0px; padding-bottom: 15px;"><?=$this->lang->line('household_income_other')?> <?=help_icon($this->lang->line('household_income_other_help'))?></h4>
						</div>
						<div class="col-sm-12 col-md-3">
							<input id="child-other-income-on-[<?=$default_index?>]" class="child-other-income-on-[<?=$default_index?>] toggle toggle-left" name="child-other-income-[<?=$default_index?>]" value="true" type="radio">
							<label for="child-other-income-on-[<?=$default_index?>]" class="btn"><?=$this->lang->line('yes')?></label>
							<input id="child-other-income-off-[<?=$default_index?>]" class="child-other-income-off-[<?=$default_index?>] toggle toggle-right" name="child-other-income-[<?=$default_index?>]" value="false" type="radio" checked>
							<label for="child-other-income-off-[<?=$default_index?>]" class="btn"><?=$this->lang->line('no')?></label>
						</div>
						<div class="col-sm-12 col-md-3">
							<select name="earnings-from-work-type-[<?=$default_index?>]" class="form-control input-lg" required>
								<option selected="selected"><?=$this->lang->line('household_income_salary')?></option>
							</select>
							<div class="help-block with-errors"></div>
							<select name="other-income-type-[<?=$default_index?>]" class="form-control input-lg">
								<option selected="selected"><?=$this->lang->line('household_income_add_another')?></option>
							</select>
						</div>
						<div class="col-sm-12 col-md-2">
							<div class="input-group">
							  <span class="input-group-addon">$</span>
							  <input type="text" class="form-control input-lg">
							</div>
						</div>
						<div class="col-sm-12 col-md-2" style="margin-left: -30px;">
						  <select class="form-control input-lg">
							  <option>Monthly</option>
						  </select>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12">
				<hr class="divider" />
			</div>
		</div>
	</div>
</div>

<div class="row text-center" style="margin-bottom: 50px;">
	<div class="col-sm-12">
		<div>
			<a href="#" class="button button-invert-blue" data-clone="#adultName-template" data-target="#adultName-list"><i class="fa fa-plus"></i> <?=$this->lang->line('household_members_add_child')?></a>
		</div>
	</div>
</div>

<!-- END NEW CODE -->


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