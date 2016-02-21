<div class="row text-center">
	<div class="col-sm-12 col-md-offset-1 col-md-10">
		<h2 class="mb25"><?=$this->lang->line('contact_info_title')?></h2>
		<p class="text-large">
			<span class="asterisk">*</span>
			<?=$this->lang->line('contact_info_subtitle')?>
			<?=help_icon($this->lang->line('contact_info_help'))?>
		</p>
	</div>
</div>
<div class="row mt-50">
	<div class="col-sm-12 col-md-offset-1 col-md-8">
		<label><?=$this->lang->line('contact_info_elements')['street_address']['label']?></label>
		<input type="text"
			class="form-control input-lg"
			name="street_address"
			data-error="<?=$this->lang->line('contact_info_elements')['street_address']['error']?>" />
		<div class="help-block with-errors"></div>
	</div>
	<div class="col-sm-12 col-md-2">
		<label><?=$this->lang->line('contact_info_elements')['apt']['label']?></label>
		<input type="text"
			class="form-control input-lg"
			name="apt" />
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
			required
			data-error="<?=$this->lang->line('contact_info_elements')['city']['error']?>" />
		<div class="help-block with-errors"></div>
	</div>
	<div class="col-sm-12 col-md-4">
		<span class="asterisk">* </span>
		<label><?=$this->lang->line('contact_info_elements')['state']['label']?></label>
		<select name="state" class="form-control input-lg">
			<option selected="selected" disabled="disabled"><?=$this->lang->line('contact_info_elements')['state']['placeholder']?></option>
			<option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			<option value="AR">Arkansas</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DE">Delaware</option>
			<option value="DC">District Of Columbia</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="IA">Iowa</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="ME">Maine</option>
			<option value="MD">Maryland</option>
			<option value="MA">Massachusetts</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MS">Mississippi</option>
			<option value="MO">Missouri</option>
			<option value="MT">Montana</option>
			<option value="NE">Nebraska</option>
			<option value="NV">Nevada</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NY">New York</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VT">Vermont</option>
			<option value="VA">Virginia</option>
			<option value="WA">Washington</option>
			<option value="WV">West Virginia</option>
			<option value="WI">Wisconsin</option>
			<option value="WY">Wyoming</option>
		</select>
		<div class="help-block with-errors"></div>
	</div>
	<div class="col-sm-12 col-md-2">
		<span class="asterisk">* </span>
		<label><?=$this->lang->line('contact_info_elements')['zip']['label']?></label>
		<input type="text"
			class="form-control input-lg"
			name="zip"
			required
			data-error="<?=$this->lang->line('contact_info_elements')['zip']['error']?>" />
		<div class="help-block with-errors"></div>
	</div>
</div>

<div class="row" style="margin-top: 20px;">
	<div class="col-sm-12 col-md-offset-1 col-md-3">
		<label><?=$this->lang->line('contact_info_elements')['phone']['label']?></label>
		<input type="text"
			class="form-control input-lg"
			name="phone"
			placeholder="<?=$this->lang->line('contact_info_elements')['phone']['placeholder']?>"
			required
			data-error="<?=$this->lang->line('contact_info_elements')['phone']['error']?>" />
		<div class="help-block with-errors"></div>
	</div>
	<div class="col-sm-12 col-md-5">
		<label><?=$this->lang->line('contact_info_elements')['email']['label']?></label>
		<input type="email"
			class="form-control input-lg"
			name="email"
			placeholder="<?=$this->lang->line('contact_info_elements')['email']['placeholder']?>"
			required
			data-error="<?=$this->lang->line('contact_info_elements')['email']['error']?>" />
		<div class="help-block with-errors"></div>
	</div>
</div>

<div class="row" style="margin-top: 20px;">
	<div class="col-sm-12 col-md-offset-1 col-md-10">
		<label><?=$this->lang->line('contact_info_elements')['contact']['label']?></label>
		<div class="help-block with-errors"></div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12 col-md-offset-1 col-md-3">
		<label class="checkbox-inline">
			<input type="checkbox" name="status_text">
			<span class="checkbox-label">Text message</span>
		</label>
	</div>
	<div class="col-sm-12 col-md-2">
		<label class="checkbox-inline">
			<input type="checkbox" name="status_email">
			<span class="checkbox-label">Email</span>
		</label>
	</div>
	<div class="col-sm-12 col-md-3">
		<label class="checkbox-inline">
			<input type="checkbox" name="status_phone">
			<span class="checkbox-label">Phone Call</span>
		</label>
	</div>
</div>
