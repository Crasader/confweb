<?php
class AccommodationAction extends BaseAction{
	public function index(){
		$Sets = M("Accommodation");
		import("ORG.Util.Page");
		$count = $Sets->count();
		$Page = new Page($count,20);
		$show = $Page->show();
		$user = $Sets->order('id asc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('pages',$show);
		$this->assign("hotels",$user);
		$this->assign(menu,"Accommodation");
		$this->display("Public:Accommodation");
	}
	public function add(){
		$this->assign(title,"添加");
		$this->assign(action,"adds");
		$this->assign("dsp","detail");
		$this->assign(menu,"Accommodation");
		$this->display("Public:Accommodation");
	}
	public function adds(){
		$acc = M("Accommodation");
		$data['name'] = $_POST['name'];
		$data['link'] = $_POST['link'];
		if(!empty($_FILES['photo']['name'])){
			$data['photo'] = $this->_upload("photo",false,300,400,true);
		}
		if($acc->add($data)){
			$this->assign("jumpUrl","__URL__/index");
			$this->success("发布成功！");
		}else{
			$this->error("发布失败！");
		}
	}
	public function edit(){
		if($_GET["id"]){
			$cond["id"] = $_GET["id"];
			$p = M("Accommodation")->where($cond)->select();
			$this->assign("hotel",$p[0]);
			$this->assign("dsp","detail");
			$this->assign("action","edits");
			$this->assign("title","修改");
			$this->display("Public:Accommodation");
		}else{
			$this->assign("jumpUrl","__URL__");
			$this->error("数据不存在！");
		}
	}
	public function edits(){
		$data['id'] = $_POST['id'];
		$data['name'] = $_POST['name'];
		$data['link'] = $_POST['link'];
		if(!empty($_FILES['photo']['name'])){
			$data['photo'] = $this->_upload("photo",false,300,400,true);
		}
		if(M("Accommodation")->save($data))
			$this->success("修改成功！");
		else
			$this->error("修改失败或无修改！");
	}
	public function batch(){
		$this->_batch();
	}
}
?>