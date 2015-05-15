<?php

require_once('CmsBase.php');

class CmsApplication extends CmsBase {
	function run()
	{
		//fazer alguma coisa

		if (isset($_REQUEST['task'])) {

				$task = $_REQUEST['task'];

				switch ($task) {
					case 'addcontent':
						$this->addContent();
						break;
					case 'anyothertask':
						$this->anyOtherTask();
						break;	
					default:
						$this->viewContent();
						break;
				}
		}
		else {
			$this->display();
		}
	}

	function addContent () {
    echo 'vamos add uma coisa?';
	}
	function display()
	{
		echo 'essa é a tarefa padrão da app';
	}
	
	function viewContent(){
		echo 'este eh o conteudo principal, nao chora.';
	}
  function anyOtherTask (){
		echo 'eh apenas uma outra e qualquer tarefa nessa bagasa toda';
  }	

}
