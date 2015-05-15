<?php

require_once('includes/CmsApplication.php');
require_once('includes/CmsTemplateFunctions.php');
$tmpl = new CmsTemplateFunctions();
$tmpl->setWidget('logoPosition', 'logo');
$tmpl->setWidget('sidebarPosition', 'hello', array('hello_to'=>'MyCms'));
$tmpl->show();
