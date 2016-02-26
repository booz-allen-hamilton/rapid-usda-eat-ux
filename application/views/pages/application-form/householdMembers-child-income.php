<div class="rowItem">
	<div class="row tableItems">
		<div class="col-sm-12 col-md-3"></div>
		<div class="<?=$form_income_item?>-container ">
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