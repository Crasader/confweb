<?php
class VenueAction extends BaseAction{
	public function index(){
		$venue = M("venue");
		import("ORG.Util.Page");
		$count = $venue->where($map)->count();
		$Page = new Page($count,20);
		$show = $Page->show();
		$v = $venue->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('pages',$show);
		$this->assign("venue",$v);
		$this->assign(menu,"Venue");
		$this->display("Public:venue");
	}
	public function add(){
		$this->assign(title,"添加");
		$this->assign(action,"adds");
		$this->assign("dsp","detail");
		$this->assign(menu,"Venue");
		$this->display("Public:venue");
	}
	public function adds(){
		$venue = M("venue");
		$data["confname"] = $_POST["confname"];
		$data["time"] = $_POST["time"];
		$data["place"] = $_POST["place"];
		$data["note"] = $_POST["note"];
		if(!empty($_FILES['photo']['name'])){
			$data['photo'] = $this->_upload("photo",false,300,400,true);
		}
		if($venue->add($data)){
			$this->assign("jumpUrl","__URL__/index");
			$this->success("发布成功！");
		}else{
			$this->error("发布失败！");
		}
	}
	public function edit(){
		if($_GET["id"]){
			$cond["id"] = $_GET["id"];
			$v = M("venue")->where($cond)->select();
			$this->assign("venue",$v[0]);
			$this->assign("dsp","detail");
			$this->assign("action","edits");
			$this->assign("title","修改");
			$this->display("Public:venue");
		}else{
			$this->assign("jumpUrl","__URL__");
			$this->error("数据不存在！");
		}
	}
	public function edits(){
		$data["id"] = $_POST["id"];
		$data["confname"] = $_POST["confname"];
		$data["time"] = $_POST["time"];
		$data["place"] = $_POST["place"];
		$data["note"] = $_POST["note"];
		if(!empty($_FILES['photo']['name'])){
			$data['photo'] = $this->_upload("photo",false,300,400,true);
		}
		if(M("venue")->save($data))
			$this->success("修改成功！");
		else
			$this->error("修改失败或无修改！");
	}
	public function batch(){
		$this->_batch();
	}
}
?>