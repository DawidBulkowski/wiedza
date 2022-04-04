<?php

namespace App\Models\Register;
use App\Models\User;

interface Position {
    public function save(User $user,  array $data) : User;
    public function toJson(array $data) : string;
    public function getFields() : string;
}
