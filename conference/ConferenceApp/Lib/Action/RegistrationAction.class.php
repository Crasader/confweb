<?php
class RegistrationAction extends BaseAction{
	public function index(){
		$this->assign("res","");
		$this->display("Public:registration");
	}
	public function dealreg(){
			$data = $_POST;
			$data["arrivaldate"] = $_POST['arrmonth']."-".$_POST['arrdate'];
			$data["departuredate"] = $_POST['depmonth']."-".$_POST['depdate'];
			print_r($data);
			$reg = M("registrant");
			if($reg->add($data))
				$this->display("Public:success");
			else
				$this->display("Public:fail");
	}
}
?>