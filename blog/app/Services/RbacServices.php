<?php
namespace App\Services;

use App\Repository\Rbac;

Class RbacServices
{	


	public function __construct(Rbac $rbacPrository)
	{	
		// $this->adminList(1);
		
		$this->rbacPrository = $rbacPrository;
	}

	public function adminList($size = 10)
	{
		$simple = $this->rbacPrository->adminGroup($size);
		
		if (!$simple->count()) {
			return false;
		}

		$arr = [];
		foreach ($simple as $value) {
			$val = $value->Toarray();
			$val['role'] = $value->getAdminRole->where('status', 1)->Toarray();
			$arr[] = $val;
		}

		return $arr;
	}

	public function singleAdmin($id)
	{
		$admins = $this->rbacPrository->singleAdmin($id);
		
		if (!$admins) {
			return false;
		}
		$admins->getAdminRole->where('status', 1);
		return $admins; 
	}

	public function createAdmin($data)
	{
		return $this->rbacPrository->createAdmin($data);
	}

	public function assignRole($data)
	{
		return $this->rbacPrository->assignRole($data['id'], $data['role_id']);
	}

	public function deleteAdmin($id)
	{
		return $this->rbacPrository->deleteAdmin($id);
	}
		
	public function updateAdmin($data)
	{	
		return $this->rbacPrository->updateAdmin($data);
	}

	public function adminRule()
	{
        return [
            'account' => 'required|unique:admin',
            'password' => 'required|confirmed:password_confirmation',
            'password_confirmation' => 'required',
        ];
	}

	public function adminRuleMessage()
	{
		return [
			'account.required' => '请输入账户名称！',
			'account.unique' => '该账户已存在！',
			'password.required' => '请输入密码！',
			'password_confirmation.required' => '请确认密码!',
			'password.confirmed'  => '密码输入不一致！'
		];
	}

}