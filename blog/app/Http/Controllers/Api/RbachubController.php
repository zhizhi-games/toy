<?php
namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\RbacServices;
use App\Http\Requests\StoreBlogPost;
use Validator;
use Exception;
use App\Traits\TransFormer;


Class RbachubController extends Controller
{	
	use TransFormer;
	
	public function __construct(RbacServices $RbacServices)
	{	
		$this->assignAdminRole = new \App\Http\Requests\AssignAdminRole;
		$this->updateAdmin = new \App\Http\Requests\updateAdmin;
		$this->rbacServices = $RbacServices;
	}

	public function getAdminList(Request $request)
	{	
		$result = $this->rbacServices->adminList(10);

		if (!$result) {
			return $this->TransFormer(-1, '获取失败', $result);
		} 

		return $this->TransFormer(1, '获取成功', $result);
	}

	public function getSingleAdmin($id)
	{	
		$result = $this->rbacServices->singleAdmin($id); 

		if (!$result) {
			return $this->TransFormer(-1, '获取失败', $result);
		} 

		return $this->TransFormer(1, '获取成功', $result);
	}

	public function postAdmin(Request $request)
	{	
		
		$request_data = $request->only(['account', 'password', 'password_confirmation']);

		$validator = Validator($request_data, $this->rbacServices->adminRule(), $this->rbacServices->adminRuleMessage());
		
		if ($validator) {
			return $this->TransFormer(-1, $validator->messages(), '');
		}
		
        unset($request_data['password_confirmation']);
		
		$result = $this->rbacServices->createAdmin($request_data);

		if (!$result) {
			return $this->TransFormer(-1, '', '');
		}

        return $this->TransFormer(1, '', $result);
	}


	public function putAssignRole(Request $request)
	{	
		
		$request_data = $request->only(['id', 'role_id']);

		$validator = Validator($request_data, $this->assignAdminRole->rules(), $this->assignAdminRole->messages());
		
		if ($validator->fails()) {
			return $this->TransFormer(-1, $validator->messages(), '');
		}
		
		$result = $this->rbacServices->assignRole($request_data);

		if (!$result) {
			return $this->TransFormer(-1, '执行失败！', '');
		}

		return $this->TransFormer(1, '执行成功！', $result);
	}

	public function deleteAdmin($id)
	{	
		$result = $this->rbacServices->deleteAdmin($id);
		if (!$result) {
			return $this->TransFormer(-1, '删除失败！', '');
		}

		return $this->TransFormer(1, '删除成功！', '');
	}

	public function putAdmin(Request $request)
	{
		$request_data = $request->only(['account', 'passwordLod', 'password', 'password_confirmation']);
		$validator = Validator($request_data, $this->updateAdmin->rules(), $this->updateAdmin->messages());
		if ($validator->fails()) {
			return $this->TransFormer(-1, $validator->messages(), '');
		}

		$result = $this->rbacServices($request_data);
		if (!$result) {
			return $this->TransFormer(-1, '', '');
		}

		return $this->TransFormer(1, '', '');
	}

	public function postRole(Request $request)
	{	
		
		$result = $this->rbacServices->createRole(['name' => 'juese', 'status' => 1]);
		// \Illuminate\Http\Request
		return $this->TransFormer(1, '', $result);
	} 



}