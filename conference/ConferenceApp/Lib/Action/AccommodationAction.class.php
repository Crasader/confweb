<?php
class AccommodationAction extends BaseAction{
	public function index(){
		$p = M("accommodation")->select();
		$this->assign("acco",$p);
		$this->display("Public:accommodation");
	}
}
?>