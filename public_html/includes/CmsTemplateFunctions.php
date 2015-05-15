<?php

require_once('CmsBase.php');

class CmsTemplateFunctions extends CmsBase { 
  public $templateName = 'default';
	public $widgetPositions = array();

  function show()
  {
		require_once($this->getCurrentTemplatePath().'index.php');
  }

	function getCurrentTemplatePath()
  {
  	return 'templates/'.$this->templateName.'/';
  }

	function setTemplate($templateName)
  {
  	$this->templateName = $templateName;
  }

  function appOutput()
  {
		require_once('includes/CmsApplication.php');
		$app = new CmsApplication();
		$app->run();
  }

  function widgetOutPut($position = 'default')
	{
		if (!empty($this->widgetPositions[$position])) {
			// obten todos os widgets dado a posição
			$widgets=$this->widgetPositions[$position];
			// mostar cada widget obtido
			foreach($widgets as $widgetObject)
			{
				$widgetName = $widgetObject->name;
				$widgetParameters = $widgetObject->parameters;
				require_once('widgets/'.$widgetName.'/'.$widgetName.'.php');
				$widgetclass = ucfirst($widgetName).'Widget';
				$widget = new $widgetclass();
				$widget->run($widgetName);
			}
		}
  }

	function setWidget($position, $widgetName, $params=array())
	{
		$widget = new StdClass;
		$widget->name=$widgetName;
		$widget->parameters=$params;
		// se não ha uma posicão de widget então cria um novo array
		if (empty($this->widgetPositions[$position])) {
			$this->widgetPositions[$position]=array($widget);
		}
		// se já tem um widget na posição então apenas empurra um novo widget no array
    else
		{
			array_push($this->widgetPositions[$position], $widget);
		}
	}
}
