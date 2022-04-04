<?php

namespace App\Models\Register;
use App\Models\User;

class PositionTester extends PositionAbstract implements Position {

    public function save(User $user, array $data) : User {
        $user->position = 'Tester';
        $user->fields = $this->toJson($data);
        return $user;
    }

    public function toJson(array $data) : string {
        return json_encode(array("Systemy testujące" => $data['tests'] ?? '', "Systemy raportowe" => $data['raports'] ?? '', "Zna selenium" => $data['selenium'] ? 'tak' : 'nie'));
    }

    public function getFields() : string {
        return '
            <label>Systemy testujące <input type="text" name="tests"></label>
            <label>Systemy raportowe <input type="text" name="raports"></label>
            <label>Zna selenium <input type="checkbox" name="selenium"></label>
        ';
    }

}
