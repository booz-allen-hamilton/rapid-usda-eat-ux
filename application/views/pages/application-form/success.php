<div class="row text-center">
	<div class="col-sm-12 col-md-offset-2 col-md-8 success">
		<i class="fa fa-check fa-5x"></i>
		<h2 class="mb25">Success!</h2>
		<p class="text-large">
			You have successfully applied for free or reduced school lunches. We will email you with updates on the status of your application.
		</p>
		<p class="text-large">
			<strong><?=$this->lang->line('success_submission_id')?></strong>
			<span><?=$this->session->flashdata('application_id')?></span>
		</p>
		<div>
			<button class="button white-button-large">
				<?=$this->lang->line('success_return')?>
			</button>
		</div>
	</div>
</div>