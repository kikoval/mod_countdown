<?php
// No direct access
defined('_JEXEC') or die;
?>
<span class="countdown title"><?php echo $title; ?></span>
<?php if ($countdown->d > 0) {?>
<span class="countdown days"><?php echo $countdown->format("%a dní"); ?></span>
<?php } ?>
<?php if ($countdown->h > 0) {?>
a <span class="countdown hours"><?php echo $countdown->format("%h hodín"); ?></span>
<?php } ?>
