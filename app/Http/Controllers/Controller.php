<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

use App\Method;
use App\Role;
use App\Option;
class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function rute($id='1')
	{
		/*
		if($id != 1){
			try {
				$id = Crypt::decrypt($id);
			} catch (DecryptException $e) {
				$id = 1; 
			}
		}
		*/
		$role = Role::where('id',$id)->first();
		$method = [];
		if(isset($role)){
			$method = Method::where('id',$role->id_metode)->first();
		}else{
			$role = Role::where('id',1)->first();
			$method = Method::where('id',$role->id_metode)->first();
		}
		$option = Option::where('id_role_now',$role->id)->get();
		/*
		$role->if_yes = Crypt::encrypt($role->if_yes);
		$role->if_no = Crypt::encrypt($role->if_no);
		*/
		$data = array(
			'id' => $id,
			'role' => $role,
			'method' => $method,
			'option' => $option
		);

		return view('statistik.opsi')->with($data);
	}
	public function about(){
		return view('statistik.about');
	}
}
