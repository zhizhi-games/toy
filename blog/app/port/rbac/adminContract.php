<?php
namespace App\port\rbac;

interface adminContract
{
	// 添加管理员 [name, passwrod, role]
	public function addAdmin($request);

	// 修改管理员角色
	public function editAdminRole($adminId, $role);

	// 获取管理员列表
	public function getAdminList($limit, $page);

	// 获取管理员
	public function getAdmin($adminId);

	// 删除管理员
	public function deleteAdmin($adminId);

	// 验证管理员 [name, password, code]
	public function chekAdmin($request);  

}