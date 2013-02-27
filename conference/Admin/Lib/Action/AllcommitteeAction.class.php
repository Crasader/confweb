<?php
class AllcommitteeAction extends BaseAction{
	public function index(){
		$this->assign("menu","Committee");
		$this->display("Public:allcommittee");
	}
}
?>