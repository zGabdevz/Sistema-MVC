<?php

namespace Controllers;

class 	ContatoController extends Controller
{
	public function __construct()
	{
		$this->view = new \Views\MainView('Contato');
	}

	public function executar()
	{
		$this->view->render();
	}
}