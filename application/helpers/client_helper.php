<?php
/**
 * Client Helper Functions
 */
defined('BASEPATH') OR exit('No direct script access allowed');

// ------------------------------------------------------------------------

if ( ! function_exists('help_icon'))
{
	/**
	 * Help Icon
	 * @param  [type] $message   [description]
	 * @param  string $placement [description]
	 * @return [type]            [description]
	 */
	function help_icon($message, $placement = 'top')
	{
		$html = '<span class="icon-info fa-stack fa-4x" data-toggle="tooltip" data-placement="'.$placement.'" title="'.$message.'">
						  <i class="fa fa-circle-thin fa-stack-2x icon-background4"></i>
						  <i class="fa fa-info fa-stack-1x"></i>
						</span>';
		return $html;
	}
}
