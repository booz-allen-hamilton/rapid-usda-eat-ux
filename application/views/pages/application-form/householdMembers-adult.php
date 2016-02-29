<div class="main-row-container" data-index="<?=$parent_index?>" data-group="adult">
	<div class="row tableItems">
		<div class="col-sm-12 col-md-3">
			<input type="text"
				placeholder="<?=$this->lang->line('household_members_first')?>"
				class="form-control input-lg"
				name="adult[<?=$parent_index?>][first_name]"
				value="<?=(!empty($member['first_name']) ? $member['first_name'] : NULL)?>"
				required
				data-error="<?=$this->lang->line('error_household_students_first')?>">
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<div class="help-block with-errors"></div>
		</div>
		<div class="col-sm-12 col-md-3">
			<input type="text"
				placeholder="<?=$this->lang->line('household_members_last')?>"
				class="form-control input-lg"
				name="adult[<?=$parent_index?>][last_name]"
				value="<?=(!empty($member['last_name']) ? $member['last_name'] : NULL)?>"
				required
				data-error="<?=$this->lang->line('error_household_students_last')?>">
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<div class="help-block with-errors"></div>
		</div>
		<div class="col-sm-12 col-md-2">
			<input type="text"
			placeholder="<?=$this->lang->line('household_members_middle')?>"
			class="form-control input-lg"
			name="adult[<?=$parent_index?>][middle_initial]"
			value="<?=(!empty($member['middle_initial']) ? $member['middle_initial'] : NULL)?>"
			maxlength="1" />
		</div>
		<div class="col-sm-12 col-md-2">
			<?
				$default_state = (!empty($member['earns_income']) ? $member['earns_income'] : 0);
			?>
			<div class="btn-group btn-group-custom" data-container="adult_earns_income" data-toggle-target="adult[<?=$parent_index?>][earns_income]" role="group" data-type="income">
				<button type="button" class="btn btn-lg btn-default <?=($default_state === 1 ? 'btn-active' : NULL)?>" data-toggle-value="1"><?=$this->lang->line('yes')?></button>
				<button type="button" class="btn btn-lg btn-default <?=($default_state === 0 ? 'btn-active' : NULL)?>" data-toggle-value="0"><?=$this->lang->line('no')?></button>
			</div>
			<?
				echo '<div  style="position:fixed; top: -10000px; ">';
				echo '<input type="text" name="adult['.$parent_index.'][earns_income]" required value="'.$default_state.'" />';
				echo '</div>';
			?>
		</div>
		<div class="col-sm-12 col-md-1 text-right">
		<?
			if ($parent_index != 0) {
		?>
			<a href="#" class="remove-item" data-remove=".main-row-container"><i class="fa fa-times-circle"></i></a>
		<?
			} else {
		?>
			<div class="grey_text mt-10">(You)</div>
		<?
			}
		?>
		</div>
	</div>
	<div class="row adult_earns_income-container <?=($default_state != 1 ? 'hide' : NULL)?>">
		<div class="earns_income">
			<div class="col-md-offset-1 col-md-10 well mt-20">
				<h3><?=$this->lang->line('household_income_adult_name_suffix')?></h3>
				<h4 style="font-weight: normal;"><?=$this->lang->line('household_income_gross')?>
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
					foreach($this->config->item('form_income_adult') as $form_income_item) {
						$income_index = 0;
						$form_income_item_stem = 'adult['.$parent_index.'][income]['.$form_income_item.']['.$income_index.']';
						$default_array 	   = (!empty($member['income'][$form_income_item]) ? $member['income'][$form_income_item]                                                         : NULL);
						$default_state     = (!empty($member['income'][$form_income_item][0]['status']) ? $member['income'][$form_income_item][0]['status']       : 0);
						$default_amount    = (!empty($member['income'][$form_income_item][$income_index]['amount']) ? $member['income'][$form_income_item][$income_index]['amount']       : NULL);
						$default_frequency = (!empty($member['income'][$form_income_item][$income_index]['frequency']) ? $member['income'][$form_income_item][$income_index]['frequency'] : NULL);
						$default_type      = (!empty($member['income'][$form_income_item][$income_index]['type']) ? $member['income'][$form_income_item][$income_index]['type']           : NULL);
				?>
					<div class="rowItemContainerMain rowItem-<?=$form_income_item?>">
						<div class="rowItemContainer">
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
										<div class="btn-group btn-group-custom" data-container="adult_sub_income" data-type="income_details" data-toggle-target="<?=$form_income_item_stem?>[status]" role="group">
											<button type="button" class="btn btn-lg btn-default <?=($default_state == 1 ? 'btn-active' : NULL)?>" data-toggle-value="1"><?=$this->lang->line('yes')?></button>
											<button type="button" class="btn btn-lg btn-default <?=($default_state == 0 ? 'btn-active' : NULL)?>" data-toggle-value="0"><?=$this->lang->line('no')?></button>
										</div>
										<?=form_hidden($form_income_item_stem.'[status]', $default_state)?>
									</div>
									<div class="adult_sub_income-container <?=($default_state != 1 ? 'hide' : NULL)?>">
										<div class="form-group col-sm-12 col-md-3">
											<select name="<?=$form_income_item_stem?>[type]" class="form-control input-lg" required>
												<option value=""><?=$this->lang->line('household_income_salary')?></option>
												<?
													$income_item_total = $this->config->item('income_list_'.$form_income_item);
													for($i = 1; $i <= $income_item_total; $i++) {
														echo '<option value="'.$i.'" ';
														if ($default_type == $i) {
															echo 'selected="selected"';
														}
														echo '>';
														echo $this->lang->line($form_income_item.'_list_'.$i);
														echo '</option>';
													}
												?>
											</select>
											<div class="help-block with-errors"></div>
										</div>
										<div class="form-group col-sm-12 col-md-2">
											<div class="input-group">
											  <span class="input-group-addon">$</span>
											  <input type="number" name="<?=$form_income_item_stem?>[amount]" value="<?=$default_amount?>" class="form-control input-lg">
											</div>
										</div>
										<div class="form-group col-sm-12 col-md-3">
										  <select name="<?=$form_income_item_stem?>[frequency]" class="form-control input-lg">
											<?
												foreach($this->config->item('form_income_frequency') as $income_frequency) {
													echo '<option value="'.$income_frequency.'" ';
													if ($default_frequency == $income_frequency) {
														echo 'selected="selected"';
													}
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
							<?
								if (is_array($default_array) && count($default_array) > 1) {
									$income_index++;
									$loop = 0;
									foreach($default_array as $default_array_item) {
										$partial_data_income = array(
											'parent_index'     => $parent_index,
											'income_index'     => $income_index,
											'form_income_item' => $form_income_item,
											'member'           => $member,
										);

										if ($loop > 0) {
											$this->load->view('pages/application-form/householdMembers-adult-income', $partial_data_income);
										}
										$income_index++;
										$loop++;
									}
								}
							?>
						</div>
						<div class="adult_sub_income-add  <?=($default_state != 1 ? 'hide' : NULL)?>">
							<div class="col-sm-12 col-md-3 col-md-offset-3">
								<button class="form-control input-lg"
								data-group="adult_row" data-clone-income="<?=$form_income_item?>"><?=$this->lang->line('household_income_add_another')?></button>
							</div>
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
