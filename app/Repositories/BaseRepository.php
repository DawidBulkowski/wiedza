<?php
namespace App\Repositories;

use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements RepositoryInterface {
    protected $model;

    public function getAll($columns = ['*']) {
        return $this->model->get($columns);
    }

    public function create(array $data) {
        return $this->model->create($data);
    }

    public function update(array $data, $id) {
        return $this->model->where('id', '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->model->destroy($id);
    }

    public function find($id, $columns = ['*']) {
        return $this->model->find($id, $columns);
    }

    public static function model($object) {
        return new static($object);
    }

    public static function repo() {
        $reflectionMeth = new \ReflectionMethod(static::class, '__construct');
        $reflectionParams = $reflectionMeth->getParameters();
        $reflectionType = $reflectionParams[0]->getType();
        $type = $reflectionType->getName();
        return new static(new $type);
    }
}
