<?php

namespace App\Http\Controllers\Back\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\Back\Admin\AdminStore;
use App\Http\Controllers\Controller;
use App\Models\Auth\User;

class AdminController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
		$users = User::orderBy('id', 'desc')->get();
		return view('back.pages.admin.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
		return view('back.pages.admin.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(AdminStore $request)
	{
		//
		$user = new User;
		$user->name = $request->get('name');
		$user->email = $request->get('email');
		$user->password = bcrypt($request->get('password'));
		$user->save();

		return redirect()->route('admin.kelola-admin.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
		$user = User::find(decrypt($id));
		return view('back.pages.admin.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
		$user = User::find(decrypt($id));
		return view('back.pages.admin.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(AdminStore $request, $id)
	{
		//
		$user = User::find(decrypt($id));
		$user->name = $request->get('name');
		$user->email = $request->get('email');
		$user->password = bcrypt($request->get('password'));
		$user->update();

		return redirect()->route('admin.kelola-admin.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
		$user = User::find(decrypt($id))->delete();

		$users = User::orderBy('id', 'desc')->get();
		return view('back.pages.admin._user-card', compact('users'));
	}
}
