<?
	$form_other_assistance    = $this->session->userdata('form_other_assistance');
	$form_household_members   = $this->session->userdata('form_household_members');
	$form_household_students  = $this->session->userdata('form_household_students');
	$form_contact_information = $this->session->userdata('form_contact_information');
	echo form_hidden('confirmation', 1);
?>
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
		<h4><?=$this->lang->line('confirmation_adults')?> (<?=count($form_household_members)?>)</h4>
		<?
			foreach($form_household_members as $member) {
		?>
		<p class="text-large"><?=$member['first_name']?> <?=$member['middle_name']?> <?=$member['last_name']?></p>
		<?
			}
		?>
	</div>
	<div class="col-sm-12 col-md-4">
		<h4><?=$this->lang->line('confirmation_children')?> (<?=count($form_household_students)?>)</h4>
		<?
			foreach($form_household_students as $student) {
		?>
		<p class="text-large"><?=$student['first_name']?> <?=$student['middle_name']?> <?=$student['last_name']?></p>
		<?
			}
		?>
	</div>
	<div class="col-sm-12 col-md-4 text-center">
		<div class="total-household-members">
			<h4><?=$this->lang->line('confirmation_total_household_members')?></h4>
			<span><?=count($form_household_members) + count($form_household_students)?></span>
		</div>
	</div>
</div>

<div class="row confirmation bottom-row">
	<div class="col-sm-12 col-md-4">
		<h3><?=$this->lang->line('confirmation_contact_info')?></h3>

		<h4><?=$this->lang->line('confirmation_address')?></h4>
		<p class="text-large"><?=$form_contact_information['street_address']?><br /><?=$form_contact_information['city']?>, <?=$form_contact_information['state']?> <?=$form_contact_information['zip']?></p>

		<h4><?=$this->lang->line('confirmation_phone')?></h4>
		<p class="text-large"><?=$form_contact_information['phone']?></p>

		<h4><?=$this->lang->line('confirmation_email')?></h4>
		<p class="text-large"><?=$form_contact_information['email']?></p>
		<em><?=$this->lang->line('confirmation_receive_updates')?></em>
	</div>
	<div class="col-sm-12 col-md-4">
		<h3><?=$this->lang->line('confirmation_other_assistance')?></h3>

		<h4><?=$this->lang->line('confirmation_assistance_program')?></h4>
		<p class="text-large"><?=$form_other_assistance['assistance_program']?></p>

		<h4><?=$this->lang->line('confirmation_case_number')?></h4>
		<p class="text-large"><?=$form_other_assistance['case_number']?></p>
	</div>
	<div class="col-sm-12 col-md-4">
		<h3><?=$this->lang->line('confirmation_household_income')?></h3>

		<p class="text-large"><?=$this->lang->line('confirmation_not_required')?></p>
	</div>
</div>