<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DataTables;
use App\Exports\UserExport;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
	public function json(){
		return Datatables::of(User::all())->make(true);
	}
	
	public function index(){
		return view('list_users');
	}

	public function export_excel()
	{
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=Data_User.xls");
		
		$user  = User::all();
		return view("export",["users"=>$user]);
	}	
}
