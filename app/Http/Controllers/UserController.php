<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UserRequest;
use App\Models\Point;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('back.users', ['users' => User::with('roles')->get()]);
    }

    public function newUser()
    {
        return view('back.newUser');
    }

    public function insertUser(UserRequest $request)
    {
        $data = $request->all();
        $user = User::create($data);
        if ($data['role'] == 'Point') {
            $user->point()->save(Point::create($data));
            $user->assignRole('Point');
        } else {
            $user->assignRole('Administrator');
        }
        return view('back.users', ['users' => User::with('roles')->get()]);
    }

    public function editUser($id)
    {
        Session()->flash('userId', $id);
        return view('back.editUser', ['user' => User::find($id)->load('roles')]);
    }

    public function updateUser(UserEditRequest $request)
    {
        $id = session('userId');
        $inputs = $request->all();
        $user = User::findOrFail($id);
        $user->fill($inputs)->save();
        $user->point()->save($user->point->fill($inputs));
        $user->syncRoles(($inputs['role'] == 'Point') ? 'Point' : 'Administrator');
        return back()->with(['success' => '¡Cliente Actualizado!']);
    }
    public function deleteUser(Request $request){
        $user = User::findOrFail($request->input('id'));
        $user->delete();
        return redirect('/admin/usuarios');
    }
}
