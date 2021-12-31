<?php
class Games extends Controller{
	protected function Index(){
		$viewmodel = new GameModel();
		$this->returnView($viewmodel->Index(), true);
	}

	protected function delete(){
		if(!isset($_SESSION['is_logged_in']))
		{
			header('location:'.ROOT_URL.'games');
		}
		$viewmodel = new GameModel();
		$this->ReturnView($viewmodel->delete(),true);
	}
	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'games');
		}
		$viewmodel = new GameModel();
		$this->returnView($viewmodel->add(), true);
	}
	protected function edit(){
		if(!isset($_SESSION['is_logged_in']))
		{
			header('location:'.ROOT_URL.'games');
		}
		$viewmodel = new GameModel();
		$this->ReturnView($viewmodel->edit(),true);
	}
}