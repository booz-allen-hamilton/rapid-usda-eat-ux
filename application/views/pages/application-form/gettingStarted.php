<div class="row text-center">
	<h2><?=$this->lang->line('getting_started_title')?></h2>
	<p class="text-large"><?=$this->lang->line('getting_started_description')?><?=help_icon($this->lang->line('getting_started_help'))?></p>

	<div class="col-sm-12 col-md-offset-3 col-md-6">
		<div class="form-group col-sm-12 col-md-5 mr10">
			<input type="text" class="form-control input-lg" name="submitter_first" placeholder="First Name" required data-error="<?=$this->lang->line('error_getting_started_first')?>" />
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<div class="help-block with-errors"></div>
		</div>
		<div class="form-group col-sm-12 col-md-5 mr10">
			<input type="text" class="form-control input-lg" name="submitter_last" placeholder="Last Name" required data-error="<?=$this->lang->line('error_getting_started_last')?>" />
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<div class="help-block with-errors"></div>
		</div>
		<div class="form-group col-sm-12 col-md-2">
			<input type="text" class="form-control input-lg" name="submitter_last" placeholder="MI" required data-error="<?=$this->lang->line('error_getting_started_mi')?>" />
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<div class="help-block with-errors"></div>
		</div>
		<div class="form-group col-sm-12">
			<p class="text-large mb20"><?=$this->lang->line('getting_started_age')?></p>
			<div class="col-sm-12 col-md-offset-3 col-md-3">
				<a href="#" class="button button-invert-green"><span style="padding-right: 20px;">&#10004;</span><?=$this->lang->line('yes')?></a>
			</div>
			<div class="col-sm-12 col-md-3">
				<a href="#" class="button button-invert-red"><span style="padding-right: 20px;">&#10006;</span><?=$this->lang->line('no')?></a>
			</div>
		</div>
	</div>
</div>