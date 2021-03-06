<?php
class BaseAction extends Action{
	function _initialize(){
		if(!isset($_SESSION['admin'])){
			//重定向
			redirect(PHP_FILE .C('USER_AUTH_GATEWAY'));
		}
	}
	public function file_exists_case($filename) {
		if (is_file($filename)) {
			if (strstr(PHP_OS, 'WIN')) {
				if (basename(realpath($filename)) != basename($filename))
					return 0;
			}
			return 1;
		}
		return 0;
	}
	public function _batch($modulename){
		$checkboxid = $_REQUEST['id'];
		if(!$checkboxid) $this->error("请选择记录！");
		$act = $_REQUEST['act'];
		if(!$act) $this->error("请选择操作类型！");
		$allowact = array('remove','delete');
		if(!in_array($act,$allowact)) $this->error('未知操作');
		$id = is_array($checkboxid)?implode(',',$checkboxid):$checkboxid;
		if(!$id) $this->error('ID丢失');
		$tableId = array('Committee' => 'id','committee'=>'id','Invitedspeaker' => 'id','invitedspeaker' => 'id','InvitedSpeaker'=>'id','Venue' => 'id','venue' => 'id','Accommodation'=>'id','accommodation'=>'id','Registrant'=>'id','registrant' =>'id');
		isset($modulename) ? $modulename = $modulename : $modulename = MODULE_NAME;
		switch($act){
			case "delete":
				$sql = 'DELETE FROM __TABLE__ where '.$tableId[$modulename].' IN ('.$id.')';
				$Result = M($modulename)->execute('DELETE FROM __TABLE__ where '.$tableId[$modulename].' IN ('.$id.')');
				$msg = "删除成功！";
				break;
			default: $this->error(L('_OPERATION_WRONG_')); break; 
		}
		if($Result === false){
			$this->error(L('_OPERATION_FAIL_'));
		}else{
	        $this->success($msg);
		}
	}
	/**
	 +------------------------------------------------------------------------------
	 * 公共 文件上传方法
	 +------------------------------------------------------------------------------
	 * $path    string  上传路径
	 * $maxsize int     上传文件最大值
	 * $thumb   boolean 是否生成缩略图
	 * $width   int     缩略图最大宽度
	 * $height  int     缩略图最大高度
	 * $autosub boolean 是否使用子目录保存文件
	 +------------------------------------------------------------------------------
 	*/
	public function _upload($path,$thumb = false,$width,$height,$autosub = false,$maxsize){
        import("ORG.Net.UploadFile"); 
        $upload = new UploadFile();  
        isset($maxsize) ? $upload->maxSize = $maxsize : $upload->maxSize = 5048576; //1M
		isset($path) ? $upload->savePath = $savepath = "./Attachments/".$path."/" : $upload->savePath = "./Attachments/Others/";
		if(!is_dir($savepath)) @mk_dir($savepath);
        $upload->allowExts = explode(',','gif,png,jpg,jpeg,pdf,doc,docx'); 
		if($thumb){
			$upload->thumb = true; 
			$upload->thumbPrefix = '';
			$upload->thumbSuffix = '_thumb';
			isset($wideh) ? $upload->thumbMaxWidth = $width : $upload->thumbMaxWidth = "300"; 
			isset($height) ? $upload->thumbMaxHeight = $height : $upload->thumbMaxHeight = "400"; 
		}
    	if($autosub){
			$upload->autoSub = true;
			$upload->subType = 'date';
        	$upload->saveRule = time; 
			$upload->dateFormat = 'Y/m/d'; 	
		}
        if(!$upload->upload()){ 
           	$this->error($upload->getErrorMsg()); 
        }else{ 
			$imginfo = $upload->getUploadFileInfo();
			$imginfo = $imginfo[0]['savename'];
        }
		return $imginfo;
    }
	
	// 上传多个文件
	public function _uploadmul($path,$thumb = false,$width,$height,$autosub = false,$maxsize){
        import("ORG.Net.UploadFile"); 
        $upload = new UploadFile();  
        isset($maxsize) ? $upload->maxSize = $maxsize : $upload->maxSize = 5048576; //1M
		isset($path) ? $upload->savePath = $savepath = "./Attachments/".$path."/" : $upload->savePath = "./Attachments/Others/";
		if(!is_dir($savepath)) @mk_dir($savepath);
        $upload->allowExts = explode(',','gif,png,jpg,jpeg,pdf,doc,docx'); 
		if($thumb){
			$upload->thumb = true; 
			$upload->thumbPrefix = '';
			$upload->thumbSuffix = '_thumb';
			isset($wideh) ? $upload->thumbMaxWidth = $width : $upload->thumbMaxWidth = "300"; 
			isset($height) ? $upload->thumbMaxHeight = $height : $upload->thumbMaxHeight = "400"; 
		}
    	if($autosub){
			$upload->autoSub = true;
			$upload->subType = 'date';
        	$upload->saveRule = time; 
			$upload->dateFormat = 'Y/m/d'; 	
		}
        if(!$upload->upload()){ 
           	$this->error($upload->getErrorMsg()); 
        }else{ 
			$imginfo = $upload->getUploadFileInfo();
        }
		return $imginfo;
    }
}
?>
