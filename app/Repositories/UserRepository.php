<?php


namespace App\Repositories;

use App\Models\Register\Builder;
use App\Models\User;

class UserRepository extends BaseRepository
{
    public function __construct(User $model){
        $this->model = $model;
    }

    public function all() {
        $this->model->get();
    }

    public function add($data, User $user = null) {
        $position = Builder::create($data['position']);
        $user = new User();
        $user->name = $data['name'];
        $user->surname = $data['surname'];
        $user->email = $data['email'];
        $user->description = $data['description'];
        $user = $position->save($user, $data);
        $user->save();
        return $user;
    }

    public function edit(User $user, $data) {
        $user->name = $data['name'];
        $user->surname = $data['surname'];
        $user->email = $data['email'];
        $user->description = $data['description'];
        $user->save();
        return $user;
    }

}
