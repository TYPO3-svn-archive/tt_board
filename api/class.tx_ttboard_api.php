<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2012 Franz Holzinger <franz@ttproducts.de>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*  A copy is found in the textfile GPL.txt and important notices to the license
*  from the author is found in LICENSE.txt distributed with these scripts.
*
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * class.tx_ttboard_api.php
 *
 * API Function library for a forum/board in tree or list style
 *
 * $Id$
 *
 * @author	Franz Holzinger <franz@ttproducts.de>
 */


require_once (PATH_BE_TTBOARD . 'marker/class.tx_ttboard_marker.php');
require_once (PATH_BE_TTBOARD . 'model/class.tx_ttboard_model.php');


class tx_ttboard_api {

	/**
	 * Retrieves default configuration of tt_board.
	 * Uses plugin.tt_board_list or plugin.tt_board_tree from page TypoScript template
	 *
	 * @param	string		type of the forum: list or tree
     *
	 * @return	array		TypoScript configuration for ratings
	 */
	public function getDefaultConfig ($type) {
		global $TSFE;

		if ($type == 'list' || $type == 'tree') {
			$key = 'tt_board_' . $type . '.';
			$rc = $TSFE->tmpl->setup['plugin.'][$key];
		} else {
			$rc = FALSE;
		}
		return $rc;
	}
}


if (defined('TYPO3_MODE') && $GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/tt_board/api/class.tx_ttboard_api.php']) {
	include_once($GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/tt_board/api/class.tx_ttboard_api.php']);
}

?>