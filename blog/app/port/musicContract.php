<?php
namespace App\prot;

interface musicContract
{
	// 抓取url
	public function grabUrl();

	// 入库
	public function insertMusic();

	// 获取音乐列表
	public function getMusicList($limit, $page);

	// 获取音乐详情
	public function getMusic($Music_id);

	// 修改音乐
	public function editMusic($Music_id);

	// 删除音乐
	public function deleteMusic($Music_id);

}