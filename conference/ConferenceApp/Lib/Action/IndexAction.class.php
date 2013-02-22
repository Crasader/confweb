<?php
class IndexAction extends BaseAction{
	public function index(){
		$home = M("home")->select();
		$this->assign("title",$home[0]['title']);
		$this->assign("content",$home[0]['content']);
		$this->display("Public:index");
	}
}
?>