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


if ( ! function_exists('lang_key'))
{
	/**
 	 * Swaps values for language items
	 * @param  [type] $lang_key    [description]
	 * @param  [type] $value_array [description]
	 * @return [type]              [description]
	 */
	function lang_key($lang_key, $value_array)
	{
		$ci =& get_instance();
		$language_line = $ci->lang->line($lang_key);
		foreach($value_array as $key => $value) {
			$language_line = str_replace('{'.$key.'}', $ci->lang->line($value), $language_line);
		}
		return $language_line;
	}
}

if ( ! function_exists('annualize_income'))
{
	function annualize_income($key, $value)
	{
		switch($key) {
			case "weekly":
				$value = $value * 52;
			break;
			case "twice_a_week":
				$value = $value * 26;
			break;
			case "monthly":
				$value = $value * 12;
			break;
			case "twice_a_month":
				$value = $value * 24;
			break;
		}
		return $value;
	}
}