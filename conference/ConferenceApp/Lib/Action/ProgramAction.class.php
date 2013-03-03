<?php
class ProgramAction extends BaseAction{
	public function index(){
		$this->assign("menu","Program");
		$this->display("Public:program");
	}
}
?>