<?php
defined('_JEXEC') or die;

JLoader::register('ModExtraMenuHelper', __DIR__ . '/helper.php');
$list = ModExtraMenuHelper::getList($params);
require JModuleHelper::getLayoutPath('mod_extramenu', $params->get('layout', 'default'));
