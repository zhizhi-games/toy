<?php
namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Nav;
use Validator;
use Illuminate\Support\Facades\Redis;
use App\port\navContract;

class NavController extends Controller
{	
	public function __construct()
	{      
        
		$this->NavModel = new Nav;
	}

    // 获取导航列表
    public function getNavInfo()
    {
    	$navInfo = $this->NavModel->getNavInfo();

    	return $navInfo;
    }

    // 添加导航信息
    public function addNavInfo(Request $request)
    {	

    	$request_data = $request->only(['name', 'route', 'order', 'status']);
    	
        $validator = Validator::make($request_data, [
            'name' => 'required|unique:nav',
            'route' => 'required',
            'order' => 'required',
            'status' => 'required'
        ]);

        if ($validator->fails()) {
        	dd($validator->errors());die;
        }

    	$request = $this->NavModel->addNavInfo($request_data);

    	if ($request) {
    		echo 1;
    	} 

    	echo 2;
    }


    // 修改
    public function exitNavInfo(Request $request)
    {
    	$request_data = $request->only(['id', 'name', 'route', 'order', 'status']);
    	
        $validator = Validator::make($request_data, [
        	'id' => 'required|exists:nav',
            'name' => 'required|unique:nav',
            'route' => 'required',
            'order' => 'required',
            'status' => 'required'
        ]);

        if ($validator->fails()) {
        	dd($validator->errors());die;
        }

    	$request = $this->NavModel->exitNavInfo($request_data);

    	if ($request) {
    		echo 1;
    	} 

    	echo 2;
    }


    // 删除
    public function deleteNavInfo(Request $request)
    {
    	$request_data = $request->only(['id']);
        $validator = Validator::make($request_data, [
        	'id' => 'required|exists:nav'
        ]);
        if ($validator->fails()) {
        	dd($validator->errors());die;
        }

    	$request = $this->NavModel->deleteNavInfo($request_data);

    	if ($request) {
    		echo 1;
    	} 

    	echo 2;
    }













}
