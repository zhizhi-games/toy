<?php
namespace App\Repository;

use Illuminate\Support\Facades\DB;
use App\Model\Role;
use App\Model\Contro;
use App\Model\Admin;
use App\Model\Admin_Role;
use App\Model\Role_Contro;




Class Rbac
{
	public function __construct(
		Role $role, 
		Contro $contro, 
		Admin $admin, 
		Admin_Role $admin_role, 
		Role_Contro $Role_Contro )
	{		
		$this->role = $role;
		$this->contro = $contro;
		$this->admin = $admin;
		$this->admin_role = $admin_role;
		$this->role_contro = $Role_Contro;
	}
	
	public function getAdminModel()
	{
		return $this->admin;
	}


	// [account, password, create_at, login_at]
	public function createAdmin($request)
	{
		return $this->admin->create($request);
	}

	// id
	public function singleAdmin($id)
	{
		return $this->admin->find($id);
	}

	public function adminGroup($size)
	{	
		return $this->admin->simplePaginate($size);
	}


	// admin_id, role_id [1,2,3] 
	public function assignRole(int $id, array $role_id)
	{	
		$find = $this->admin->find($id);
		if (!$find) {
			return false;
		}

		return $find->getAdminRole()->sync($role_id);
	}

	// id
	public function deleteAdmin($id)
	{	
		DB::beginTransaction();

		$find = $this->admin->find($id);
		if (!$find) {
			return false;
		}

		try {
			
			$find->getAdminRole()->detach();
			$find->delete();
			
			DB::commit();	
		} catch (Exception $e) {
			
			DB::rollback();
			return false;
		}


		return true;
	}

	public function updateAdmin($data)
	{
		$this->admin->whereRaw('account = ? and password = ?', array($data['account'], $data['passwordLod']));
		$find = $this->admin->find();
		if (!$find) {
			return false;
		}
	
		$this->admin->password = $data['passwrod'];
		
		return $this->admin->save();
	}

	// name status id
	public function createRole($request)
	{	
		
		return $this->role->create($request);	
	}

	// 

	// 
	public function assignControl()
	{

	}

	// // 
	public function getAdminRole($admin_id)
	{	
																															
		// 一对一    有一个 hasOne      属于 belongsTo

		// 一对多    有很多 hasMany     属于 belongsTo             
		
		// 多对多    属于很多 belongsMany      

		// 远程一对一

		// attach   关联添加

		// detach   关联删除

		// sync     关联修改 || 关联添加

		// toggle   关联删除 || 关联添加



		// $this->amdin->







		echo 1;


		// return $this->role->where('id', $role_id)->get();
		// $data = $this->role->where('id', 1)->get();
		// $arr = [];
		// foreach ($data as $v) {
		// 	$arr[] = [
		// 		'user' => $v->Toarray(),
		// 		'contro' => $v->roleContro->toarray()
		// 	];
		// }
	

		// dd($arr);
	}

	// // id name contro_id:1,2,3
	// public function exitRole($request)
	// {
	// 	$this->role->save($request);
	// }

	// // 
	// public function delRole($role_id)
	// {
	// 	$this->role->delete($role_id);
	// }

}

