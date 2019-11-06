<?php
namespace App\port;

interface navContract
{	
	# 添加导航操作
	public function addNavInfo($request);
	# 获取导航列表
	public function getNavInfo();
	# 修改导航列表
	public function exitNavInfo($request);
	# 删除导航列表
	public function deleteNavInfo($request);
}