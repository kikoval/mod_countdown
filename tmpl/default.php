<?php
// No direct access
defined('_JEXEC') or die;
?>
<span class="countdown title"><?php echo $title; ?></span>
<span class="countdown days"><?php echo $countdown->format("%a dní"); ?></span> a
<span class="countdown hours"><?php echo $countdown->format("%h hodín"); ?></span>
