<?php
class ChangepasswordAction extends BaseAction{
	public function index(){
		$this->assign("menu","Changepassword");
		$this->display("Public:changepassword");
	}
	public function edits(){
		$op = $_POST["op"];
		$oldp = M("Administrator")->select();
		if(md5($op) != $oldp[0]["password"])
			$this->error("原密码错误！");
		else
		{
			$data["id"] = 1;
			$data["password"] = md5($_POST["password"]);
			M("administrator")->save($data);
			$this->success("修改成功！");
		}
	}
}
?>