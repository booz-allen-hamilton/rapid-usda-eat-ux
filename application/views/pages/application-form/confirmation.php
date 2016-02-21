<div class="row text-center">
	<div class="col-sm-12">
		<h2 class="mb25"><?=$this->lang->line('confirmation_title')?></h2>
		<p class="text-large">
			<span class="asterisk">*</span>
			<?=$this->lang->line('confirmation_subtitle')?>
			<?=help_icon($this->lang->line('confirmation_subtitle_help'))?>
		</p>
	</div>
</div>
<div class="row confirmation">
	<div class="col-sm-12 col-md-4">
		<h3><?=$this->lang->line('confirmation_household_members')?> (3)</h3>
	</div>
	<div class="col-sm-12 col-md-8 mt-15">
		<hr class="divider">
	</div>
</div>
<div class="row confirmation household-members">
	<div class="col-sm-12 col-md-4">
		<h4><?=$this->lang->line('confirmation_adults')?> (1)</h4>
		<p class="text-large">John Smith</p>
	</div>
	<div class="col-sm-12 col-md-4">
		<h4><?=$this->lang->line('confirmation_children')?> (2)</h4>
		<p class="text-large">Jack Smith</p>
		<p class="text-large">Jill Smith</p>
	</div>
	<div class="col-sm-12 col-md-4 text-center">
		<div class="total-household-members">
			<h4><?=$this->lang->line('confirmation_total_household_members')?></h4>
			<span>3</span>
		</div>
	</div>
</div>

<div class="row confirmation bottom-row">
	<div class="col-sm-12 col-md-4">
		<h3><?=$this->lang->line('confirmation_contact_info')?></h3>

		<h4><?=$this->lang->line('confirmation_address')?></h4>
		<p class="text-large">1234 Elm St.<br />Herndon, VA 20171</p>

		<h4><?=$this->lang->line('confirmation_phone')?></h4>
		<p class="text-large">703-862-9881</p>

		<h4><?=$this->lang->line('confirmation_email')?></h4>
		<p class="text-large">john.smith@email.com</p>
		<em><?=$this->lang->line('confirmation_receive_updates')?></em>
	</div>
	<div class="col-sm-12 col-md-4">
		<h3><?=$this->lang->line('confirmation_other_assistance')?></h3>

		<h4><?=$this->lang->line('confirmation_assistance_program')?></h4>
		<p class="text-large">SNAP</p>

		<h4><?=$this->lang->line('confirmation_case_number')?></h4>
		<p class="text-large">78229109824</p>
	</div>
	<div class="col-sm-12 col-md-4">
		<h3><?=$this->lang->line('confirmation_household_income')?></h3>

		<p class="text-large"><?=$this->lang->line('confirmation_not_required')?></p>
	</div>
</div>