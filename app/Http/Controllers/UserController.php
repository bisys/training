<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\Create_user as Request_User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user.index', compact('users'));
    }

    public function create()
    {
        $users = User::all();

        return view('user.create', compact('users'));
    }

    public function store(Request_User $request)
    {
        
        $validate = $request->validated();

        $user = User::find(Auth::user()->id);
        $extension = $request->file('image')->getClientOriginalExtension();
        $imageName = $user->name.'-'.now()->timestamp.'.'.$extension;

        // $file = $request->file('file');
        // $fileName = time() . '_' . $file->getClientOriginalName();
        // $filePath = $file->storeAs('uploads', $fileName);

        User::create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'password' => Hash::make($validate['password']),
            'image' => $request->file('image')->storeAs('image', $imageName)
        ]);

        // $data = new User;
        // $data->name = $request->name;
        // $data->email = $request->email;
        // $data->password = Hash::make($request->password);
        // $data->image = $request->file('image')->storeAs('image', $imageName);
        // $data->save();


        return redirect()->route('user');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit', compact('user'));
    }

    public function update(Request_user $request, $id)
    {
        $value = $request->validated();

        $user = User::find(Auth::user()->id);
        $extension = $request->file('image')->getClientOriginalExtension();
        $imageName = $user->name.'-'.now()->timestamp.'.'.$extension;
        
        User::find($id)->update([
            'name' => $value['name'],
            'email' => $value['email'],
            'password' => Hash::make($value['password']),
            'image' => $request->file('image')->storeAs('image', $imageName)
        ]);

        return redirect()->route('user');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user');
    }
}
