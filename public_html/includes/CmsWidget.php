<?php

require_once('CmsBase.php');

class CmsWidget extends CmsBase {
  var $widgetPath='';
	var $widgetName='';
	function setWidgetPath($widgetName)
	{
	  $this->widgetPath="widgets"	. $widgetName . "/";
		$this->widgetName=$widgetName;
	}
	function getWidgetPath()
	{
		return $this->widgetPath;
	}
	function display()
	{
		echo 'esse é o conteúdo padrão';
	}
	function run($widgetName, $params)
	{
		$this->parameters=$params;
		$this->setWidgetPath($widgetName);
		$this->display();
	}
	
}
