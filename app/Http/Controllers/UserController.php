<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(User $User){
        $dataUser = $User->get();
    
        return view('viewUser', compact('dataUser'));
    }

    public function index()
    {
        $dataUser = user::all();
        return view('user.index', compact('dataUser'));
    }

    public function create()
    {
        return view('dashboard.sosmed.create');
    }

    public function store(UserRequest $request)
    {
  
        User::create($request->all());
        return redirect()->route('sosmed.index')->with('success','Sosmed berhasil ditambahkan.');
    }

    public function edit(User $user)
    {
        return view('dashboard.sosmed.edit',compact('sosmed'));
    }

    public function update(UserRequest $request, User $user)
    {
    
  
        $user->update($request->all());
  
        return redirect()->route('sosmed.index')->with('success','User berhasil di edit.');
    }

    public function destroy(User $user)
    {
        $sosmed->delete();
        return redirect()->route('sosmed.index')->with('success','User berhasil dihapus.');
    }


public function saveUser(){}
public function deleteUser(){}
public function updateUser(){}
}