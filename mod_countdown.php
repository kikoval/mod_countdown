<?php
// No direct access
defined('_JEXEC') or die;

require_once dirname(__FILE__) . '/helper.php';

$title = $params->get('title', "");
$datetime = $params->get('datetime', null);
$countdown = ModCountdownHelper::getCountdown($datetime);
require JModuleHelper::getLayoutPath('mod_countdown');

?>
