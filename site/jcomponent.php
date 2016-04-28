<?php
/**
 * @package		Joomla.Component
 * @subpackage	com_jcomponent
 *
 * @copyright	Copyright (c) 2016. Grigorchuk Aleksandr
 * @license		MIT License, see LICENCE
 * @since		3.1
 *
 */

defined('_JEXEC') or die;

$controller = JControllerLegacy::getInstance('JComponent');
$input = JFactory::getApplication()->input;

$controller->execute($input->getCmd('task'));

$controller->redirect();