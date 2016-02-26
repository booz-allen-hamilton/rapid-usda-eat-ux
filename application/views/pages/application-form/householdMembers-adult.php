<div class="main-row-container" data-index="<?=$parent_index?>">
	<div class="row tableItems">
		<div class="col-sm-12 col-md-3">
			<input type="text" placeholder="<?=$this->lang->line('household_members_first')?>" class="form-control input-lg" name="adult[<?=$parent_index?>][first_name]" required data-error="<?=$this->lang->line('error_household_students_first')?>">
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<div class="help-block with-errors"></div>
		</div>
		<div class="col-sm-12 col-md-3">
			<input type="text" placeholder="<?=$this->lang->line('household_members_last')?>" class="form-control input-lg" name="adult[<?=$parent_index?>][last_name]" required data-error="<?=$this->lang->line('error_household_students_last')?>">
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<div class="help-block with-errors"></div>
		</div>
		<div class="col-sm-12 col-md-2">
			<input type="text" placeholder="<?=$this->lang->line('household_members_middle')?>" class="form-control input-lg" name="adult[<?=$parent_index?>][middle_initial]">
		</div>
		<div class="col-sm-12 col-md-2">
			<div class="btn-group btn-group-custom" data-toggle-target="adult_earns_income" role="group">
				<button type="button" class="btn btn-lg btn-default" data-toggle-value="1"><?=$this->lang->line('yes')?></button>
				<button type="button" class="btn btn-lg btn-default btn-active" data-toggle-value="0"><?=$this->lang->line('no')?></button>
			</div>
			<?=form_hidden('adult['.$parent_index.'][earns_income]', 0)?>
		</div>
		<div class="col-sm-12 col-md-1 text-right">
		<?
			if ($parent_index != 0) {
		?>
			<a href="#" class="remove-item"><i class="fa fa-times-circle"></i></a>
		<?
			} else {
		?>
			<div class="grey_text mt-10">(You)</div>
		<?
			}
		?>
		</div>
	</div>
	<div class="row adult_earns_income-container hide">
		<div class="earns_income">
			<div class="col-md-offset-1 col-md-10 well mt-20">
				<h3><?=$this->lang->line('household_income_adult_name_suffix')?></h3>
				<h4 style="font-weight: normal;"><?=$this->lang->line('household_income_gross')?></h4>
				<div class="row tableHeaders mt-20">
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
					foreach($this->config->item('form_income_adult') as $form_income_item) {
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
									<?=form_hidden('adult['.$parent_index.'][income]['.$form_income_item.']['.$income_index.'][status]', 0)?>
								</div>
								<div class="<?=$form_income_item?>-container hide">
									<div class="form-group col-sm-12 col-md-3">
										<select name="adult[<?=$parent_index?>][income][<?=$form_income_item?>][<?=$income_index?>][type]" class="form-control input-lg" required>
											<option selected="selected"><?=$this->lang->line('household_income_salary')?></option>
										</select>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group col-sm-12 col-md-2">
										<div class="input-group">
										  <span class="input-group-addon">$</span>
										  <input type="text" name="adult[<?=$parent_index?>][income][<?=$form_income_item?>][<?=$income_index?>][amount]" class="form-control input-lg">
										</div>
									</div>
									<div class="form-group col-sm-12 col-md-2" style="margin-left: -30px;">
									  <select name="adult[<?=$parent_index?>][income][<?=$form_income_item?>][<?=$income_index?>][frequency]" class="form-control input-lg">
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
							<button class="form-control input-lg"
							data-group="adult_row" data-clone-income="<?=$form_income_item?>"><?=$this->lang->line('household_income_add_another')?></button>
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