<div class="container">
	<h1><?=$this->lang->line('application_title')?></h1>

	<div class="row section">
		<div class="col-md-1 section-number">1</div>
		<div class="col-md-11">
		<?
			$this->load->view('pages/application-form/section_one');
		?>
		</div>
	</div>

	<div class="row section">
		<div class="col-md-1 section-number">2</div>
		<div class="col-md-11">
		<?
			$this->load->view('pages/application-form/section_two');
		?>
		</div>
	</div>

	<div class="row section">
		<div class="col-md-1 section-number">3</div>
		<div class="col-md-11">
		<?
			$this->load->view('pages/application-form/section_three');
		?>
		</div>
	</div>

	<div class="row section">
		<div class="col-md-1 section-number">4</div>
		<div class="col-md-11">
		<?
			$this->load->view('pages/application-form/section_four');
		?>
		</div>
	</div>
</div>