<?php

namespace App\Http\Controllers;
use App\User;

class UserController extends Controller {
	function index(){
		$data['list_user'] = User::all();
		return view('user.index', $data);
	}
	function create(){
		return view('user.create');
	}
	function store(){
		$user = new User;
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		$user->password = bcrypt(request('password'));
		$user->save();
		
		return redirect('user')->with('success', 'Data Berhasil di Tambahkan');
	}
	function show(user $user){
		$data['user'] = $user;
		return view('user.show', $data);
	}
	function edit(User $user){
		$data['user'] = $user;
		return view('user.edit', $data);
	}
	function update(User $user){
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		if (request('password')) $user->password = bcrypt(request('password'));
		$user->save();
		
		return redirect('user')->with('success', 'Data Berhasil di Edit');
	}
	function destroy(User $user){
		$user->delete();

		return redirect('user')->with('danger', 'Data Berhasil di Hapus');

	}
}