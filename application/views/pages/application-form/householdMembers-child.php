<div class="main-row-container" data-index="<?=$parent_index?>">
	<div class="row tableItems">
		<div class="col-sm-12 col-md-2">
			<input type="text" placeholder="<?=$this->lang->line('household_members_first')?>" class="form-control input-lg" name="child[<?=$parent_index?>][first_name]" required data-error="<?=$this->lang->line('error_household_students_first')?>">
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<div class="help-block with-errors"></div>
		</div>
		<div class="col-sm-12 col-md-2">
			<input type="text" placeholder="<?=$this->lang->line('household_members_last')?>" class="form-control input-lg" name="child[<?=$parent_index?>][last_name]" required data-error="<?=$this->lang->line('error_household_students_last')?>">
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<div class="help-block with-errors"></div>
		</div>
		<div class="col-sm-12 col-md-1">
			<input type="text" placeholder="<?=$this->lang->line('household_members_middle')?>" class="form-control input-lg" name="child[<?=$parent_index?>][middle_initial]">
		</div>
		<div class="col-sm-12 col-md-2">
			<div class="btn-group btn-group-custom" data-toggle-target="child_earns_income" role="group">
				<button type="button" class="btn btn-lg btn-default" data-toggle-value="1"><?=$this->lang->line('yes')?></button>
				<button type="button" class="btn btn-lg btn-default btn-active" data-toggle-value="0"><?=$this->lang->line('no')?></button>
			</div>
			<?=form_hidden('child['.$parent_index.'][earns_income]', 0)?>
		</div>
		<div class="col-sm-12 col-md-2">
			<div class="btn-group btn-group-custom" data-toggle-simple-target="child_is_student" role="group">
				<button type="button" class="btn btn-lg btn-default" data-toggle-value="1"><?=$this->lang->line('yes')?></button>
				<button type="button" class="btn btn-lg btn-default btn-active" data-toggle-value="0"><?=$this->lang->line('no')?></button>
			</div>
			<?=form_hidden('child['.$parent_index.'][is_student]', 0)?>
		</div>
		<div class="col-md-2">
			<select class="_child_description" name="child[<?=$parent_index?>][child_description][]" multiple="multiple">
				<?
					foreach($this->config->item('form_child_description') as $child_description) {
						echo '<option value="'.$child_description.'" ';
						// if (!empty($student['race'])) {
						// 	$student_race = $student['race'];
						// 	if (is_array($student_race)) {
						// 		if ( in_array($child_description, $student['race']) ) {
						// 			echo 'selected="selected"';
						// 		}
						// 	} else {
						// 		if ( $child_description == $student_race ) {
						// 			echo 'selected="selected"';
						// 		}
						// 	}
						// }
						echo '>';
						echo $this->lang->line($child_description);
						echo '</option>';
					}
				?>
			</select>
		</div>
		<div class="col-sm-12 col-md-1 text-right">
			<div class="col-sm-12 col-md-2 text-right">
				<a href="#" class="remove-item"><i class="fa fa-times-circle"></i></a>
			</div>
		</div>
	</div>
	<div class="row child_earns_income-container hide">
		<div class="earns_income">
			<div class="col-md-offset-1 col-md-10 well" style="margin-top: 20px;">
				<h3><?=$this->lang->line('household_income_child_name_suffix')?></h3>
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
				<div class="rowItemIncome">
				<?
					$income_index = 0;
					foreach($this->config->item('form_income_child') as $form_income_item) {
				?>
					<div class="rowItem-<?=$form_income_item?>">
						<div class="rowItem" data-index="<?=$income_index?>">
							<div class="col-sm-12"><hr class="divider" /></div>
							<div class="row tableItems">
								<div class="col-sm-12 col-md-12">
									<h4 class="mt-0 mb-15">
										<?=$this->lang->line('household_income_'.$form_income_item)['title']?>
										<?=help_icon($this->lang->line('household_income_'.$form_income_item)['help'])?>
									</h4>
								</div>
								<div class="col-sm-12 col-md-3">
									<div class="btn-group btn-group-custom" data-toggle-target="<?=$form_income_item?>" role="group">
										<button type="button" class="btn btn-lg btn-default" data-toggle-value="1"><?=$this->lang->line('yes')?></button>
										<button type="button" class="btn btn-lg btn-default btn-active" data-toggle-value="0"><?=$this->lang->line('no')?></button>
									</div>
									<?=form_hidden('child['.$parent_index.'][income]['.$form_income_item.']['.$income_index.'][status]', 0)?>
								</div>
								<div class="<?=$form_income_item?>-container hide">
									<div class="form-group col-sm-12 col-md-3">
										<select name="child[<?=$parent_index?>][income][<?=$form_income_item?>][<?=$income_index?>][type]" class="form-control input-lg" required>
											<option selected="selected"><?=$this->lang->line('household_income_salary')?></option>
										</select>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group col-sm-12 col-md-2">
										<div class="input-group">
										  <span class="input-group-addon">$</span>
										  <input type="text" name="child[<?=$parent_index?>][income][<?=$form_income_item?>][<?=$income_index?>][amount]" class="form-control input-lg">
										</div>
									</div>
									<div class="form-group col-sm-12 col-md-2" style="margin-left: -30px;">
									  <select name="child[<?=$parent_index?>][income][<?=$form_income_item?>][<?=$income_index?>][frequency]" class="form-control input-lg">
										<?
											foreach($this->config->item('form_income_frequency') as $income_frequency) {
												echo '<option value="'.$income_frequency.'" ';
												// if ($form['data']['other_assistance']['assistance_program'] == $income_frequency) {
												// 	echo 'selected="selected"';
												// }
												echo '>';
												echo $this->lang->line($income_frequency);
												echo '</option>';
											}
										?>
									  </select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="<?=$form_income_item?>-add hide">
						<div class="col-sm-12 col-md-3 col-md-offset-3">
							<button class="form-control input-lg" data-clone-income="<?=$form_income_item?>"><?=$this->lang->line('household_income_add_another')?></button>
						</div>
					</div>
					<?
						}
					?>
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