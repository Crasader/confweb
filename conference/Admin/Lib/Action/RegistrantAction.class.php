<?php
class RegistrantAction extends BaseAction{
	public function index(){
		$Reg = M("registrant");
		import("ORG.Util.Page");
		$count = $Reg->count();
		$Page = new Page($count,20);
		$show = $Page->show();
		$user = $Reg->order('id asc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('pages',$show);
		$this->assign("user",$user);
		$this->assign(menu,"Registrant");
		$this->display("Public:registrant");
	}
	public function detail(){
		if($_GET["id"]){
			$cond["id"] = $_GET["id"];
			$p = M("registrant")->where($cond)->select();
			$this->assign("p",$p[0]);
			$this->assign("dsp","detail");
			$this->display("Public:registrant");
		}else{
			$this->assign("jumpUrl","__URL__");
			$this->error("数据不存在！");
		}
	}
	public function batch(){
		$this->_batch();
	}
}
?>