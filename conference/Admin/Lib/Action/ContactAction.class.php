<?php
class ContactAction extends BaseAction{
	public function index(){
		$c = M("contact")->select();
		$this->assign("contact",$c[0]);
		$this->assign("menu","Contact");
		$this->display("Public:contact");
	}
	public function edits(){
		$data = $_POST;
		$data["id"] = 1;
		M("contact")->save($data);
		$this->success("发布成功！");
	}
}
?>