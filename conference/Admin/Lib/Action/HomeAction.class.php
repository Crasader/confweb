<?php
class HomeAction extends BaseAction{
	public function index(){
		$h = M("home")->select();
		$this->assign("title",$h[0]["title"]);
		$this->assign("content",$h[0]["content"]);
		$this->display("Public:home");
	}
	public function edits(){
		$data = $_POST;
		$data["id"] = 1;
		M("home")->save($data);
		$this->redirect("index");
	}
}
?>