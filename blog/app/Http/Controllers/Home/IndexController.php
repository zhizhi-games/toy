<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use App\Repository\Rbac;

class IndexController extends Controller
{
    //
    public function Home(Request $Request, Rbac $rbac)
    {	

        
        // echo 1;die;
        $rbac->getAdminRole(1);
die;
        $arr = [
            'name' => '超级管理员2',
            'contro_id' => [
                1, 2, 3 
            ],
        ];
        $rbac->insertRole($arr);

        die;



















   //      die;
   //  	// $ip=mt_rand(11, 191).".".mt_rand(0, 240).".".mt_rand(1, 240).".".mt_rand(1, 240);   //随机ip
   //  	$ip = $Request->ip();
		
   //  	// 获取该用户是否存在
   //  	$UserInfo = User::where('ip', $ip)->first();

        
   //  	if (!$UserInfo) {
			// $UserInfo = [
			// 	'name' => '宗介',
			// 	'avatar' => 'https://gss2.bdstatic.com/9fo3dSag_xI4khGkpoWK1HF6hhy/baike/w%3D268%3Bg%3D0/sign=95c3277a8026cffc692ab8b4813a2dad/4ec2d5628535e5ddc597f43c74c6a7efcf1b629d.jpg',
			// 	'ip' => $ip
			// ];  

			// User::create($UserInfo);    		
   //  	}

    	
   //  	return view('Home.Home', $UserInfo);
    }


    





    


}
