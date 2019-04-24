<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_jdfacebookpage
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$jdmoduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_jdfacebookpage', $params->get('layout', 'default'));