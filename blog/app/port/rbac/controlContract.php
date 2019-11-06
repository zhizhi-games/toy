<?php
namespace App\port\rbac;

interface controlContract
{
	// 添加权限 [route]
	public function addControl($request);

	// 获取权限列表
	public function getControlList($limit, $page);

	// 获取权限
	public function getControDetails($Control_id);

	// 修改权限 [id, route];
	public function exitControl($request);

	// 删除权限
	public function deleteContro($Control_id); 

}