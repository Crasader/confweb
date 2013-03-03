<?php
class InvitedSpeakerAction extends BaseAction{
	public function index(){
		$p = M("invitedspeaker")->where($cond)->order("rank")->select();
		$this->assign("people",$p);
		$this->assign("menu","InvitedSpeaker");
		$this->display("Public:invitedspeaker");
	}
}
?>