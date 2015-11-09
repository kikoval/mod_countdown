<?php
// No direct access
defined('_JEXEC') or die;

require_once dirname(__FILE__) . '/helper.php';

$title = $params->get('title', "");
$date = $params->get('date', null);
$countdown = ModCountdownHelper::getCountdown($date);
require JModuleHelper::getLayoutPath('mod_countdown');

?>
