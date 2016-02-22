<script src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="http://davidstutz.github.io/bootstrap-multiselect/dist/js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="http://davidstutz.github.io/bootstrap-multiselect/dist/css/bootstrap-multiselect.css" type="text/css"/>		
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
			  <label><input type="radio" name="ethnicity[<?=$loop?>]" value="hispanic_latino"><div><?=$this->lang->line('children_ethnicity_hispanic')?></div></label>
			</div>
			<div class="radio">
			  <label><input type="radio" name="ethnicity[<?=$loop?>]" value="not_hispanic_latino"><div><?=$this->lang->line('children_ethnicity_not_hispanic')?></div></label>
			</div>
		</div>
		<div class="col-sm-12 col-md-4">
			<select id="raceSelect1" name="race[<?=$loop?>]" multiple="multiple">
	      <option value="1-1">American Indian or Alaskan Native</option>
	      <option value="2-1">Asian, Black or African American</option>
	      <option value="2-2">Native Hawaiian or Other Pacific Islander</option>
	      <option value="2-3">White</option>
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
<script>
	$('#raceSelect1').multiselect({ nonSelectedText: 'Select all that apply' });
	$('#raceSelect2').multiselect({ nonSelectedText: 'Select all that apply' });
</script>