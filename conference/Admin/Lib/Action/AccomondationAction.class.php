<?php
class AccomondationAction extends BaseAction{
	public function index(){
		$Sets = M("Accomondation");
		import("ORG.Util.Page");
		$count = $Sets->count();
		$Page = new Page($count,20);
		$show = $Page->show();
		$user = $Sets->order('id asc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('pages',$show);
		$this->assign("user",$user);
		$this->assign(menu,"Accomondation");
		$this->display("Public:Accomondation");
	}
	public function add(){
		$this->assign(title,"添加");
		$this->assign(action,"adds");
		$this->assign("dsp","detail");
		$this->assign(menu,"Accomondation");
		$this->display("Public:Accomondation");
	}
	public function adds(){
		$Sets = M("Accomondation");
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
			$p = M("Accomondation")->where($cond)->select();
			$this->assign("person",$p[0]);
			$this->assign("dsp","detail");
			$this->assign("action","edits");
			$this->assign("title","修改");
			$this->display("Public:Accomondation");
		}else{
			$this->assign("jumpUrl","__URL__");
			$this->error("数据不存在！");
		}
	}
	public function edits(){
		if(M("Accomondation")->save($_POST))
			$this->success("修改成功！");
		else
			$this->error("修改失败或无修改！");
	}
	public function batch(){
		$this->_batch();
	}
}
?>