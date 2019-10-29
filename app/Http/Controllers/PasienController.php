<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Pasien;

class PasienController extends Controller
{
    public function json()
    {
    	return Datatables::of(pasien::all())->make(true);
    }

    public function index()
    {
    	return view('list_pasien');
    }
}
