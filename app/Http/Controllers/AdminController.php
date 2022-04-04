<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use App\Models\User;
use App\Models\Register\Builder;

class AdminController extends Controller
{

    public function index(UserRepository $userRepository){
        $users = $userRepository->getAll();
        return view('admin/index', ['users' => $users]);
    }

    public function edit(User $user){
        $user->positionObj = Builder::createName($user->position);
        return view('admin/edit', ['user' => $user]);
    }

    public function doEdit(Request $request, User $user, UserRepository $userRepository){
        $userRepository->edit($user, $request->all());
        return redirect()->back();
    }

    public function delete(User $user, UserRepository $userRepository){
        if($user) $user->delete();
        return redirect()->back();
    }

}
