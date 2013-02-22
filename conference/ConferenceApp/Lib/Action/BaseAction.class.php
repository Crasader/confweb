<?php
class BaseAction extends Action{
	public function _initialize(){
		$footer = M("contact")->select();
		$this->assign("address",$footer[0]['address']);
		$this->assign("phone1",$footer[0]['phone1']);
		$this->assign("phone2",$footer[0]['phone2']);
		$this->assign("phone3",$footer[0]['phone3']);
		$this->assign("fax",$footer[0]['fax']);
	}
}
?>