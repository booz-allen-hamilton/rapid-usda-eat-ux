<?
	$default_state     = (!empty($member['income'][$form_income_item][0]['status']) ? $member['income'][$form_income_item][0]['status']       : 0);
	$default_amount    = (!empty($member['income'][$form_income_item][$income_index]['amount']) ? $member['income'][$form_income_item][$income_index]['amount']       : NULL);
	$default_frequency = (!empty($member['income'][$form_income_item][$income_index]['frequency']) ? $member['income'][$form_income_item][$income_index]['frequency'] : NULL);
	$default_type      = (!empty($member['income'][$form_income_item][$income_index]['type']) ? $member['income'][$form_income_item][$income_index]['type']           : NULL);
?>
<div class="rowItem" data-index="<?=$income_index?>">
	<div class="row tableItems">
		<div class="col-sm-12 col-md-3"></div>
		<div class="<?=$form_income_item?>-container ">
			<div class="form-group col-sm-12 col-md-3">
				<select
					name="adult[<?=$parent_index?>][income][<?=$form_income_item?>][<?=$income_index?>][type]"
					class="form-control input-lg"
					value="<?=$default_type?>"
					required>
					<option selected="selected"><?=$this->lang->line('household_income_salary')?></option>
				</select>
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group col-sm-12 col-md-2">
				<div class="input-group">
					<span class="input-group-addon">$</span>
					<input type="number"
						name="adult[<?=$parent_index?>][income][<?=$form_income_item?>][<?=$income_index?>][amount]"
						value="<?=$default_amount?>"
						class="form-control input-lg">
				</div>
			</div>
			<div class="form-group col-sm-12 col-md-2" style="margin-left: -30px;">
				<select name="adult[<?=$parent_index?>][income][<?=$form_income_item?>][<?=$income_index?>][frequency]"
					class="form-control input-lg">
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
			<div class="form-group col-sm-12 col-md-2">
				<a href="#" class="remove-item" data-remove=".rowItem"><i class="fa fa-times-circle"></i></a>
			</div>
		</div>
	</div>
</div>