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
 * Class JComponentModelJComponent	модель для компонента
 */
class JComponentModelJComponent extends JModelItem
{
	/**
	 * @property	string	Свойство модели
	 */
	protected $property;

	/**
	 * Возвращает значение свойства модели
	 *
	 * @return string
	 */
	public function getProperty()
	{
		if(!isset($this->property)) {
			$input = JFactory::getApplication()->input;
			$id = $input->getId('id', 1, 'INT');

			switch($id) {
				case 2:
					$this->property = 'Non default value!';
					break;

				case 1:
				default:
					$this->property = 'Default value';
					break;
			}
		}

		return $this->property;
	}
}
