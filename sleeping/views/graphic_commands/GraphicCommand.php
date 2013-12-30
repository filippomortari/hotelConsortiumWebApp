<?php
/**
 * @access public
 * @package views.graphic_commands
 */
interface GraphicCommand {

	/**
	 * @access public
	 * @param data
	 * @ParamType data
	 */
	public function draw($data = null);
}
?>