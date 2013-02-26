<?php
class AgendaAction extends BaseAction{
	public function index(){
		$this->display("Public:agenda");
	}
	public function upload(){
		$this->_upload();
	}
}
?>