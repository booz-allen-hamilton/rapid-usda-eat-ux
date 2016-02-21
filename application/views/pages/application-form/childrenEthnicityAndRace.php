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
	<form action="" method="post">
	<div class="row tableItems text-left">
		<div class="col-sm-12 col-md-3 col-md-offset-1">
			<label>Jack P. Smith</label>
		</div>
		<div class="col-sm-12 col-md-3">
			<div class="radio">
			  <label><input type="radio" name="eth-hispanic1">Hispanic/Latino</label>
			</div>
			<div class="radio">
			  <label><input type="radio" name="eth-hispanic1">Not Hispanic/Latino</label>
			</div>
		</div>
		<div class="col-sm-12 col-md-4">
			<select id="raceSelect1" multiple="multiple">
			      <option value="1-1">American Indian or Alaskan Native</option>
			      <option value="2-1">Asian, Black or African American</option>
			      <option value="2-2">Native Hawaiian or Other Pacific Islander</option>
			      <option value="2-3">White</option>
			</select>
		</div>
	</div>
	<hr/>
	<div class="row tableItems text-left">
		<div class="col-sm-12 col-md-3 col-md-offset-1">
			<label>Jill W. Smith</label>
		</div>
		<div class="col-sm-12 col-md-3">
			<div class="radio">
			  <label><input type="radio" name="eth-hispanic2">Hispanic/Latino</label>
			</div>
			<div class="radio">
			  <label><input type="radio" name="eth-hispanic2">Not Hispanic/Latino</label>
			</div>
		</div>
		<div class="col-sm-12 col-md-4">
			<select id="raceSelect2" multiple="multiple">
			      <option value="1-1">American Indian or Alaskan Native</option>
			      <option value="2-1">Asian, Black or African American</option>
			      <option value="2-2">Native Hawaiian or Other Pacific Islander</option>
			      <option value="2-3">White</option>
			</select>
		</div>
	</div>
</form>
</div>

<script>
	$('#raceSelect1').multiselect({ nonSelectedText: 'Select all that apply' });
	$('#raceSelect2').multiselect({ nonSelectedText: 'Select all that apply' });
</script>