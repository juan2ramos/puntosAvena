<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UserRequest;
use App\Models\Point;
use App\Models\Product;
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
        return view('back.newUser', ['products' => Product::pluck('name', 'id')]);
    }

    public function insertUser(UserRequest $request)
    {
        $data = $request->all();
        $user = User::create($data);
        if ($data['role'] == 'Point') {
            $point = Point::create($data);
            $user->point()->save($point);
            foreach ($data['product'] as $k => $p){
                $data['product'][$k]['price'] = str_replace(',','',str_replace('$','', $data['product'][$k]['price']));
                unset($data['product'][$k]['id']);
            }
            $point->productsAvailable()->attach($data['product']);
            $user->assignRole('Point');

        } else {
            $user->assignRole($data['role']);
        }
        return view('back.users', ['users' => User::with('roles')->get()]);
    }

    public function editUser($id)
    {
        Session()->flash('userId', $id);

        return view('back.editUser',
            [
                'user' => User::with(['roles','point.productsAvailable'])->find($id),
                'products' => Product::with('pointsAvailable')->get()
            ]
        );
    }

    public function updateUser(UserEditRequest $request)
    {
        $id = session('userId');
        $inputs = $request->all();
        $user = User::findOrFail($id);
        if(!$inputs['password'])
            unset($inputs['password']);
        $user->fill($inputs)->save();
        if ($inputs['role'] == 'Point') {

            $point = ($user->point)?$user->point:new Point();
            $point->fill($inputs);
            $user->point()->save($point);
            foreach ($inputs['product'] as $k => $p){
                $inputs['product'][$k]['price'] = str_replace(',','',str_replace('$','', $inputs['product'][$k]['price']));
                unset($inputs['product'][$k]['id']);
            }
            $point->productsAvailable()->sync($inputs['product']);
        }
        $user->syncRoles($inputs['role']);
        return back()->with(['success' => '¡Cliente Actualizado!']);
    }

    public function deleteUser(Request $request)
    {
        $user = User::findOrFail($request->input('id'));
        $user->delete();
        return redirect('/admin/usuarios');
    }
}
