<?php
class IndexAction extends BaseAction{
	public function index(){
			$this->assign("menu","Index");
			$this->display("Public:index");
	}
}
?>