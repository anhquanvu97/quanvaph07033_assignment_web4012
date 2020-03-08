<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Users\StoreRequest;
use App\Http\Requests\Users\UpdateRequest;
use App\Models\{User,Comment,Post,Category};
use DB;
use Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(5);

        return view('backend.users.index', [
            'users' => $users,
        ]);
    }

    public function create()
    {
        return view('backend.users.create');
    }

    public function store(Request $request)
    {
        // $request = request()->all();
        $data = array_except($request, ['_token']);
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data->all());

        return redirect()->route('users.index');
    }

    public function show(User $user)
    {
        return view('backend.users.show', [
            'userData' => $user,
        ]);
    }

    public function edit(User $user)
    {
        return view('backend.users.edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('users.index');
                        
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index');
    }
}
