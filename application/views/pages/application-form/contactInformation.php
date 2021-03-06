<div class="row text-center">
	<div class="col-sm-12 col-md-offset-1 col-md-10">
		<h2 class="mb25"><?=$this->lang->line('contact_info_title')?></h2>
		<p class="text-large">
			<?=$this->lang->line('contact_info_subtitle')?>
		</p>
	</div>
</div>
<div class="row mt-20">
	<div class="col-sm-12 col-md-offset-1 col-md-8">
		<label><?=$this->lang->line('contact_info_elements')['street_address']['label']?></label>
		<input type="text"
			class="form-control input-lg"
			name="street_address"
			value="<?=$form['data']['contact_information']['street_address']?>"
			data-error="<?=$this->lang->line('contact_info_elements')['street_address']['error']?>" />
		<div class="help-block with-errors"></div>
	</div>
	<div class="col-sm-12 col-md-2">
		<label><?=$this->lang->line('contact_info_elements')['apt']['label']?></label>
		<input type="text"
			class="form-control input-lg"
			name="apt"
			value="<?=$form['data']['contact_information']['apt']?>"
			 />
		<div class="help-block with-errors"></div>
	</div>
</div>

<div class="row mt-20">
	<div class="col-sm-12 col-md-offset-1 col-md-4">
		<span class="asterisk">* </span>
		<label><?=$this->lang->line('contact_info_elements')['city']['label']?></label>
		<input type="text"
			class="form-control input-lg"
			name="city"
			value="<?=$form['data']['contact_information']['city']?>"
			required
			data-error="<?=$this->lang->line('contact_info_elements')['city']['error']?>" />
		<div class="help-block with-errors"></div>
	</div>
	<div class="col-sm-12 col-md-4">
		<span class="asterisk">* </span>
		<label><?=$this->lang->line('contact_info_elements')['state']['label']?></label>
		<select name="state" class="form-control input-lg" required>
			<option selected="selected" disabled="disabled"><?=$this->lang->line('contact_info_elements')['state']['placeholder']?></option>
			<?
				foreach($this->config->item('form_states') as $state_key => $state_value) {
					echo '<option value="'.$state_key.'" ';
					if ($form['data']['contact_information']['state'] == $state_key) {
						echo 'selected="selected"';
					}
					echo '>';
					echo $state_value;
					echo '</option>';
				}
			?>
		</select>
		<div class="help-block with-errors"></div>
	</div>
	<div class="col-sm-12 col-md-2">
		<span class="asterisk">* </span>
		<label><?=$this->lang->line('contact_info_elements')['zip']['label']?></label>
		<input type="text"
			class="form-control input-lg"
			name="zip"
			value="<?=$form['data']['contact_information']['city']?>"
			maxlength="5"
			required
			data-error="<?=$this->lang->line('contact_info_elements')['zip']['error']?>" />
		<div class="help-block with-errors"></div>
	</div>
</div>

<div class="row mt-20">
	<div class="col-sm-12 col-md-offset-1 col-md-3">
		<label><?=$this->lang->line('contact_info_elements')['phone']['label']?></label>
		<input type="text"
			class="form-control input-lg"
			name="phone"
			placeholder="<?=$this->lang->line('contact_info_elements')['phone']['placeholder']?>"
			value="<?=$form['data']['contact_information']['phone']?>"
			data-error="<?=$this->lang->line('contact_info_elements')['phone']['error']?>" />
		<div class="help-block with-errors"></div>
	</div>
	<div class="col-sm-12 col-md-5">
		<label><?=$this->lang->line('contact_info_elements')['email']['label']?></label>
		<input type="email"
			class="form-control input-lg"
			name="email"
			placeholder="<?=$this->lang->line('contact_info_elements')['email']['placeholder']?>"
			value="<?=$form['data']['contact_information']['email']?>"
			data-error="<?=$this->lang->line('contact_info_elements')['email']['error']?>" />
		<div class="help-block with-errors"></div>
	</div>
</div>

<div class="row mt-20">
	<div class="col-sm-12 col-md-offset-1 col-md-10">
		<span class="asterisk">* </span>
		<label><?=$this->lang->line('contact_info_elements')['contact']['label']?></label>
		<div class="help-block with-errors"></div>
	</div>
	<div class="col-sm-12 col-md-offset-1 col-md-11">
		<?
			foreach($this->config->item('form_contact_methods') as $contact_method) {
				echo '<div class="radio-inline">';
				echo '<label><input type="radio" name="contact_method" value="'.$contact_method.'" ';
				if ((!empty($form['data']['contact_information']['contact_method']) ? $form['data']['contact_information']['contact_method'] : NULL) == $contact_method) {
					echo 'checked';
				}
				echo '/><div>'.$this->lang->line($contact_method).'</div></label>';
				echo '</div>';
			}
		?>
	</div>
</div>
