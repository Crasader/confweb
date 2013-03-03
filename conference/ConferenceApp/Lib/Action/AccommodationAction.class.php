<?php
class AccommodationAction extends BaseAction{
	public function index(){
		$p = M("accommodation")->select();
		$this->assign("acco",$p);
		$this->assign("menu","Accommodation");
		$this->display("Public:accommodation");
	}
}
?>