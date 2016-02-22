<?=form_hidden('children_ethnicity_race', 1)?>
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
			<?	
				foreach($this->config->item('form_ethnicity') as $ethnicity_items) {
			?>
			<div class="radio">
			  <label><input type="radio" name="ethnicity[<?=$loop?>]" value="<?=$ethnicity_items?>" <? if($student['ethnicity'] == $ethnicity_items) { echo 'checked="checked"'; } ?>><?=$this->lang->line($ethnicity_items)?></label>
			</div>
			<?
				}
			?>
		</div>
		<div class="col-sm-12 col-md-4">
			<select class="_multiselect_race" name="race[<?=$loop?>][]" multiple="multiple">
				<?	
					foreach($this->config->item('form_race') as $ethnicity_race) {
						echo '<option value="'.$ethnicity_race.'" ';
						if (!empty($student['race'])) {
							$student_race = $student['race'];
							if (is_array($student_race)) {
								if ( in_array($ethnicity_race, $student['race']) ) {
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