<?php
class VenueAction extends BaseAction{
	public function index(){
		$p = M("venue")->select();
		$this->assign("place",$p);
		$this->display("Public:venue");
	}
}
?>