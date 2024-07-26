<?php

use Smarty\Smarty;

$smarty = new Smarty();

$smarty->setTemplateDir('../templates');
$smarty->setCompileDir('../templates/templates_c');
$smarty->setConfigDir('../templates/configs');
$smarty->setCacheDir('../templates/cache');