<?php
namespace App\port\rbac;

interface roleContract
{
	// 添加角色
	public function addRole($role_id, $Control);

	// 修改角色的权限
	public function exitRoleControl($role_id, $Control);

	// 获取角色列表
	public function gerRoleList($limit, $page);

	// 获取角色
	public function getRoleDetails($role_id);

	// 删除角色
	public function deleteRole($role_id); 
	
}