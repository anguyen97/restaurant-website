<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class AdminController extends Controller
{
	public function getIndex()
	{
		$admin_info = Auth::guard('admin')->user();
		return view('admin.index', [
			'admin_info' => $admin_info,
			'category' => DB::table('categories')->count(),
			'booking' => DB::table('booking')->count(),
			'user' => DB::table('users')->count(),
			'product' => DB::table('products')->count(),
		]);
	}

}
