<?php
class ProgramAction extends BaseAction{
	public function index(){
		$this->display("Public:program");
	}
	public function upload(){
		$this->_upload();
	}
}
?>