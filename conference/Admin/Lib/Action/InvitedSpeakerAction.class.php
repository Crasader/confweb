<?php
class InvitedspeakerAction extends BaseAction{
	public function index(){
		$Invited = M("invitedspeaker");
		import("ORG.Util.Page");
		$count = $Invited->count();
		$Page = new Page($count,20);
		$show = $Page->show();
		$user = $Invited->order('rank asc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('pages',$show);
		$this->assign("user",$user);
		$this->assign(menu,"Speaker");
		$this->display("Public:invitedspeaker");
	}
	public function add(){
		$this->assign(title,"添加");
		$this->assign(action,"adds");
		$this->assign("dsp","detail");
		$this->assign(menu,"Speaker");
		$this->display("Public:invitedspeaker");
	}
	public function adds(){
		$Invited = M("invitedspeaker");
		$data["chinesename"] = $_POST["chinesename"];
		$data["englishname"] = $_POST["englishname"];
		$data["school"] = $_POST["school"];
		$data["introduction"] = $_POST["introduction"];
		$data["rank"] = $_POST["rank"];
		$data["type"] = $_POST["type"];
		if($Invited->add($data)){
			$this->assign("jumpUrl","__URL__/index");
			$this->success("发布成功！");
		}else{
			$this->error("发布失败！");
		}
	}
	public function edit(){
		if($_GET["id"]){
			$cond["id"] = $_GET["id"];
			$p = M("invitedspeaker")->where($cond)->select();
			$this->assign("person",$p[0]);
			$this->assign("dsp","detail");
			$this->assign("action","edits");
			$this->assign("title","修改");
			$this->display("Public:invitedspeaker");
		}else{
			$this->assign("jumpUrl","__URL__");
			$this->error("数据不存在！");
		}
	}
	public function edits(){
		if(M("invitedspeaker")->save($_POST))
			$this->success("修改成功！");
		else
			$this->error("修改失败或无修改！");
	}
	public function batch(){
		$this->_batch();
	}
}
?>