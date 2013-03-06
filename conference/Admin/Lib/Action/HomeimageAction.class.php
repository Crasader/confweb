<?php
class HomeimageAction extends BaseAction{
	public function index(){
		$this->assign("menu","Homeimage");
		$this->display("Public:homeimage");
	}
	public function upload(){
		if($_FILES['image']['error'] == 0)
		{
			if($_FILES['image']['type'] != "image/jpeg")
				$this->error("上传文件类型错误！");
			else
			{
				move_uploaded_file($_FILES['image']['tmp_name'],"./Public/logo.jpg");
				$this->success("上传成功！");
			}
		}
		else{
			$this->error("上传失败！");
		}
	}
}
?>