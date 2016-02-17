<?
	$form_sections = array(
		'household',
		'householdMembers',
		'childrenDetails',
	);
?>
<div id="page-application-form" data-current-step="1" data-max-steps="<?=count($form_sections)?>">
	<div class="container">
		<form id="application-form" class="form-horizontal">
			<div class="tab-content">
			<?
				$loop = 1;
				$active = '';
				foreach($form_sections as $form_section) {
					$active = ($loop != 1 ? 'hide' : NULL);
					echo '<div class="form-section '.$active.'" id="form-section-'.$form_section.'" data-step="'.$loop.'">';
					$this->load->view('pages/application-form/'.$form_section);
					echo '</div>';
					$loop++;
				}
			?>
			</div>
		</div>
		<div class="footer">
			<div class="footer-nav-bar">
				<table>
					<tr>
					<?
						$max = count($form_sections);

						for($i = 1; $i <= $max; $i++) {
							$step = ($i == 1 ? 'step-active' : 'step-disabled');
					?>
						<td>
							<div class="footer-progress-step <?=$step?>" id="step-<?=$i?>">
								<span class="fa-stack fa-3x">
									<i class="fa fa-circle-thin fa-stack-2x icon-outline"></i>
									<i class="fa fa-circle fa-stack-2x icon-background"></i>
									<i class="fa fa-check fa-stack-1x icon-image"></i>
									<i class="fa fa-stack-1x icon-number"><?=$i?></i>
								</span>
							</div>
						</td>
						<?
							if ($i != $max) {
						?>
							<td>
								<div class="footer-bav-connector"></div>
							</td>
					<?
							}
						}
					?>
					</tr>
				</table>
			</div>
			<a href="#" class="footer-button-with-border" data-action="next"><?=$this->lang->line('next')?> ></a>
			<a href="#" class="footer-button-with-border" data-action="prev">< <?=$this->lang->line('back')?></a>
			<a href="#">Cancel</a>
		</form>
	</div>
</div>