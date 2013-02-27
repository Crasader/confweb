<?php
class RegistrationAction extends BaseAction{
	public function index(){
		$this->display("Public:registration");
	}
	public function dealreg(){
			$data = $_POST;
			$data["arrivaldate"] = $_POST['arrmonth']."-".$_POST['arrdate'];
			$data["departuredate"] = $_POST['depmonth']."-".$_POST['depdate'];
			$reg = M("registrant");
			if($reg->add($data))
			{
				$this->success("зЂВсГЩЙІ");
			}
			else
			{
				$this->error("зЂВсЪЇАм");
			}
	}
}
?>