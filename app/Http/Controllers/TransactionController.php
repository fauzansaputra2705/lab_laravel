<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TransactionController extends Controller
{
    public function __invoke()
    {
    	DB::transaction(function(){
    		$ammount = 20;
    		$sender_id = 1;
    		$receiver_id = 2;

    		DB::table('accounts')->where('user_id',$sender_id)->decrement('balance',$ammount);
    		DB::table('accounts')->where('user_id',$receiver_id)->increment('balance',$ammount);
    	});
    }
}
