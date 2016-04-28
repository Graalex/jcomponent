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

/**
 * Class JComponentView		вид компонента
 */
class JComponentView extends JViewLegacy
{
	/**
	 * Отобразить вид
	 *
	 * @param	null	$tmpl	Шаблон вида для рендеринга
	 *
	 * @return	void
	 */
	function display($tmpl = null)
	{
		//TODO: Вставте свой код

		$this->property = $this->get('Property');

		if(count($errors = $this->get('Errors'))) {
			JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');
			return false;
		}

		parent::display($tmpl);
	}
}