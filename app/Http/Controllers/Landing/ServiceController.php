<?php

namespace App\Http\Controllers\Landing;


use App\Models\service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
    	$service = DB::table('service')->get();
 
    	// mengirim data pegawai ke view index
    	return view('landing.service',['service' => $service]);
    }
}
