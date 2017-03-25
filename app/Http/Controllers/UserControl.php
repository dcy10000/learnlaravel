<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserControl extends Controller
{
    public function create()
    {
        return view('user.create');
    }
    public function  show($id)
    {
        $user=User::findOrFail($id);
        return view('user.show', compact('user'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [//判断数据的长度等是否合法
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',//unique：user，会在user表里查看是否唯一
            'password' => 'required|confirmed|min:6'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        session()->flash('success', '欢迎，您将在这里开启一段新的旅程~');
        return redirect()->route('user.show', [$user]);
    }
}
