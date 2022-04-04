<?php

namespace App\Models\Register;

use App\Models\Register\{PositionTester,PositionDeveloper,PositionProjectManager};

class Builder {

    public static function create(int $type) : Position {
        switch ($type) {
          case 1:
              return new PositionTester();
          case 2:
              return new PositionDeveloper();
          case 3:
              return new PositionProjectManager();
        }
    }

    public static function createName(string $name) : Position {
        switch ($name) {
          case 'Tester':
              return new PositionTester();
          case 'Developer':
              return new PositionDeveloper();
          case 'Project Manager':
              return new PositionProjectManager();
        }
    }

}
