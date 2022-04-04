<?php

namespace App\Models\Register;
use App\Models\User;

class PositionDeveloper extends PositionAbstract implements Position {

    public function save(User $user, array $data) : User {
        $user->position = 'Developer';
        $user->fields = $this->toJson($data);
        return $user;
    }

    public function toJson(array $data) : string {
        return json_encode(array("Środowiska IDE" => $data['ides'] ?? '', "Języki programowania" => $data['languages'] ?? '', "Zna MYSQL" => $data['mysql'] ? 'tak' : 'nie'));
    }

    public function getFields() : string {
        return '
            <label>Środowiska IDE <input type="text" name="ides"></label>
            <label>Języki programowania <input type="text" name="languages"></label>
            <label>Zna MYSQL <input type="checkbox" name="mysql"></label>
        ';
    }

}
