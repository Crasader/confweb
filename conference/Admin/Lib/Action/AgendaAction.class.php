<?php
class AgendaAction extends BaseAction{
	public function index(){
		$this->assign("menu","Agenda");
		$this->isex = $this->file_exists_case("./Public/program.pdf");
		$this->display("Public:agenda");
	}
	public function upload(){
		if($_FILES['program']['error'] == 0)
		{
			if($_FILES['program']['type'] != "application/pdf")
				$this->error("上传文件类型错误！");
			else
			{
				move_uploaded_file($_FILES['program']['tmp_name'],"./Public/program.pdf");
				$this->success("上传成功！");
			}
		}
		else{
			$this->error("上传失败！");
		}
	}
	public function del(){
		unlink("./Public/program.pdf");
		$this->assign("jumpUrl","__URL__/index");
		$this->success("删除成功");
	}
}
?>