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
			$this->assign("type","学术");$this->assign("menu","ScientificCommittee");break;
		case "exe":
			$this->assign("type","执行");$this->assign("menu","ExecutiveCommittee");break;
		case "org":
			$this->assign("type","组织");$this->assign("menu","OrganizingCommittee");break;
		}
		$this->assign("people",$p);
		$this->display("Public:committee");
	}
}
?>