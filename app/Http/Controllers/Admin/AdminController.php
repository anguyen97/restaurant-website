<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Admin;
use App\Post;
use Auth;

class AdminController extends Controller
{
	/**
	 * [adminIndex display view of list admin]
	 * @return [type] [description]
	 */
	public function adminIndex()
	{
		// $admin_infor = Auth::guard('admin')->user();
		// dd($admin_infor);
		//return view('admin.admins.index');
		$admin = Admin::all();
 		return view('admin.admins.index');
	}

	/**
	 * [datatablesListAdmin get list admin and display into the table]
	 * @return [type] [description]
	 */
	public function getListUserDatatables()
	{
		$list = Admin::all();
		
		return Datatables::of($list)
		->addColumn('action', function ($admin) {

			 return '<a title="Detail" class="btn btn-info btn-sm glyphicon glyphicon-eye-open btnShow" data-admin-id='.$admin["id"].'" id="row-'.$admin["id"].'"></a>&nbsp;&nbsp;<a title="Delete" class="btn btn-danger btn-sm glyphicon glyphicon-trash btnDelete" data-admin-id='.$admin["id"].'></a>';
		})
		->setRowId('id')
        ->make(true);
	}

	

	/**
	 * add new admin to db
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function adminUserStore(Request $request)
	{
		$data = $request->all();

		$date = date('YmdHis', time());

		if ($request->hasFile('thumbnail')) {

            $extension = '.'.$data['thumbnail']->getClientOriginalExtension();

            $file_name = md5($request->name).'_'. $date . $extension;

            $data['thumbnail']->storeAs('public/admins',$file_name);

            $data['avatar'] = 'storage/admins/'.$file_name;

        }else {
            $data['avatar']='storage/admins/userDefault.png';
        }

        $data['password']=md5($data['password']);
		return Admin::create($data);
		// if ($admins!=null) {			
		// 	return $admins;
		// } else {
		// 	return response()->json(['done']);
		// }
	}

	// public function adminUserStore(Request $request)
	// {
	// 	$data = $request->all();
	// 	$admins =  Admin::create($data);
	// 	if ($admins!=null) {			
	// 		return $admins;
	// 	} else {
	// 		return response()->json(['done']);
	// 	}
	// }

	/**
	 * delete admin by ids
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function adminDelete($id)
	{
		Admin::find($id)->delete();
		return response()->json(['done']);
	}


	/**
	 * get admin information and display
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function adminShow($id)
	{
		return Admin::find($id);
	}

}
