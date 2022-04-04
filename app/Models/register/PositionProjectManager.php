<?php

namespace App\Models\Register;
use App\Models\User;

class PositionProjectManager extends PositionAbstract implements Position {

    public function save(User $user, array $data) : User {
        $user->position = 'Project Manager';
        $user->fields = $this->toJson($data);
        return $user;
    }

    public function toJson(array $data) : string {
        return json_encode(array("Metodologie prowadzenia projektów" => $data['projects'] ?? '', "Systemy raportowe" => $data['raports'] ?? '', "Zna scrum" => $data['scrum'] ? 'tak' : 'nie'));
    }

    public function getFields() : string {
        return '
            <label>Metodologie prowadzenia projektów <input type="text" name="projects"></label>
            <label>Systemy raportowe <input type="text" name="raports"></label>
            <label>Zna scrum <input type="checkbox" name="scrum"></label>
        ';
    }

}
