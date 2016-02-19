<?php
/**
 * Client Helper Functions
 */
defined('BASEPATH') OR exit('No direct script access allowed');

// ------------------------------------------------------------------------

if ( ! function_exists('help_icon'))
{
	/**
	 * [help_icon description]
	 * @param  [type] $message      [description]
	 * @param  string $placement    [description]
	 * @param  [type] $modal_target [description]
	 * @return [type]               [description]
	 */
	function help_icon($message, $placement = 'top', $modal = FALSE, $modal_title = NULL, $modal_body = NULL)
	{
		$html = '<span class="icon-info fa-stack fa-4x" data-toggle="tooltip" data-placement="'.$placement.'" title="'.$message.'">
						  <i class="fa fa-circle-thin fa-stack-2x icon-background4"></i>
						  <i class="fa fa-question fa-stack-1x"></i>
						</span>';
		if ($modal == TRUE) {
			$html = '<a href="#" data-toggle="modal" data-target="#modal-help" data-modal-title="'.$modal_title.'"  data-modal-body="'.$modal_body.'">'.$html.'</a>';
		}
		return $html;
	}
}