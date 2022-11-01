<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){return User::all();}
    public function store(Request $request){return User::create($request->all());}
    public function show(User $user){return $user;}
    public function update(Request $request, User $user){return $user->update($request->all());}
    public function destroy(User $user){return $user->delete();}
}
