<?php
namespace App\port;

interface commetContract
{
	// 获取文章的评论
	public function getCommet($Article_id);
	
	// 获取评论和回复
	public function getCommetDetails($Commet_id);

	// 进行评论
	public function putCommet($uid, $Article_id, $content, $Commet_id = 0);

	// 获取用户的评论
	public function getUserCommet($uid);

 





}