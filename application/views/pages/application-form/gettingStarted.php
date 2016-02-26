<?=form_hidden('age_validation', 0);?>
<div class="row">
	<div class="col-sm-12 text-center">
		<h2><?=$this->lang->line('getting_started_title')?></h2>
		<p class="text-large"><?=$this->lang->line('getting_started_description')?>
		<!--<=help_icon($this->lang->line('getting_started_help'))?>--></p>
	</div>
</div>
<div class="row">
	<div class="col-sm-12 col-md-offset-2 col-md-8">
		<div class="row">
			<div class="col-sm-12 col-md-5">
				<div class="form-group">
					<label><?=$this->lang->line('getting_started_elements')['first_name']['label']?></label>
					<input type="text"
						class="form-control input-lg"
						name="first_name"
						value="<?=$form['data']['household_members'][0]['first_name']?>"
						placeholder="<?=$this->lang->line('getting_started_elements')['first_name']['placeholder']?>"
						required
						data-error="<?=$this->lang->line('getting_started_elements')['first_name']['error']?>" />
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="col-sm-12 col-md-5">
				<div class="form-group">
					<label><?=$this->lang->line('getting_started_elements')['last_name']['label']?></label>
					<input type="text"
						class="form-control input-lg"
						name="last_name"
						value="<?=$form['data']['household_members'][0]['last_name']?>"
						placeholder="<?=$this->lang->line('getting_started_elements')['last_name']['placeholder']?>"
						required
						data-error="<?=$this->lang->line('getting_started_elements')['last_name']['error']?>" />
					<div class="help-block with-errors"></div>
				</div>
			</div>
			<div class="col-sm-12 col-md-2">
				<div class="form-group">
					<label><?=$this->lang->line('getting_started_elements')['middle_initial']['label']?></label>
					<input type="text"
						class="form-control input-lg col-md-1"
						name="middle_initial"
						value="<?=$form['data']['household_members'][0]['middle_initial']?>"
						maxlength="1"
						placeholder="<?=$this->lang->line('getting_started_elements')['middle_initial']['placeholder']?>"
						data-error="<?=$this->lang->line('getting_started_elements')['middle_initial']['error']?>" />
					<div class="help-block with-errors"></div>
				</div>
			</div>
		</div>
		<div class="col-sm-12 text-center">
			<div class="form-group">
				<p class="text-large mb-30"><?=$this->lang->line('getting_started_age')?></p>
				<div class="col-sm-12 col-md-offset-3 col-md-3">
					<button type="submit" data-value="1" class="button button-invert-green">
						<i class="icon-left fa fa-check"></i><?=$this->lang->line('yes')?>
					</button>
				</div>
				<div class="col-sm-12 col-md-3">
					<button type="submit" data-value="0" class="button button-invert-red">
						<i class="icon-left fa fa-times"></i><?=$this->lang->line('no')?>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
