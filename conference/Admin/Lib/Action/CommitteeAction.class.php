<?php
class CommitteeAction extends BaseAction{
	public function index(){
		$Committee = M("Committee");
		import("ORG.Util.Page");
		$map["type"] = $_GET["type"];
		$count = $Committee->where($map)->count();
		$Page = new Page($count,20);
		$show = $Page->show();
		$user = $Committee->where($map)->order('rank asc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('pages',$show);
		$this->assign("type",$_GET["type"]);
		switch($_GET["type"])
		{
			case "sci":
				$this->assign("typename","学术");break;
			case "exe":
				$this->assign("typename","执行");break;
			case "org":
				$this->assign("typename","组织");break;
		}
		$this->assign("menu","Committee");
		$this->assign("user",$user);
		$this->display("Public:committee");
	}
	public function add(){
		switch($_GET["type"])
		{
			case "sci":
				$this->assign("typename","学术");break;
			case "exe":
				$this->assign("typename","执行");break;
			case "org":
				$this->assign("typename","组织");break;
		}
		$this->assign("type",$_GET["type"]);
		$this->assign(title,"添加");
		$this->assign(action,"adds");
		$this->assign("dsp","detail");
		$this->assign("menu","Committee");
		$this->display("Public:committee");
	}
	public function adds(){
		$Committee = M("committee");
		$data["englishname"] = $_POST["englishname"];
		$data["introduction"] = $_POST["introduction"];
		$data["rank"] = $_POST["rank"];
		$data["type"] = $_POST["type"];
		if($Committee->add($data)){
			$this->assign("jumpUrl","__URL__/index/type/".$_POST["type"]);
			$this->success("发布成功！");
		}else{
			$this->error("发布失败！");
		}
	}
	public function edit(){
		if($_GET["id"]){
			$cond["id"] = $_GET["id"];
			$p = M("committee")->where($cond)->select();
			$this->assign("type",$p[0]["type"]);
			switch($p[0]["type"])
			{
				case "sci":
					$this->assign("typename","学术");break;
				case "exe":
					$this->assign("typename","执行");break;
				case "org":
					$this->assign("typename","组织");break;
			}
			$this->assign("person",$p[0]);
			$this->assign("dsp","detail");
			$this->assign("action","edits");
			$this->assign("title","修改");
			$this->assign("menu","Committee");
			$this->display("Public:committee");
		}else{
			$this->assign("jumpUrl","__URL__");
			$this->error("数据不存在！");
		}
	}
	public function edits(){
		if(M("committee")->save($_POST))
			$this->success("修改成功！");
		else
			$this->error("修改失败或无修改！");
	}
	public function batch(){
		$this->_batch();
	}
}
?>