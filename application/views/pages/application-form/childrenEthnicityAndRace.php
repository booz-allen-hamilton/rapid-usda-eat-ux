
<div class="row text-center">
	<div class="col-sm-12 col-md-12">
		<h2><?=$this->lang->line('children_ethnicity_race')?></h2>
	</div>
	<div class="col-sm-12 col-md-9 col-md-offset-1" style="margin-bottom: 30px;">
		<h4 style="font-weight: normal;"><?=$this->lang->line('children_ethnicity_race_subtitle')?></h4>
	</div>
	<div class="row tableHeaders text-left" style="margin-top: 20px;">
		<div class="col-sm-12 col-md-3 col-md-offset-1">
		</div>
		<div class="col-sm-12 col-md-3">
			<?=$this->lang->line('ethnicity_table_header')?>
		</div>
		<div class="col-sm-12 col-md-4">
			<?=$this->lang->line('race_table_header')?>
		</div>
	</div>
	<hr/>
	<?
		$form_household_students  = $this->session->userdata('form_household_students');
		$loop = 0;
		foreach($form_household_students as $student) {
	?>
	<div class="row tableItems text-left">
		<div class="col-sm-12 col-md-3 col-md-offset-1">
			<label><?=$student['first_name'].' '.$student['middle_initial'].' '.$student['last_name']?></label>
		</div>
		<div class="col-sm-12 col-md-3">
			<div class="radio">
			  <label><input type="radio" name="ethnicity_<?=$loop?>" value="hispanic_latino">Hispanic/Latino</label>
			</div>
			<div class="radio">
			  <label><input type="radio" name="ethnicity_<?=$loop?>" value="not_hispanic_latino">Not Hispanic/Latino</label>
			</div>
		</div>
		<div class="col-sm-12 col-md-4">
			<select class="_multiselect_race" name="race_<?=$loop?>" multiple="multiple">
				<?	
					foreach($this->config->item('form_ethnicity_race') as $ethnicity_race) {
						echo '<option value="'.$ethnicity_race.'" ';
						if (!empty($student['race'])) {
							$student_race = json_decode($student['race']);
							if (is_array($student_race)) {
								if ( in_array($ethnicity_race, json_decode($student['race'])) ) {
									echo 'selected="selected"';
								}
							} else {
								if ( $ethnicity_race == $student_race ) {
									echo 'selected="selected"';
								}
							}
						} 
						echo '>';
						echo $this->lang->line($ethnicity_race);
						echo '</option>';
					}
				?>
			</select>
		</div>
	</div>
	<hr/>
	<?
			$loop++;
		}
	?>
</div>
<?
	echo form_hidden('test', 1);
?>