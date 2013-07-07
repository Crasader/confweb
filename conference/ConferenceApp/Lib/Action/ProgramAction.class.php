<?php
class ProgramAction extends BaseAction{
	public function index(){
		$this->assign("menu","Program");
		$this->isex = $this->file_exists_case("./public/program.pdf");
		$this->display("Public:program");
	}
}
?>