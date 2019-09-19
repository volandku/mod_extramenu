<?php
defined('_JEXEC') or die;

JModelLegacy::addIncludePath(JPATH_ADMINISTRATOR . '/components/com_content/models', 'ContentModel');

/**
 * Helper for mod_extramenu
 *
 * @since  3.6
 */
abstract class ModExtraMenuHelper
{
	/**
	 * Get a list of menu items.
	 *
	 * @param   \Joomla\Registry\Registry  &$params  The module parameters.
	 *
	 * @return  mixed  An array of menuitems, or false on error.
	 */
	public static function getList(&$params)
	{
        $db     = JFactory::getDbo();


        $query = $db->getQuery(true)
            ->select('id, title, link, published, level, access')
            ->from('#__menu')
            ->where('client_id=1');



        $db->setQuery($query);

        try
        {
            $result = $db->loadAssocList('id');
        }
        catch (RuntimeException $e)
        {
            $result = array();
            JFactory::getApplication()->enqueueMessage(JText::sprintf('JERROR_LOADING_MENUS', $e->getMessage()), 'error');
        }

        $items=$params->get('menuitem');

        foreach ($items as $item)
        {
            $t=$result[$item->menuitem];
            // var_dump($item);
            if ($item->CTitle) $t['CTitle']=$item->CTitle;
            $menus[]=$t;
        }

		return $menus;
	}


}
