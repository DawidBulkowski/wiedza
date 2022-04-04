<?php

namespace App\Models\Register;

abstract class PositionAbstract
{
    public function printField(string $fields) : string {
        $data = json_decode($fields);
        $data_string = '';
        foreach ($data as $key => $value) {
            $data_string .= $key.": ".$value."<br/>";
        }
        return $data_string;
    }
}
