<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  InfinitySoft 2010
 * @author     Tristan Lins <tristan.lins@infinitysoft.de>
 * @package    ContentNavigation
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'addAnchor';
$GLOBALS['TL_DCA']['tl_content']['palettes']['spacer']     = '{type_legend},type,addAnchor;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['addAnchor'] = 'anchor,anchorTitle';

$GLOBALS['TL_DCA']['tl_content']['fields']['addAnchor'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['addAnchor'],
	'default'                 => '1',
	'inputType'               => 'checkbox',
	'eval'                    => array('submitOnChange'=>true)
);

$GLOBALS['TL_DCA']['tl_content']['fields']['anchor'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['anchor'],
	'default'                 => 'top',
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_content']['fields']['anchorTitle'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['anchorTitle'],
	'default'                 => 'top',
	'inputType'               => 'text',
	'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50')
);
