<?php
class CommitteeAction extends BaseAction{
	public function index(){
		if(!isset($_GET["type"]))
			$type = "sci";
		else
			$type = $_GET["type"];
		$cond["type"] = $type;
		$p = M("committee")->where($cond)->order("rank")->select();
		switch($type)
		{
		case "sci":
			$this->assign("type","学术");break;
		case "exe":
			$this->assign("type","执行");break;
		case "org":
			$this->assign("type","组织");break;
		}
		$this->assign("people",$p);
		$this->display("Public:committee");
	}
}
?>