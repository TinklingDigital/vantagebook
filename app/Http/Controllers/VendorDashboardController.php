<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
class VendorDashboardController extends Controller
{
    public function __construct(){
		$this->middleware('auth:vendor');
	}
	public function showDashboard(){
		return view('vendoradmin.dashboard')->with('vendor',Auth::guard('vendor')->user());
	}}
