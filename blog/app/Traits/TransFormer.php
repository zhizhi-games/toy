<?php
namespace App\TraitsFolder;

Trait TransFormer
{
    public function transFormer($code, $msg, $data)
    {   
    	if (is_array($msg)) {
    		$msg = array_values($msg->Toarray())[0];
    	}
        return [
            'code'=> $code,
            'msg'=> $msg,
            'data'=> $data,
        ];
    }


    // public function createSn()
    // {
    //     return date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
    // }

}