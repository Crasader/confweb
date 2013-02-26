<?php
class RegistrantAction extends BaseAction{
	public function index(){
		$Sets = M("Registrant");
		import("ORG.Util.Page");
		$count = $Sets->count();
		$Page = new Page($count,20);
		$show = $Page->show();
		$user = $Sets->order('rank asc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('pages',$show);
		$this->assign("user",$user);
		$this->assign(menu,"Registrant");
		$this->display("Public:Registrant");
	}
	public function add(){
		$this->assign(title,"添加");
		$this->assign(action,"adds");
		$this->assign("dsp","detail");
		$this->assign(menu,"Registrant");
		$this->display("Public:Registrant");
	}
	public function adds(){
		$Sets = M("Registrant");
		$data["chinesename"] = $_POST["chinesename"];
		$data["englishname"] = $_POST["englishname"];
		$data["school"] = $_POST["school"];
		$data["introduction"] = $_POST["introduction"];
		$data["rank"] = $_POST["rank"];
		$data["type"] = $_POST["type"];
		if($Sets->add($data)){
			$this->assign("jumpUrl","__URL__/index");
			$this->success("发布成功！");
		}else{
			$this->error("发布失败！");
		}
	}
	public function edit(){
		if($_GET["id"]){
			$cond["id"] = $_GET["id"];
			$p = M("Registrant")->where($cond)->select();
			$this->assign("person",$p[0]);
			$this->assign("dsp","detail");
			$this->assign("action","edits");
			$this->assign("title","修改");
			$this->display("Public:Registrant");
		}else{
			$this->assign("jumpUrl","__URL__");
			$this->error("数据不存在！");
		}
	}
	public function edits(){
		if(M("Registrant")->save($_POST))
			$this->success("修改成功！");
		else
			$this->error("修改失败或无修改！");
	}
	public function batch(){
		$this->_batch();
	}
}
?>